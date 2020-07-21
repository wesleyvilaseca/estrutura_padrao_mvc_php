<?php
require 'config/config.php';
require 'app/core/Core.php';
require 'vendor/autoload.php';


$core = new Core;
$core->run();

/*

print "controller: " . $core->getController();
print "<br>Metodo: " . $core->getMetodo();

$parametro = $core->getParametros();
foreach ($parametro as $param) {
    print "<br>Parametro: " . $param;
}*/

