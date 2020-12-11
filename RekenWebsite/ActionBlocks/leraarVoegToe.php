<?php 
require('../Connect/crud.php');
require('../Connect/database.php');

$name = $_POST['voegToeNaam'];
$pass = $_POST['voegToePass'];

$noSpaceName = str_replace(' ','', $name);

if (isset($name) && isset($pass))
{
    $array = ReadDocenten($pdo, $noSpaceName, $pass);
    if ($array[0] == "" && $array[1] == "")
    {
        CreateDocent($pdo, $noSpaceName, $pass);
        header("Location: ../beheerder.php");
    }
    else 
    {
        //MOET NOG VERANDERD WORDEN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        alert("Deze leerling bestaat al snoekel! trut! mongool!");
    }
    
}