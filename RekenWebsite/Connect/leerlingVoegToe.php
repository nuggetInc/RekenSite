<?php 
require('crud.php');
require('database.php');

$name = $_POST['voegToeNaam'];
$pass = $_POST['voegToePass'];

$noSpaceName = str_replace(' ','', $name);

if (isset($name) && isset($pass))
{
    $array = ReadLeerlingen($pdo, $noSpaceName, $pass);
    if ($array[0] == "" && $array[1] == "")
    {
        CreateLeerling($pdo, $noSpaceName, $pass);
        header("Location: ../docent.php");
    }
    else 
    {
        //MOET NOG VERANDERD WORDEN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        alert("Deze leerling bestaat al snoekel! trut! mongool!");
    }
    
}

?>