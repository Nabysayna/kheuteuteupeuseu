<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;



class EcomPlatformController extends Controller {

  	
    public function listeArticles(Request $request, Response $response, $args)
    {
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$data = $request->getParsedBody();
        $params = json_decode($data['params']);
        $client = new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/ecommerce?wsdl', true);
        $liste = array('token' => $params->token,'type'=>$params->type);
        $result = $client->call('listerarticle', array('params' => $liste));
        return $response->withJson($result);
    }
    public function ajouterarticle(Request $request, Response $response, $args)
    {
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$data = $request->getParsedBody();
        $params = json_decode($data['params']);
        $client = new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/ecommerce?wsdl', true);
        $article = array('token' => $params->token,'designation'=>$params->designation,'description' =>$params->description,'prix' =>$params->prix,'stock' =>$params->stock,'img_link' =>$params->img_link,'categorie' =>$params->categorie);
        $result = $client->call('ajoutarticle', array('params' => $article));
        return $response->withJson($result);
    }
}

