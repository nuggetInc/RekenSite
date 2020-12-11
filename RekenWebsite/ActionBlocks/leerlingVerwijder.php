<?php 

require('../Connect/crud.php');
require('../Connect/database.php');

$name = $_POST['verwijderNaam'];
$pass = $_POST['verwijderPass'];

if (isset($name) && isset($pass))
{
    $array = ReadLeerlingen($pdo, $name, $pass);
    if ($array[0] != "" && $array[1] != "")
    {
        DeleteLeerling($pdo, $name, $pass);
        header("Location: ../docent.php");
    }
}

?>