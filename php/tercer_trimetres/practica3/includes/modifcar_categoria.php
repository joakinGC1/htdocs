<?php
    session_start();
    $_SESSION["query"] = "";
    require("../admin/db_conect.php");
        if(isset($_POST["nombre"])&&isset($_SESSION["id"])) {
            if(strlen($_POST["nombre"])>=1){
                 if($_SESSION['id'] != -1){
                     

                    $sql = "update categoria set nombre_generos =  ? where id_categoria =". $_SESSION['id'].";";
                    $stmt = mysqli_prepare($con,$sql);
                    mysqli_stmt_bind_param($stmt,"s",$nombre);
                     
                    $nombre = $_POST["nombre"];

                    $_SESSION["query"] = $sql;
                    
                    mysqli_stmt_execute($stmt);                                        
                        
                    if(mysqli_affected_rows($con)==1){
                        unset($_SESSION['id']);
                        $fecha = date("Y/m/d");
                        $query = "insert into notificaciones (nombre,is_active,fecha) values('Actualizacion Genero',1,'$fecha')";
                        $result = $con->query($query);

                        if(mysqli_affected_rows($con)==1){
                        echo "OK";
                            
                        }else{
                           echo  "KO"; 
                        }

                       header('Location: ../admin/generos.php');
                    }else{
                        $_SESSION['error_modificacion'] = "Modificación fallida";
                        header('Location: ../admin/generos.php');
                    }
                    mysqli_stmt_close($stmt);
                    
                }else{

                    $nombre =  $_POST["nombre"];
                    $sql = "insert into categoria(nombre_generos,is_active) values(?,true);";
                    $stmt = mysqli_prepare($con,$sql);
                    mysqli_stmt_bind_param($stmt,"s",$nombre);
                    mysqli_stmt_execute($stmt);
                    
                    //$result =  mysqli_query($con,$sql);

                    if(mysqli_affected_rows($con)==1){
                        unset($_SESSION['id']);
                        $fecha = date("Y/m/d");
                        $query = "insert into notificaciones (nombre,is_active,fecha) values('Insercion de Genero',1,'$fecha')";
                        $result = $con->query($query);

                        if(mysqli_affected_rows($con)==1){
                           
                            echo "funciona";
                        }else{
                            echo $query;
                        }
                        mysqli_stmt_close($stmt);
                        header('Location: ../admin/generos.php');
                    }else{
                        $_SESSION['error_alta'] = "Alta fallida";
                        header('Location: ../admin/generos.php');
                    }
                    mysqli_stmt_close($stmt);
                }
            }else{
                $_SESSION['error_alta'] = "Debe tener valor el nombre";
                unset($_SESSION['id']);
                header('Location: ../admin/generos.php');
            }
        }else{
            $_SESSION['error_modificacion'] = "Modificación fallida";
            header('Location: ../admin/generos.php');
        }
?>