<?php 
    session_start();

    $_SESSION["nombre"] = null;
    $_SESSION["apellido"] = null;

    header('Location: index.html');

?>