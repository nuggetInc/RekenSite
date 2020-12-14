<?php 
require('Connect/crud.php');
require('Connect/database.php');
$name = $_POST['name'];
session_start();
?>
<!DOCTYPE html>
<html>
<head>
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
                    <?php echo($name);?>
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
            <div style=\"top: " . $gemiddlededelen * 10 . "%; left: 19.6%;left: 82.2%;\" class=\"gemiddelde\"></div>"
            
        ?>
        

        <!-- Balken -->
        <?php 
            $leerling = ReadLeerlingenNoPass($pdo, $name);
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
</body>
</html>