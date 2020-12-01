
<?php
function Create($pdo, $i, $value)
{
    $parameters = array(':Naam'=>$i,':Wachtwoord'=>$value);
    $sth = $pdo->prepare("INSERT INTO leerlingen (Naam, Wachtwoord) VALUES (:Naam, :Wachtwoord)");
    $sth->execute($parameters);
}

function Read($pdo, $i, $value)
{
    $parameters = array(':Naam'=>$i, ':Wachtwoord'=>$value);
    $sth = $pdo->prepare("SELECT * FROM leerlingen WHERE Naam = :Naam AND Wachtwoord = :Wachtwoord");
    $sth->execute($parameters);

    return $sth->fetch();
}

function Update($pdo, $i, $value)
{
    $parameters = array(':nummer'=>$i,':naam'=>$value);
    $sth = $pdo->prepare("UPDATE testTabel SET naam=:naam WHERE nummer=:nummer");
    $sth->execute($parameters);
}

function Delete($pdo, $i)
{
    $parameters = array(':nummer'=>$i);
    $sth = $pdo->prepare("DELETE FROM testTabel WHERE nummer=:nummer");
    $sth->execute($parameters);
}

function ConsoleLog($message)
{
    echo '<script type="text/javascript">' .
    'console.log(\'' . $message  .  '\');</script>';
}

function alert($message)
{
    echo "<script type='text/javascript'>alert(' $message  ');</script>";
}
?>