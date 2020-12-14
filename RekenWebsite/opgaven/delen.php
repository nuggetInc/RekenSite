<?php

session_start();

$opgaven = Array();

$opgaven["operator"] = ":";
$opgaven["position"] = 0;
$opgaven["punt"] = 0;
if (isset($_GET["tafel"]))
    $tafel = $_GET["tafel"];
else
{
    header("Location: ../opgaven.php");
    return;
}

for ($i=0; $i < 10; $i++) {
    $num1 = rand(1, 10);
    $opgaven[$i] = Array($num1 * $tafel, $tafel, $num1, false);
}

$_SESSION["opgaven"] = $opgaven;
header("Location: ../vragen.php");

?>