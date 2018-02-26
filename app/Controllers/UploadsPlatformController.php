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
        $fileName = $uploadedFile->getClientFilename();

        if($uploadedFile->getError() === UPLOAD_ERR_OK){
            $uploadedFile->moveTo("./uploads/".$fileName);
            return $response->withJson(['status' => true, 'fileNme' => $fileName]);
        }
        else{
            return $response->withJson(['status' => false]);
        }
    }


}