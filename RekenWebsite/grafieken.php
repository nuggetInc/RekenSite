<?php 
require('Connect/crud.php');
require('Connect/database.php');

session_start();
if (isset($_POST["name"])) {
    $_SESSION["leerlingG"] =  $_POST["name"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/switch.css">
    <link rel="stylesheet" href="CSS/grafiekenStyle.css">
    <link rel="stylesheet" href="CSS/docentStyle.css">
    <link rel="stylesheet" href="CSS/IndexStyle.css">   
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/opgavenStyle.css">
    <title>Grafieken</title>
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
                    <?php echo($_SESSION["leerlingG"]);?>
                </p>
            </div>
        </div>
        <div class="right">
            <div class="right_content">
                <img style="width: 60px; height: 60px;" src="IMG/LOGO.png">
            </div>
        </div>
    </div>

    <div class="grafiek">
        <div class="yAs"></div>
        <div class="streepjesY"></div>
        <div style="top: 10%;" class="streepjesY"></div>
        <div style="top: 20%;" class="streepjesY"></div>
        <div style="top: 30%;" class="streepjesY"></div>
        <div style="top: 40%;" class="streepjesY"></div>
        <div style="top: 50%;" class="streepjesY"></div>
        <div style="top: 60%;" class="streepjesY"></div>
        <div style="top: 70%;" class="streepjesY"></div>
        <div style="top: 80%;" class="streepjesY"></div>
        <div style="top: 90%;" class="streepjesY"></div>
        <p style="top: 90%;"  class="nummers">1</p>
        <p style="top: 80%;"  class="nummers">2</p>
        <p style="top: 70%;"  class="nummers">3</p>
        <p style="top: 60%;"  class="nummers">4</p>
        <p style="top: 50%;"  class="nummers">5</p>
        <p style="top: 40%;"  class="nummers">6</p>
        <p style="top: 30%;"  class="nummers">7</p>
        <p style="top: 20%;"  class="nummers">8</p>
        <p style="top: 10%;"  class="nummers">9</p>
        <p class="nummers">10</p>
        <?php 
            $docent = $_SESSION["docent"];
            $leerlingen = FetchAllLeerlingen($pdo, $docent[0]);
            $gemiddledeplus = 0;
            $gemiddledemin = 0;
            $gemiddledekeer = 0;
            $gemiddlededelen = 0;
            for ($i = 0; $i < count($leerlingen); $i++) {$gemiddledeplus += $leerlingen[$i][3];} $gemiddledeplus /= count($leerlingen); $gemiddledeplus = 10 - $gemiddledeplus;
            for ($i = 0; $i < count($leerlingen); $i++) {$gemiddledemin += $leerlingen[$i][4];} $gemiddledemin /= count($leerlingen); $gemiddledemin = 10 - $gemiddledemin;
            for ($i = 0; $i < count($leerlingen); $i++) {$gemiddledekeer += $leerlingen[$i][5];} $gemiddledekeer /= count($leerlingen); $gemiddledekeer = 10 - $gemiddledekeer;
            for ($i = 0; $i < count($leerlingen); $i++) {$gemiddlededelen += $leerlingen[$i][6];} $gemiddlededelen /= count($leerlingen); $gemiddlededelen = 10 - $gemiddlededelen;
            
            echo "<div style=\"top: " . $gemiddledeplus * 10 . "%; left: 19.6%;\" class=\"gemiddelde\"></div>
            <div style=\"top: " . $gemiddledemin * 10 . "%; left: 19.6%;left: 40.4%;\" class=\"gemiddelde\"></div>
            <div style=\"top: " . $gemiddledekeer * 10 . "%; left: 19.6%;left: 61.2%;\" class=\"gemiddelde\"></div>
            <div style=\"top: " . $gemiddlededelen * 10 . "%; left: 19.6%;left: 82%;\" class=\"gemiddelde\"></div>"
            
        ?>
        <!-- Balken -->
        <?php 
            $leerling = ReadLeerlingenNoPass($pdo, $_SESSION["leerlingG"]);
            echo "<div style=\"height: " . $leerling[3] * 10 . "%; background-color: green;\" class=\"staaf\"></div>
            <div style=\"height: " . $leerling[4] * 10 . "%; background-color: yellow;\" class=\"staaf\"></div>
            <div style=\"height: " . $leerling[5] * 10 . "%; background-color: blue;\" class=\"staaf\"></div>
            <div style=\"height: " . $leerling[6] * 10 . "%; background-color: red;\" class=\"staaf\"></div>"
        ?>
    </div>
    <div class="xAs"></div>
    <div class="streepjesX"></div>
    <div style="left: 15%;" class="streepjesX"></div>
    <div style="left: 20.2%;" class="streepjesX"></div>
    <div style="left: 25.4%;" class="streepjesX"></div>
    <div style="left: 30.6%;" class="streepjesX"></div>
    <div style="left: 35.8%;" class="streepjesX"></div>
    <div style="left: 41%;" class="streepjesX"></div>
    <div style="left: 46.3%;" class="streepjesX"></div>
    <p class="somen">PLUS</p>
    <p style="left: calc(12.5% + 10.4%);" class="somen">MIN</p>
    <p style="left: calc(11.1% + 22%);"  class="somen">KEER</p>
    <p style="left: calc(11.1% + 32.6%);"  class="somen">DELEN</p>

    <form action="" method="POST">
        <div style="position: absolute; margin-top: 10px; left: 75%; width: 40%; height: 75vh;" class="login">
            <p class="h1-login">VERANDEREN</p>
            <!--PLUS-->
            <?php 
            $leerlingArray = ReadLeerlingenNoPass($pdo, $_SESSION["leerlingG"]);
            ?>
            <?php
                $number = $leerlingArray[7]; 
                if (!isset($_POST["plus"]))
                {
                    if (isset($_POST["plusSlider"])) {$number = 10;}
                }
                else if (isset($_POST["plus"]))
                {
                    $number = $_POST["plus"];
                }
                if (!isset($_POST["plusSlider"]) && isset($_POST["plus"]))
                {
                    $leerlingArray[7] = 0;
                    PlusSwitchOn($pdo, $_SESSION["leerlingG"], 0);
                }
                else if (isset($_POST["plusSlider"]))
                {
                    $leerlingArray[7] = 10;
                    PlusSwitchOn($pdo, $_SESSION["leerlingG"], $number);
                }
                ?>
            <div>
                <div style="top: 100px" class="name-div">
                    <label>
                        <p class="plusL">Plus tot en met</p>
                    </label>
                    <label class="switch">
                        <input type="checkbox" name="plusSlider" <?php if ($leerlingArray[7] > 0) { echo "checked";}; ?>>
                        <span class="slider">
                    </label>
                    <?php 
                        if ($leerlingArray[7] > 0)
                        {
                            echo "<input style=\"margin-right: 10px;\"value=\"" . $number . "\" type=\"text\" name=\"plus\">";
                        }
                        
                    ?>
                </div>
            </div>
            <!--MIN--> 
            <?php
                $number = $leerlingArray[8]; 
                if (!isset($_POST["min"]))
                {
                    if (isset($_POST["minSlider"])) {$number = 10;}
                }
                else if (isset($_POST["min"]))
                {
                    $number = $_POST["min"];
                }
                if (!isset($_POST["minSlider"]) && isset($_POST["min"]))
                {
                    $leerlingArray[8] = 0;
                    MinSwitchOn($pdo, $_SESSION["leerlingG"], 0);
                }
                else if (isset($_POST["minSlider"]))
                {
                    $leerlingArray[8] = 10;
                    MinSwitchOn($pdo, $_SESSION["leerlingG"], $number);
                }
                ?>
            <div>
                <div style="top: 100px" class="name-div">
                    <label>
                        <p class="plusL">Min tot en met</p>
                    </label>
                    <label class="switch">
                        <input type="checkbox" name="minSlider" <?php if ($leerlingArray[8] > 0) { echo "checked";}; ?>>
                        <span class="slider">
                    </label>
                    <?php
                        if ($leerlingArray[8] > 0) 
                        {   
                            echo "<input style=\"margin-right: 10px;\"value=\"" . $number . "\" type=\"text\" name=\"min\">"; 
                        }
                    ?>
                </div>
            </div>
            <!--KEER-->
            <div>
                <div style="top: 100px" class="name-div">
                    <label>
                        <p class="plusL">Keer tot en met</p>
                    </label>
                    <label class="switch">
                        <input type="checkbox" name="keerSlider" <?php if (isset($_POST["keerSlider"])) { echo "checked";}; ?>>
                        <span class="slider">
                    </label>
                    <?php
                        if (isset($_POST["keerSlider"])) 
                        {   
                            echo "<input style=\"margin-right: 10px;\" type=\"text\" name=\"keer\">"; 
                        }
                    ?>
                </div>
            </div>
            <!--DELEN-->
            <div>
                <div style="top: 100px" class="name-div">
                    <label>
                        <p class="plusL">Delen tot en met</p>
                    </label>
                    <label class="switch">
                        <input type="checkbox" name="delenSlider" <?php if (isset($_POST["delenSlider"])) { echo "checked";}; ?>>
                        <span class="slider">
                    </label>
                    <?php
                        if (isset($_POST["delenSlider"])) 
                        {   
                            echo "<input style=\"margin-right: 10px;\" type=\"text\" name=\"delen\">"; 
                        }
                    ?>
                </div>
            </div>
            <input type="submit">
        </div>
    </form>
</body>
</html>