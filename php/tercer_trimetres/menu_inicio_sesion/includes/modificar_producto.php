<?php
    session_start();
    require("../admin/db_conect.php");
        if(isset($_POST["nombre"])&&isset($_SESSION["id"])&&isset($_POST["categoria"])) {
            if(strlen($_POST["nombre"])>1){
                 if($_SESSION['id'] != -1){

                     $nombre =  $_POST["nombre"];
                     $categ = $_POST["categoria"];
                    
                    $sql = "update producto set  nombre = ?, id_categoria_fk = ?    where id_producto = ". $_SESSION["id"]. ";";
                    $stmt = mysqli_prepare($con,$sql);
                    mysqli_stmt_bind_param($stmt,"ss",$nombre,$categ);
                    mysqli_stmt_execute($stmt);
                    
                    //$result =  mysqli_query($con,$sql);
                    
                    if(mysqli_affected_rows($con)==1){
                        unset($_SESSION['id']);
                        header('Location: ../admin/productos.php');
                    }else{
                        $_SESSION['error_modificacion'] = "Modificación fallida";
                        echo $sql;
                    }
                    mysqli_stmt_close($stmt);
                 }else{
                     $nombre =  $_POST["nombre"];
                     $categ = $_POST["categoria"];
                     $sql = "insert into producto(nombre,id_categoria_fk) values (?,?);";

                     $stmt = mysqli_prepare($con,$sql);
                     mysqli_stmt_bind_param($stmt,"ss",$nombre,$categ);
                     mysqli_stmt_execute($stmt);

                    //$result =  mysqli_query($con,$sql);

                    if(mysqli_affected_rows($con)==1){
                        $_SESSION['error_alta'] = "Alta fallida";
                        header('Location: ../admin/productos.php');
                    }else{
                        unset($_SESSION['id']);
                        header('Location: ../admin/productos.php');
                    }
                    mysqli_stmt_close($stmt);
                 
            }
        }else{
            $_SESSION['error_modificacion'] = "Los campos NO pueden estar vacios o GENERO NO selecionado";
            unset($_SESSION["id"]);
            header('Location: ../admin/productos.php');
        }
    }else{
            $_SESSION['error_modificacion'] = "Modificación fallida";
            header('Location: ../admin/productos.php');
        }
?>