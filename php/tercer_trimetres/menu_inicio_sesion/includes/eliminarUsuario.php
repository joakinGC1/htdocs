<?php
    session_start();
    require("../admin/db_conect.php");

    if(isset($_GET['id'])){

        $query = 'DELETE FROM empleado WHERE id_emple =' . $_GET["id"].';';
        $result =  mysqli_query($con,$query);
        
        if(!$result){
            $_SESSION['error_eliminar'] = "Eliminacion fallida";
            header('Location:../admin/usuarios.php');                                                
        }else{
            header('Location:../admin/usuarios.php');                                                
        }
    }else{
        $_SESSION["error_eliminar"] = "NO se pudo eliminar";
        header('Location:../admin/usuarios.php');                                                
    }
?>