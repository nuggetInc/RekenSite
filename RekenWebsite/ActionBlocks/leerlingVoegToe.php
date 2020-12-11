<?php 
require('../Connect/crud.php');
require('../Connect/database.php');
session_start();

$name = $_POST['voegToeNaam'];
$pass = $_POST['voegToePass'];
$docent = $_SESSION["docent"];

$noSpaceName = str_replace(' ','', $name);

if (isset($name) && isset($pass))
{
    $array = ReadLeerlingen($pdo, $noSpaceName, $pass);
    if ($array[0] == "" && $array[1] == "")
    {
        CreateLeerling($pdo, $noSpaceName, $pass, $docent[0]);
        header("Location: ../docent.php");
    }
    else 
    {
        //MOET NOG VERANDERD WORDEN
        alert("Deze leerling bestaad!");
    }
    
}

?>