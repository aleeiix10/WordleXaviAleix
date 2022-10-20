let intents = 0;
let paraulaProbada = [[],[],[],[],[],[]];

function escriureLletra(lletra){
    if (paraulaProbada[intents].length<5){
        document.getElementById((intents*5)+(paraulaProbada[intents].length)+1).innerHTML=lletra;
        paraulaProbada[intents].push(lletra);
    }
}

function esborrarLletra(){
    if(intents<6){
        if (paraulaProbada[intents]!=0){
        document.getElementById(((intents*5)+paraulaProbada[intents].length)).innerHTML= "";
        paraulaProbada[intents].pop();
        }
    }
}

function enviar(){
    if (paraulaProbada[intents].length<5){
    }
    else{
        intents +=1;
    } 
}