<div class="usuario">
    <h4>Nombre: <?= $fila["nombre"]?></h4>
    <h4>Categoria: <?= $fila["nombre_generos"]?></h4>
    <p class="x">
        <a href="modificarProducto.php?id=<?= $fila["id_producto"]?>&nombreGenero=<?= $fila["nombre_generos"]?>&nombre=<?= $fila["nombre"]?>&idCat=<?= $fila["id_categoria"]; ?>">
        M
        </a>
    </p>
    <p class="x">
        <a  class="eliminar" href="#" onclick="validarRemove(id=<?= $fila['id_producto']?>,1)">
        X
        </a>
    </p>
</div>