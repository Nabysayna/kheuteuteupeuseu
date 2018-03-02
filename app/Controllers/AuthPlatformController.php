<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;


class AuthPlatformController extends Controller {

    private $link = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/logging?wsdl';

    public function authentification(Request $request, Response $response, $args){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($this->link,true);
        $result=$client->call("authentification",array('user'=>$params));
        return $response->withJson($result);
    }

    public function authentificationPhaseTwo(Request $request, Response $response, $args){
        $result=$this->requestsoap($request, 'authentificationPhaseTwo');
        return $response->withJson($result);
    }

    public function inscription(Request $request, Response $response, $args){
        $result=$this->requestsoapNvelInscrit($request, 'inscription');
        return $response->withJson($result);
    }

    public function modifpwdinit(Request $request, Response $response, $args){
        $result=$this->requestsoap($request, 'modifpwdinit');
        return $response->withJson($result);
    }

    public function deconnexion(Request $request, Response $response, $args){
        $result=$this->requestsoap($request, 'deconnexion');
        return $response->withJson($result);
    }

    public function creerProfilCaissier(Request $request, Response $response, $args){
        $result=$this->requestsoapNvelInscrit($request, 'creerProfilCaissier');
        return $response->withJson($result);
    }



    /////////////////////////////////--------------------////////////////////////

    public function requestsoap($request,$methode){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($this->link,true);
        $result=$client->call($methode,array('user'=>$params));
        $this->_logger->addInfo("__:".date('Y-m-d H:i:s')."__    Method:".$methode."    Request=:".json_encode($params)."   Response=:".$result);
        return $result;
    }

    public function requestsoapNvelInscrit($request,$methode){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($this->link,true);
        $result=$client->call($methode,array('nvelInscrit'=>$params));
        return $result;
    }



}