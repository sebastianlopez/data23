<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WsPayu extends Controller{
    private $apiKey;
    private $apiLogin;
    private $merchantId;
    private $url;

    public function __construct($country = 'co'){
        $this->apiKey = '1321746fb0d';
        $this->apiLogin = '4m0u8S01L5q8te2';     
        $this->merchantId = '74252';
        //$this->url = "https://sandbox.api.payulatam.com/payments-api/rest/v4.9/";//Pruebas
        $this->url = "https://api.payulatam.com/payments-api/rest/v4.9/";
    }
    /**
     * getKeys
     *
     * @param  mixed $countryId -> código  País
     *
     * @return String Código país PayU
     */
    public function getKeys($countryId){
        switch ($countryId) {
            case 'CL':
                $key = '512325';//Chile
                break;
            case 'co':
                $key = '78295';//Colombia
                break;
            case 'mx':
                $key = '617919';//México
                break;
            case 'PA':
                $key = '512326';//Panamá
                break;  
            case 'PE':
                $key = '512323';//Perú
                break;  
            case 'BR':
                $key = '512327';//Brasil
                break;
            case 'us': case 'ec':
                $key = '78295';//
                break;              
            default:
                $key = '512321';//Colombia
                break;
        }
        return $key;
    }

   public function exec($type, $data = array(), $method = 'POST'){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->url.$type,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Authorization: Basic ".base64_encode($this->apiLogin.':'.$this->apiKey),
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }

    }


    public function execPayment($type, $data = array(), $method = 'POST') {
        $curl = curl_init();
        $this->url = "https://api.payulatam.com/payments-api/4.0/service.cgi";
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->url.$type,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Authorization: Basic ".base64_encode($this->apiLogin.':'.$this->apiKey),
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }

    }
}
