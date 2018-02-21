<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;


class AdminmultipdvPlatformController extends Controller {

    private $link = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/adminmultipdv?wsdl';

    public function bilandeposit(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'bilandeposit');
    }

    public function depositinitialconsommeparservice(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'depositinitialconsommeparservice');
    }

    public function historiquereclamation(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'historiquereclamation');
    }

    public function demanderetraitfond(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'demanderetraitfond');
    }

    public function validerretrait(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'validerretrait');
    }

    public function listmajcautions(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'listmajcautions');
    }

    public function modifymajcaution(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'modifymajcaution');
    }

    public function nombredereclamationagentpdvvente(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'nombredereclamationagentpdvvente');
    }

    public function activiteservices(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'activiteservices');
    }

    public function performancesadminclasserbydate(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'performancesadminclasserbydate');
    }

    public function performancesadminclasserbylotbydate(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'performancesadminclasserbylotbydate');
    }

    public function detailperformancesadminclasserbydate(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'detailperformancesadminclasserbydate');
    }

    public function listmap(Request $request, Response $response, $args){
        return $this->requestsoap($request, 'listmap');
    }


///////////////////////////////////////
    public function requestsoap($request,$methode){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($this->link,true);
        $result=$client->call($methode,array('params'=>$params));
        return $result;
    }

}