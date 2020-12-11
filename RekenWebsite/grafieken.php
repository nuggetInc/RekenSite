<?php 
$name = $_POST['name'];
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
        <div class="streepjes"></div>
        <div style="top: 10%;" class="streepjes"></div>
        <div style="top: 20%;" class="streepjes"></div>
        <div style="top: 30%;" class="streepjes"></div>
        <div style="top: 40%;" class="streepjes"></div>
        <div style="top: 50%;" class="streepjes"></div>
        <div style="top: 60%;" class="streepjes"></div>
        <div style="top: 70%;" class="streepjes"></div>
        <div style="top: 80%;" class="streepjes"></div>
        <div style="top: 90%;" class="streepjes"></div>
        <div style="background-color: green;" class="staaf"></div>
        <div style="background-color: yellow;" class="staaf"></div>
        <div style="background-color: blue;" class="staaf"></div>
        <div style="background-color: red;" class="staaf"></div>
    </div>
    <div class="xAs"></div>
    <div class="streepjesX"></div>
    <div style="left: 15%;" class="streepjesX"></div>
    <div style="left: 19.9%;" class="streepjesX"></div>
    <div style="left: 24.9%;" class="streepjesX"></div>
    <div style="left: 29.8%;" class="streepjesX"></div>
    <div style="left: 34.8%;" class="streepjesX"></div>
    <div style="left: 39.7%;" class="streepjesX"></div>
    <div style="left: 44.7%;" class="streepjesX"></div>
    <p class="somen">PLUS</p>
    <p class="somen">MIN</p>
    <p class="somen">KEER</p>
    <p class="somen">DELEN</p>
</body>
</html>