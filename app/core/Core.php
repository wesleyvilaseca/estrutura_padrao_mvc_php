<?php

class Core {

    private $controller;
    private $metodo;
    private $parametros = array();

    public function __construct() {
        $this->verificaUri();
    }

    public function run() {
        $controllerCorrente = $this->getController();

        $c = new $controllerCorrente();
        //no call user eu passo um array, onde primeiro vai o objeto, em seguida eu passo o método
        //e após isso eu passo os parêmetros que o método em questão vai receber
        call_user_func_array(array($c, $this->getMetodo()), $this->getParametros());
    }

    public function verificaUri() {
        //o metodo run vai ser o responsável por administrar o controller que vai ser executado
        $url = explode("index.php", $_SERVER["PHP_SELF"]);
        $url = end($url);

        if ($url != "") {
            $url = explode('/', $url);

            //pega o controller
            array_shift($url);
            $this->controller = ucfirst($url[0]) . "Controller";

            //pega o metodo
            array_shift($url);
            if (isset($url[0])) {
                $this->metodo = $url[0];
                //pega os parametros
                array_shift($url);
            }

            if (isset($url[0])) {
                //pega os parametros
                $this->parametros = array_filter($url);
            }
        } else {
            $this->controller = ucfirst(CONTROLLER_PADRAO) . "Controller";
        }
    }

    function getController() {
        if (class_exists(NAMESPACE_CONTROLLER . $this->controller)) {
            return NAMESPACE_CONTROLLER . $this->controller;
        }
        return NAMESPACE_CONTROLLER . ucfirst(CONTROLLER_PADRAO) . "Controller";
    }

    function getMetodo() {
        //verifica se exeiste método dentro da classe do objeto
        if (method_exists(Core::getController(), $this->metodo)) {
            return $this->metodo;
        }

        return METODO_PADRAO;
    }

    function getParametros() {
        return $this->parametros;
    }

}
