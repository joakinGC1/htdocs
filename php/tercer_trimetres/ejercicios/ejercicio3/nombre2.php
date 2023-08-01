


<?php 
session_start();


if(isset($_POST["nombre"])){
    $_SESSION["nombre"] = $_POST["nombre"];
}

header('Location: index.html');
?>