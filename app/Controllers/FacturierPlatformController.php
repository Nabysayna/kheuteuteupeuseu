<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;



class FacturierPlatformController extends Controller {

    private $link = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/facturier?wsdl';

    public function reglementsde(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'reglementsde');
        return $response->withJson($result);
    }

    public function detailreglementsde(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'detailreglementsde');
        return $response->withJson($result);
    }

    public function achatrapido(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'achatrapido');
        return $response->withJson($result);
    }

    public function achatcodewoyofal(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'achatcodewoyofal');
        return $response->withJson($result);
    }

    public function detailreglementsenelec(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'detailreglementsenelec');
        return $response->withJson($result);
    }

    public function reglementsenelec(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'reglementsenelec');
        return $response->withJson($result);
    }

    public function paiementoolusolar(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'paiementoolusolar');
        return $response->withJson($result);
    }


    ///////////////////////////////////////////////////////
    public function requestsoap($request,$methode){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($this->link,true);
        $result=$client->call($methode,array('params'=>$params));
        return $result;
    }

}

