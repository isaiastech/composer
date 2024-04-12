<?php
require "vendor/autoload.php";

use app\class\Email;

$email = new Email;
$email->send();

?>