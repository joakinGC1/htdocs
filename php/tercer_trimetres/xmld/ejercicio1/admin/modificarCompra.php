<?php
    session_start();
    require("db_conect.php");

    if(isset($_GET["estado"])&&isset($_GET["id"])){
        $estado;
        $id = $_GET["id"];

        if($_GET["estado"] != 0){
            $estado = "false";
        }else{
            $estado = "true";
        }
        
        
        $query = "update compra set estado = $estado where id_compra = $id;";

        $result = mysqli_query($con,$query);

        if(!$result){
            $_SESSION['error'] = "NO se pudo cambiar el estado";
            echo $query;
            header('Location: ../admin/compras.php');
        }else{
            unset($_SESSION['id']);
            header('Location: ../admin/compras.php');
        }
    }else{
        $_SESSION["error"] = "NO existe Estado";
        header('Location: compras.php');
    }

?>