
<?php
// lEERLINGEN
function CreateLeerling($pdo, $i, $value)
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
// BEHEERDERS
function CreateBeheerder($pdo, $i, $value)
{
    $parameters = array(':Naam'=>$i,':Wachtwoord'=>$value);
    $sth = $pdo->prepare("INSERT INTO beheerders (Naam, Wachtwoord) VALUES (:Naam, :Wachtwoord)");
    $sth->execute($parameters);
}
function ReadBeheerders($pdo, $i, $value)
{
    $parameters = array(':Naam'=>$i, ':Wachtwoord'=>$value);
    $sth = $pdo->prepare("SELECT * FROM beheerders WHERE Naam = :Naam AND Wachtwoord = :Wachtwoord");
    $sth->execute($parameters);

    return $sth->fetch();
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
function DeleteDocent($pdo, $i, $value)
{
    $parameters = array(':Docent'=>$i, ':Wachtwoord'=>$value);
    $sth = $pdo->prepare("DELETE FROM docenten WHERE Docent = :Docent AND Wachtwoord = :Wachtwoord");
    $sth->execute($parameters);
}
// lEERLINGEN
function UpdateLeerlingen($pdo, $i, $value)
{
    $parameters = array(':nummer'=>$i,':naam'=>$value);
    $sth = $pdo->prepare("UPDATE testTabel SET naam=:naam WHERE nummer=:nummer");
    $sth->execute($parameters);
}

function DeleteLeerling($pdo, $i, $value)
{
    $parameters = array(':Naam'=>$i, ':Wachtwoord'=>$value);
    $sth = $pdo->prepare("DELETE FROM leerlingen WHERE Naam = :Naam AND Wachtwoord = :Wachtwoord");
    $sth->execute($parameters);
}
//NOG NIET KLAAR!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
function AddCijfers($pdo, $plus, $min, $keer, $delen) 
{
    $parameters = array(':plus'=>$plus,':min'=>$min, ':keer'=>$keer, ':delen'=>$delen);
    $sth = $pdo->prepare('INSERT INTO leerlingen (plus, min, keer, delen) VALUES (:plus, :min, :keer, :delen)');
    $sth->execute($parameters);
}
function FetchAllLeerlingen($pdo, $i)
{
    $parameters = array(':Docent'=>$i);
    $sth = $pdo->prepare("SELECT * FROM leerlingen WHERE Docent = :Docent");
    $sth->execute($parameters);
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