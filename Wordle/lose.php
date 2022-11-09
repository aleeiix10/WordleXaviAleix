<?php session_start();

if (!isset($_SESSION['lang']))
	$_SESSION['lang'] = "ca";
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang']))
{
	if ($_GET['lang'] == "es") {
		$_SESSION['lang'] = "es";
    }
	else if ($_GET['lang']  == "en") {
        $_SESSION['lang'] = "en";
    }
    else if ($_GET['lang']  == "ca"){
		$_SESSION['lang'] = "ca";
    }
}

require_once "idiomes/" . $_SESSION['lang'] . ".php";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pàgina Principal</title>
</head>
<header id="arriba">
    <div id = "este">
        <a href="index.php"><button id="jugar"><p id="pbutton"><?php echo $lang['botonHome']?></p></button></a>
        <a href="game.php"><button id="jugar"><p id="pbutton"><?php echo $lang['botonGame']?></p></button></a>
    </div>
</header>
<body id="body1">
    <audio controls autoplay hidden>
    <source src="lose.mp3" type="audio/ogg">
    </audio>
    <div id="left">
        <img src="http://www.wealthwords.com/img/ww-cdn-img/wordle-words.png">
    </div>
    <div id="tot">
        <div id="h1winlose">
            <h1 style="text-align: center;">WORDLE</h1>
            <?php echo "<p id='post'>".$_SESSION["nom"].$lang['puntuacio'].$_SESSION["puntuacio"].$lang['punts'];?>
        </div>
        <?php
            $_SESSION["lose"] += 1;    
        ?>
        <br>
        <div id="result">
            <img src="https://www.okiwoki.com/images/visuels/35-jeuxvideo-gameover.png">
            <?php
                
            ?>
            <span id="resultMatchLose"><?php echo $lang['missatgeDerrota']?></span>
        </div>
    </div>  
    <div id="right">
        <img src="http://www.wealthwords.com/img/ww-cdn-img/wordle-words.png">
    </div>
</body>
</html>