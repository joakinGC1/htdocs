<?php
    include("../includes/validarLogin.php");
    include("../includes/validarAdmin.php");
    $_SESSION["id"] = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Genero</title>
    <link rel="stylesheet" href="../css/stylos_generos.css">
</head>
<body>
    <form action="../includes/modificar_usuario.php" method="post">
        <label>Nombre:</label>
        <?php
        $nombre =  $_GET["nombre"];
        $apellido =  $_GET["apellido"];
        ?>
        <input type="text" name="nombre" value="<?= $nombre; ?>">
        <label>Apellido:</label>
        <input type="text" name="apellido" value="<?= $apellido; ?>">
        <label>Contraseña:</label>
        <input type="password" name="contr">
        <label>Rol:</label>
        <label> <? $_GET["rol"] ?></label>
        <select name="roles">
            <option value="admin">Admin</option>
            <option value="empleado">Empleado</option>
        </select>T

        <input type="submit" value="Enviar">
        <p class="volver"><a href="usuarios.php">Volver</a></p>
    </form>
</body>
</html>
