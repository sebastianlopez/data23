<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Location;
use App\Http\Controllers\WsPayu;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use App\Mail\CrmEmail;

class PayUController extends Controller
{
    public $typePlan = '';
    /**
     * SendPayu Crea los items (cliente, tarjeta, plan, subscripcion) y genera el pago en payu
     * @author jonnattan Choque <jchoque@datacrm.com>
     * @param  $request
     *
     * @return $subscripcion
     */
    public function SendPayu(Request $request){

        //Validar los campos
        $rules = array(
            //'nombre' => 'required',
            //'nit' => 'required',
            'phone' => 'required',
            //'documento_identidad' => 'required',
            'email' => 'required|email',
            //'address' => 'required',
            'code' => 'required',
            'card_type' => 'required',
            'card_number' => 'required|numeric',
            'buyer_name' => 'required',
            'exp_month' => 'required',
            'exp_year' => 'required',
            'phone' => 'required',
        );

        $messages = [
            'usuarios.required' => 'Debe seleccionar la cantidad de usuarios',
            //'nombre.required' => 'Debe ingresar el nombre',
            'code.required' => 'Debe ingresar los  3 digitos de seguridad de una tarjeta',
            //'nit.required' => 'Debe ingresar el nombre o razón social',
            'phone.required' => 'Debe el numero de telefono',
            //'documento_identidad.required' => 'Debe ingresar el número de identificación',
            'email.required' => 'Debe ingresar el email',
            //'address.required' => 'Debe ingresar la dirección',
            'card_type.required' => 'Debe seleccion el tipo de tarjeta',
            'card_number.required' => 'Debe ingresar el número de la tarjeta',
            'card_number.numeric' => 'La tarjeta solo acepta números',
            'buyer_name.required' => 'Debe ingresar el nombre del pagador',
            'exp_month.required' => 'Debe seleccionar el mes de expiración',
            'exp_year.required' => 'Debe ingresar el año de expiración',
            'phone.required' => 'Debe ingresar el teléfono',
        ];


        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'result' => $validator->errors()]);
        }

        $localization = Location::get();
        $client = $this->getClient($request);
        if (empty($client->id)) {
            return response()->json(['success' => false, 'result' => $client]);
        }

        $card = $this->getCreditCard($request, $client->id);
        if (empty($card->token)) {
            return response()->json(['success' => false, 'result' => $card]);
        }

        if (empty($request->get('isAcompa'))) {
            $plan = $this->createMainPlan($request);
            if (empty($plan->planCode)) {
                return response()->json(['success' => false, 'result' => $plan]);
            }
    
            $subscripcion = $this->getSubscription($request, $client->id, $card->token, $plan->planCode);
            if (empty($subscripcion->id)) {
                return response()->json(['success' => false, 'result' => $subscripcion]);
            }
        }

        $accompaniment = $request->get('accompaniment') ?? 0;
        if ($accompaniment) {
            $name = ', Plan de acompañamiento';
            $this->typePlan .= $name;
            $plan = $this->getPlan($request, $accompaniment, 'Plan de acompañamiento');
            $this->getSubscription($request, $client->id, $card->token, $plan->planCode);
        }

        $subject="Tu pago está en proceso";
        $view = 'crmmails.payu_success';
        $objDemo = new \stdClass();

        $objDemo->name = $request->input('buyer_name');

        //enviar correos de pagos
        if($request->input('typeForm') == "accompaniment"){
            $this->sendAccomplaimentPlanEmail($request);
        }else{
            $this->sendEmailPayU($request);
        }
        
        // Enviamos el correo informativo al cliente
         Mail::to($request->input('email'))->send(new CrmEmail($objDemo,$subject,$view));

        return response()->json(['success' => true, 'result' => 'pago efectuado']);
    }

    private function createMainPlan($request) {
        $total = str_replace(".", "", $request->get('totalPagofinal')) ?? 0;
        $accompaniment = $request->get('accompaniment') ?? 0;
        $total = $total - $accompaniment;
        $this->typePlan = $request->get('typePlan');

        $capacity = $request->get('docs_capacity') ?? 0;
        if ($capacity) {
            $this->typePlan .= ', Ampliar capacidad de almacenamiento de Docs';
		}
        
        $docs = $request->get('db_capacity') ?? 0;
        if ($docs) {
            $this->typePlan .= ', Ampliar capacidad DB';
        }

        return $this->getPlan($request, $total, $this->typePlan);
    }


    public function ResponsePayu(){
        return view('front.response-payu');
    }
    /**
     * getClient
     * @author jonnattan Choque <jchoque@datacrm.com>
     * @param  $request
     *
     * @return String id del cliente en PayU
     */
    private function getClient($request){
        $ws = new WsPayu($request->get('country'));
        $type = "customers/";
        $data = array('fullName' => $request->get('nombre'), 'email' => $request->get('email'));
        $result = $ws->exec($type, $data, 'POST');
        $client = json_decode($result);
        return $client;
    }

    /**
     * getCreditCard
     * @author jonnattan Choque <jchoque@datacrm.com>
     * @param  $request
     *
     * @return String token de la tarjeta de credito en PayU
     */
    private function getCreditCard($request, $client_id){
        $ws = new WsPayu($request->get('country'));
        $type = "customers/" . $client_id . "/creditCards";
        $data = array(
            "name" => $request->get('buyer_name'),
            "document" => $request->get('documento_identidad'),
            "number" => $request->get('card_number'),
            "expMonth" => $request->get('exp_month'),
            "expYear" => $request->get('exp_year'),
            "type" => $request->get('card_type'),
            "address" => array(
                 "phone" => $request->get('phone'),
                 "line1" => '',
                 "line2" => '',
                 "line3" => '',
                 "postalCode" => '',
                 "city" => '',
                 "country" => $request->get('country'),
                 "state" => ''
            )
        );
        $result = $ws->exec($type, $data, 'POST');
        $card = json_decode($result);
        return $card;
    }

    /**
     * getPlan
     * @author jonnattan Choque <jchoque@datacrm.com>
     * @param  $request, $accountId
     *
     * @return Json con la informacion del plan creado
     */
    private function getPlan($request, $total, $plan_desc){

        if ($request->get('strTypePlan') == 'anual') {
            $interval = 'YEAR';
            $planCodes = $this->getPlanCode($request->get('userPlan'), 'A', round($total), $request->input('usuarios'));
        } else {
            $interval = 'MONTH';
            $planCodes = $this->getPlanCode($request->get('userPlan'), 'M', round($total), $request->input('usuarios'));
        }

        $ws = new WsPayu($request->get('country'));
        $type_get = 'plans/' . $planCodes;
        $result1 = $ws->exec($type_get, [], 'GET');
        $plan = json_decode($result1);
        if(!empty($plan->planCode)){
            return $plan;
        }
        $country = $request->get('country');
        $divisa = $this->getDivisa($country);

        $type = "plans";
        $data_sub = array();
        $data = array(
            'accountId' => $ws->getKeys($country),
            'planCode' => $planCodes,
            'description' => $plan_desc, //$request->get('typePlan'),
            'interval' => $interval,
            'intervalCount' => '1',
            'maxPaymentsAllowed' => '12',
	        'maxPaymentAttempts' => '3',
            'paymentAttemptsDelay' => '1',
        );

        if ($country == 'co') {
            $plan_value = array(
                'name' => 'PLAN_VALUE',
                'value' => $total,
                'currency' => $divisa,
            );
            $plan_tax = array(
                'name' => 'PLAN_TAX',
                'value' => '0',
                'currency' => $divisa,
            );
            $plan_return = array(
                'name' => 'PLAN_TAX_RETURN_BASE',
                'value' => '0',
                'currency' => $divisa,
            );

            array_push($data_sub, $plan_value);
            array_push($data_sub, $plan_tax);
            array_push($data_sub, $plan_return);
        } else {
            $plan_value = array(
                'name' => 'PLAN_VALUE',
                'value' => $total,
                'currency' => $divisa,
            );

            array_push($data_sub, $plan_value);
        }
        $data['additionalValues'] = $data_sub;
        $result = $ws->exec($type, $data, 'POST');
        $plan = json_decode($result);
        return $plan;
    }

    /**
     * getSubscription
     * @author jonnattan Choque <jchoque@datacrm.com>
     * @param  $request
     *
     * @return Json Info de la subscripción
     */
    private function getSubscription($request, $clientId, $cardId, $planCode){
        $ws = new WsPayu($request->get('country'));
        $type = "subscriptions";
        $data = array(
            'installments' => '1',
            'customer' =>
                array(
                'id' => $clientId,
                'creditCards' =>
                    array(
                    array(
                        'token' => $cardId,
                    ),
                ),
            ),
            'plan' =>
                array(
                'planCode' => $planCode,
            ),
        );
        $result = $ws->exec($type, $data, 'POST');
        $subscription = json_decode($result);
        return $subscription;
    }

   
    private function pay($request, $clientId, $cardId, $planCode){
        $ws = new WsPayu($request->get('country'));
        $type = "subscriptions";
        $data = array(
            'installments' => '1',
            'customer' =>
                array(
                'id' => $clientId,
                'creditCards' =>
                    array(
                    array(
                        'token' => $cardId,
                    ),
                ),
            ),
            'plan' =>
                array(
                'planCode' => $planCode,
            ),
        );
        $result = $ws->exec($type, $data, 'POST');
        $subscription = json_decode($result);
        return $subscription;
    }

    /**
     * getPlanCode
     * @author jonnattan Choque <jchoque@datacrm.com>
     * @param  $id usuarios, $data(mensual o anual), $total pagodo, $user cantidad usuarios
     *
     * @return String Codigo del plan
     */
    private function getPlanCode($userType, $date, $total, $user){
        switch ($userType) {
            case '1':
                $planCode = 'P';//Principiante
                break;
            case '4':
                $planCode = 'I';//Intermedio
                break;
            case '16':
                $planCode = 'A';//Avanzado
                break;
            default:
                $planCode = 'DataCrm';
                break;
        }
        return $planCode . '-' . $date . '-' . $user . '-' . $total;
    }

    /**
     * getDivisa
     * @author jonnattan Choque <jchoque@datacrm.com>
     * @param  $dvs -> pais
     *
     * @return String divisa del pais
     */
    private function getDivisa($dvs){
        switch ($dvs) {
            case 'br':
                $divisa = 'BRL';
                break;
            case 'ch':
                $divisa = 'CLP';
                break;
            case 'co':
                $divisa = 'COP';
                break;
            case 'mx':
                $divisa = 'MXN';
                break;
            case 'pe':
                $divisa = 'PEN';
                break;
            case 'us':
                $divisa = 'USD';
                break;
            case 'ec':
                $divisa = 'USD';
                break;
            default:
                $divisa = 'COP';
                break;
        }
        return $divisa;
    }

    /**
     * sendEmailPayU enviar correo a Nando y Vane con la info del formulario
     * @author jonnattan Choque <jchoque@datacrm.com>
     * @param  $request
     *
     * @return void
     */
    public function sendEmailPayU($request, $plan_name = ''){
        $objDemo = new \stdClass();
        $objDemo->usuarios = $request->input('usuarios');
        $objDemo->nombre = $request->input('nombre');
        $objDemo->nit = $request->input('nit');
        $objDemo->buyer_name = $request->input('buyer_name');
        $objDemo->cc = $request->input('documento_identidad');
        $objDemo->email = $request->input('email');
        $objDemo->plan_name = $this->typePlan;
        $objDemo->phone_number = $request->get('phone');
        $objDemo->address = $request->get('address');
        $objDemo->card_type = $request->input('card_type');
        $objDemo->card_number = $request->input('card_number');
        $objDemo->exp_month = $request->input('exp_month');
        $objDemo->exp_year = $request->input('exp_year');
        $objDemo->typePlan = $request->get('typePlan');
        $objDemo->plan = $request->get('strTypePlan');
        $objDemo->totalPagofinal = str_replace('.', '', $request->get('totalPagofinal'));
        $objDemo->date = date('d-m-Y H:i:s');
        $objDemo->sender = 'Admin';
        $subject = 'Nuevo pago realizado en PayU - ' . $request->input('nombre');
        $view = 'crmmails.payu';
        Mail::to("vramirez@datacrm.com")->send(new CrmEmail($objDemo, $subject, $view));
    }

    public function sendAccomplaimentPlanEmail($request){
        $objDemo = new \stdClass();
        $objDemo->nombre = $request->input('nombre');
        $objDemo->buyer_name = $request->input('buyer_name');
        $objDemo->cc = $request->input('documento_identidad');
        $objDemo->email = $request->input('email');
        $objDemo->plan_name = "Plan de acompañamiento";
        $objDemo->phone_number = $request->get('phone');
        $objDemo->card_type = $request->input('card_type');
        $objDemo->totalPagofinal = str_replace('.', '', $request->get('accompaniment'));
        $objDemo->currency = $request->input('currency');
        $objDemo->sender = 'Admin';
        $subject = 'Nuevo pago realizado en PayU - ' . $request->input('nombre');
        $view = 'crmmails.accompaniment_plan';
        Mail::to("vramirez@datacrm.com")->send(new CrmEmail($objDemo, $subject, $view));
    }

    /**
     * ReferPayu redirecciona al formulario para hacer pagos
     * @author jonnattan Choque <jchoque@datacrm.com>
     * @param  $info -> pais-precio
     *
     * @return view
     */
    public function ReferPayu($info){
        $data = array();
        $data_array = explode('-',$info);
        $data_array[1] = str_replace('.',',',$data_array[1]);
        
        $data['price'] = $data_array[1];
        $data['country'] = $data_array[0];
        $data['makeThePaymentMoreOneUser'] = "false";

        if(!empty($data_array[3]) && isset($data_array[3])){
            $data['makeThePaymentMoreOneUser'] = "true";
        }

        $country = $this->getCountry($data['country']);
        
        if ($data_array[2] == 'Anual' or $data_array[2] == 'anual') {
            $data['pago'] = 'pagoAnualLabel';
            $data['typePlan'] = 'Anualidad '.$country;
            $data['strTypePlan'] = 'anual';
        }else{
            $data['pago'] = 'pagoMensualLabel';
            $data['typePlan'] = 'Mensualidad '.$country;
            $data['strTypePlan'] = 'mensual';
        }       
        
        return view('front.refer_payu', compact('data'));
    }

    public function ReferPayuWhatsApp(){
        $data = array();
        $data['price'] = '35';
        $data['country'] = 'us';
        $country = $this->getCountry($data['country']);
        $data['pago'] = 'pagoMensualLabel';
        $data['typePlan'] = 'Mensualidad '.$country;
        $data['strTypePlan'] = 'mensual';     
        
        return view('front.refer_payu_whatsapp', compact('data'));
    }

    public function getCountry($country){
        switch ($country) {
            case 'co':
                return 'Colombia';
                break;
            case 'mx':
                return 'Mexico';
                break;
            case 'ec':
                return 'Ecuador';
                break;
            case 'eu': case 'us':
                return 'Estados Unidos';
                break;
            case 'pe':
                return 'Peru';
                break;
            case 'pa':
                return 'Panama';
                break;
            default:
                break;
        }

    }
}
