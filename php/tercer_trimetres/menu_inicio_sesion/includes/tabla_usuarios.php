<div class="usuario">
    <h4>Nombre: <?= $fila["nombre"]?></h4>
    <h4>Apellido: <?= $fila["apellido"]?></h4>
    <h4>Rol: <?php
        if($fila["is_admin"]==0){
            echo "Empleado";
            $rol = "Empleado";
        }else{
            echo "Admin";
            $rol = "Admin";
        }
    ?>
    </h4>
    <p class="x">
        <a href="modificarUsuario.php?id=<?= $fila["id_emple"]?>&nombre=<?= $fila["nombre"]?>&apellido=<?= $fila["apellido"]?>&rol=<?= $rol?>">
        M
        </a>
    </p>
    <p class="x genero">
        <a  class="eliminar" href="#" onclick="validarRemove(id=<?= $fila['id_emple']?>,3)">
        X
        </a>
    </p>
</div>