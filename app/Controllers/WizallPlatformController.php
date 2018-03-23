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


    
    public function requestsoap($request,$methode){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($this->link,true);
        $result=$client->call($methode,array('params'=>$params));
        return $result;
    }
    
    public function verifiercodebonachat(Request $request,Response $response){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		//$data=array(status => "valid");
		//$data=array("status"=> "valid", "customer"=> array("phone_number"=> "778150416", "first_name"=> "Yapele Sosthene", "last_name"=> "KA Assane"), "business_type"=> 0, "value"=> "100.000000", "model_voucher"=> array("is_cash"=> true, "product"=> "Bon Cash", "sub_product"=> "NA", "step_value"=> "1.000", "is_generic"=> true, "id"=> 3333, "is_secured"=> true, "minimum_value"=> "2000.000", "name"=> "Bon Cash ", "maximum_value"=> "3000.000", "network"=> "Transfert XOF", "currency_code"=> 952), "recipient"=> array("phone_number"=> "775054827", "is_valid"=> false, "first_name"=> "KA Assane", "last_name"=> "KA Assane", "needed_kyc_infos"=> "identityIsNeeded"), "id"=> 135137);
		 //return $response->withJson($data);
		 return "ok";
	}

}

