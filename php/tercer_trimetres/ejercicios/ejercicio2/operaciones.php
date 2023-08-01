<?php 
session_start();


    if(isset($_GET["sumar"])){
        if($_GET["sumar"]=== "+"){
            $_SESSION["valor"]++;
        }
    }

    if(isset($_GET["restar"])){
        if($_GET["restar"]=== "-"){
            $_SESSION["valor"]--;
        }
    }
    

    if(isset($_GET["cero"])){
        if($_GET["cero"]=== "0"){
            $_SESSION["valor"] = 0;
        }
    }
    header('Location: ejercicio2.php');
?>