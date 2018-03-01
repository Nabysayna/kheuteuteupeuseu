<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;



class MapsPlatformController extends Controller {

    private $link = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/maps?wsdl';

    public function listmaps(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'listmaps');
        return $response->withJson($result);
    }

    public function listmapsdepart(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'listmapsdepart');
        return $response->withJson($result);
    }

    public function listmapspardepart(Request $request, Response $response, $args) {
        $result = $this->requestsoap($request, 'listmapspardepart');
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

