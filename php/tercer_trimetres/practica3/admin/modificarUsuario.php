<?php
    include("../includes/validarLogin.php");
    include("../includes/validarAdmin.php");
    $_SESSION["id"] = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>MODIFCAR GENEROS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<div class="content">
     <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
    <form action="../includes/modificar_usuario.php" method="post">
        <?php
        $nombre =  $_GET["nombre"];
        $apellido =  $_GET["apellido"];
        ?>
        <div class="mb-2">
                                    <label for="Nombre" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" name="nombre" value="<?= $nombre; ?>"
                                        aria-describedby="nombreHelp">
                                    
                                </div>
                <div class="mb-2">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" name="apellido" value="<?= $apellido; ?>">
                </div>
                <div class="mb-2">
                    <label for="contra" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control"  name="contr">
                </div>
                <div class="mb-2">
                    <label for="rol" class="form-label">Rol:</label>
                    <label> <? $_GET["rol"] ?></label>
                </div>
                <div class="mb-2">
                    <select name="roles" class="form-select"  aria-label="Floating label select example">
                         <option value="admin">Admin</option>
                         <option value="empleado">Empleado</option>
                    </select>
                    </div>
        
        

        <input type="submit" value="Enviar">
        <p class="volver"><a href="usuarios.php">Volver</a></p>
    </form>
</body>
</html>
