<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;


class ComptabilitePlatformController extends Controller {

    private $link = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/comptapdv?wsdl';

    public function userexploitation(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'userexploitation');
    }

    public function exploitation(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'exploitation');
    }

    public function exploitationaveccommission(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'exploitationaveccommission');
    }

    public function listevente(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'listevente');
    }

    public function listecharge(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'listecharge');
    }

    public function ajoutcharge(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'ajoutcharge');
    }

    public function supprimerservice(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'autoriservoirdepot');
    }

    public function modifierservice(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'bilandeposit');
    }

    public function ajoutservice(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'ajoutservice');
    }

    public function approvisionner(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'approvisionner');
    }

    public function listecaisse(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'listecaisse');
    }

    public function listeservice(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'approvisionner');
    }

    public function etatcaisse(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'approvisionner');
    }

    public function validerapprovisionn(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'validerapprovisionn');
    }

    public function listerevenu(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'listerevenu');
    }

    public function listerevenutransfert(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'listerevenutransfert');
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