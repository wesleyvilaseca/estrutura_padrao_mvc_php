<?php
namespace app\core;

class Controller {
   public function load($viewName, $viewDados = array()){
       extract($viewDados);
       print '<pre>';
       var_dump($viewDados);
        include "app/views/" . $viewName . ".php";
    }
}
