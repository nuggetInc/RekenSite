<?php 
require("Connect/crud.php");
require("Connect/database.php");
session_start();
?>
<!DOCTYPE html>
<html=>
<head>
    <link rel="stylesheet" href="CSS/docentStyle.css">
    <link rel="stylesheet" href="CSS/IndexStyle.css">   
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/opgavenStyle.css">
    <title>Document</title>
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
                    $array = $_SESSION["docent"];
                    if (!isset($array[0]))
                    {
                        echo "Geen naam gevonden";
                    }
                    else 
                    {
                        echo $array[0];
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
    <table class="leerling-table">
        <tr>
            <th class="Naam">Naam</th>
            <th>+</th>
            <th>-</th>
            <th>x</th>
            <th>:</th>
        </tr>
    <?php
        $docent = $_SESSION["docent"];
        $leerlingArray = FetchAllLeerlingen($pdo, $docent[0]);
        
        $colorArrayPlus = array();
        $colorArrayPMin = array();
        $colorArrayKeer = array();
        $colorArrayDelen = array(); 
        if(!isset($docent[0]))
        {
        }
        else 
        {
            for($j = 0; $j < count($leerlingArray); $j++)
            {
                if ($leerlingArray[$j][3] > 5) {$colorArrayPlus[$j] = "rgb(74, 160, 85)";} else if ($leerlingArray[$j][3] <= 5) {$colorArrayPlus[$j] = "rgb(255, 66, 66)";}
                if ($leerlingArray[$j][4] > 5) {$colorArrayMin[$j] = "rgb(74, 160, 85)";} else if ($leerlingArray[$j][4] <= 5) {$colorArrayMin[$j] = "rgb(255, 66, 66)";}
                if ($leerlingArray[$j][5] > 5) {$colorArrayKeer[$j] = "rgb(74, 160, 85)";} else if ($leerlingArray[$j][5] <= 5) {$colorArrayKeer[$j] = "rgb(255, 66, 66)";}
                if ($leerlingArray[$j][6] > 5) {$colorArrayDelen[$j] = "rgb(74, 160, 85)";} else if ($leerlingArray[$j][6] <= 5) {$colorArrayDelen[$j] = "rgb(255, 66, 66)";}
            }
            for($i = 0; $i < count($leerlingArray); $i++)
            {
                echo "<tr>
                <form action=\"grafieken.php\" method=\"post\"><td>
                <input style=\"text-align: left; top:16px; border: 0; background: transparent;\" type=\"submit\" name=\"name\"value=\"" . $leerlingArray[$i][0] . "\"  >
                </td></form>
                    <td style= \"font-size: 1.5rem; background-color: " . $colorArrayPlus[$i] . "\">". $leerlingArray[$i][3] ."</td>
                    <td style= \"font-size: 1.5rem; background-color: " . $colorArrayMin[$i] . "\">". $leerlingArray[$i][4] ."</td>
                    <td style= \"font-size: 1.5rem; background-color: " . $colorArrayKeer[$i] . "\">". $leerlingArray[$i][5] ."</td>
                    <td style= \"font-size: 1.5rem; background-color: " . $colorArrayDelen[$i] . "\">". $leerlingArray[$i][6] ."</td>
                    </tr>";
            }
        } 
    ?>

    </table>
    <form action="ActionBlocks/leerlingVoegToe.php" method="post">
        <div class="login" style="left: 62.5%; position: absolute;">
            <p class="h1-login" style="font-size: 2rem;">VOEG LEERLING TOE</p>
            <div class="name-div">
                <label class="Lnaam">
                    <P>Naam</P>
                </label> <?php
                if(!isset($docent[0]))
                {
                }
                else 
                {
                    echo "<input class=\"name\" type=\"text\" placeholder=\"Naam\" name=\"voegToeNaam\" required>";
                }
                ?>
            </div>
            <div class="ww-div">
                <label class="Lwachtwoord">
                    <P>Wachtwoord</P>
                </label>
                <?php
                if(!isset($docent[0]))
                {
                }
                else 
                {
                    echo "<input class=\"password\" type=\"text\" placeholder=\"Wachtwoord\" name=\"voegToePass\" required>";
                }
                ?>
            </div>
            <input type="submit">
        </div>
    </form>

    <form action="ActionBlocks/leerlingVerwijder.php" method="post">
        <div class="fixed-layer">
            <div class="login" style="left: 87.5%; position: absolute;">
                <p class="h1-login" style="font-size: 1.9rem;">VERWIJDER LEERLING</p>
                <div class="name-div" style="margin-top: 3px;">
                    <label class="Lnaam">
                        <P>Naam</P>
                    </label>
                    <?php
                    if(!isset($docent[0]))
                    {
                    }
                    else 
                    {
                        echo "<input class=\"name\" type=\"text\" placeholder=\"Naam\" name=\"verwijderNaam\" required>";
                    }
                    ?>
                </div>
                <div class="ww-div">
                    <label class="Lwachtwoord">
                        <P>Wachtwoord</P>
                    </label>
                    <?php
                    if(!isset($docent[0]))
                    {
                    }
                    else 
                    {
                        echo "<input class=\"password\" type=\"text\" placeholder=\"Wachtwoord\" name=\"verwijderPass\" required>";
                    }
                    ?>
                </div>
                <input type="submit">
            </div>
        </div>    
    </form> 
</body>
</html>