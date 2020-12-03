<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="CSS/IndexStyle.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/opgavenStyle.css">
</head>

<body>
    <div class="top_header">
        <div class="left">
            <div class="left_content">
                <a href="index.html"><img style="width: 50px; height: 50px;" src="IMG/HOME.png"></a>
            </div>
        </div>
        <div class="mid">
            <div class="mid_content">
                <p class="mid-text" style="margin-top: 18px;">
                    <?php
                    $array = $_SESSION["leerling"]; 
                    echo $array[0];
                    ?>
                </p>
            </div>
        </div>
        <div class="right">
                <div class="right_content">
                    <img style="width: 60px; height: 60px;" src="IMG/LOGO.png">
            </div>
        </div>
    </div>
    <div class="pageWrapper">
        <div class="item plus">
            <div class="title">
                <h1>PLUS</h1>
                <h1>+</h1>
            </div>
            <hr>
            <p>tot en met:</p>
            <form action="plus.php">
                <p>
                    <input type="radio" id="10" class="select" name="plus" value="10"><label for="10">10, </label>
                    <input type="radio" id="100" class="select"name="plus" value="100"><label for="100">100, </label>
                    <input type="radio" id="1000" class="select"name="plus" value="1000"><label for="1000">1000</label>
                </p>
                <p class="submit"><input type="submit" name="submit"></p>
            </form>
        </div>
        <div class="item min">
            <div class="title">
                <h1>MIN</h1>
                <h1>-</h1>
            </div>
            <hr>
            <p>tot en met:<br>10, 100, 1000</p>
        </div>
        <div class="item keer">
            <div class="title">
                <h1>KEER</h1>
                <h1>x</h1>
            </div>
            <hr>
            <form action="vragen.php">
            <p>de tafel van:<br>1, 2, 3, 4, 5, 6, 7, 8, 9, 10</p>
        </form>
        </div>
        <div class="item delen">
            <div class="title">
                <h1>DELEN   </h1>
                <h1>:</h1>
            </div>
            <hr>
            <p>tot en met:<br>10, 100, 1000</p>
        </div>
    </div>
</body>

</html>