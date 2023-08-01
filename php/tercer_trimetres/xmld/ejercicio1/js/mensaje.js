const d = document;

function validarRemove(id,tipo,isActive){
    let validar = confirm("¿ESTA SEGURO DE QUE DESEA  ACTIVAR / DESACTIVAR / ELIMINAR?");   
    
    if(validar){
      if(tipo === 0){
       document.location.href = '../includes/eliminarGeneros.php?id=' + id+'&activ='+isActive;
      }else if(tipo === 1){
        d.location.href = '../includes/eliminarProducto.php?id=' + id;
      }else if(tipo === 2){
        d.location.href = '../includes/eliminarCliente.php?id=' + id;
      }else if(tipo === 3){
        d.location.href = '../includes/eliminarUsuario.php?id=' + id;
      }
    }    
}