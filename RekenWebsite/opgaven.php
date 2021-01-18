<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/opgavenStyle.css">
</head>

<body>
    <!-- <div class="top_header">
        <div class="left">
            <div class="left_content">
                <a href="index.php"><img style="width: 50px; height: 50px;" src="IMG/HOME.png"></a>
            </div>
        </div>
        <div class="mid">
            <div class="mid_content">
                <p class="mid-text" style="margin-top: 18px;">
                    <?php
                    if (isset($_SESSION["leerling"])) {
                        $array = $_SESSION["leerling"]; 
                        echo $array[0];
                    }
                    else {
                        echo "geen naam gevonden";
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="right">
                <div class="right_content">
                    <img style="width: 60px; height: 60px;" src="IMG/LOGO.png">
            </div>
        </div>
    </div> -->
    <header class="page-header">
        <a href="/RekenSite/RekenWebsite/index.php"><img src="IMG/HOME.png"></a>
        <a href="/RekenSite/RekenWebsite/index.php"><img src="IMG/back.png"></a>
        <a href="/RekenSite/RekenWebsite/index.php"><h1>
            <?php
                if (isset($_SESSION["leerling"])) {
                    $array = $_SESSION["leerling"]; 
                    echo $array[0];
                }
                else {
                    echo "geen naam gevonden";
                }
            ?>
        </h1></a>
        <a href="/RekenSite/RekenWebsite/"><img src="IMG/LOGO.png"></a>
    </header>

    <div class="pageWrapper">
        <div class="item plus">
            <form action="opgaven/plus.php">
                <div class="title">
                    <h1>PLUS</h1>
                    <h1>+</h1>
                </div>
                <hr>
                <?php
                    $tot = $_SESSION["leerling"][7];
                    echo "<p>tot en met: $tot</p>";
                ?>
                <input class="submit" type="submit" value="verzenden">
            </form>
        </div>
        <div class="item min">
            <form action="opgaven/min.php">
                <div class="title">
                    <h1>MIN</h1>
                    <h1>-</h1>
                </div>
                <hr>
                <?php
                    $tot = $_SESSION["leerling"][8];
                    echo "<p>tot en met: $tot</p>";
                ?>
                <input class="submit" type="submit" value="verzenden">
            </form>
        </div>
        <div class="item keer">
            <form action="opgaven/keer.php">
                <div class="title">
                    <h1>KEER</h1>
                    <h1>x</h1>
                </div>
                <hr>
                <?php
                    $tot = $_SESSION["leerling"][9] * 10;
                    if ($tot != 0){
                        echo "<p>tafel 1 tot en met: $tot</p>";
                    } else {
                        echo "<p>je kunt hier geen tafels doen (niet op de knop hier onder klikken (het systeem zet die nog niet uit))</p>";
                    }
                ?>
                <input class="submit" type="submit" value="verzenden">
            </form>
        </div>
        <div class="item delen">
            <form action="opgaven/delen.php">
                <div class="title">
                    <h1>DELEN</h1>
                    <h1>:</h1>
                </div>
                <hr>
                <?php
                    $tot = $_SESSION["leerling"][10] * 10;
                    if ($tot != 0){
                        echo "<p>tafel 1 tot en met: $tot</p>";
                    } else {
                        echo "<p>je kunt hier geen tafels doen (niet op de knop hier onder klikken (het systeem zet die nog niet uit))</p>";
                    }
                ?>
                <input class="submit" type="submit" value="verzenden">
            </form>
        </div>
    </div>
</body>

</html>