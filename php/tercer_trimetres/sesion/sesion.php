<?
    session_start();
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
    <?php
        $_SESSION["nombre"] = "victor";
    ?>

    hola <?= $_SESSION["nombre"] ?>

    

    <a href="ejemplo_sesion2.php">Ir a página 2</a>
</body>
</html>