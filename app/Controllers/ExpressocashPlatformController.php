<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;



class EcomPlatformController extends Controller {

    private $link = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/expressocash?wsdl';

    public function cashin(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'cashin');
        return $response->withJson($result);
    }

    public function cashout(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'cashout');
        return $response->withJson($result);
    }

    public function topup(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'topup');
        return $response->withJson($result);
    }

    public function checkbalance(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'checkbalance');
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

