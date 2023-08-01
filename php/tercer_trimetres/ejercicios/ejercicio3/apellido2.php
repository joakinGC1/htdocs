


<?php 
session_start();


if(isset($_POST["apellido"])){
    $_SESSION["apellido"] = $_POST["apellido"];
}

header('Location: index.html');
?>