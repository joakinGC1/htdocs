



<tr>
    <th scope="row"><?= $fila["id_categoria"]?></th>
    <td><?= $fila["nombre_generos"]?></td>
    <td><?php if($fila["is_active"]==0){
        echo "NO activo";
    }else{
             echo "Activo";
    }?>
    </td>
    <td><a href="modificarGeneros.php?id=<?= $fila["id_categoria"]?>&nombre=<?= $fila["nombre_generos"]?>">
        M
     </a></td>
    <td><a  class="eliminar" href="#" onclick="validarRemove(id=<?= $fila['id_categoria']?>,0,<?= $fila['is_active']?>)">
        X
    </a>
    </td>
    </tr>
                    
                       

         


