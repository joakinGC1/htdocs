<?php
    require("../admin/db_conect.php");
    session_start();
    if(isset($_GET['id'])&&isset($_GET["activ"])){
        if($_GET["activ"]==0){
            $acti = 1;
        }else{
            $acti = 0;
        }

        $query = "update categoria set is_active =  $acti where id_categoria =". $_GET['id'].";";
        $result =  mysqli_query($con,$query);
        
        if(!$result){
            $_SESSION['error_eliminar'] = "Eliminacion fallida";
            header('Location: ../admin/generos.php');
        }else{
            header('Location: ../admin/generos.php');
        }
    }else{
        $_SESSION["error_eliminar"] = "NO se pudo eliminar";
        header('Location: ../admin/generos.php');
    }

?>
