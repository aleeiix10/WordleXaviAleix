<?php session_start() ?>
<!DOCTYPE html>
<html id="htmlGame" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pàgina Principal</title>
</head>
<body id="bodyGame">
    <?php
        $llista = file("catala5.txt");
        $aleatori = rand(0,count($llista)-1);
        $paraula= $llista[$aleatori];
        $paraula = trim($paraula);
        

        $_SESSION["nom"] = $_POST["nom"];

        echo "<script>
        var paraula = '$paraula';
        </script>";
    ?>
    
    <div id="general">
        <div>
            <header id="headerGame">
                <h1 class="titol">WORDLE</h1>
            </header>
            <div id="paraules-general">
                <div id="paraules">
                    <div class="quadrat" id="1"></div>
                    <div class="quadrat" id="2"></div>
                    <div class="quadrat" id="3"></div>
                    <div class="quadrat" id="4"></div>
                    <div class="quadrat" id="5"></div>
                    <div class="quadrat" id="6"></div>
                    <div class="quadrat" id="7"></div>
                    <div class="quadrat" id="8"></div>
                    <div class="quadrat" id="9"></div>
                    <div class="quadrat" id="10"></div>
                    <div class="quadrat" id="11"></div>
                    <div class="quadrat" id="12"></div>
                    <div class="quadrat" id="13"></div>
                    <div class="quadrat" id="14"></div>
                    <div class="quadrat" id="15"></div>
                    <div class="quadrat" id="16"></div>
                    <div class="quadrat" id="17"></div>
                    <div class="quadrat" id="18"></div>
                    <div class="quadrat" id="19"></div>
                    <div class="quadrat" id="20"></div>
                    <div class="quadrat" id="21"></div>
                    <div class="quadrat" id="22"></div>
                    <div class="quadrat" id="23"></div>
                    <div class="quadrat" id="24"></div>
                    <div class="quadrat" id="25"></div>
                    <div class="quadrat" id="26"></div>
                    <div class="quadrat" id="27"></div>
                    <div class="quadrat" id="28"></div>
                    <div class="quadrat" id="29"></div>
                    <div class="quadrat" id="30"></div>
                </div>
            </div>
            <div id="teclat">
                <div>
                    <button class="boto-teclat" onclick="escriureLletra('q')" >q</button>
                    <button class="boto-teclat" onclick="escriureLletra('w')" >w</button>
                    <button class="boto-teclat" onclick="escriureLletra('e')" >e</button>
                    <button class="boto-teclat" onclick="escriureLletra('r')" >r</button>
                    <button class="boto-teclat" onclick="escriureLletra('t')" >t</button>
                    <button class="boto-teclat" onclick="escriureLletra('y')" >y</button>
                    <button class="boto-teclat" onclick="escriureLletra('u')" >u</button>
                    <button class="boto-teclat" onclick="escriureLletra('i')" >i</button>
                    <button class="boto-teclat" onclick="escriureLletra('o')" >o</button>
                    <button class="boto-teclat" onclick="escriureLletra('p')" >p</button>
                </div>
                <div>
                    <button class="boto-teclat" onclick="escriureLletra('a')" >a</button>
                    <button class="boto-teclat" onclick="escriureLletra('s')" >s</button>
                    <button class="boto-teclat" onclick="escriureLletra('d')" >d</button>
                    <button class="boto-teclat" onclick="escriureLletra('f')" >f</button>
                    <button class="boto-teclat" onclick="escriureLletra('g')" >g</button>
                    <button class="boto-teclat" onclick="escriureLletra('h')" >h</button>
                    <button class="boto-teclat" onclick="escriureLletra('j')" >j</button>
                    <button class="boto-teclat" onclick="escriureLletra('k')" >k</button>
                    <button class="boto-teclat" onclick="escriureLletra('l')" >l</button>
                    <button class="boto-teclat" onclick="escriureLletra('ñ')" >ñ</button>
                </div>
                <div>
                    <button class="boto-teclat" onclick="enviar()">ENVIAR</button>
                    <button class="boto-teclat" onclick="escriureLletra('z')" >z</button>
                    <button class="boto-teclat" onclick="escriureLletra('x')" >x</button>
                    <button class="boto-teclat" onclick="escriureLletra('c')" >c</button>
                    <button class="boto-teclat" onclick="escriureLletra('v')" >v</button>
                    <button class="boto-teclat" onclick="escriureLletra('b')" >b</button>
                    <button class="boto-teclat" onclick="escriureLletra('n')" >n</button>
                    <button class="boto-teclat" onclick="escriureLletra('m')" >m</button>
                    <button class="boto-teclat" onclick= "esborrarLletra()">BORRAR</button>
                </div>
            </div>
        </div>
    </div>
    <?php
        echo "<p id='post2'>Bienvenido: ".$_SESSION["nom"]."</p>";
        
    ?>
    <script src="script.js"></script>
</body>
</html>
