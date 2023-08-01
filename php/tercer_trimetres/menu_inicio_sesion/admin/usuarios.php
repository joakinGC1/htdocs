<?php
    include("../includes/validarLogin.php");
    include("../includes/validarAdmin.php");
    if(isset($_SESSION['id'])){
        if(strlen($_SESSION['id'])>=1){
            unset($_SESSION['id']);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="../css/stylos_generos.css">
</head>
<body>
    <?php
        require("db_conect.php");
        $sql = "select * from empleado;";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            while($fila = $result->fetch_assoc()){
                include("../includes/tabla_usuarios.php");
            }
        }else{
            
        }

        if(isset($_SESSION["error"])){
            if(strlen($_SESSION["error"]) > 1){
                echo $_SESSION["error"];
                unset($_SESSION["error"]);
            }
            
        }

        

        
        if(isset($_SESSION["error_alta"])){
            if(strlen($_SESSION["error_alta"]) > 1){
                echo $_SESSION["error_alta"];
                unset($_SESSION["error_alta"]);
            }
            
        }

        if(isset($_SESSION["error_eliminar"])){
            if(strlen($_SESSION["error_eliminar"]) > 1){
                echo $_SESSION["error_eliminar"];
                unset($_SESSION["error_eliminar"]);
            }            
        }
    ?>

    <form action="modificarUsuario.php?id=-1&nombre= &apellido= &rol=' '" method="post">
        <input type="submit" value="NUEVO USUARIO">
    </form>
    <a href="validar.php?cerrar=0">CERRAR SESSIÓN</a>
    <a href="generos.php">Ver Categorias</a>
    <a href="clientes.php">Ver Clientes</a>
    <a href="generos.php">Ver Generos</a>
    <a href="compras.php">Ver compras</a>
    <script src="../js/mensaje.js"></script>
</body>
</html>