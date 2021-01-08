<?php 
session_start();
$beheerder = $_SESSION["beheerder"];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/docentStyle.css">
    <link rel="stylesheet" href="CSS/IndexStyle.css">   
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/opgavenStyle.css">
    <title>Beheerder</title>
</head>
<body>
    <div class="top_header">
        <div class="left">
            <div class="left_content">
                <a href="index.php"><img style="width: 50px; height: 50px;" src="IMG/HOME.png"></a>
            </div>
        </div>
        <div class="mid">
            <div class="mid_content">
                <p class="mid-text" style="margin-top: 18px;">
                    <?php echo($beheerder[0]);?>
                </p>
            </div>
        </div>
        <div class="right">
                <div class="right_content">
                    <img style="width: 60px; height: 60px;" src="IMG/LOGO.png">
            </div>
        </div>
    </div>

    <form action="ActionBlocks/leraarVerander.php" method="POST">
        <div class="login">
            <p style="font-size: 2.5rem;" class="h1-login">Verander Leraar</p>
            <div class="name-div">
                <label class="Lnaam">
                    <P>Oude Leraar</P>
                </label>
                <input class="name" type="text" placeholder="Oud" name="OudeLeraar" required>
            </div>
            <div class="ww-div">
                <label class="Lwachtwoord">
                    <P>Nieuwe Leraar</P>
                </label>
                <input class="password" type="text" placeholder="Nieuw" name="NieuweLeraar" required>
            </div>
            <input type="submit">
        </div>
    </form>
</body>
</html>