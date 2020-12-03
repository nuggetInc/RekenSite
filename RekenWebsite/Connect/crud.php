
<?php
// lEERLINGEN
function CreateLeerlingen($pdo, $i, $value)
{
    $parameters = array(':Naam'=>$i,':Wachtwoord'=>$value);
    $sth = $pdo->prepare("INSERT INTO leerlingen (Naam, Wachtwoord) VALUES (:Naam, :Wachtwoord)");
    $sth->execute($parameters);
}
// DOCENTEN
function CreateDocent($pdo, $i, $value)
{
    $parameters = array(':Docent'=>$i,':Wachtwoord'=>$value);
    $sth = $pdo->prepare("INSERT INTO docenten (Docent, Wachtwoord) VALUES (:Docent, :Wachtwoord)");
    $sth->execute($parameters);
}
// lEERLINGEN
function ReadLeerlingen($pdo, $i, $value)
{
    $parameters = array(':Naam'=>$i, ':Wachtwoord'=>$value);
    $sth = $pdo->prepare("SELECT * FROM leerlingen WHERE Naam = :Naam AND Wachtwoord = :Wachtwoord");
    $sth->execute($parameters);

    return $sth->fetch();
}
// DOCENTEN
function ReadDocenten($pdo, $i, $value)
{
    $parameters = array(':Docent'=>$i, ':Wachtwoord'=>$value);
    $sth = $pdo->prepare("SELECT * FROM docenten WHERE Docent = :Docent AND Wachtwoord = :Wachtwoord");
    $sth->execute($parameters);

    return $sth->fetch();
}

function UpdateLeerlingen($pdo, $i, $value)
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

function FetchAllLeerlingen($pdo)
{
        $sth = $pdo->prepare("SELECT * FROM leerlingen");
        $sth->execute();

        return $sth->fetchAll();
}
#region nutteloze functies
//Omdat PHP geen console log functie heeft :(
function ConsoleLog($message)
{
    echo '<script type="text/javascript">' .
    'console.log(\'' . $message  .  '\');</script>';
}
//Omdat PHP geen altert heeft :(
function alert($message)
{
    echo "<script type='text/javascript'>alert(' $message  ');</script>";
}
#endregion
?>