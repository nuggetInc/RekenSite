<?php

session_start();

$opgaven = Array();

$opgaven["operator"] = ":";
$opgaven["position"] = 0;
$opgaven["punt"] = 0;
$tafel = $_SESSION["leerling"][10];

for ($i=0; $i < 10; $i++) {
    $num1 = rand(1, 10);
    $opgaven[$i] = Array($num1 * $tafel, $tafel, $num1, false);
}

$_SESSION["opgaven"] = $opgaven;
header("Location: ../vragen.php");

?>