<?php

session_start();

$opgaven = Array();

$opgaven["operator"] = "-";
$opgaven["position"] = 0;
$opgaven["punt"] = 0;
$max = $_SESSION["leerling"][8];

for ($i=0; $i < 10; $i++) {
    $num1 = rand(1, $max);
    $num2 = rand(1, $num1);
    $opgaven[$i] = Array($num1, $num2, $num1 - $num2, false);
}

$_SESSION["opgaven"] = $opgaven;
header("Location: ../vragen.php");

?>