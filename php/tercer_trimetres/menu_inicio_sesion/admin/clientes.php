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
        $sql = "select * from cliente;";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            while($fila = $result->fetch_assoc()){
                include("../includes/tabla_cliente.php");
            }
        }else{
            
        }

        if(isset($_SESSION["error_modificacion"])){
            if(strlen($_SESSION["error_modificacion"]) > 1){
                echo $_SESSION["error_modificacion"];
                unset($_SESSION["error_modificacion"]);
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
    

    <form action="modificarCliente.php?id=-1&nombre= &apellido= " method="post">
        <input type="submit" value="NUEVO CLIENTE">
    </form>
    <?php
        if($_SESSION["is_admin"]){
            echo '<a href="usuarios.php">Usuarios</a>';
        }    
    ?>

    <a href="productos.php">Ver Productos</a>
    <a href="generos.php">Ver categorias</a>
    <a href="compras.php">Ver compras</a>
    <a href="validar.php?cerrar=0">CERRAR SESSIÓN</a>
    <script src="../js/mensaje.js"></script>
</body>
</html>