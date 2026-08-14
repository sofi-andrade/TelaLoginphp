<?php


include  (__DIR__ . "/../../vendor/autoload.php");
 
Use App\model\Usuario;
 
$Usuario1 = new Usuario();
 
var_dump($Usuario1);         
header("Location: http://localhost:9999/view/login.php");
