<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pàgina Principal</title>
</head>
<body id="body1">
    <audio controls autoplay hidden>
    <source src="lose.mp3" type="audio/ogg">
    </audio>
    <div id="left">
        <img src="http://www.wealthwords.com/img/ww-cdn-img/wordle-words.png">
    </div>
    <div id="tot">
        <div id="h1">
            <h1 style="text-align: center;">WORDLE</h1>
        </div>
        <?php
            $_SESSION[$_SESSION["nom"]."lose"] += $_POST["lose"];
            echo "<p id='post'>".$_SESSION["nom"]." Puntuació : ".$_SESSION[$_SESSION["nom"]."puntuacio"]."punts</p>";
        ?>
        <br>
        <div id="result">
            <img src="https://www.okiwoki.com/images/visuels/35-jeuxvideo-gameover.png">
            <span id="resultMatchLose">HAS PERDUT!!</span>
        </div>
    </div>  
    <div id="right">
        <img src="http://www.wealthwords.com/img/ww-cdn-img/wordle-words.png">
    </div>
</body>
</html>