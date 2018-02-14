<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;



class GestionPlatformController extends Controller {
    public function reportingdate(Request $request,Response $response,$args){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        header('Content-Type: text/plain;charset=utf-8');
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $espece=array('token'=>$params->token,'idpdv'=>$params->idpdv,'type'=>$params->type,'infotype'=>$params->infotype);
        $client=new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/gestionreporting?wsdl',true);
        $result=$client->call('reportingdate',array('params'=>$espece));
        //$result=$client->call('reportingdate',array('params' =>$params));
        return $result;
        
    
        
    }  

    public function gestionreporting(Request $request,Response $response,$args){
        header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
       /* $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $espece=array('token'=>$params->token);*/
        $client=new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/gestionreporting?wsdl',true);
        $result=$client->call('gestionreporting',array('token'=>'45663eeb4ee063118a82dbad466c6407a5ae15af6'));
        return $response->withJson($result);
        
    }  
}
?>