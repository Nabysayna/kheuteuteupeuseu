<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;



class PostcashPlatformController extends Controller {
    public function rechargementespece(Request $request,Response $response,$args){
        header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $espece=array('token'=>$params->token,'tel_destinataire'=>$params->tel_destinataire,'montant'=>$params->montant);
        $client=new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/postcash?wsdl',true);
        $result=$client->call('rechargementespece',array('params'=>$espece));
        return $response->withJson($result);
    }
    public function achatjula(Request $request,Response $response,$args){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $espece=array('token'=>$params->token,'mt_carte'=>$params->mt_carte,'nb_carte'=>$params->nb_carte);
        $client=new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/postcash?wsdl',true);
        $result=$client->call('achatjula',array('params'=>$espece));
        return $response->withJson($result);
    }
    public function detailfacturesenelec(Request $request,Response $response,$args){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $detail=array('token'=>$params->token,'police'=>$params->police,'num_facture'=>$params->num_facture);
        $client=new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/postcash?wsdl',true);
        $result=$client->call('detailfacturesenelec',array('params'=>$detail));
        return $response->withJson($result);
    }
    public function reglementsenelec(Request $request,Response $response,$args){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $detail=array('token'=>$params->token,'police'=>$params->police,'num_facture'=>$params->num_facture,'montant'=>$params->montant);
        $client=new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/postcash?wsdl',true);
        $result=$client->call('reglementsenelec',array('params'=>$detail));
        return $response->withJson($result);
        

    }
    public function achatcodewoyofal(Request $request,Response $response,$args){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $detail=array('token'=>$params->token,'compteur'=>$params->compteur,'montant'=>$params->montant);
        $client=new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/postcash?wsdl',true);
        $result=$client->call('achatcodewoyofal',array('params'=>$detail));
        return $response->withJson($result);
    }
    public function oolusolar(Request $request,Response $response,$args){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $detail=array('token'=>$params->token,'tel'=>$params->tel_destinataire,'numcompte'=>$params->numcompte,'mtt'=>$params->mtt);
        $client=new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/postcash?wsdl',true);
        $result=$client->call('PaiementOoluSolar',array('params'=>$detail));
        return $response->withJson($result);
    }
    
}
?>