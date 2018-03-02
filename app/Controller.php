<?php

namespace App;


use Slim\Container;


class Controller {

    protected $fromcrmtoken;
    protected $_logger;

    public function __construct(Container $c) {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        $this->fromcrmtoken = "dsLDHD683_5238d11ns@sfnJDK82_3EZ7";
        $this->_logger = $c->get('logger');
    }

    public function e404($message){
        header('HTTP/1.0 404 Not Found');
        $this->set('message',$message);
        $this->render('/errors/404');
        die();
    }

}
