

<div class="usuario">
    <h4>Nombre: <?= $fila["nombre_generos"]?></h4>
    <h4>Estado: <?php if($fila["is_active"]==0){
        echo "NO activo";
    }else{
        echo "Activo";
    }
    ?></h4>
    <p class="x">
        <a href="modificarGeneros.php?id=<?= $fila["id_categoria"]?>&nombre=<?= $fila["nombre_generos"]?>">
        M
        </a>
    </p>
    <p class="x genero">
        <a  class="eliminar" href="#" onclick="validarRemove(id=<?= $fila['id_categoria']?>,0,<?= $fila['is_active']?>)">
        X
        </a>
    </p>
</div>