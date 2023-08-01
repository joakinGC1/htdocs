<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php        
        if(isset($_SESSION["nombre"]) && isset($_SESSION["apellido"])){
            echo "Tu nombre es: ". $_SESSION["nombre"]."<br>";
            echo "Tu apellido es: ". $_SESSION["apellido"];
        }else{
            echo "Vacios";
        }
    ?>
</body>
</html>