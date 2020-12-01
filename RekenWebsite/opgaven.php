<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="CSS/IndexStyle.css">
    <link rel="stylesheet" href="headerStyle.css">
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
                    $array = $_SESSION["leerlingen"]; 
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
                <h1>plus</h1>
                <h1>+</h1>
            </div>
            <hr>
            <p>tot en met:<br>10, 100, 1000</p>
        </div>
        <div class="item min">
            <div class="title">
                <h1>min</h1>
                <h1>-</h1>
            </div>
            <hr>
            <p>tot en met:<br>10, 100, 1000</p>
        </div>
        <div class="item keer">
            <div class="title">
                <h1>keer</h1>
                <h1>x</h1>
            </div>
            <hr>
            <p>tot en met:<br>10, 100, 1000</p>
        </div>
        <div class="item delen">
            <div class="title">
                <h1>delen</h1>
                <h1>:</h1>
            </div>
            <hr>
            <p>tot en met:<br>10, 100, 1000</p>
        </div>
    </div>
</body>

</html>