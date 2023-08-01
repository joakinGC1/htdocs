<?php 
session_start();

    if(isset($_POST["maniobra"])){
        if($_POST["maniobra"] === "->"){
            $_SESSION["irquierda"]  += 20;
            $_SESSION["derecha"]  -= 20;
            if($_SESSION["irquierda"] >= 400 && $_SESSION["derecha"] <= 0){
                $_SESSION["derecha"] = 400;
                $_SESSION["irquierda"] = 0;
            }
        }
        if($_POST["maniobra"] === "<-"){
            $_SESSION["derecha"]  += 20;
            $_SESSION["irquierda"]  -= 20;

            if($_SESSION["derecha"] >= 400 && $_SESSION["irquierda"] <= 0){
                $_SESSION["derecha"] = 20;
                $_SESSION["irquierda"] = 380;
            }
        }
        if($_POST["maniobra"] === "Abajo"){
            $_SESSION["arriba"]  += 20;
            $_SESSION["abajo"]  -= 20;
            if($_SESSION["arriba"] >= 400 && $_SESSION["abajo"] <= 0){
                $_SESSION["abajo"] = 400;
                $_SESSION["arriba"] = 0;
            }
        }
        if($_POST["maniobra"] === "Arriba"){
            $_SESSION["abajo"]  += 20;
            $_SESSION["arriba"]  -= 20;  
            if($_SESSION["abajo"] >= 400 && $_SESSION["arriba"] <= 0){
                $_SESSION["abajo"] = 20;
                $_SESSION["arriba"] = 380;
            }          
        }
    }

?>


<?php header('Location: plano.php'); ?>


