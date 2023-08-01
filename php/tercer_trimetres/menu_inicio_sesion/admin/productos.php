<?php
    include("../includes/validarLogin.php");
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
        $sql = "select * from producto inner join categoria on id_categoria_fk = id_categoria;";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            while($fila = $result->fetch_assoc()){
                if($fila["is_active"] == 1){
                    include("../includes/tabla_producto.php");
                }
            }
        }else{
            
        }

        if(isset($_SESSION["error_modificacion"])){
            if(strlen($_SESSION["error_modificacion"]) > 1){
                echo $_SESSION["error_modificacion"];
                unset($_SESSION["error_modificacion"]);
            }
            
        }

        if(isset($_SESSION["error_eliminar"])){
            if(strlen($_SESSION["error_eliminar"]) > 1){
                echo $_SESSION["error_eliminar"];
                unset($_SESSION["error_eliminar"]);
            }            
        }
        ?>

    <form action="modificarProducto.php?id=-1&nombreGenero= &nombre= &idCat=-1" method="post">
        <input type="submit" value="NUEVO PRODUCTO">
    </form>

    <?php

    if($_SESSION["is_admin"]){
        echo '<a href="usuarios.php">Usuarios</a>';
    }    
?>
    <a href="generos.php">Ver Categorias</a>
    <a href="clientes.php">Ver Clientes</a>
    <a href="compras.php">Ver Compras</a>
    <a href="validar.php?cerrar=0">CERRAR SESSIÓN</a>
    <script src="../js/mensaje.js"></script>
</body>
</html>