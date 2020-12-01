<?php 
require("database.php");
require("crud.php");
session_start();

$name = $_GET['Naam'];
$pass = $_GET['Pass'];

$array = Read($pdo, $name, $pass);

    if ($array[0] == "" || $array[1] == "")
    {
        
        echo "Leeg";
    }
    else
    {
        $_SESSION["leerlingen"] = $array;
        header("Location: ../opgaven.php");
    }


?>