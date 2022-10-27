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
    <div id="left">
    <img src="http://www.wealthwords.com/img/ww-cdn-img/wordle-words.png">
    </div>
    <div id="tot">
        <div id="h1">
        <h1 style="text-align: center;">WORDLE</h1>
        </div>
        <hr>
        <div id="instruccions">
            <br>
            <p>Qualsevol persona pot jugar a la paraula del dia.<br><br>
                L'objectiu és simple, endevinar la paraula oculta. La paraula té 5 lletres i tens 6 intents per a endevinar-la. <br>La paraula és la mateixa per a totes les persones en aquest dia.<br><br>
                Cada intent ha de ser una paraula vàlida. En cada ronda el joc pinta cada lletra d'un color indicant si <br> aquesta lletra es troba o no en la paraula i si es troba en la posició correcta.
            </p>
            <br>
            <ul>
                <li><span class="verd">VERD</span> significa que la lletra R està en la paraula i en la posició <span class="verd">CORRECTA</span>.</li>
                <li><span class="groc">GROC</span> significa que la lletra és present en la paraula però en la posició <span class="groc">INCORRECTA</span>.</li>
                <li><span class="gris">GRIS</span> significa que la lletra NO està en la paraula.</li>
            </ul>
            <br>
            <h2 style="text-align: center;">Exemple</h2>
            <hr>
            <br>
            <p>
                Imagina que la paraula oculta sigui RUBIA.<br><br>
                Començem amb una paraula vàlida com FAROL.<br><br>
            </p>
            
                <div class="paraula"><div class="dGris">F</div><div class="dGroc">A</div><div class="dGroc">R</div><div class="dGris">O</div><div class="dGris">L</div></div>
            <p>    
                <br><br>
                El groc indica que tant la lletra R com la A hi estan a la paraula pero en la posició incorrecta.<br><br>
                Puc ara intentar amb una paraula que tingui la R i l'A però en altres posicions com a ROSAS.<br><br>
            </p>
            
            <div class="paraula"><div class="dVerd">R</div><div class="dGris">O</div><div class="dGris">S</div><div class="dGroc">A</div><div class="dGris">S</div></div>
            <p>  
            <br><br>
                El color verd indica que la lletra R està en la posició correcta mentre que l'A continua estant en la incorrecta.<br><br>
                Al final totes les lletres haurien de ser verdes.<br><br>
            </p>
            
            <div class="paraula"><div class="dVerd">R</div><div class="dVerd">U</div><div class="dVerd">B</div><div class="dVerd">I</div><div class="dVerd">A</div></div>
            <br><br>
            <p>  
            </p>
            <h2 style="text-align: center;">Lletres Repetides</h2>
            <hr>
            <br>
            <p>
                La paraula oculta pot tenir lletres repetides. En aquest cas, les pistes són independents per a cada lletra <br> i tenen prioritat (verda és major a groc).<br><br>
                Per exemple si la paraula oculta és ROSAS. I utilitzo SACOS.<br><br>
            </p>
            
            <div class="paraula"><div class="dGroc">S</div><div class="dBlanc">A</div><div class="dBlanc">C</div><div class="dBlanc">O</div><div class="dVerd">S</div></div>
            <p>  
            <br><br>
                En aquest cas la primera S aquesta en la posició incorrecta i la segona en la correcta.<br><br>
                Si utilitzo RATOS.<br><br>
            </p>
            
            <div class="paraula"><div class="dBlanc">R</div><div class="dBlanc">A</div><div class="dBlanc">T</div><div class="dBlanc">O</div><div class="dVerd">S</div></div>
            <p>  
            <br><br>
                Només es marca l'última lletra com a correcta perquè té prioritat.
            </p>
            <br>
            <h3 style="text-align: center;">Altres modes de joc</h3>
            <hr>
            <br><br>
            <p>
                Les mecaniques del joc són les mateixes per a totes les maneres de joc amb algunes petites diferències.
            </p>
            <br>
            <h4 style="text-align: left;">Mode titlles</h4>
            <ul>
                <li>La paraula amagada té un accent</li>
                <li>La paraula pot contenir de 5 a 7 lletres</li>
                <li>Les vocals amb titlles son independents de les normals</li>
            </ul>
            <br>
            <h4 style="text-align: left;">Mode científic</h4>
            <ul>
                <li>La paraula pot contenir de 5 a 7 lletres</li>
                <li>La paraula amagada hi està relacionada amb la ciència.</li>
            </ul>
            <br>
            <h4 style="text-align: left;">Contrarellotge</h4>
            <ul>
                <li>Endevina la major quantitat de paraules en 5 minuts</li>
            </ul>
            <br>
            <h4 style="text-align: left;">Crear</h4>
            <ul>
                <li>Crea una paraula oculta i comparteix-la amb els teus amics</li>
                <li>Pot ser en manera titlles o normal</li>
                <li>La paraula pot tenir de 3 a 11 lletres</li>
            </ul>
            <h3 style="text-align: center;">Altres detalls</h3>
            <hr>
            <br>
            <h5 style="text-align: left;">Titlles y Ñ al teclat</h5>
            <br>
            <p>  
                Per a escriure les titlles i la ñ en el teclat de l'ordinador utilitza la tecla ALT/*OPTION.<br><br>
                Exemple: ALT/OPTION + e = é<br><br>
                Exemple: ALT/OPTION + n = ñ
            </p>
            <br>
            <h5 style="text-align: left;">Diccionari de paraules</h5>
            <br>
            <p>  
                La nostra llista de paraules no és perfecta encara que ajuntem diversos diccionaris.<br> Si trobes un error pots enviar un correu a aleix-xavi@lapalabradeldia.com.
            </p>
            <br>
            <h5 style="text-align: left;">Sobre el joc.</h5>
            <br>
            <p>
                Pots una mica més <a class="link" href="https://lapalabradeldia.com/acerca/index.html">sobre el joc aquí</a>
            </p>
        </div>
        <hr>
        <br>
        <h3 style="text-align: center;">¿Llest/a per jugar?</h3>
        <br>
        <form action="game.php" method="POST">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br><br>
            <button type="submit" id="jugar" style="text-align: center;">
				<p id="pbutton">JUGAR</p>
			</button>
        </form>
    </div>
    <div id="right">
        <img src="http://www.wealthwords.com/img/ww-cdn-img/wordle-words.png">
    </div>
</body>
</html>