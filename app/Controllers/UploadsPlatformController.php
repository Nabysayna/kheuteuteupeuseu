<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Http\UploadedFile;

use \App\Controller;


class UploadsPlatformController extends Controller {


    public function inputfiledemndedeposit(Request $request, Response $response, $args){
        $uploadedFiles = $request->getUploadedFiles();
        $uploadedFile = $uploadedFiles['uploads'][0];

        if($uploadedFile->getError() === UPLOAD_ERR_OK){
            $originalName = $uploadedFile->getClientFilename();
            $originalTab = explode(".",$originalName);
            $generatedName = md5($originalName).".".$originalTab[count($originalTab) -1];

            $uploadedFile->moveTo("./uploads/".$generatedName);
            return $response->withJson(['status'=>true, 'originalName'=>$originalName, 'generatedName'=>$generatedName]);
        }
        else{
            return $response->withJson(['status'=> false]);
        }
    }


}