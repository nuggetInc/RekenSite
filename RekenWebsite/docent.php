<?php 
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
                <a href="index.html"><img style="width: 50px; height: 50px;" src="IMG/HOME.png"></a>
            </div>
        </div>
        <div class="mid">
            <div class="mid_content">
                <p class="mid-text" style="margin-top: 18px;">
                    <?php
                    $array = $_SESSION["docent"]; 
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
    


    <table class="leerling-table">
        <tr>
            <th class="Naam">Naam</th>
            <th>+</th>
            <th>-</th>
            <th>x</th>
            <th>:</th>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="Naam">Dirk</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td>6</td>
        </tr>
    </table>            


    <?php
        $parameters = array();
        $sth = $pdo->prepare("SELECT * FROM leerlingen");
        $sth->execute();
        print_r($sth->fetchAll());

    ?>
</body>
</html>