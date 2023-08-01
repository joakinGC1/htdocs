<?php
    include("../includes/validarLogin.php");
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
    <form action="../includes/modificar_cliente.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $_GET["nombre"] ?>">
        <label>Apellido:</label>
        <input type="text" name="apellido" value="<?= $_GET["apellido"] ?>">
        <input type="submit" value="Enviar">
        <p class="volver"><a href="clientes.php">Volver</a></p>
    </form>
</body>
</html>