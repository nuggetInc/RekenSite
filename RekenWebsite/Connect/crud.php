
<?php
// lEERLINGEN
function CreateLeerling($pdo, $i, $value, $docent)
{
    $parameters = array(':Naam'=>$i,':Wachtwoord'=>$value, ':Docent'=>$docent);
    $sth = $pdo->prepare("INSERT INTO leerlingen (Naam, Wachtwoord, Docent) VALUES (:Naam, :Wachtwoord, :Docent)");
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
function ReadLeerlingenNoPass($pdo, $i)
{
    $parameters = array(':Naam'=>$i);
    $sth = $pdo->prepare("SELECT * FROM leerlingen WHERE Naam = :Naam");
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
//Cijfers
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

function IncreaseAvarage($pdo, $leerling, $affected, $score)
{
    switch($affected)
    {
        case "+":
            $parameters = array(":Naam"=>$leerling);
            $sth = $pdo->prepare("SELECT plus FROM leerlingen WHERE Naam = :Naam");
            $sth->execute($parameters);
            $currentScore = $sth->fetch();
            
            $newScore = ($score + $currentScore[0] * 4) / 5;
            $parameters = array(":Naam"=>$leerling, ':plus'=>$newScore);
            $sth = $pdo->prepare("UPDATE leerlingen SET plus=:plus WHERE Naam=:Naam");
        break;
        case "-":
            $parameters = array(":Naam"=>$leerling);
            $sth = $pdo->prepare("SELECT min FROM leerlingen WHERE Naam = :Naam");
            $sth->execute($parameters);
            $currentScore = $sth->fetch();
            
            $newScore = ($score + $currentScore[0] * 4) / 5;
            $parameters = array(":Naam"=>$leerling, ':min'=>$newScore);
            $sth = $pdo->prepare("UPDATE leerlingen SET min=:min WHERE Naam=:Naam");
        break;
        case "x":
            $parameters = array(":Naam"=>$leerling);
            $sth = $pdo->prepare("SELECT keer FROM leerlingen WHERE Naam = :Naam");
            $sth->execute($parameters);
            $currentScore = $sth->fetch();
            
            $newScore = ($score + $currentScore[0] * 4) / 5;
            $parameters = array(":Naam"=>$leerling, ':keer'=>$newScore);
            $sth = $pdo->prepare("UPDATE leerlingen SET keer=:keer WHERE Naam=:Naam");
        break;
        case ":":
            $parameters = array(":Naam"=>$leerling);
            $sth = $pdo->prepare("SELECT delen FROM leerlingen WHERE Naam = :Naam");
            $sth->execute($parameters);
            $currentScore = $sth->fetch();
            
            $newScore = ($score + $currentScore[0] * 4) / 5;
            $parameters = array(":Naam"=>$leerling, ':delen'=>$newScore);
            $sth = $pdo->prepare("UPDATE leerlingen SET delen=:delen WHERE Naam=:Naam");
        break;
    }
    
    $sth->execute($parameters);
}
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

?>