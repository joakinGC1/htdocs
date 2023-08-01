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
    <form action="../includes/modificar_producto.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $_GET["nombre"]; ?>">
        categoria
        <?php
            require("db_conect.php");

            $sql = "select * from categoria";
            $result = $con->query($sql);
            
    
            if($result->num_rows > 0){
                ?>
                <select name="categoria">
                 

        <?php
        if($_GET["idCat"]==-1){
            
        }else{
            include_once("../includes/cuerpo_genero.php");
        }
        while($fila = $result->fetch_assoc()){

                    if($fila["nombre_generos"] == $_GET["nombreGenero"]){

                    }else{
                        include("../includes/cuerpo_Compra_genero.php");
                    }
                   
                         
                
                }?>
                </select>
                <?php
            }else{
                
            }

        ?>
        <input type="submit" value="Enviar">
        <p class="volver"><a href="productos.php">Volver</a></p>
    </form>
</body>
</html>