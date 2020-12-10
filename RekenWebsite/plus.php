<?php

session_start();

$opgaven = Array();

$opgaven["operator"] = "+";
$opgaven["position"] = 0;
if (isset($_GET["max"]))
    $max = $_GET["max"];
else
{
    header("Location: opgaven.php");
    return;
}

for ($i=0; $i < 10; $i++) {
    $num1 = rand(1, $max);
    $num2 = rand(1, $max);
    $opgaven[$i] = Array($num1, $num2, $num1 + $num2, false);
}

$_SESSION["opgaven"] = $opgaven;
header("Location: vragen.php");

?>