<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Mail;
use App\Mail\CrmEmail;

class ContactController extends Controller{
    /**
     * Funcion para enviar correo de contacto
     * @return mixed
     * Created by <Jonnattan Choque>
     */
    public function sendContact(Request $request){
       //Validar los campos
       
       \Log::info('este es el request : ' . $request);
       \Log::info('*** Llego al sendContact');

        $validator = Validator::make($request->all(), [
            'nombre'    => 'required',
            'celular'   => 'required',
            'correo'    => 'required|email',
            'mensaje'   => 'required',
        ]);

        \Log::info('*** Llego al sendContact fails ' . $validator->fails());
 
        if ($validator->fails()) {
            \Log::info('*** Llego al sendContact fails ' . $validator->errors());
            return response()->json(['success'=>false,'result'=>$validator->errors()]);
        }

        $notRobot = false;
        \Log::info('*** Llego al sendContact - noRobot antes : ' . $notRobot);        
        $homeController = new HomeController();
        if($request->get('tokenreCAPTCHA')){
            $notRobot = $homeController->ReCAPTCHAtokenVerification($request->get('tokenreCAPTCHA'));
            if($notRobot){
                $notRobot = true;        
            }
        }
        \Log::info('*** Llego al sendContact - noRobot  despues : ' . $notRobot);

        if($notRobot){   
            $objDemo = new \stdClass();
            $objDemo->name = $request->input('nombre');
            $objDemo->phone = $request->input('celular');
            $objDemo->email = $request->input('correo');
            $objDemo->message = $request->input('mensaje');
            $objDemo->date = date('d-m-Y H:i:s');
            $objDemo->sender = 'Admin';
            $objDemo->receiver = 'Vannesa';
            $subject = 'Nuevo correo de contacto';
            $view = 'crmmails.contact';
            Mail::to("vramirez@datacrm.com")->send(new CrmEmail($objDemo,$subject,$view));

            // Desde aqui mensaje para el cliente
            $subject="¡Gracias por Registrarte!";
            $view = 'crmmails.client';

            // Enviamos el correo de agradecimiento al cliente
            //Mail::to($objDemo->email)->send(new CrmEmail($objDemo,$subject,$view));
            return response()->json(['success'=>true]);
        }else{
            return response()->json(['success' => 'robot', 'result' => "Google couldn't verify that you are a real human."]);
        }
    }

    /**
     * Funcion para enviar correo tramite de pago
     * @return mixed
     * Created by <Daniel Rodriguez>
     */
    public function sendEmailPaymentProcess(Request $request){
        //Validar los campos
        $validator = Validator::make($request->all(), [
            'nombre'    => 'required',
            'buyer_name'   => 'required',
            'email'    => 'required|email',
            'phone'   => 'required',
            'usuarios'   => 'required',
        ]);

         if ($validator->fails()) {
            return response()->json(['success'=>false,'result'=>$validator->errors()]);
         }
         else{
            $objDemo = new \stdClass();

            $objDemo->Fecha = date('d-m-Y H:i:s');
            $objDemo->Para = 'Vannesa';
            $objDemo->De = 'Admin';

            // Lista negra de datos que no queremos enviar por correo
            $no_enviar = ['_token', 'currency', 'typePlan'];

            foreach($request->all() as $key => $value) {
                if(!in_array($key, $no_enviar)) {
                    $objDemo->{$key} = $value;
                }
            }

            $subject = 'Cliente solicita tramite de pago';
            $view = 'crmmails.payment_process';

            Mail::to("vramirez@datacrm.com")->send(new CrmEmail($objDemo,$subject,$view)); 
            return view('front.response-payment-process');
         }
     }
}
