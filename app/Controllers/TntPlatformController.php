<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;



class TntPlatformController extends Controller {

  	
    public function checkNumber(Request $request, Response $response, $args)
    {
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$data = $request->getParsedBody();
        $params = json_decode($data['params']);
        $token=$params->token;
        $chip=$params->numeroCarteChip;
        $client = new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/tnt?wsdl', true);
        $nvelInscrit = array('token' => $token,'numeroCarteChip'=>$chip);
        $result = $client->call('verifinumeroabonnement', array('params' => $nvelInscrit));
        return $response->withJson($result);
    }
    public function abonner(Request $request, Response $response, $args)
    {
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$data = $request->getParsedBody();
        $params = json_decode($data['params']);
        $client = new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/tnt?wsdl', true);
        $nvelInscrit = array('token' => $params->token,'prenom'=>$params->prenom,'nom'=>$params->nom,'tel'=>$params->tel,'adresse'=>$params->adresse,'region'=>$params->region,'city'=>$params->city,'cni'=>$params->cni,'numerochip'=>$params->numerochip,'numerocarte'=>$params->numerocarte,'duree'=>$params->duree,'typedebouquet'=>$params->typedebouquet,'montant'=>$params->montant);
        $result = $client->call('ajoutabonnement', array('params' => $nvelInscrit));
        return $response->withJson($result);
    }
    public function listabonnement(Request $request, Response $response, $args){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $token=array('token'=>$params->token);
        $client=new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/tnt?wsdl',true);
        $result=$client->call('listabonnement',array('params'=>$token));
        return $response->withJson($result);

    }
    public function ventedecodeur(Request $request, Response $response, $args){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $decodeur=array('token'=>$params->token,'prenom'=>$params->prenom,'nom'=>$params->nom,'tel'=>$params->tel,'adresse'=>$params->adresse,'region'=>$params->region,'cni'=>$params->cni,'numerochip'=>$params->numerochip,'numerocarte'=>$params->numerocarte,'typedebouquet'=>$params->typedebouquet,'prix'=>$params->prix);
        $client=new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/tnt?wsdl',true);
        $result=$client->call('ventedecodeur',array('params'=>$decodeur));
        return $response->withJson($result);
    }
    public function listeventedecodeur(Request $request, Response $response, $args){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $liste=array('token'=>$params->token);
        $client=new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/tnt?wsdl',true);
        $result=$client->call('listdecodeur',array('params'=>$liste));
        return $response->withJson($result);
    }
    public function listeventecarte(Request $request, Response $response, $args){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $liste=array('token'=>$params->token);
        $client=new \nusoap_client('http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/tnt?wsdl',true);
        $result=$client->call('listcarte',array('params'=>$liste));
        return $response->withJson($result);
    }

}

