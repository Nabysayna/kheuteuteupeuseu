<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Http\UploadedFile;

use \App\Controller;


class UtilsPlatformController extends Controller {

    private $link = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest';
    private $linkCrm = 'http://abonnement.bbstvnet.com/crmbbs/backend-SB-Admin-BS4-Angular-4/index.php';

    public function getdetailonepointsuivisentool(Request $request, Response $response, $args){
        header("Access-Control-Allow-Origin: *");
        $data = $request->getParsedBody();
        $params = json_decode($data['params']);

        if($params->data->infoinit == 'initmonitoringsup') {
            $getpdvpointforsentool = json_decode($this->getdetailonepointsuivisentoolFromSentool($params->token, $params->data->infoinit, $params->data->type, ""))->response;
            return $response->withJson(array(
                'errorCode' => true,
                'message' => $getpdvpointforsentool
            ));
            return $response->withJson(array('errorCode' => true, 'message' => $getpdvpointforsentool));
        }
        if($params->data->infoinit == 'initdashboard') {
            $getpdvpointforsentool = json_decode($this->getdetailonepointsuivisentoolFromSentool($params->token, $params->data->infoinit, $params->data->type, date('Y-m-d',strtotime("last month"))." ".date('Y-m-d')))->response;
            return $response->withJson(array(
                'errorCode' => true,
                'message' => $getpdvpointforsentool,
                "dateinitial" => date('Y-m-d',strtotime("last month")),
                "datefinale" => date('Y-m-d'),
            ));
        }
        if($params->data->infoinit == 'notinitdashboard') {
            $getpdvpointforsentool = json_decode($this->getdetailonepointsuivisentoolFromSentool($params->token, $params->data->infoinit, $params->data->type, $params->data->infotype))->response;
            return $response->withJson(array('errorCode' => true, 'message' => $getpdvpointforsentool));
        }
    }
    public function getdetailonepointsuivisentoolFromSentool($token, $infoinit, $type, $infotype){
        $client = new \nusoap_client($this->link.'/crmdoor?wsdl', true);
        $nvelInscrit = array('fromcrmtoken' => $this->fromcrmtoken, 'token' => $token, 'infoinit' => $infoinit, 'type' => $type, 'infotype' => $infotype);
        $result = $client->call('getInfoOnePointForSentool', $nvelInscrit);
        return $result;
    }

    public function initajoutdeposit(Request $request, Response $response, $args){
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->linkCrm."/apifromsentool/initajoutdeposit",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data
        ));

        $reponse = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $reponse;
        }
    }

    public function demndedeposit(Request $request, Response $response, $args){
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->linkCrm."/apifromsentool/demndedeposit",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data
        ));

        $reponse = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $reponse;
        }
    }

    public function region(Request $request, Response $response, $args){
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->linkCrm."/util/region",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data
        ));

        $reponse = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $reponse;
        }
    }

    public function zone(Request $request, Response $response, $args){
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->linkCrm."/util/zone",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data
        ));

        $reponse = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $reponse;
        }
    }

    public function inputfiledemndedeposit(Request $request, Response $response, $args){
        $uploadedFiles = $request->getUploadedFiles();
        $uploadedFile = $uploadedFiles['uploads'][0];
        $fileName = $uploadedFile->getClientFilename();

        if($uploadedFile->getError() === UPLOAD_ERR_OK){
            $uploadedFile->moveTo("./uploads/".$fileName);
            return $response->withJson(['status' => true, 'fileNme' => $fileName]);
        }
        else{
            return $response->withJson(['status' => false]);
        }

    }

    public function souszonebyzonebyregion(Request $request, Response $response, $args){
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->linkCrm."/util/souszonebyzonebyregion",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data
        ));

        $reponse = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $reponse;
        }
    }




}