<?php session_start();
    if(!(isset($_SESSION["irquierda"]))) $_SESSION["irquierda"] = 200;
    if(!(isset($_SESSION["derecha"]))) $_SESSION["derecha"] = 200;
    if(!(isset($_SESSION["abajo"]))) $_SESSION["abajo"] = 200;
    if(!(isset($_SESSION["arriba"]))) $_SESSION["arriba"] = 200;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin:0px;
        background-color: yellow;
    }

    .contedor_padre{
        display: flex;
        justify-content: center;
        align-items: center;
    }

     .caja{
        width: 400px;
        height: 400px;
        background-color: white;
        position: static;
     }
    
    .bola{
        height:20px;
        width: 20px;
        border-radius: 20px;
        background-color: black;        
        position: relative;
        left: <?=$_SESSION["irquierda"];?>px;
        right: <?=$_SESSION["derecha"];?>px;
        bottom: <?= $_SESSION["abajo"];?>px;
        top: <?=$_SESSION["arriba"];?>px;
     }


     h1{
        text-align: center;
     }

     .btn{
        background-color:grey;
        margin:5px;
        color: white;
        border: 2px solid grey;
     }

</style>
<body>
    
    <h1>Tú decides a donde se mueve:</h1>
    <div class="contedor_padre">
        <div class="caja">

         <div class="bola">
            
         </div>
        </div>
        
    </div>
    <form class="contedor_padre" action="bola.php" method="post">
            <input class="btn" type="submit" value="<-" name="maniobra">    
            <input class="btn" type="submit" value="->" name="maniobra">
            <input class="btn" type="submit" value="Arriba" name="maniobra">
            <input class="btn" type="submit" value="Abajo" name="maniobra">
    </form>    
</body>
</html>