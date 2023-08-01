let ganaHum=0,ganaMaq= 0

export function maquina(papel,piedra,tijera,div){
    const d = document;
    let aux= 0;
    

    d.addEventListener("click", (e) =>{
        if(e.target.matches(papel)){
            aux = comprobar();
            d.querySelector(".maquina").setAttribute("src",aux);
            compararResultado(aux,"papel",div);
        }

        if(e.target.matches(piedra)){
            aux = comprobar();
            d.querySelector(".maquina").setAttribute("src",aux);
            compararResultado(aux,"piedra",div);
        }

        if(e.target.matches(tijera)){
            aux = comprobar();
            d.querySelector(".maquina").setAttribute("src",aux);
            compararResultado(aux,"tijera",div);
        }
    })
}

function comprobar(){
    let num = Math.round(Math.random() * 3);
    console.log(num);
    if(num === 1){
        return "papel";
    }else if(num === 2){
        return "piedra";
    }else if(num === 3){
        return "tijera";
    }else if(num === 0){
        return "piedra";
    }
}

function compararResultado(maqEligio, humElegio,div){
    let d = document;
    if(humElegio === maqEligio){
        alert("Empate");
        d.querySelector(div).innerHTML = `<p> 
                                        Empate
                                        <br>
                                        Humano: ${ganaHum} VS Maquina: ${ganaMaq}
                                        </p>`;
    }else if(humElegio != maqEligio){
        if(humElegio === "tijera" && maqEligio === "papel"){
            alert("Gana HUMANO");
            ganaHum++;
            d.querySelector(div).innerHTML = `<p> 
            Gana Humano
                                        <br>
                                        Humano: ${ganaHum} VS Maquina: ${ganaMaq}
                                        </p>`;
        }else if(humElegio === "papel" && maqEligio === "tijera"){
            alert("Gana MAQUINA");
            ganaMaq++;
            d.querySelector(div).innerHTML = `<p> 
            Gana maquina
                                        <br>
                                        Humano: ${ganaHum} VS Maquina: ${ganaMaq}
                                        </p>`;
            
        }else if(humElegio === "piedra" && maqEligio === "papel"){
            alert("Gana MAQUINA");
            ganaMaq++;
            d.querySelector(div).innerHTML = `<p> 
                                        Gana maquina
                                        <br>
                                        Humano: ${ganaHum} VS Maquina: ${ganaMaq}
                                        </p>`;
           
        }else if(humElegio === "papel" && maqEligio === "piedra"){
            alert("Gana HUMANO");
            ganaHum++;
            d.querySelector(div).innerHTML = `<p> 
            Gana Humano
                                        <br>
                                        Humano: ${ganaHum} VS Maquina: ${ganaMaq}
                                        </p>`;
           
        }else if(humElegio === "tijera" && maqEligio === "piedra"){
            alert("Gana MAQUINA");
            ganaMaq++;
            d.querySelector(div).innerHTML = `<p> 
                                        Gana maquina
                                        <br>
                                        Humano: ${ganaHum} VS Maquina: ${ganaMaq}
                                        </p>`;
            
        }else if(humElegio === "piedra" && maqEligio === "tijera"){
            alert("Gana HUMANO");
            ganaHum++;
            d.querySelector(div).innerHTML = `<p> 
            Gana Humano
                                        <br>
                                        Humano: ${ganaHum} VS Maquina: ${ganaMaq}
                                        </p>`;
            
        }
    }
}