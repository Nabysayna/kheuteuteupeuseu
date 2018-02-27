<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;


class GestionreportingPlatformController extends Controller {

    private $link = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/gestionreport?wsdl';

    public function reportingdate(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'reportingdate');
    }

    public function reimpression(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'reimpression');
    }

    public function gestionreporting(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'gestionreporting');
    }

    public function servicepoint(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'servicepoint');
    }

    public function ajoutdepense(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'ajoutdepense');
    }

    public function reclamation(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'reclamation');
    }

    public function vente(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'vente');
    }


    ///////////////////////////////////////////////////////////////////////
    public function requestsoap($request,$methode){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($this->link,true);
        $result=$client->call($methode,array('params'=>$params));
        return $result;
    }


}