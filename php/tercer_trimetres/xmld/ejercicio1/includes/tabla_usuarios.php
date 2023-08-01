

<tr>
    <th scope="row"><?= $fila["id_emple"]?></th>
    <td><?= $fila["nombre"]?></td>
    <td><?= $fila["apellido"]?></td>
    <td><?php
        if($fila["is_admin"]==0){
            echo "Empleado";
            $rol = "Empleado";
        }else{
            echo "Admin";
            $rol = "Admin";
        }
    ?>
    </td>
    <td><a href="modificarUsuario.php?id=<?= $fila["id_emple"]?>&nombre=<?= $fila["nombre"]?>&apellido=<?= $fila["apellido"]?>&rol=<?= $rol?>">
        M
        </a></td>
    <td><a  class="eliminar" href="#" onclick="validarRemove(id=<?= $fila['id_emple']?>,3)">
        X
        </a>
    </td>
    </tr>
          