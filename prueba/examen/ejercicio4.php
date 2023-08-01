<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label>Nombre:</label>
        <input type="text" name="nombre" maxlength="10" class="nombre">
        <label>Teléfono</label>
        <input type="tel" name="tel" class="tel">
        <input type="button" value="ENVIAR" onclick="enviar()">
    </form>
    <div class="content">

    </div>
    <script>
let nombre = "";
let tel = "";
let num = 0;

function enviar(){
    let nombre = document.querySelector(".nombre").value;
    let tel = document.querySelector(".tel").value;
    let content = document.querySelector(".content");
    let nombreUsu = [];
    let telUsu = [];
    
    fetch("almacenarDatos.php?nombre="+nombre+"&tel="+tel)
    .then(response => {
        if(response.ok){
            return response.text();
        }
    })
    .then(data => {
        const json = JSON.parse(data);
        let i = 0;
        for(element in json){
            nombreUsu[i] = json.nombre;
            telUsu[i] = json.tel;
            content.innerHTML = `<div><p>Nombre: ${json.nombre}</p><br><p>Tel: ${json.tel}</p></div>`;
            console.log(nombreUsu[i]);
            console.log(telUsu[i]);
            i++;
        }
        
        
    

    }).catch(data =>{ 
        content.innerHTML = `<p>NO HAY DATOS</p>`;
    });
    num++;
}



</script>
</body>
</html>