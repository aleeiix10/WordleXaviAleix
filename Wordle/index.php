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
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Pàgina Principal</title>
</head>
<body id="body1">
    <div id="left">
    <img src="http://www.wealthwords.com/img/ww-cdn-img/wordle-words.png">
    </div>
    <div id="tot">
        <div id="h1">
        <h1 style="text-align: center;">WORDLE</h1>
        </div>
        <div id="idioma">
        <button id="idiomes"><a href="index.php?lang=ca"> <?php echo $lang['ca'] ?> </a></button><button id="idiomes"><a href="index.php?lang=en"> <?php echo $lang['en'] ?> </a></button><button id="idiomes"><a href="index.php?lang=es"> <?php echo $lang['es'] ?> </a></button>        </div>
        <hr>
        <div id="instruccions">
            <br>
            <p id="paragraf"><?php echo $lang['paragraf']?></p>
            <br>
            <ul>
                <li><span class="verd"><?php echo $lang['color1']?></span><?php echo $lang['listaLinea1']?><span class="verd"><?php echo $lang['correcta']?></span>.</li>
                <li><span class="groc"><?php echo $lang['color2']?></span><?php echo $lang['listaLinea2']?><span class="groc"><?php echo $lang['incorrecta']?></span>.</li>
                <li><span class="gris"><?php echo $lang['color3']?></span><?php echo $lang['listaLinea3']?></li>
            </ul>
            <br>
            
        </div>
        <hr>
        <br>
        <h3 style="text-align: center;"><?php echo $lang['pregunta']?></h3>
        <br>
    
        <form action="game.php" method="POST">
        <label for="nom"><?php echo $lang['nom'] ?></label>
        <input type="text" id="nom" name="nom" value= "<?php if(isset($_SESSION["nom"])){
                echo $_SESSION["nom"];}?>" required>
            <button type="submit" id="jugar" style="text-align: center;">
                <p id="pbutton"><?php echo $lang['boto'] ?></p>
			</button>
            
        </form>

        <button onclick="showDialog()" id="destroybutton"><?php echo $lang['reset']?></button>
        <dialog id="dialog">
            <p><?php echo $lang['textReset']?></p>
            <button onclick="hideDialog()" id="noButton"><?php echo $lang['no']?></button>
            <button onclick="destroySession()" id="siButton"><?php echo $lang['si']?></button>
        <dialog>  
    </div>
    <div id="right">
        <img src="http://www.wealthwords.com/img/ww-cdn-img/wordle-words.png">
    </div>
</body>
</html>