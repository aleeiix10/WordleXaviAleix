<?php
    session_start();
    $idioma = $_SESSION['lang'];
    session_destroy();
    session_start();
    $_SESSION['lang'] = $idioma;
    header("Location: index.php");
?>

