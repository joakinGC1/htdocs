<?php
    session_start();
    if($_SESSION["validar"] != true) header('Location: ../login.php');
?>