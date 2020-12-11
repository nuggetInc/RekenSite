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
    </div>
    <div class="pageWrapper">
        <div class="item plus">
            <div class="title">
                <h1>PLUS</h1>
                <h1>+</h1>
            </div>
            <hr>
            <p>tot en met:</p>
            <form action="opgaven/plus.php">
                <p>
                    <input type="radio" id="10plus" class="select" name="max" value="10"><label for="10plus">10, </label>
                    <input type="radio" id="100plus" class="select"name="max" value="100"><label for="100plus">100, </label>
                    <input type="radio" id="1000plus" class="select"name="max" value="1000"><label for="1000plus">1000</label>
                </p>
                <input class="submit" type="submit">
            </form>
        </div>
        <div class="item min">
            <div class="title">
                <h1>MIN</h1>
                <h1>-</h1>
            </div>
            <hr>
            <p>tot en met:</p>
            <form action="opgaven/min.php">
                <p>
                    <input type="radio" id="10min" class="select" name="max" value="10"><label for="10min">10, </label>
                    <input type="radio" id="100min" class="select"name="max" value="100"><label for="100min">100, </label>
                    <input type="radio" id="1000min" class="select"name="max" value="1000"><label for="1000min">1000</label>
                </p>
                <input class="submit" type="submit">
            </form>
        </div>
        <div class="item keer">
            <div class="title">
                <h1>KEER</h1>
                <h1>x</h1>
            </div>
            <hr>
            <p>de tafel van:</p>
            <form action="plus.php">
                <p>
                    <input type="radio" id="1keer" class="select" name="max" value="1"><label for="1keer">1, </label>
                    <input type="radio" id="2keer" class="select"name="max" value="2"><label for="2keer">2, </label>
                    <input type="radio" id="3keer" class="select"name="max" value="3"><label for="3keer">3</label>
                </p>
                <input class="submit" type="submit">
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