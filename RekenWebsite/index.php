<?php
session_start();
if (isset($_SESSION["docent"])) { $_SESSION["docent"] = "";}
if (isset($_SESSION["leerling"])) { $_SESSION["leerling"] = "";}

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/main.css">
    <title>Home</title>
</head>

<body>
    <header class="page-header">
        <a href="/RekenSite/RekenWebsite/"><img src="IMG/HOME.png"></a>
        <a href="/RekenSite/RekenWebsite/"><img src="IMG/back.png"></a>
        <a href="/RekenSite/RekenWebsite/"><h1>RekenWebsite</h1></a>
        <a href="/RekenSite/RekenWebsite/"><img src="IMG/LOGO.png"></a>
    </header>

    <form class="login" action="Connect/login.php" method="POST">
        <h1>LOG IN</h1>
        <label>Naam</label>
        <input class="name" type="text" placeholder="Naam" name="Naam" required>
        <label>Wachtwoord</label>
        <input class="password" type="password" placeholder="Wachtwoord" name="Pass" required>
        <input type="submit" value="verzenden">
    </form>
</body>

</html>