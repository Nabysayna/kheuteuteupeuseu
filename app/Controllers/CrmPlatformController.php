<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;


class CrmPlatformController extends Controller {

    private $linkCrmDoor = "http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/crmdoor?wsdl";

    private $linkCrm = 'http://abonnement.bbstvnet.com/crmbbs/backend-SB-Admin-BS4-Angular-4/index.php';


    public function validerDemandeDepot(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'validerDemandeDepot', $this->linkCrmDoor);
    }


    public function requestsoap($request,$methode, $url){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($url,true);
        $result=$client->call($methode,array('params'=>$params));
        return $result;
    }



}