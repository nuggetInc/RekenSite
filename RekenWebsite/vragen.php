<?php
    session_start();
    $opgaven = $_SESSION["opgaven"];
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
    <div class="vragen-wrapper">
        <?php
            echo "<h1>".$opgaven[$opgaven["position"]][0].$opgaven["operator"].$opgaven[$opgaven["position"]][1]."</h1>";
            
        ?>
        <form action="vragenReview.php">
            <input type="text" name="answer">
            <input type="submit">
        </form>
    </div>
</body>

</html>