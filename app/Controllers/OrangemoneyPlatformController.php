<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;



class OrangemoneyPlatformController extends Controller {

    public function requerirControllerOM(Request $request,Response $response,$args){
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://51.254.200.129/backendprod/horsSentiersBattus/scripts/om.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data
        ));

        $resp = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $resp;
        }
    }

    public function verifierReponseOM(Request $request,Response $response,$args){
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://51.254.200.129/backendprod/horsSentiersBattus/scripts/omlazyresponse.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data
        ));

        $resp = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $resp;
        }
    }

    public function demanderAnnulationOM(Request $request,Response $response,$args){
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://51.254.200.129/backendprod/horsSentiersBattus/scripts/omannuler.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data
        ));

        $resp = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $resp;
        }
    }

    public function isDepotCheckAuthorized(Request $request,Response $response,$args){
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://51.254.200.129/backendprod/horsSentiersBattus/scripts/verifierAutorisation.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data
        ));

        $resp = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $resp;
        }
    }

    public function depot(Request $request,Response $response,$args){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://51.254.200.129/backendprod/horsSentiersBattus/scripts/om.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data
        ));

        $reponse = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $reponse;
        }
    }

    public function reponse(Request $request,Response $response,$args){
        header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://51.254.200.129/backendprod/horsSentiersBattus/scripts/omlazyresponse.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST =>true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data  
       ));

        $reponse = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
       if ($err) {
         return "0";
       } else {
       return $reponse;
      }
            

    }

}
?>