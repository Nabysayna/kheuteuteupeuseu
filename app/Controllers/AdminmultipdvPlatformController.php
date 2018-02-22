<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;


class AdminmultipdvPlatformController extends Controller {

    private $link = 'http://51.254.200.129/backendprod/EsquisseBackEnd/web/app.php/invest/adminmultipdv?wsdl';
    private $linkCrm = 'http://abonnement.bbstvnet.com/crmbbs/backend-SB-Admin-BS4-Angular-4/index.php';

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

    public function listcreditmanager(Request $request, Response $response, $args){
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->linkCrm."/apifromsentool/listcreditmanager",
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
    public function ajoutcreditmanager(Request $request, Response $response, $args){
        $data=$request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->linkCrm."/apifromsentool/ajoutcreditmanager",
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




///////////////////////////////////////
    public function requestsoap($request,$methode){
        $data=$request->getParsedBody();
        $params=json_decode($data['params']);
        $client=new \nusoap_client($this->link,true);
        $result=$client->call($methode,array('params'=>$params));
        return $result;
    }

}