<?php
    session_start();
    require("../admin/db_conect.php");
        if(isset($_POST["nombre"])&&isset($_SESSION["id"])&&isset($_POST["roles"])&&isset($_POST["apellido"])) {
            if(strlen($_POST["nombre"])>=1&&strlen($_POST["apellido"])>=1){

                if($_POST["roles"] == "admin"){
                    $rol = 1;
                }else{
                    $rol = 0;
                }
                 if($_SESSION['id'] != -1){
                    

                     $nombre =  mysqli_real_escape_string($con,$_POST["nombre"]);
                     $apellido =  mysqli_real_escape_string($con,$_POST["apellido"]);
                     $contr =  mysqli_real_escape_string($con,$_POST["contr"]);
                     
                    $sql = "update empleado set  nombre = '$nombre' ,apellido = '$apellido' , is_admin = ". $rol  .  ", contrasena = '$contr' where id_emple =". $_SESSION["id"]. ";";

                    $result =  mysqli_query($con,$sql);

                    if(!$result){
                        $_SESSION['error_modificacion'] = "Modificación fallida";
                        header('Location:../admin/usuarios.php');                                                
                    }else{
                        unset($_SESSION['id']);
                        $fecha = date("Y/m/d");
                        $query = "insert into notificaciones (nombre,is_active,fecha) values('Actualizacion Usuario',1,'$fecha')";
                        $result = $con->query($query);
                        header('Location:../admin/usuarios.php');
                 }
    
                 }else{
                    $nombre =  mysqli_real_escape_string($con,$_POST["nombre"]);
                     $apellido =  mysqli_real_escape_string($con,$_POST["apellido"]);
                     $sql = "insert into empleado(nombre,apellido,contrasena,is_admin) values ('$nombre','$apellido','$contr' , ". $rol .");";

                    $result =  mysqli_query($con,$sql);

                    if(!$result){
                        $_SESSION['error_alta'] = "Alta fallida";
                        header('Location:../admin/usuarios.php');
                    }else{
                        unset($_SESSION['id']);
                        $fecha = date("Y/m/d");
                        $query = "insert into notificaciones (nombre,is_active,fecha) values('Insercion Nuevo Usuario',1,'$fecha')";
                        $result = $con->query($query);
                        header('Location:../admin/usuarios.php');
                    }
                 
            }
        }else{
            $_SESSION['error_modificacion'] = "Los campos NO pueden estar vacios";
            unset($_SESSION["id"]);
            header('Location:../admin/usuarios.php');
        }
    }else{
            $_SESSION['error_modificacion'] = "Modificación fallida";
            header('Location:../admin/usuarios.php');
        }
?>