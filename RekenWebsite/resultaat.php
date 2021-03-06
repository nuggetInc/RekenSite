<?php
    require("Connect/crud.php");
    require("Connect/database.php");

    session_start();
    if (isset($_SESSION["opgaven"])) {
        $opgaven = $_SESSION["opgaven"];
    }
    else {
        header("Location: opgaven.php");
    }
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="CSS/IndexStyle.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/vragen.css">
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
                    if (isset($_SESSION["leerlingen"])) {
                        $array = $_SESSION["leerlingen"]; 
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
    <div class="vragen-wrapper">
        <?php
            $punt = max(1, $opgaven["punt"]);
            echo "<h1>".$punt."</h1>";
            IncreaseAvarage($pdo, $_SESSION["leerling"][0], $opgaven["operator"], $punt);
            $_SESSION["opgaven"] = null;
        ?>
    </div>
</body>

</html>