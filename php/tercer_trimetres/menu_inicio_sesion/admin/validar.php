<?php
    session_start();
    require("db_conect.php");
    if(isset($_POST["nombre"])&&isset($_POST["contraseña"])){
        if(strlen($_POST["nombre"])>1&&strlen($_POST["contraseña"])>1){

            $nombre = $_POST["nombre"];
            $contra = $_POST["contraseña"];
            $query = "SELECT nombre,contrasena FROM empleado where nombre =?";
            $stmt = mysqli_prepare($con,$query);
            mysqli_stmt_bind_param($stmt,"s",$nombre);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            

            if(mysqli_num_rows($result) == 1){
                                                
                $query = "SELECT nombre,contrasena FROM empleado where nombre =? and contrasena =?";
                $stmt = mysqli_prepare($con,$query);
                mysqli_stmt_bind_param($stmt,"ss",$nombre,$contra);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result) == 1){

                    $_SESSION["validar"] = true;
                    $query2 = "SELECT nombre,contrasena FROM empleado where nombre = ? and is_admin = 1";
                    $stmt = mysqli_prepare($con,$query2);
                    mysqli_stmt_bind_param($stmt,"s",$nombre);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    if(mysqli_num_rows($result) == 1){
                        $_SESSION["is_admin"] = true;
                            
                    }else{
                        $_SESSION["is_admin"] = false;
                    }
                    
                    echo $_SESSION["is_admin"];
                    header("Location: generos.php");

                }else{
                    $_SESSION["error"] = "NOMBRE y CONTRASEÑA NO conciden";
                    header('Location: ../login.php');
                }

            }elseif(mysqli_num_rows($result) == 0){

                $_SESSION["error"] = "El USUARIO NO existe";
                header('Location: ../login.php');

            }
        }else{

            $_SESSION["error"] = "NOMBRE y CONTRASEÑA no puede estar vacios.";
            header('Location: ../login.php');
        }
    }else{
        if(isset($_GET["cerrar"])){
            if($_GET["cerrar"]==0){
                unset($_SESSION["validar"]);
                header("Location: ../login.php");
            }
        }else{
            $_SESSION["error"] = "NOMBRE y CONTRASEÑA no puede estar vacios.";
            header('Location: ../login.php');
        }
    }

?>
 
