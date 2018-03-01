<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;



class WizallPlatformController extends Controller {

    private $link = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/wizall?wsdl';

    public function intouchCashin(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'intouchCashin');
        return $response->withJson($result);
    }

    public function intouchCashout(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'intouchCashout');
        return $response->withJson($result);
    }

    public function intouchPayerFactureSde(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'intouchPayerFactureSde');
        return $response->withJson($result);
    }

    public function intouchRecupereFactureSde(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'intouchRecupereFactureSde');
        return $response->withJson($result);
    }

    public function intouchPayerFactureSenelec(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'intouchPayerFactureSenelec');
        return $response->withJson($result);
    }

    public function intouchRecupereFactureSenelec(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'intouchRecupereFactureSenelec');
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

