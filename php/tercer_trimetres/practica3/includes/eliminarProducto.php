<?php
    session_start();
    require("../admin/db_conect.php");

    if(isset($_GET['id'])){

        $query = 'DELETE FROM producto WHERE id_producto =' . $_GET["id"].';';
        $result =  mysqli_query($con,$query);
        echo $_GET['id'];
        if(!$result){
            $_SESSION['error_eliminar'] = "Eliminacion fallida";
            header('Location: ../admin/productos.php');
        }else{
            header('Location: ../admin/productos.php');
        }
    }else{
        $_SESSION["error_eliminar"] = "NO se pudo eliminar";
        header('Location: ../admin/productos.php');
    }
?>