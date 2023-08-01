<?php 
    session_start();


    if(isset( $_SESSION["nombre"])){
?>

    Hola <?= $_SESSION["nombre"];?> 
    <a href="ejemplo_destroy.php">Cerrar sesion</a>

<?php }else{
        echo "No has hecho login";
    }


?>