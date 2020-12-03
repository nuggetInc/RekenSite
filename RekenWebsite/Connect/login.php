<?php 
require("database.php");
require("crud.php");
session_start();

$name = $_GET['Naam'];
$pass = $_GET['Pass'];

$l_array = ReadLeerlingen($pdo, $name, $pass);
$d_array = ReadDocenten($pdo, $name, $pass);

    if ($l_array[0] == "" || $l_array[1] == "")
    {
        if ($d_array[0] == "" || $d_array[1] == "") 
        {
            echo "Leeg";
        }
        else 
        {
            $_SESSION["docent"] = $d_array; 
            header("Location: ../docent.php");  
        }
    }
    else
    {
        $_SESSION["leerling"] = $l_array;
        header("Location: ../opgaven.php");
    }
?>