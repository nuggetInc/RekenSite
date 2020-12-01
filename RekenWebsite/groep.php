<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <script src="JS/home.js"></script>
    <link rel="stylesheet" href="IndexStyle.css">
    <title>Groep</title>
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
                <p class="mid-text">
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
    
</body>
</html>