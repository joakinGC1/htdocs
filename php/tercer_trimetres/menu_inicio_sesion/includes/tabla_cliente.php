<div class="usuario">
    <h4>Nombre: <?= $fila["nombre"]?></h4>
    <h4>Apellido: <?= $fila["apellido"]?></h4>
    <p class="x">
        <a href="modificarCliente.php?id=<?= $fila["id_cliente"]?>&nombre=<?= $fila["nombre"]?>&apellido=<?= $fila["apellido"]?>">
            M
        </a>
    </p>
    <p class="x genero">
        <a  class="eliminar" href="#" onclick="validarRemove(id=<?= $fila['id_cliente']?>,2)">
        X
        </a>
    </p>
</div>