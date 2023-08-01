<div class="usuario">
    <h4>ID: <?= $fila["id"]?></h4>
    
    <h4>Fecha: <?= $fila["fecha"]?></h4>
    <h4>
        <a href="modificarCliente.php?id=<?= $fila["id_cliente"]?>&nombre=<?= $fila["nombre"]?>&apellido=<?= $fila["apellido"]?>">
        Nombre: <?= $fila["nombre"]?>
        Apellido: <?= $fila["apellido"]?>
        </a>
    </h4>
    <h4>Estado: <a><?php 
            if($fila["estado"]==0){
                echo "NO entregado";
            }else{
                echo "Entregado";
            }
        ?></a></h4>
    <h4><a href="contenidoCompra.php?id=<?= $fila["id"] ?>&fecha=<?= $fila["fecha"] ?>">Ver detalle</a></h4>
</div>