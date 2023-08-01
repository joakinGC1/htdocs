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
        $sql = "select id_compra id, fecha, nombre, apellido, id_cliente,estado from compra 
		inner join cliente on id_cliente_fk = id_cliente;";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            while($fila = $result->fetch_assoc()){
                include("../includes/tabla_compra.php");
            }
        }else{
            
        }

        if(isset($_SESSION["error"])){
            if(strlen($_SESSION["error"]) > 1){
                echo $_SESSION["error"];
                unset($_SESSION["error"]);
            }
            
        }

        if(isset($_SESSION["error_eliminar"])){
            if(strlen($_SESSION["error_eliminar"]) > 1){
                echo $_SESSION["error_eliminar"];
                unset($_SESSION["error_eliminar"]);
            }            
        }
        if($_SESSION["is_admin"]){
            echo '<a href="usuarios.php">Usuarios</a>';
        }    
    ?>
    <a href="clientes.php">Clientes</a>
    <a href="generos.php">Generos</a>
    <a href="productos.php">Productos</a>
    <a href="validar.php?cerrar=0">CERRAR SESSIÓN</a>
    <script src="../js/mensaje.js"></script>
</body>
</html>