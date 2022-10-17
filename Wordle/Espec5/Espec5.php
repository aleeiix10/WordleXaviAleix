<?php  session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Espec5.css">
    <title>Pàgina Principal</title>
</head>
<header>

</header>
<body>
    <div id="table1">
        <table>
            <tr>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
            </tr>
            <tr>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
            </tr>
            <tr>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
            </tr>
            <tr>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
            </tr>
            <tr>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
            </tr>
            <tr>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
                <td><input type="text" maxlength="1"></td>
            </tr>
        </table>
    </div>
    <div id="keyboard-cont">
        <div class="first-row">
            <button class="keyboard-button">q</button>
            <button class="keyboard-button">w</button>
            <button class="keyboard-button">e</button>
            <button class="keyboard-button">r</button>
            <button class="keyboard-button">t</button>
            <button class="keyboard-button">y</button>
            <button class="keyboard-button">u</button>
            <button class="keyboard-button">i</button>
            <button class="keyboard-button">o</button>
            <button class="keyboard-button">p</button>
        </div>
        <div class="second-row">
            <button class="keyboard-button">a</button>
            <button class="keyboard-button">s</button>
            <button class="keyboard-button">d</button>
            <button class="keyboard-button">f</button>
            <button class="keyboard-button">g</button>
            <button class="keyboard-button">h</button>
            <button class="keyboard-button">j</button>
            <button class="keyboard-button">k</button>
            <button class="keyboard-button">l</button>
            <button class="keyboard-button">ñ</button>
        </div>
        <div class="third-row">
            <button class="keyboard-button">ENVIAR</button>
            <button class="keyboard-button">z</button>
            <button class="keyboard-button">x</button>
            <button class="keyboard-button">c</button>
            <button class="keyboard-button">v</button>
            <button class="keyboard-button">b</button>
            <button class="keyboard-button">n</button>
            <button class="keyboard-button">m</button>
            <button class="keyboard-button">BORRAR</button>
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