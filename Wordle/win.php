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
    <source src="aplausos.mp3" type="audio/ogg">
    </audio>
    <div id="left">
        <img src="http://www.wealthwords.com/img/ww-cdn-img/wordle-words.png">
    </div>
    <div id="tot">
        <div id="h1">
            <h1 style="text-align: center;">WORDLE</h1>
        </div>
        <?php 
            if(isset($_POST['intents'])){
                array_push($_SESSION[$_SESSION["nom"]."win"],$_POST['intents']); 
            } 
            $_SESSION[$_SESSION["nom"]."puntuacio"] = 0;
            for ($i=0; $i < count($_SESSION[$_SESSION["nom"]."win"]) ; $i++) {    
                if ($_SESSION[$_SESSION["nom"]."win"][$i] == 1){
                    $_SESSION[$_SESSION["nom"]."puntuacio"]+= 150;
                }
                else if($_SESSION[$_SESSION["nom"]."win"][$i] == 2){
                    $_SESSION[$_SESSION["nom"]."puntuacio"]+= 100;
                }
                else if($_SESSION[$_SESSION["nom"]."win"][$i] == 3){
                    $_SESSION[$_SESSION["nom"]."puntuacio"]+= 60;
                }
                else if($_SESSION[$_SESSION["nom"]."win"][$i] == 4){
                    $_SESSION[$_SESSION["nom"]."puntuacio"]+= 40;
                }
                else if($_SESSION[$_SESSION["nom"]."win"][$i] == 5){
                    $_SESSION[$_SESSION["nom"]."puntuacio"]+= 20;
                }
                else if($_SESSION[$_SESSION["nom"]."win"][$i] == 6){
                    $_SESSION[$_SESSION["nom"]."puntuacio"]+= 10;
                }
            }
            echo "<p id='post'>".$_SESSION["nom"]." Puntuació : ".$_SESSION[$_SESSION["nom"]."puntuacio"]."punts</p>";
        ?>
        <br>
        <div id="result">
            <img src="https://media.istockphoto.com/vectors/pixel-art-8bit-you-win-text-with-one-big-winner-golden-cup-on-black-vector-id1268272324?k=20&m=1268272324&s=170667a&w=0&h=YOMnV2dwGoeNdhKSO5kgD9JYnHNGcEd8euXi3g01PS8=">
            <span id="resultMatchWin">HAS GUANYAT!!</span>
        </div>
    </div>  
    <div id="right">
        <img src="http://www.wealthwords.com/img/ww-cdn-img/wordle-words.png">
    </div>
    
</body>
</html>