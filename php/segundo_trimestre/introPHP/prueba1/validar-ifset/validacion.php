<?php


    if(isset($_POST["nombre"]) && isset($_POST["apellido"])&& isset($_POST["contraseña"])){
        if($_POST["nombre"] === "Joaquin"&& $_POST["apellido"] === "Contreras" && $_POST["contraseña"] === "452367"){
        echo "Bienvenido";
        }
    }else{
        echo "Datos vacios";
    }

?>