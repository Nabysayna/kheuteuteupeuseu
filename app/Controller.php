<?php

namespace App;


use Slim\Container;


class Controller {


  public function __construct(Container $c) {
   
  }

  public function e404($message){
    header('HTTP/1.0 404 Not Found');
    $this->set('message',$message);
    $this->render('/errors/404');
    die();
  }
  
}
