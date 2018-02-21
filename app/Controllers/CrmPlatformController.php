<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;


class CrmPlatformController extends Controller {

    private $linkCrmDoor = "http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/crmdoor?wsdl";

    private $linkCrmSen = "http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/crm?wsdl";

    private $linkCrm = 'http://abonnement.bbstvnet.com/crmbbs/backend-SB-Admin-BS4-Angular-4/index.php';


    public function validerDemandeDepot(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'validerDemandeDepot', $this->linkCrmDoor);
    }

    public function getEtatDemandeDepot(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'getEtatDemandeDepot', $this->linkCrmDoor);
    }

    public function portefeuille(Request $request, Response $response, $args){
        $result = $this->requestcrmsoap($request, 'portefeuille', $this->linkCrmSen);
        return $result;
    }

    public function relance(Request $request, Response $response, $args){
        $result = $this->requestcrmsoap($request, 'relance', $this->linkCrmSen);
        return $result;
    }

    public function promotion(Request $request, Response $response, $args){
        $result = $this->requestcrmsoap($request, 'promotion', $this->linkCrmSen);
        return $result;
    }

    public function sendSms(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'sendSms', $this->linkCrmSen);
    }

    public function prospection(Request $request, Response $response, $args){
        $result = $this->requestcrmsoap($request, 'prospection', $this->linkCrmSen);
        return $result;
    }

    public function suivicommande(Request $request, Response $response, $args){
        $result = $this->requestcrmsoap($request, 'suivicommande', $this->linkCrmSen);
        return $result;
    }

    public function servicepoint(Request $request, Response $response, $args){
        $result = $this->requestcrmsoap($request, 'servicepoint', $this->linkCrmSen);
        return $result;
    }



////////////////////////////////////////////////////////////////////
    public function requestsoap($request,$methode, $url){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($url,true);
        $result=$client->call($methode,array('params'=>$params));
        return $result;
    }

    public function requestcrmsoap($request,$methode, $url){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($url,true);
        $result=$client->call($methode,array('token' => $params->token));
        return $result;
    }



}