

<th scope="row"><?= $fila["id"]?></th>
    <td><?= $fila["fecha"]?></td>
    <td><?= $fila["total"]?></td>
    <td><a href="modificarCliente.php?id=<?= $fila["id_cliente"]?>&nombre=<?= $fila["nombre"]?>&apellido=<?= $fila["apellido"]?>">
        Nombre: <?= $fila["nombre"]?>
        Apellido: <?= $fila["apellido"]?>
        </a>
    </td>
    <td>
        Estado: <a href="modificarCompra.php?estado=<?=  $fila["estado"] ?>&id=<?=  $fila["id"] ?>"><?php 
            if($fila["estado"]==0){
                echo "NO entregado";
            }else{
                echo "Entregado";
            }
        ?></a>
    </td>
    <td><a href="contenidoCompra.php?id=<?= $fila["id"] ?>&fecha=<?= $fila["fecha"] ?>&total=<?= $fila["total"]?>">Ver detalle</a></td>
    </tr>