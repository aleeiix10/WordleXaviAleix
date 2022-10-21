let intents = 0;
let paraulaProbada = [[],[],[],[],[],[]];
let paraula= "cases";
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
        if (paraulaProbada[intents]=== paraula){

        }
        else{
            if (intents == 6){

            }else{
                for (let i = 0; i < paraulaProbada[intents].length; i++) {
                    document.getElementById((intents*5)+i+1).style.backgroundColor = "grey";
        
                }
                for (let i = 0; i < paraulaProbada[intents].length; i++) {
                    for (let j = 0; j < paraula.length; j++) {
                        if (paraulaProbada[intents][i] === paraula[j]){
                            document.getElementById((intents*5)+i+1).style.backgroundColor = "#f1c40f";    
                        }    
                    }
                }
                for (let i = 0; i < paraulaProbada[intents].length; i++) {
                    if (paraulaProbada[intents][i] === paraula[i]){
                        document.getElementById((intents*5)+i+1).style.backgroundColor = "green";
                    }
                }
                
            }
        }
        
        intents +=1;
    } 
}