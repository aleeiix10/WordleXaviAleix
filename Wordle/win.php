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
    <source src="aplausos.mp3" type="audio/ogg">
    </audio>
    <div id="left">
        <img src="http://www.wealthwords.com/img/ww-cdn-img/wordle-words.png">
    </div>
    <?php 
        if(isset($_POST['intents']) && isset($_POST['verds']) && isset($_POST['grocs'])){ 
            array_push($_SESSION["win"], $_POST['intents']); 
            array_push($_SESSION["verds"], $_POST['verds']);
            array_push($_SESSION["grocs"], $_POST['grocs']);
            var_dump($_SESSION["grocs"]);
            var_dump($_SESSION["verds"]);
        }
        $_SESSION["puntuacio"] = 0;
        for ($i=0; $i < count($_SESSION["win"]) ; $i++) {    
            if ($_SESSION["win"][$i] == 1){
                $_SESSION["puntuacio"]+= 150 + (($_SESSION["verds"][$i]-5) * 10) + (($_SESSION["grocs"][$i]) * 5);
            }
            else if($_SESSION["win"][$i] == 2){
                $_SESSION["puntuacio"]+= 100 + (($_SESSION["verds"][$i]-5) * 10) + (($_SESSION["grocs"][$i]) * 5);
            }
            else if($_SESSION["win"][$i] == 3){
                $_SESSION["puntuacio"]+= 60 + (($_SESSION["verds"][$i]-5) * 10) + (($_SESSION["grocs"][$i]) * 5);
            }
            else if($_SESSION["win"][$i] == 4){
                $_SESSION["puntuacio"]+= 40 + (($_SESSION["verds"][$i]-5) * 10) + (($_SESSION["grocs"][$i]) * 5);
            }
            else if($_SESSION["win"][$i] == 5){
                $_SESSION["puntuacio"]+= 20 + (($_SESSION["verds"][$i]-5) * 10) + (($_SESSION["grocs"][$i]) * 5);
            }
            else if($_SESSION["win"][$i] == 6){
                $_SESSION["puntuacio"]+= 10 + (($_SESSION["verds"][$i]-5) * 10) + (($_SESSION["grocs"][$i]) * 5);
            }
            } 
    ?>
    <div id="tot">
        <div id="h1winlose">
            <h1 style="text-align: center;">WORDLE</h1>
            <?php echo "<p id='post'>".$_SESSION["nom"].$lang['puntuacio'].$_SESSION["puntuacio"].$lang["punts"];?>
        </div>
        
        <br>
        <div id="result">
            <div id="estadistiques">
        <?php
            $estadistiques = array(
                "1" => 0,
                "2" => 0,
                "3" => 0,
                "4" => 0,
                "5" => 0,
                "6" => 0);
            foreach ($estadistiques as $key => $value) {
                for ($i=0; $i <count($_SESSION["win"]) ; $i++) { 
                    if($key == $_SESSION["win"][$i]){
                        $estadistiques[$key] +=1;
                    }
                }
            }
            foreach ($estadistiques as $key => $value) {
                if ($key == 1){
                    echo $lang['estadistiques'].$key.$lang['intent'].' - '.$value.'<br>';
                }
                else{
                    echo $lang['estadistiques'].$key.$lang['intents'].' - '.$value.'<br>';
                }
            }
                echo $lang['estadistiques2'].$_SESSION["lose"];
        ?>
            </div>
            <img src="https://media.istockphoto.com/vectors/pixel-art-8bit-you-win-text-with-one-big-winner-golden-cup-on-black-vector-id1268272324?k=20&m=1268272324&s=170667a&w=0&h=YOMnV2dwGoeNdhKSO5kgD9JYnHNGcEd8euXi3g01PS8=">            <span id="resultMatchWin"><?php echo $lang['missatgeVictoria']?></span>
        </div>
    </div>  
    <div id="right">
        <img src="http://www.wealthwords.com/img/ww-cdn-img/wordle-words.png">
    </div>
    
</body>
</html>