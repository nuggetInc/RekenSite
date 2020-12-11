<?php
session_start();
if (isset($_SESSION["docent"])) { $_SESSION["docent"] = "";}
if (isset($_SESSION["leerling"])) { $_SESSION["leerling"] = "";}

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/IndexStyle.css">
    <title>Home</title>
</head>

<body>
    <div class="top_header">
        <div class="left">
            <div class="left_content">
                <img style="width: 50px; height: 50px;" src="IMG/HOME.png">
            </div>
        </div>
        <div class="mid">
            <div class="mid_content">
                <p class="mid-text" style="margin: 22px;">REKENWEBSITE</p>
            </div>
        </div>
        <div class="right">
            <div class="right_content">
                <img style="width: 60px; height: 60px;" src="IMG/LOGO.png">
            </div>
        </div>
    </div>

    <form action="Connect/login.php" method="POST">
        <div class="login">
            <p class="h1-login">LOG IN</p>
            <div class="name-div">
                <label class="Lnaam">
                    <P>Naam</P>
                </label>
                <input class="name" type="text" placeholder="Naam" name="Naam" required>
            </div>
            <div class="ww-div">
                <label class="Lwachtwoord">
                    <P>Wachtwoord</P>
                </label>
                <input class="password" type="password" placeholder="Wachtwoord" name="Pass" required>
            </div>
            <input type="submit">
        </div>
    </form>
</body>

</html>