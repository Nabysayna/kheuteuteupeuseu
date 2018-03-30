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
		$data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $token=$params->token;
        $codebon=$params->codebon;
        $params=array('token'=>$token,'code_validation'=>$codebon);
        $client=new \nusoap_client($this->link,true);
		$result=$client->call('getVoucherStatus',array('params'=>$params));
		//$data=array("status"=> "valid", "customer"=> array("phone_number"=> "778150416", "first_name"=> "Yapele Sosthene", "last_name"=> "KA Assane"), "business_type"=> 0, "value"=> "100.000000", "model_voucher"=> array("is_cash"=> true, "product"=> "Bon Cash", "sub_product"=> "NA", "step_value"=> "1.000", "is_generic"=> true, "id"=> 3333, "is_secured"=> true, "minimum_value"=> "2000.000", "name"=> "Bon Cash ", "maximum_value"=> "3000.000", "network"=> "Transfert XOF", "currency_code"=> 952), "recipient"=> array("phone_number"=> "775054827", "is_valid"=> false, "first_name"=> "KA Assane", "last_name"=> "KA Assane", "needed_kyc_infos"=> "identityIsNeeded"), "id"=> 135137);
	    return $response->withJson($result);	
	}
	//validation du retrait de bon
    public function validerbonachat(Request $request,Response $response){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		
		$data=array("status"=> "valid", "customer"=> array("phone_number"=> "778150416", "first_name"=> "Yapele Sosthene", "last_name"=> "KA Assane"), "business_type"=> 0, "value"=> "100.000000", "model_voucher"=> array("is_cash"=> true, "product"=> "Bon Cash", "sub_product"=> "NA", "step_value"=> "1.000", "is_generic"=> true, "id"=> 3333, "is_secured"=> true, "minimum_value"=> "2000.000", "name"=> "Bon Cash ", "maximum_value"=> "3000.000", "network"=> "Transfert XOF", "currency_code"=> 952), "recipient"=> array("phone_number"=> "775054827", "is_valid"=> false, "first_name"=> "KA Assane", "last_name"=> "KA Assane", "needed_kyc_infos"=> "identityIsNeeded"), "id"=> 135137);
		return $response->withJson($data);
	}
    public function validerenvoiboncash(Request $request,Response $response){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$data=$request->getParsedBody();
		$params=json_decode($data['params']);
		//$params=json_decode($params->data);
		//$params=array("token"=> $params->token,"model_voucher_id" =>0,"requested_value" =>"7000","customer_phone_number" => $params->telE,"customer_first_name"=> $params->prenomE,"customer_nationality"=>$params->nationalite,"customer_identity_type"=>$params->type_piece,"customer_identity_number"=>$params->num_card,"recipient_phone_number"=>$params->telB,"recipient_first_name" => $params->prenomB,"recipient_last_name" => $params->nomB);
		$params=array("token"=> $params->token,"model_voucher_id" =>0,"requested_value" =>$params->requested_value,"customer_phone_number" => $params->customer_phone_number,"customer_first_name"=> $params->customer_first_name,"customer_last_name"=>$params->customer_last_name,"customer_nationality"=>$params->customer_nationality,"customer_identity_type"=>$params->customer_identity_type,"customer_identity_number"=>$params->customer_identity_number,"recipient_phone_number"=>$params->recipient_phone_number,"recipient_first_name" => $params->recipient_phone_number,"recipient_last_name" => $params->recipient_last_name);
		$client=new \nusoap_client($this->link,true);
		$result=$client->call('bonCreateVoucher',array('params'=>$params));
		//return $response->withJson(array('code'=>'reussi rasta'));
		return $response->withJson(array('code'=>$result));
	}
	public function getSendSecureID(Request $request,Response $response){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$data=$request->getParsedBody();
		$params=json_decode($data['params']);
		$params=array('token'=>$params->token,'code_validation'=>$params->codebon);
		$client=new \nusoap_client($this->link,true);
		$result=$client->call('getSendSecureID',array('params'=>$params));
		return $response->WithJson($result);
	}
	public function bonDebitVoucher(Request $request,Response $response){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$data=$request->getParsedBody();
		$params=json_decode($data['params']);
		$params=array('token' =>$params->token,'code_validation'=>$params->code_validation,'secure_id' => $params->secure_id,'used_value'=>"2000",'recipient_nationality' => $params->nationalite,'recipient_identity_type' => $params->type_carte,'recipient_identity_number' => $params->num_card);
		$client=new \nusoap_client($this->link,true);
		$result=$client->call('bonDebitVoucher',array('params'=>$params));
		return $response->WithJson($result);
	 }
    public function validerenvoibonachat(Request $request,Response $response){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$data=$request->getParsedBody();
		$params=json_decode($data['params']);
		$prenomE=$params->prenomE;
		$nomE=$params->nomE;
		$telE=$params->telE;
		$nationalite=$params->nationalite;
		$type_carte=$params->type_piece;
		$num_card=$param->num_card;
		$prenomB=$params->prenomB;
		$nomB=$params->nomB;
		$telB=$params->telB;
		$data=array("status"=> "valid", "customer"=> array("phone_number"=> "778150416", "first_name"=> "Yapele Sosthene", "last_name"=> "KA Assane"), "business_type"=> 0, "value"=> "100.000000", "model_voucher"=> array("is_cash"=> true, "product"=> "Bon Cash", "sub_product"=> "NA", "step_value"=> "1.000", "is_generic"=> true, "id"=> 3333, "is_secured"=> true, "minimum_value"=> "2000.000", "name"=> "Bon Cash ", "maximum_value"=> "3000.000", "network"=> "Transfert XOF", "currency_code"=> 952), "recipient"=> array("phone_number"=> "775054827", "is_valid"=> false, "first_name"=> "KA Assane", "last_name"=> "KA Assane", "needed_kyc_infos"=> "identityIsNeeded"), "id"=> 135137);
		return $response->withJson(array('code'=>'bon achat validé'));
	}
}

