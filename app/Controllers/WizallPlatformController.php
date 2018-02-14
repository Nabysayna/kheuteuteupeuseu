<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;



class WizallPlatformController extends Controller {

  	
    public function recuperefacturesde(Request $request, Response $response, $args)
    {
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$data = $request->getParsedBody();
        $params = json_decode($data['params']);
        $client = new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/wizall?wsdl', true);
        $liste = array('token' => $params->token,'reference_client'=>$params->reference_client);
        $result = $client->call('intouchRecupereFactureSde', array('params' => $liste));
       // return $response->withJson($result);
        return $response->withJson(array('prenom' =>'magor'));
    }
    
}

