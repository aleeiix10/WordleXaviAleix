let intents = 0;
let paraulaProbada = [[],[],[],[],[],[]];


function escriureLletra(lletra){
    if (paraulaProbada[intents].length<5){
        document.getElementById((intents*5)+(paraulaProbada[intents].length)+1).innerHTML=lletra;
        paraulaProbada[intents].push(lletra);
        console.log(paraulaProbada[intents]);
    }

}
function esborrarLletra(){
    if (paraulaProbada[intents]!=0){
    document.getElementById(((intents*5)+paraulaProbada[intents].length)).innerHTML= "";
    paraulaProbada[intents].pop();
    console.log(paraulaProbada);
    }
     
}
function enviar(){
    if (paraulaProbada[intents].length<5){
        alert("La paraula ha de contenir 5 lletres");
    }
    else{
        alert("Has enviat la paraula");
        intents +=1;
    }
    
}