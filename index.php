<?php
require "vendor/autoload.php";

use app\class\Gerencia;

$gerencia = new Gerencia();

echo $gerencia->gerente();

?>