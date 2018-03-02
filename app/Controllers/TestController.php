<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;



class TestController extends Controller {

    public function index(Request $request, Response $response, $args) {
        $this->_logger->addInfo("__:".date('Y-m-d H:i:s')."__   TEST Index");
        return $response->withJson(array("Message"=>"KHEUTEUTEUPEUSEU"));
    }

}

