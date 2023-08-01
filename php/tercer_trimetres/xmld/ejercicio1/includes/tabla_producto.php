
<th scope="row"><?= $fila["id_producto"]?></th>
    <td><?=$fila["nombre"]?></td>
    <td><?= $fila["nombre_generos"]?></td>
    <td><?= $fila["precio"]?></td>
    <td><a href="modificarProducto.php?id=<?= $fila["id_producto"]?>&nombreGenero=<?= $fila["nombre_generos"]?>&nombre=<?= $fila["nombre"]?>&idCat=<?= $fila["id_categoria"]; ?>&precio=<?= $fila["precio"]?>">
        M
        </a></td>
    <td><a  class="eliminar" href="#" onclick="validarRemove(id=<?= $fila['id_producto']?>,1)">
        X
        </a>
    </td>
    </tr>