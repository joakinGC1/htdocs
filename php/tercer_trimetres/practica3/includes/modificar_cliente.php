<?php
    session_start();
    require("../admin/db_conect.php");
        if(isset($_POST["nombre"])&&isset($_SESSION["id"])&&isset($_POST["apellido"])) {
            if(strlen($_POST["nombre"])>=1&&strlen($_POST["apellido"])>=1){
                 if($_SESSION['id'] != -1){

                    $nombre =  $_POST["nombre"];
                    $apellido =  $_POST["apellido"];
                    $sql = "update cliente set nombre =  ?, apellido = ? where id_cliente =". $_SESSION['id'].";";

                    $stmt = mysqli_prepare($con,$sql);
                    mysqli_stmt_bind_param($stmt,"ss",$nombre,$apellido);
                    mysqli_stmt_execute($stmt);

                    //$result =  mysqli_query($con,$sql);

                    if(mysqli_affected_rows($con)==1){
                        unset($_SESSION['id']);
                        $fecha = date("Y/m/d");
                        $query = "insert into notificaciones (nombre,is_active,fecha) values('Actualizacion Cliente',1,'$fecha')";
                        $result = $con->query($query);
                        header('Location: ../admin/clientes.php');
                    }else{
                        $_SESSION['error_modificacion'] = "Modificación fallida";
                        header('Location: ../admin/clientes.php');
                    }

                    mysqli_stmt_close($stmt);
    
                }else{
                    $nombre =  mysqli_real_escape_string($con,$_POST["nombre"]);
                    $apellido =  mysqli_real_escape_string($con,$_POST["apellido"]);

                    $sql = "insert into cliente(nombre,apellido) values(?,?);";

                    $stmt = mysqli_prepare($con,$sql);
                    mysqli_stmt_bind_param($stmt,"ss",$nombre,$apellido);
                    mysqli_stmt_execute($stmt);                    

                    //$result =  mysqli_query($con,$sql);

                    if(mysqli_affected_rows($con)==1){
                        unset($_SESSION['id']);
                        $fecha = date("Y/m/d");
                        $query = "insert into notificaciones (nombre,is_active,fecha) values('Inserción Nuevi Cliente',1,'$fecha')";
                        $result = $con->query($query);
                        header('Location: ../admin/clientes.php');
                    }else{
                        $_SESSION['error_alta'] = "Alta fallida";
                        header('Location: ../admin/clientes.php');
                    }

                    mysqli_stmt_close($stmt);
                }
            }else{
                $_SESSION['error_alta'] = "Debe estar rellenos el nombre y apellido";
                unset($_SESSION['id']);
                header('Location: ../admin/clientes.php');
            }
        }else{
            $_SESSION['error_modificacion'] = "Modificación fallida";
            header('Location: ../admin/clientes.php');            
        }
?>