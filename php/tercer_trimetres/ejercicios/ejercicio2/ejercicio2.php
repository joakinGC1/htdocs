<?php
    session_start();

    if(!isset($_SESSION["valor"]))    $_SESSION["valor"] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="operaciones.php">
        <input type="submit" name="sumar" value="+">
        
        <label><?php 
        if(isset($_SESSION["valor"])&&$_SESSION["valor"] > 0){
                echo  $_SESSION["valor"]; 
            }else{
                echo "0";
            }
        ?></label>
         <input type="submit" name="restar" value="-">
         <br>
         <input type="submit" name="cero" value="0">
    </form>
</body>
</html>