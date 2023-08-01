<?php
    require("../admin/db_conect.php");
    session_start();
    if(isset($_GET['id'])){

        $query = 'DELETE FROM cliente WHERE id_cliente =' . $_GET["id"].';';
        $result =  mysqli_query($con,$query);
        
        if(!$result){
            $_SESSION['error_eliminar'] = "Eliminacion fallida";
            header('Location: ../admin/clientes.php');
        }else{
            header('Location: ../admin/clientes.php');
        }
    }else{
        $_SESSION["error_eliminar"] = "NO se pudo eliminar";
        header('Location: ../admin/clientes.php');
    }
?>