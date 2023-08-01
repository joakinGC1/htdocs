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
    <h1>¿Cual es su nombre?</h1>
    <form action="nombre2.php" method="post">
        <?php if(isset($_SESSION["nombre"])){
            echo"YA TIENE UN NOMBRE, SE ELIMIRA";
        } ?>
        <input type="text" name="nombre">
        <input type="submit" name="enviar" value="ENVIAR">
    </form>
</body>
</html>