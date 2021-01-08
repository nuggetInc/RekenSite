<?php 
require('../Connect/crud.php');
require('../Connect/database.php');

$old = $_POST['OudeLeraar'];
$new = $_POST['NieuweLeraar'];
if (!isset($old) || !isset($new))
{}
else 
{
    $parameters = array(':old'=>$old,':new'=>$new);
    $sth = $pdo->prepare("UPDATE docenten SET Docent = Piet WHERE Docent = Roos");
    $sth->execute($parameters);
}

    
