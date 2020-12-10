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
                <a href="index.html"><img style="width: 50px; height: 50px;" src="IMG/HOME.png"></a>
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
            echo "<h1>".$opgaven[$opgaven["position"]][0].$opgaven["operator"].$opgaven[$opgaven["position"]][1]."</h1>";
            if ($_GET["answer"] == $opgaven[$opgaven["position"]][2]) {
                $opgaven["punt"] += 1;
                echo "CORRECT!!!";
            }
            else {
                echo "INCORRECT!!!";
            }
            $opgaven["position"] += 1;
            $_SESSION["opgaven"] = $opgaven;
            if($opgaven["position"] > 10)
            {
                header("Location: vragen.php");
            }
        ?>
    </div>
    <script>
        setTimeout(() => {
            window.location.replace("vragen.php")
        }, 1000);
    </script>
</body>

</html>