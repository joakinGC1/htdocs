

<th scope="row"><?= $fila["id_cliente"]?></th>
    <td><?= $fila["nombre"]?></td>
    <td><?= $fila["apellido"]?></td>
    <td><a href="modificarCliente.php?id=<?= $fila["id_cliente"]?>&nombre=<?= $fila["nombre"]?>&apellido=<?= $fila["apellido"]?>">
            M
        </a></td>
    <td><a  class="eliminar" href="#" onclick="validarRemove(id=<?= $fila['id_cliente']?>,2)">
        X
        </a>
    </td>
    </tr>