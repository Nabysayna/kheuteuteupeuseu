<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;



class EcomPlatformController extends Controller {

    private $link = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/ecommerce?wsdl';

    public function listerarticle(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'listerarticle');
        return $response->withJson($result);
    }

    public function ajoutarticle(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'ajoutarticle');
        return $response->withJson($result);
    }

    public function ajoutcommande(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'ajoutcommande');
        return $response->withJson($result);
    }

    public function receptionnerCommandes(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'receptionnerCommandes');
        return $response->withJson($result);
    }

    public function supprimerArticle(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'supprimerArticle');
        return $response->withJson($result);
    }

    public function modifierArticle(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'modifierArticle');
        return $response->withJson($result);
    }

    public function assignerCourse(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'assignerCourse');
        return $response->withJson($result);
    }

    public function prendreCommande(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'prendreCommande');
        return $response->withJson($result);
    }

    public function fournirCommandes(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'fournirCommandes');
        return $response->withJson($result);
    }

    public function listerCategorie(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'listerCategorie');
        return $response->withJson($result);
    }

    public function listercommande(Request $request, Response $response, $args) {
        return $this->requestsoap($request, 'listercommande');
    }

    public function listerCoursier(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'listerCoursier');
        return $response->withJson($result);
    }

    public function listervente(Request $request, Response $response, $args) {
        return $this->requestsoap($request, 'listervente');
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

