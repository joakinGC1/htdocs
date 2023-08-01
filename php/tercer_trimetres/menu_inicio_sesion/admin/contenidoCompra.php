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
    <title>Contenido Compra</title>
</head>
<body>
    <?php 
        if(isset($_GET["id"])&& isset($_GET["fecha"])){
            include("db_conect.php");
            $id = $_GET["id"];
            $query =  "select  producto.nombre Producto, cantidad, cliente.nombre Cliente    
            from contenido_compra 
                inner join compra on id_compra = id_compra_fk
                inner join producto on id_producto = id_producto_fk
                inner join cliente on id_cliente = id_cliente_fk
                where compra.id_compra = $id";
            echo $_GET["fecha"];
            $result = $con->query($query);
            if($result->num_rows > 0){
             while($fila = $result->fetch_assoc()){
                        include("../includes/contenido_compra_tabla.php");
                }
            }
        }
    ?>

    <a href="compras.php">VOLVER</a>
</body>
</html>