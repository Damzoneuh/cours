<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require ('class/Calc.php');

use App\Calc;

$calc = new Calc(4,6);
$total = $calc->multiple();

include 'template/layout.php';
strstr($_SERVER['url'], '/route');
var_dump($_SERVER['REQUEST_URI']);
//var_dump($calc->addArray(10 , 12));