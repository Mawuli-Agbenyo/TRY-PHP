<?php
declare(strict_types = 1);
include  'autoloader.ini.php'; 

$oper = $_POST['oper'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];


$calc = new Calc($oper, (int)$num1, (int)$num2);

try {
    //code...
    echo $calc->calculator();
} catch (TypeError $e) {
    //throw $th;
    echo "Error!: " .$e->getMessage();
}
