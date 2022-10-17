<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Espec5.css">
    <script src="script.js"></script>
    <title>Pàgina Principal</title>

</head>

<body>
    <div id="container">
        <div id="game">
            <header>
                <h1 class="title">WORDLE</h1>
            </header>
            <div id="board-container">
                <div id="board">
                    <div class="square" id="1"></div>
                    <div class="square" id="2"></div>
                    <div class="square" id="3"></div>
                    <div class="square" id="4"></div>
                    <div class="square" id="5"></div>
                    <div class="square" id="6"></div>
                    <div class="square" id="7"></div>
                    <div class="square" id="8"></div>
                    <div class="square" id="9"></div>
                    <div class="square" id="10"></div>
                    <div class="square" id="11"></div>
                    <div class="square" id="12"></div>
                    <div class="square" id="13"></div>
                    <div class="square" id="14"></div>
                    <div class="square" id="15"></div>
                    <div class="square" id="16"></div>
                    <div class="square" id="17"></div>
                    <div class="square" id="18"></div>
                    <div class="square" id="19"></div>
                    <div class="square" id="20"></div>
                    <div class="square" id="21"></div>
                    <div class="square" id="22"></div>
                    <div class="square" id="23"></div>
                    <div class="square" id="24"></div>
                    <div class="square" id="25"></div>
                    <div class="square" id="26"></div>
                    <div class="square" id="27"></div>
                    <div class="square" id="28"></div>
                    <div class="square" id="29"></div>
                    <div class="square" id="30"></div>
                </div>
            </div>
            <div id="keyboard-cont">
                <div class="first-row">
                    <button data-key="q" class="keyboard-button" onclick="escriureLletra('q')">q</button>
                    <button data-key="w" class="keyboard-button" onclick="escriureLletra('w')" >w</button>
                    <button data-key="e" class="keyboard-button" onclick="escriureLletra('e')" >e</button>
                    <button data-key="r" class="keyboard-button" onclick="escriureLletra('r')" >r</button>
                    <button data-key="t" class="keyboard-button" onclick="escriureLletra('t')" >t</button>
                    <button data-key="y" class="keyboard-button" onclick="escriureLletra('y')" >y</button>
                    <button data-key="u" class="keyboard-button" onclick="escriureLletra('u')" >u</button>
                    <button data-key="i" class="keyboard-button" onclick="escriureLletra('i')" >i</button>
                    <button data-key="o" class="keyboard-button" onclick="escriureLletra('o')" >o</button>
                    <button data-key="p" class="keyboard-button" onclick="escriureLletra('p')" >p</button>
                </div>
                <div class="second-row">
                    <button data-key="a" class="keyboard-button" onclick="escriureLletra('a')" >a</button>
                    <button data-key="s" class="keyboard-button" onclick="escriureLletra('s')" >s</button>
                    <button data-key="d" class="keyboard-button" onclick="escriureLletra('d')" >d</button>
                    <button data-key="f" class="keyboard-button" onclick="escriureLletra('f')" >f</button>
                    <button data-key="g" class="keyboard-button" onclick="escriureLletra('g')" >g</button>
                    <button data-key="h" class="keyboard-button" onclick="escriureLletra('h')" >h</button>
                    <button data-key="j" class="keyboard-button" onclick="escriureLletra('j')" >j</button>
                    <button data-key="k" class="keyboard-button" onclick="escriureLletra('k')" >k</button>
                    <button data-key="l" class="keyboard-button" onclick="escriureLletra('l')" >l</button>
                    <button data-key="ñ" class="keyboard-button" onclick="escriureLletra('ñ')" >ñ</button>
                </div>
                <div class="third-row">
                    <button data-key="enviar" class="keyboard-button" onclick="enviar()">ENVIAR</button>
                    <button data-key="z" class="keyboard-button" onclick="escriureLletra('z')" >z</button>
                    <button data-key="x" class="keyboard-button" onclick="escriureLletra('x')" >x</button>
                    <button data-key="c" class="keyboard-button" onclick="escriureLletra('c')" >c</button>
                    <button data-key="v" class="keyboard-button" onclick="escriureLletra('v')" >v</button>
                    <button data-key="b" class="keyboard-button" onclick="escriureLletra('b')" >b</button>
                    <button data-key="n" class="keyboard-button" onclick="escriureLletra('n')" >n</button>
                    <button data-key="m" class="keyboard-button" onclick="escriureLletra('m')" >m</button>
                    <button data-key="borrar" class="keyboard-button" onclick= "esborrarLletra()">BORRAR</button>
                </div>
            </div>
        </div>
    </div>
    <?php
        $array = file("catala5.txt");
        $rand = rand(0,count($array)-1);
        $palabra = $array[$rand];
        echo $palabra;
?>
</body>
</html>