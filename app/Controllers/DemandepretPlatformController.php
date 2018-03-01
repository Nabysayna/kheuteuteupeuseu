<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;


class DemandepretPlatformController extends Controller {

    private $link = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/demandesprets?wsdl';
    private $linkConsulter = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/consulterpret?wsdl';

    public function demandepret(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'demandepret');
    }

    public function consulterpret(Request $request, Response $response, $args){
        return $this->requestsoapConsulter($request, 'consulterpret');
    }

    public function envoyerDemandeDepretCofina(Request $request, Response $response, $args){
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://51.254.200.129/backendprod/horsSentiersBattus/scripts/pretcofina.php",
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

    public function ajoutdemandepret(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'ajoutdemandepret');
    }


    ///////////////////////////////////////////////////////////////////////
    public function requestsoap($request,$methode){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($this->link,true);
        $result=$client->call($methode,array('params'=>$params));
        return $result;
    }

    public function requestsoapConsulter($request,$methode){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($this->linkConsulter,true);
        $result=$client->call($methode,$params);
        return $result;
    }



}