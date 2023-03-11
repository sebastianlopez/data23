<?php
namespace App\Mail;
namespace App\Http\Controllers;

use Validator;
use Session;
use App\Models\Event;
use App\Modeld\Article;
use App\Models\Category;
use App\Models\GalleryImage;
use App\Models\Tag;
use App\Models\InfoCronologie;
use App\Models\Configsite;

use Carbon\Carbon;
use App\Mail\verificationEmail;
use App\Models\InfoArticle as ModelInfoArticle;
use App\Models\Article as ModelsArticle;
use App\Models\Configsite as ModelsConfigsite;
use App\Models\InfoArticle;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public $urlWebservice = 'https://cpanel.datacrm.la/webservice.php';
    const usernameCpanel = 'webpage';
    const passwordCpanel = '@webpage!';
    public $tokenWebservice = 'ayTlYhsXeeDyLmZm';

    

    const api_key = 'qBUWlaibSHctQOguXmxVKjuAATGaenoQZstR';
    /**
     * Muestra la página principal.
     * @return mixed
     * Created by <Rhiss.net>
     */
    public function indexColMx(Request $request)
    {
    $reg = (empty($request->query())) ? [] : $request->query() ;
        $reg['gclid'] = (!empty($reg['gclid'])) ? $reg['gclid'] : '' ;
        $pais = request()->route()->getName();


        $pais = ($pais == 'Mexico') ? 'México' : 'Colombia';

        $btn_prueba = ($pais == 'Colombia') ? 'Pruebalo' : 'Chécalo';
        $user_ip = $_SERVER['REMOTE_ADDR'];

        $precios_col = ["32.000 COP", "40.000 COP"];
        $precios_mx = ["240 MXN", "320 MXN"];

        $precios = ($pais == 'Colombia') ?  $precios_col : $precios_mx;
        
        return view('front.index_colmx', compact('pais', 'btn_prueba', 'url', 'precios', 'reg'));
    }

    

    public function indexPaises(Request $request){
        $reg = empty($request->query())?[]:$request->query();
        $reg['gclid'] = !empty($reg['gclid']) ? $reg['gclid'] : '' ;
        $pais = request()->route()->getName();
        $btn_prueba = 'Prúebalo';
        $precios = [
            'anual'=>[
                'basico'=> 13.6,
                'pro'=> 16
            ],
            'mensual' =>[
                'basico'=> 17,
                'pro'=> 20
            ]
        ];
        $moneda = 'USD';
        $code = '';


        switch($pais){
            case 'Colombia':
                $precios['anual']['basico']  = 32000;
                $precios['anual']['pro']     = 40000;
                $precios['mensual']['basico']= 40000;
                $precios['mensual']['pro']   = 50000;
                $moneda = 'COP';
                $code = 'co';
            break;
            case 'Peru':
                $precios['anual']['basico']  = 44;
                $precios['anual']['pro']     = 52;
                $precios['mensual']['basico']= 55;
                $precios['mensual']['pro']   = 65;
                $moneda = 'PEN';
                $code = 'pe';
                $pais = 'Perú';
            break;
            case 'Mexico':
                $precios['anual']['basico']  = 240;
                $precios['anual']['pro']     = 320;
                $precios['mensual']['basico']= 300;
                $precios['mensual']['pro']   = 400;
                $moneda = 'MXN';
                $btn_prueba = 'Chécalo';
                $code = 'mx';
            break;
            case 'Chile':
                $code = 'ch';
            break;
            case 'Costarica':
                $code = 'cr';
                $pais = 'Costa rica';
            break;
            case 'Panama':
                $code = 'pa';
                $pais = 'Panamá';
            break;
            case 'Ecuador':
                $code = 'ec';
            break;
        }

    
        return view('front.index_colmx',
            compact('pais','precios','reg','btn_prueba','code','moneda'));
    }

    /**
     * Muestra la página principal para mexico.
     * @return mixed
     * Created by <Rhiss.net>
     */
    public function index(Request $request)
    {

       // dd(Auth->user());
	    $reg = (empty($request->query())) ? [] : $request->query() ;
        $user_ip = $_SERVER['REMOTE_ADDR'];
        $reg['current'] = 'home';
        $user_ip = $_SERVER['REMOTE_ADDR'];
	    
        // 
        // ubicacion
        // helper para otener la ubicacion por ip
        //
        $reg['location'] = getMyCountryLocation($user_ip);
        $reg['info'] = Configsite::where('lang', get_lang())->pluck('value', 'name')->toArray();
	    $reg['gclid'] = (!empty($reg['gclid'])) ? $reg['gclid'] : '' ;
        $url = '';
         return view('front.index', compact('reg', 'url'));
    }

     /**
     * Muestra una página predeterminada.
     *
     * @param Request $reuqest
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Created by <Rhiss.net>
     */
    public function customPage(Request $reuqest)
    {
        $name = $reuqest->route()->getName();
        $view = 'front.' . $name;
        $reg = (empty($reuqest->query())) ? [] : $reuqest->query() ;
        if($name == 'webinars'){
            $reg['events'] = Event::query()->orderBy('date')->get();
        }
	    if($name == 'plans'){
	        $user_ip = $_SERVER['REMOTE_ADDR'];
            //
            // ubicacion
            // helper para obtener el codigo de pais por la ip
            //
            $reg['location'] = getMyCountryLocation($user_ip);    

        }
        $reg['name'] = $name;
        $reg['gclid'] = (!empty($reg['gclid'])) ? $reg['gclid'] : '' ;

       
        return view($view,compact('reg'));
    }

    public function getSessionNameWebservice(){
	    $params_log = "operation=loginCpanel&username=".self::usernameCpanel."&password=".self::passwordCpanel;
        $response_log =  $this->exec($this->urlWebservice, 'POST',$params_log);
        $info_log = json_decode($response_log);
        if(isset($info_log->result->sessionName)){
            return $sessionName = $info_log->result->sessionName;
        }else{
            return false;
        }
    }

    public function sendEmail($data, $view, $subject){
        $toEmail = ['anieto@datacrm.com', 'vramirez@datacrm.com'];
        return Mail::to($toEmail)->send(new verificationEmail($data, $view, $subject));
    }

    public function loginCrm(Request $request)
    {
        //Validar los campos
        if($request->input('loginIsOld') == '1' || $request->input('loginIsOld')){
            $validator = Validator::make($request->all(), [
                'email' => 'required|max:100',
                'password' => 'required',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|max:100',
                'password' => 'required',
            ]);
        }
        if($validator->fails()) {
            return response()->json(['success'=>false,'resultMsg'=>$validator->errors()]);
        }
        
        if($request->input('email') == 'correo@empresa.com') {
            return response()->json(['success'=>false,'resultMsg'=>'Correo Electrónico Inválido.']);
        } 

        $notRobot = true;
        // if($request->get('tokenreCAPTCHA')){
        //     $notRobot = $this->ReCAPTCHAtokenVerification($request->get('tokenreCAPTCHA'));
        //     if($notRobot){
        //         $notRobot = true;        
        //     }
        // }
        if($notRobot){
            $email = $request->input('email');
            $password = $request->input('password');
            $pay = ($request->input('pay') == "true") ? true : false;
    
            if($request->input('loginIsOld') == '1' || $request->input('loginIsOld')){
                $accountname = $request->input('empresa');
                if(!empty($accountname) && isset($accountname)){
                    $redirect = $this->getLoginIfCpanelIsDown($accountname, $email, $password, $pay);
                    if(!empty($redirect)){
                        return response()->json(['success'=>true, 'redirect'=>$redirect]);
                    }else{
                        return response()->json(['success'=>true, 'resultMsg'=>'¡No hemos encontrado tus datos!']);
                    }
                }else{
                    return response()->json(['success'=>true, 'resultMsg'=>'Ingresa el campo empresa']);
                }
            }else{
                $login = $this->getSessionNameWebservice();
                if(is_string($login)){
                    $condition = urlencode(" WHERE email='{$email}';");
                    return $this->getCpanelLogin($condition, $email, $password, $pay);
                }else{
                    $accountname = $request->input('empresa');
                    if(!empty($accountname) && isset($accountname)){
                        $redirect = $this->getLoginIfCpanelIsDown($accountname, $email, $password, $pay);
                        if(!empty($redirect)){
                            $view = 'cpanelEmail';
                            $subject = '¡Urgente! ¡Estamos teniendo problemas de conexión con Cpanel!';
                            $data = ['crm' => $accountname];
                            $this->sendEmail($data, $view, $subject);
                            return response()->json(['success'=>true, 'redirect'=>$redirect]);
                        }else{
                            return response()->json(['success'=>true, 'resultMsg'=>'¡No hemos encontrado tus datos!']);
                        }
                    }else{
                        return response()->json(['success'=>false,'error'=>0]);
                    }
                } 
            }
        }else{
            return response()->json(['success' => 'robot', 'resultMsg' => "Google couldn't verify that you are a real human."]);
        }
    }

    public function getCpanelLogin($condition, $email, $password, $pay){

        $userDataVerification = $this->getVerificationEmail($condition, $email);
        if($userDataVerification->original['success'] == "false"){
        
            return $userDataVerification;
        
        }else if($userDataVerification->original['success'] == "noExist"){
        
            return response()->json(['success'=>false,'resultMsg'=>'Correo Electrónico ó Contraseña Inválido.']);
        
        }else if($userDataVerification->original['success'] == "true"){
            $data = $userDataVerification->original['result'];
            $crm = $data['company'];

            /* Validar si es un url valida http ó https*/
            $server = $this->isHttps($data['url']);

            /*Validamos si es un demo */
            $path = $this->isDemo($server);

            $urlCRM = $server.$path.$crm."/modules/Mobile/api.php";
            $urlRedirect = $server.$path.$crm;

            $login = $this->getContentUrlMobile($urlCRM, $email, $password, $pay);
            $is_blocked = (isset($login['error']) && trim($login['error']['message'])  == 'CRM blocked') ? true : false;
            if(($login['success'] && $login['result']) || $is_blocked){
                header('HTTP/1.1 301 Moved Permanently');
                $redirect = $urlRedirect."/index.php?module=Users&action=Login&username=".urlencode($email)."&password=".urlencode($password);
                if($pay || $is_blocked){
                    $redirect.= "&pay=true";
                }
                return response()->json(['success'=>true, 'redirect'=>$redirect]);
            }else{
                return response()->json(['success'=>false,'resultMsg'=>'Correo Electrónico ó Contraseña Inválido.']);
            }
        }
    }

    public function getLoginIfCpanelIsDown($accountname, $user, $password, $pay){
        
        $servers = array(
            //'https://develop.datacrm.la/datacrm',
            'https://www.datacrm.la/datacrm',
            'https://app.datacrm.la/datacrm',
            'https://server3.datacrm.la/datacrm',
            'https://server7.datacrm.la/datacrm',
            'https://demos.datacrm.la/demos',
            'https://server8.datacrm.la/datacrm',
        );
        
        $redirect = '';
        foreach($servers as $server) {
            $result = $this->getContentUrl($server."/".$accountname."/webservice.php?operation=getchallenge&username=admin");//file_get_contents($server."/".$accountname."/webservice.php?operation=getchallenge&username=admin");
            if(strpos($result, 'token')) {
                // @warnign - no cambiar esta linea para ibm
                header('HTTP/1.1 301 Moved Permanently');
                $redirect = $server."/".$accountname."/index.php?module=Users&action=Login&username=".$user."&password=".$password;
                if($pay){
                    $redirect.= "&pay=true";
                }
                break;
            }
        }
        return $redirect;
    }

    public function isHttps($server){
        $urlparts= parse_url($server);
        $scheme = $urlparts['scheme'];
        if ($scheme != 'https') {
            $without_http = substr($server, 4);
            $server = 'https'.$without_http;
        }
        return $server;
    }

    public function isDemo($server){
        $urlparts= parse_url($server);
        $host = $urlparts['host'];
        if($host == 'demos.datacrm.la'){
            $path = "/demos/";
        }else{
            $path = "/datacrm/";
        }
        return $path;
    }


    public function verificationEmailSent(Request $request){
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'emailVerification' => 'required|email|max:50',
            'phoneVerification' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json(['success'=>false,'idMsgEmail'=>$validator->errors()]);
        }

        $data = [
            'Correo electrónico' => $request->get('emailVerification'),
            'Usuarios' => $request->get('users'),
            'CRMs' => $request->get('crms'),
            'Célular' => $request->get('phoneVerification'),
            'loginEmail' => $request->get('loginEmail')
        ];
        try{
            $view = 'verificationEmail';
            $subject = '¡Urgente! Acceso de usuario duplicado a la plataforma';
            $this->sendEmail($data, $view, $subject);
            return response()->json(['success'=>true,'result'=>'El equipo DataCRM se pondrá en contacto contigo, lo más pronto posible.']);
        }catch (\Throwable $th){
            return response()->json(['success'=>false,'result'=>'Por favor, comuníquese con el administrador del CRM']);
        }    
    }

    public function getVerificationEmail($condition, $emailLogin)
    {
        $data = $this->getUSER($condition);
        if(count($data->result) > 1){
            //Mas de uno
            $companies = [];
            $users = [];
            foreach ($data->result as $fields) {
                array_push($users, $fields->user_name);
                $contactEmail = $fields->email;
                array_push($companies, $fields->crm);
            }

            $dataEmail = [
            'modal'=>true,
            'email'=>$contactEmail,
            'login'=>$emailLogin,
            'users'=> implode(', ', $users), 
            'crms' => implode(', ', $companies),
            ];
            return response()->json(['success'=>"false",'result'=>$dataEmail]);

        }else if(count($data->result) == 1){
            $contact = [];
            $contact['user_name'] = $data->result[0]->user_name;
            $contact['company'] = $data->result[0]->crm;
            $contact['url'] = $data->result[0]->url;
            return response()->json(['success'=>"true",'result'=>$contact]);
        }else if(count($data->result) == 0){

            return response()->json(['success'=>'noExist','result'=>'noExist']);
        
        }
    }
 
    public function getUSER($condition){
        $sessionName = $this->getSessionNameWebservice();
        $url = $this->urlWebservice; 
        $sessionName = urlencode($sessionName);
        if(empty($condition)){
            $condition = '%3B';
        }
        $params = '?operation=query&sessionName='.$sessionName.'&query=select%20%2A%20from%20Contacts'.$condition;
        $response =  $this->exec($url, 'GET',$params);
        $info = json_decode($response);
        return $info;
    }

    public function idPrefixModuleUserCpanel($sessionName){
        $params = "?operation=describe&sessionName=".$sessionName."&elementType=Users";
        $response =  $this->exec($this->urlWebservice, 'GET', $params);   
        $result = json_decode($response);
        if($result->success){
            if(isset($result->result->idPrefix) && !empty($result->result->idPrefix)){
                return $result->result->idPrefix;
            }else{
                return "19";
            }
        }
        return "19";
    }

    public function addContact($data){
        try{
            $sessionName = $this->getSessionNameWebservice();
            $url = $this->urlWebservice; 
            $sessionName = urlencode($sessionName);

            $idPrefixModuleUserCpanel = $this->idPrefixModuleUserCpanel($sessionName);
            $asigned_user_id = explode("x", $data['assigned_user_id']);
            $data['assigned_user_id'] = (count($asigned_user_id) > 1) ? $data['assigned_user_id'] : $idPrefixModuleUserCpanel."x".$data['assigned_user_id'];
            
            $params = 'elementType=Contacts&operation=create&sessionName='.$sessionName.'&element='.json_encode($data);
            $response =  $this->exec($url, 'POST', $params);   
            $result = json_decode($response);
            if($result->success){
                return true;
            }else{
                return false;
            }
        }catch (\Throwable $th){
            return $th;
        }
    }

    public function getContentUrlMobile($url, $username, $password, $pay){
        $username = urlencode($username);
        $password = urlencode($password);
        $params = "_operation=Users&password=$password&username=$username";
        if($pay){
            $params.= "&pay=true";
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
                    $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        $dataInfo = json_decode($server_output,true);
        return $dataInfo;
    }

    private function getContentUrl($url){
        $ch = \curl_init();
        $timeout = 5;
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,60);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    public function recoverPasswordFromWebsite(Request $request){
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:50',
        ]);
        if($validator->fails()) {
            return response()->json(['success'=>false,'sendEmail'=>$validator->errors()]);
        }
        
        $email = $request->input('email');
        $condition = urlencode(" WHERE email='{$email}';");

        $userDataVerification = $this->getVerificationEmail($condition, $email);

        if($userDataVerification->original['success'] == "false"){

            return $userDataVerification;

        }else if($userDataVerification->original['success'] == "noExist"){

            return response()->json(['success'=>false,'sendEmail'=>'Correo Electrónico Inválido']);
      
        }else if($userDataVerification->original['success'] == "true"){

            $data = $userDataVerification->original['result'];
            $crm = $data['company'];
            $user_name = $data['user_name'];

            /* Validar si es un url valida http ó https*/
            $server = $this->isHttps($data['url']);
            
            /*Validamos si es un demo */
            $path = $this->isDemo($server);
            
            $urlRedirect = $server.$path.$crm;
            
            $sendEmail = $urlRedirect."/forgotPassword.php?email={$request->get('email')}&username={$user_name}&webserviceRecoverPassword=true";
            $status = $this->getContentUrl($sendEmail);
            if($status == "true"){
                return response()->json(['success'=>true,'sendEmail'=>'La contraseña fue enviada a su correo electrónico. Desde ahí podrá realizar su ingreso.']);
            }else{
                return response()->json(['success'=>false,'sendEmail'=>'No fue posible conectarse al servidor']);
            }
        }
    }
    //Este es el login nuevo
    // public function loginCrm(Request $request)
    // {
    //     //Session::forget('urlCrm');
    //     //Temporal
    //     /*if(!empty(Session::get('urlCrm'))){
    //             return \Redirect::to(Session::get('urlCrm'));
    //         }
    //     */
    //     //si existe logueo por google
    //     if(!empty($request->input('google_login')) && $request->input('google_login') == true){
    //         $vars = array(
    //             'username' =>  $request->input('google_email'),
    //             'password' =>  $request->input('google_id'),
    //             'google_login' => true,
    //         );
    //     }else{
    //         //Validar los campos
    //         $validator = Validator::make($request->all(), [
    //             'correo' => 'required|email',
    //             'password' => 'required',
    //         ]);
    //         if ($validator->fails()) {
    //             if ($validator->fails()) {
    //                 return redirect()
    //                 ->route('login_datacrm')
    //                 ->withErrors($validator)
    //                 ->withInput();
    //             }
    //         }
    //         //Setear los campos a enviar al curl
    //             $vars = array(
    //                 'username' =>  $request->input('username'),
    //                 'password' =>  $request->input('password'),
    //             );
    //         }

    //         $sessionName = $this->getSessionNameWebservice();
    //         $url = $this->urlWebservice;
    //         $params = 'operation=checkLoginCRM&sessionName='.$sessionName.'&element='.json_encode($vars);
    //         $response =  $this->exec($url, 'POST',$params);
    //         $info = json_decode($response);

    //     if(isset($info->result->url)){
	//     	$urlCrm = $info->result->url;
	//       	Session::put('urlCrm', $urlCrm);
    //         return \Redirect::to($urlCrm);
    //     }else{
    //         return redirect()->route("login_datacrm")->with('alertCrm', $info->result->error);
    //     }
    // }

    public function requestPass(Request $request)
    {
        //Validar los campos
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return response()->json(['success'=>false,'result'=>$validator->errors()]);
        }else{
            //Setear los campos a enviar al curl
            $vars = array(
                'email' =>  $request->input('email'),
            );
            $sessionName = $this->getSessionNameWebservice();
            $url = $this->urlWebservice;
            $params = 'operation=requestChangePass&sessionName='.$sessionName.'&element='.json_encode($vars);
            $response =  $this->exec($url, 'POST',$params);
            $info = json_decode($response);

            if(isset($info->result->succcess)){
                return response()->json(['success'=>true,'result'=>$info->result->succcess]);
            }else{
                return response()->json(['success'=>false,'result'=>$info->result->error]);
            }
        }
    }


    public function changePassCrm(Request $request)
    {
        $dataSend = json_decode($request->get('data'));
        $dataUrl = http_build_query($dataSend);

        if(empty($dataSend)){
                return redirect()->route("recover-crm",['parameter' => '?'.$dataUrl])->with('alertCrm','No estan los campos necesarios');
        }

        //Validar los campos
        $validator = Validator::make($request->all(), [
                'password' => 'required|min:3|confirmed',
                'password_confirmation' => 'required|min:3'
            ]);
        if ($validator->fails()) {
       		if ($validator->fails()) {
            	return redirect()
			    ->route('recover-crm',['parameter' => '?'.$dataUrl])
                ->withErrors($validator)
                ->withInput();
        	}
        }

        $sessionName = $this->getSessionNameWebservice();
        $dataSend = json_decode($request->get('data'));
	    $dataSend = (array)$dataSend;
        $dataKey = array_keys($dataSend);
	    $dataSend['data'] = $dataKey[0];
        $dataSend['password'] = $request->get('password');
        unset($dataSend[$dataKey[0]]);
        $url = $this->urlWebservice;
        $params = 'operation=updatePasswordCRM&sessionName='.$sessionName.'&element='.json_encode($dataSend);
        $response =  $this->exec($url, 'POST',$params);
        $info = json_decode($response);

	    if(isset($info->result->ok)){
            return redirect()->route("login_datacrm")->with('alertCrm', $info->result->ok);
        }else{
            return redirect()->route("login_datacrm")->with('alertCrm', $info->result->error);
        }
    }

    public function setLeadRDStation($finalMap){
        $params["event_type"]   = "CONVERSION";
        $params["event_family"]   = "CDP";
        $params["http_method"]   = "POST";
        $params["payload"] = $finalMap;

        $urlConversion = 'https://api.rd.services/platform/conversions?api_key='.self::api_key;
        $event_uuid = $this->execSetLeadRD($urlConversion, $params);
        if($event_uuid){
            if(property_exists($event_uuid, 'event_uuid') || empty($event_uuid)) {
                return true;
            }else {
                return false;
            }
        }else{
            return false;
        }
    }

    public function ReCAPTCHAtokenVerification($token){
        $result = false;
        $urlReCAPTCHAGoogle = "https://www.google.com/recaptcha/api/siteverify";
        $secretKeyRecaptcha = "6LdGdPkaAAAAAF87FitpuaFzhy03kvGv3zeceOjt";
        $urlReCAPTCHAtokenVerification = "{$urlReCAPTCHAGoogle}?secret={$secretKeyRecaptcha}&response={$token}";

        // $response = file_get_contents($urlReCAPTCHAtokenVerification);
        // $validationToken = json_decode($response);  
        // if($validationToken->success){
        //     $result = true;
        // }
        // return $result;



        $ch = curl_init($urlReCAPTCHAtokenVerification);

        curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $urlReCAPTCHAtokenVerification);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       
    
        $data = curl_exec($ch);
        
        $result = true;
        if(curl_errno($ch))
        {
            $result = false;
        }
        
        curl_close($ch);
    
        return  $result;
    }

    public function execSetLeadRD($url, $params=array()) {
        $this->curl = curl_init();
        $header = array(
            'Content-Type: application/json',
            'Authorization: Bearer '
        );        
        curl_setopt($this->curl, CURLOPT_ENCODING,"");
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($this->curl, CURLOPT_POST, true);
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, json_encode($params));      

        $response = curl_exec($this->curl);
        $http = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);
        if($http != 200){
            return false;
        }
        $err = curl_error($this->curl);
        curl_close($this->curl);
        return json_decode($response);
    }
    
    public function exec($url, $request, $params)
    {
        $curl = curl_init();
	    $url = ($request == 'GET') ? $url.$params : $url ;
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $request,
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                    "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $http = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if($http != 200){
            return false;
        }
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return ($response);
        }
    }

    /**
     * Muestra todos los artículos del blog.
     *
     * @param int $id
     *
     * @return mixed
     * Created by <Rhiss.net>
     */
    public function blog()
    {
        $today                   = Carbon::today()->toDateString();

        $articles                = ModelsArticle::where('date', '<=', $today)->
                                    where('status', 'active')->
                                    orderBy('date','desc')->
                                    with('info', 'category')->
                                    get();

        $recommended    = ModelsArticle::whereHas('info', function($q){
                                    $q->where('recommended', '=', '1');
                                })->
                                offset(0)->
                                limit(3)->
                                get();

        $popular        = ModelsArticle::join('info_articles', 'articles.id', '=', 'info_articles.article_id')->
                            where('info_articles.lang', get_lang())->
                            orderBy('info_articles.views', 'desc')->    
                            select('articles.*')->
                            offset(0)->
                            limit(3)->
                            get();
                                
        // $articulos2         = ModelsArticle::where('date', '<=', $today)->
        //                             where('status', 'active')->
        //                             orderBy('date', 'desc')->
        //                             with('info', 'category')->
        //                             paginate(8);
        
        // temp start
        //

        $articulos2        = ModelsArticle::
            where('date', '<=', $today)->
            where('status', 'active')->
            join('info_articles', 'articles.id', '=', 'info_articles.article_id')->
            where('info_articles.lang', get_lang())->
            orderBy('date', 'desc')->
            // orderBy('info_articles.views', 'desc')->
            with('info', 'category')->
            paginate(5)->onEachSide(3);

        //\Log::info('*** HomeController -> blog -> articulos2 : ' . json_encode($articulos2[0]));

        $articles               = $articulos2;
           
        //\Log::info('*** HomeController -> blog -> articles ** : ' . json_encode($articles[0]));

        // temp end

        $reg['articles']         = $articulos2;
        $reg['title_meta']       = $reg['title'] = 'Blog';
        $reg['current_category'] = '';
        $reg['categories']       = Category::where('type', 'article')->where('parent', 0)->with('info')->get();
        $reg['last']             = ModelsArticle::where('date', '<=', $today)->
                                    where('status', 'active')->with('info','category')->
                                    latest('date')->
                                    take(5)->
                                    get();
        $itemsSearch             = array();

        foreach($articles as $art) {
            if (isset($art->info) && !empty($art->info)) {
                $itemsSearch[$art->info->title] = route('article', $art->slug);
            }
        }

        $reg['itemsSearch']             = json_encode($itemsSearch);
        $reg['recommended']             = $recommended;
        $reg['popular']                 = $popular;

        return view('front.blog', $reg);
    }

    /**
     *Redirecciona a la vista de error.
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Created by <mrivera@datacrm.com>
     */

    public function notFound(){
        return view('errors.404');
    }

    /**
     *Redirecciona a la vista de pagina en mantenimiento.
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Created by <avelasquez@datacrm.com>
     */

    public function pageInMaintenance(){
        return view('front.maintenance');
    }

    /**
     * Muestra los artículos del blog filtrados por categoría.
     *
     * @param $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Created by <Rhiss.net>
     */
    public function blogCategory($slug)
    {
        $today            = Carbon::today()->toDateString();
        $current_category = Category::where('slug', $slug)->with('info')->first();
        if (empty($current_category)) {
            return redirect()->route('home');
        }
        $articles                = ModelsArticle::where('date', '<=', $today)->where('status', 'active')->orderBy('date',
        'desc')->with('info', 'category')->get();
        $recommended             = ModelsArticle::whereHas('info', function($q){
            $q->where('recommended', '=', '1');
        })->paginate(3);
        $popular = ModelsArticle::join('info_articles', 'articles.id', '=', 'info_articles.article_id')->orderBy('info_articles.views', 'desc')->select('articles.*')->paginate(3);
        $reg['articles']         = ModelsArticle::where('category_id', $current_category->id)->where('date', '<=',
            $today)->where('status', 'active')->orderBy('date',
            'desc')->with('info',
            'category')->paginate(10);
        $reg['title']            = $reg['title_meta'] = $current_category->info->name;
        $reg['current_category'] = $current_category->id;
        $reg['categories']       = Category::where('type', 'article')->where('parent', 0)->with('info')->get();
        $reg['last']             = ModelsArticle::where('date', '<=', $today)->where('status', 'active')->with('info',
            'category')->latest('date')->take(5)->get();
        $itemsSearch          = array();
        foreach($articles as $art) {
            $itemsSearch[$art->info->title] = route('article', $art->slug);
        }
        $reg['itemsSearch']             = json_encode($itemsSearch);
        $reg['recommended']             = $recommended;
        $reg['popular']                 = $popular;

        return view('front.blog', $reg);
    }

    /**
     * Muestra los artículos relacionados al tag.
     *
     * @param $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Created by <Rhiss.net>
     */
    public function blogTag($slug)
    {
        $today       = Carbon::today()->toDateString();
        $current_tag = Tag::where('slug', $slug)->first();
        if (empty($current_tag)) {
            return redirect()->route('home');
        }
        $reg['articles']    = ModelsArticle::whereHas('tags', function ($query) use ($current_tag) {
            $query->where('id', $current_tag->id);
        })->where('date', '<=', $today)->where('status', 'active')->orderBy('date', 'desc')->with('info', 'category')->paginate(10);
        $reg['title']       = $reg['title_meta'] = $current_tag->name;
        $reg['current_tag'] = $current_tag;
        $reg['categories']  = Category::where('type', 'article')->where('parent', 0)->with('info')->get();
        $reg['last']        = ModelsArticle::where('date', '<=', $today)->where('status', 'active')->with('info',
            'category')->latest('date')->take(5)->get();

        return view('front.blog', $reg);
    }

    public function redirectToUrl($name){
        $articles = [
            "que-es-prospeccion" => "que-es-prospeccion-de-clientes"
        ];
        if (array_key_exists($name, $articles)) {
            return $articles[$name];
        }
        return "";
    }
    /**
     * Busca un article por slug.
     *
     * @param $slug
     *
     * @return mixed
     * Created by <Rhiss.net>
     */
    public function getArticle($slug)
    {
        
        \Log::info('*** HomeController -> getArticle -> $slug : ' . $slug);

        $redirectTo = $this->redirectToUrl($slug);
        if ($redirectTo) {
            return Redirect::to(route('article', ['slug' => $redirectTo, 'locale' => get_lang()]) . "/", 301);
        }
        $today   = Carbon::today()->toDateString();
        $article = ModelsArticle::where('slug', $slug)->with('info', 'category', 'tags')->first();
        if ( ! empty($article) && $article->status == 'active') {
            $reg['reg'] = $article;
            $route      = 'Article';
        } else {
            return redirect()->route('not-found');
        }
        $related = $this->getRelatedArticles($article);
        $articles = ModelsArticle::where('date', '<=', $today)->
                        where('status', 'active')->
                        orderBy('date','desc')->
                        with('info', 'category')->
                        get();
        $reg['title_meta']       = $reg['reg']->info->title_meta;
        $reg['description_meta'] = $reg['reg']->info->description_meta;
        $reg['keywords_meta']    = $reg['reg']->info->keywords_meta;
        $reg['path']             = 'article';
        $reg['gallery']          = ! empty($reg['reg']->gallery_id) 
                                    ?
                                        GalleryImage::where('gallery_id',$reg['reg']->gallery_id)->
                                        orderBy('position')->
                                        get() 
                                    :   null;
        $reg['route']            = $route;
        $reg['tags']             = $reg['reg']->tags;
        $reg['last']             = ModelsArticle::where('date', '<=', $today)->where('status', 'active')->with('info',
            'category')->latest('date')->take(5)->get();
        $reg['cronologies'] = InfoCronologie::getCronologies($reg['reg']->id);
        $reg['categories']       = Category::where('type', 'article')->where('parent', 0)->with('info')->get();
        $reg['related']          = $related;

        $itemsSearch          = array();
        foreach($articles as $art) {
            $itemsSearch[$art->info->title] = route('article', $art->slug);
        }
        $reg['itemsSearch']             = json_encode($itemsSearch);

        $info = $article->info;
        $info->views = $info->views + 1;
        $info = $info->attributesToArray();

        //dd($article->id);
        //InfoArticle::where(['article_id' => $article->id, 'lang' => \Lang::locale()])->update($info);

        return view('front.detail', $reg);
    }

    private function getRelatedArticles($article) {
        $current_tags = array();
        $count_tags = array();
        $related_articles = array();
        $related = array();
        foreach ($article->tags as $tag) {
            array_push($current_tags, $tag->id);
        }
        $articles = ModelsArticle::whereHas('tags', function ($query) use ($current_tags) {
            $i = 0;
            foreach ($current_tags as $tag) {
                if ($i == 0) {
                    $query->where('id', $tag);
                    $i = 1;
                } else {
                    $query->orWhere('id', $tag);
                }
            }
        })->where('status', 'active')->with('info', 'category', 'tags')->get();
        foreach($articles as $art) {
            $count = 0;
            foreach ($art->tags as $value) {
                if (in_array($value->id, $current_tags)) $count++;
            }
            $count_tags[$art->id] = $count;
            $related_articles[$art->id] = $art;
        }
        unset($count_tags[$article->id]);
        arsort($count_tags);
        $i = 0;
        foreach ($count_tags as $key => $num) {
            array_push($related, $related_articles[$key]);
            $i++;
            if ($i == 3) {
                break;
            }
        }

        return $related;
    }

    public function changeLang()
    {

        $lang = request()->lang;
        $url  = url()->previous();
        $arr  = explode(env('APP_URL'), $url);

        // \Log::info('*** HomeController -> change_lang -> step 1 -> $lang  Solicitado ' . $lang);
        // \Log::info('*** HomeController -> change_lang -> step 1 -> $url ' . $url);
        // \Log::info('*** HomeController -> change_lang -> step 1 -> $arr ' . json_encode($arr) );
        // \Log::info('*** HomeController -> change_lang -> step 1 -> get_lang() actual :  ' . get_lang());

        $search  = '/' . get_lang() . '/';

        // \Log::info('HomeController -> change_lang -> step 1 -> $search ' . $search);

        // $arr[0]  = preg_replace($search, $lang, $arr[0], 1);

        // \Log::info('HomeController -> change_lang -> step 1 -> $$arr[0]  ' . $arr[0] );

        $new_url = implode(env('APP_URL'), $arr);
        
        Session::put('locale', $lang);
        // return redirect(url(URL::previous()));
        // session(['lang' => $lang]);
        
         
        // \Log::info('*** HomeController -> change_lang -> step 1 -> get_lang() actual ' . get_lang());
        // \Log::info('*** HomeController -> new_url -> step 1 -> ' . $new_url);

        return redirect($new_url);
        
        // return redirect($url);
    }

}

