<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;


class AdminpdvPlatformController extends Controller {

    private $link = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/adminpdv?wsdl';

    public function nombredereclamationpdvvente(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'nombredereclamationpdvvente');
    }

    public function historiquereclamation(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'historiquereclamation');
    }

    public function listuserpdv(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'listuserpdv');
    }
    public function modifypdv(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'modifypdv');
    }
    public function deconnectpdv(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'deconnectpdv');
    }
    public function autoriservoirdepot(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'autoriservoirdepot');
    }

    public function bilandeposit(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'bilandeposit');
    }

    public function demandeRetrait(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'demandeRetrait');
    }

    public function validerDemandeDepot(Request $request, Response $response, $args){
        $result = $this->requestsoap($request, 'validerDemandeDepot');
        return $response->withJson(array('response' =>$result));
    }

    public function creerProfilCaissier(Request $request, Response $response, $args){
        $data=$request->getParsedBody();
        $params=json_decode($data['nvelInscrit']);
        $client=new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/logging?wsdl',true);
        $result=$client->call("creerProfilCaissier",array('nvelInscrit'=>$params));
        return $response->withJson(array('response' =>$result));
    }


    public function detailperformancepdv(Request $request, Response $response, $args){
        return $response->withJson(array('prenom' =>'magor'));
    }

    public function performancepdv(Request $request, Response $response, $args){
        return $response->withJson(array('prenom' =>'magor'));
    }

    public function notifications(Request $request, Response $response, $args){
        return $response->withJson(array('prenom' =>'magor'));
    }

    public function requestsoap($request,$methode){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($this->link,true);
        $result=$client->call($methode,array('params'=>$params));
        return $result;
    }


}