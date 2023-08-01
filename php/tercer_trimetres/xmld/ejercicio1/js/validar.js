function validacion(){
    let d = document;
    let nombre = d.querySelector(".nombre");
    let contr = d.querySelector(".contrasena");

    debugger;
    
    if(nombre.value.length >= 1){
        limpiar(1);      
    } 

    if(contr.value.length >= 1) {
        limpiar(2);
    }

    if(nombre.value.length >= 1 && contr.value.length >= 1 ){
        return true;
    } 
    
    if(nombre.value.length < 1) d.querySelector(".mensaje").innerHTML = `<p style='color:red;'>Falta longitud de NOMBRE</p>`;               

    if(contr.value.length < 1) d.querySelector(".mensaje2").innerHTML = `<p style='color:red;'>CONTRASEÑA NO puede estar vacia</p>`;
    
    return false;
}




function limpiar (nombreDeMen){
    const  d = document;
    if(nombreDeMen===1){
        d.querySelector(".mensaje").innerHTML = `<p style='color:red;'></p>`;               
    }else if(nombreDeMen===2){
        d.querySelector(".mensaje2").innerHTML = `<p style='color:red;'></p>`;               
    }else if(nombreDeMen===3){
        d.querySelector(".mensaje2").innerHTML = `<p style='color:red;'></p>`;               
    }
}

