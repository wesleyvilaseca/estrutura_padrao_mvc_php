<?php

namespace app\controllers;
use app\core\Controller;

class ClienteController extends Controller{
    public function lista(){
        print "<br>estou listando os clientes<br>";
    }
    
    public function lista2($parametro){
        print "<br>estou listando os clientes2 $parametro<br>";
    }
    
    public function index(){
        print "<br>método padrão dentro da classe cliente controller<br>";
    }
    
    public function ver(){
        $cliente = array();
        $cliente["nome"] = "Wesley Vila Seca";
        $cliente["email"] = "wesley.vilaseca@hotmail.com";
        $this->load("v_cliente", $cliente);
    }
    
    
    
}

