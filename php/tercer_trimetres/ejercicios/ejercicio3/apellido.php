<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
    <h1>¿Cual es su apellido?</h1>
    <?php if(isset($_SESSION["apellido"])){
            echo"YA TIENE UN APELLIDO, SE ELIMIRA";
        } ?>
    <form action="apellido2.php" method="post">
        <input type="text" name="apellido">
        <input type="submit" name="enviar" value="ENVIAR">
    </form>
</body>
</html>