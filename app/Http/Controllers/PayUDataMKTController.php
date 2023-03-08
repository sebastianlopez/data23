<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\WsPayu;
use Illuminate\Support\Facades\Mail;
use App\Mail\CrmEmail;

class PayUDataMKTController extends Controller
{
    public $typePlan = '';
    
    public function ReferPayu($country = 'co'){
        $data = array();
        $data['country'] = $country;
        return view('front.DataMKT', compact('data'));
    }

    public function SendPayu(Request $request){
        $rules = array(
            'card_type' => 'required',
            'card_number' => 'required|numeric',
            'buyer_name' => 'required',
            'phone' => 'required',
            'document' => 'required',
            'exp_month' => 'required',
            'exp_year' => 'required',
            'code' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        );

        $messages = [
            'card_type.required' => 'Debe seleccionar el tipo de tarjeta',
            'card_number.required' => 'Debe ingresar el número de la tarjeta',
            'card_number.numeric' => 'La tarjeta solo acepta números',
            'buyer_name.required' => 'Debe ingresar el nombre del pagador',
            'document.required' => 'Debe ingresar el número de identificación',
            'exp_month.required' => 'Debe seleccionar el mes de expiración',
            'exp_year.required' => 'Debe ingresar el año de expiración',
            'code.required' => 'Debe ingresar el codigo de verificación',
            'phone.required' => 'Debe ingresar el número de telefono',            
            'email.required' => 'Debe ingresar el email'            
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'result' => $validator->errors()]);
        }

        $client = $this->getClient($request);
        if (empty($client->id)) {
            return response()->json(['success' => false, 'result' => [$client->description]]);
        }
        
        $card = $this->getCreditCard($request, $client->id);
        if (empty($card->token)) {
            return response()->json(['success' => false, 'result' => [$card->description]]);
        }
    
        $total = $request->get('total_payment');
        $typePlan = "Campaña comercial";
        $this->typePlan .= $typePlan;
        $plan = $this->getPlan($request, $total, $typePlan);
        if (empty($plan->planCode)) {
            return response()->json(['success' => false, 'result' => [$plan->description]]);
        }
        
        $subscripcion = $this->getSubscription($request, $client->id, $card->token, $plan->planCode);
        if (empty($subscripcion->id)) {
            return response()->json(['success' => false, 'result' => [$subscripcion->description]]);
        }
        
        $subject="Tu pago está en proceso";
        $view = 'crmmails.datamkt_success_pay';
        $objDemo = new \stdClass();

        $objDemo->name = $request->input('buyer_name');

        //enviar correos de pagos
        $this->sendEmailPayU($request);
        // Enviamos el correo informativo al cliente
        //Mail::to($request->input('email'))->send(new CrmEmail($objDemo,$subject,$view));
        return response()->json(['success' => true, 'result' => 'pago efectuado']);
    }

    public function errorResponse($data, $param){
        return response()->json(['success' => false, 'result' => $data, "param" => $param]);
    }

    public function getClient($request){
        $ws = new WsPayu($request->get('country'));
        $type = "customers/";
        $data = array('fullName' => $request->get('buyer_name'), 'email' => $request->get('email'));
        $result = $ws->exec($type, $data, 'POST');
        $client = json_decode($result);
        return $client;
    }

    private function getCreditCard($request, $client_id){
        $ws = new WsPayu($request->get('country'));
        $type = "customers/" . $client_id . "/creditCards";
        $data = array(
            "name" => $request->get('buyer_name'),
            "document" => $request->get('document'),
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

    public function getSubscription($request, $clientId, $cardId, $planCode){
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
            )
        );
        $result = $ws->exec($type, $data, 'POST');
        $subscription = json_decode($result);
        return $subscription;
    }

    public function getPlan($request, $total, $plan_desc){
        $interval = 'MONTH';
        $planCodes = $this->getPlanCode($request->get('selected_campaigns'), 'M', round($total));
        
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
            'description' => $plan_desc,
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

    public function getPlanCode($selected_campaigns, $date, $total){
        return $selected_campaigns . '-' . $date . '-' . $total;
    }

    public function sendEmailPayU($request, $plan_name = ''){
        $country = $request->get('country');
        $currency = $this->getDivisa($country);

        $objDemo = new \stdClass();
        $objDemo->buyer_name = $request->input('buyer_name');
        $objDemo->cc = $request->input('document');
        $objDemo->email = $request->input('email');
        $objDemo->plan_name = $this->typePlan;
        $objDemo->phone = $request->get('phone');
        $objDemo->card_type = $request->input('card_type');
        $objDemo->card_number = $request->input('card_number');
        $objDemo->exp_month = $request->input('exp_month');
        $objDemo->exp_year = $request->input('exp_year');
        $objDemo->plan = $this->typePlan . " " . $request->get('selected_campaigns');
        $objDemo->campaigns = explode('-', $request->get('selected_campaigns'));
        $objDemo->details = explode('-', $request->get('campaigns_detail'));
        $objDemo->total_payment = $request->get('price_format') . " " . $currency;
        $objDemo->currency = $currency;
        $objDemo->date = date('d-m-Y H:i:s');
        $objDemo->sender = 'Admin';
        $subject = 'Nuevo pago realizado en PayU - ' . $request->input('buyer_name');
        $view = 'crmmails.dataMKT_payu';
        Mail::to("vramirez@datacrm.com")->send(new CrmEmail($objDemo, $subject, $view));
    }

    public function getDivisa($dvs){
        switch ($dvs) {
            case 'co':
                $divisa = 'COP';
                break;
            case 'us':
                $divisa = 'USD';
                break;
            default:
                $divisa = 'COP';
                break;
        }
        return $divisa;
    }
}
