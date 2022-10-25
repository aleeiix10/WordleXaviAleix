let intents = 0;
let paraulaProbada = [[],[],[],[],[],[]];
let guanyar = false;
function escriureLletra(lletra){
    if (guanyar == false){
        if (paraulaProbada[intents].length<5){
            document.getElementById((intents*5)+(paraulaProbada[intents].length)+1).innerHTML=lletra;
            paraulaProbada[intents].push(lletra);
        }
    }
}

function esborrarLletra(){
    if(intents<6){
        if (guanyar == false){
            if (paraulaProbada[intents]!=0){
                document.getElementById(((intents*5)+paraulaProbada[intents].length)).innerHTML= "";
                paraulaProbada[intents].pop();
            }
        }    
    }
}

function enviar(){
    if (paraulaProbada[intents].length<5){

    }
    else{
        if (paraulaProbada[intents].join('') == paraula){
            printarColors();
            guanyar = true;
            window.location.replace("./win.php");
        }
        else{
            if (paraulaProbada[5].length && paraulaProbada[intents].join('') != paraula){
                printarColors();
                window.location.replace("./lose.php");
            }else{
                printarColors()
                intents +=1;
            }    
        }
    } 
}

function printarColors(){
    dictLetras = {}
    for (let i = 0; i < paraulaProbada[intents].length; i++) {
        if (dictLetras[paraula[i]] == undefined){
            dictLetras[paraula[i]] = 1;
        }
        else{
            dictLetras[paraula[i]] += 1;
        }
    }
    
    for (let i = 0; i < paraulaProbada[intents].length; i++) {
        document.getElementById((intents*5)+i+1).style.backgroundColor = "grey";
        if (paraulaProbada[intents][i] === paraula[i]){
            document.getElementById((intents*5)+i+1).style.backgroundColor = "green";
            dictLetras[paraula[i]] -=1;
        }
    }
    for (let i = 0; i < paraulaProbada[intents].length; i++) {
        if (paraula.includes(paraulaProbada[intents][i])){
            if (paraulaProbada[intents][i] !== paraula[i]){
                if(dictLetras[paraulaProbada[intents][i]]>=1){
                    document.getElementById((intents*5)+i+1).style.backgroundColor = "#f1c40f";
                    dictLetras[paraulaProbada[intents][i]] -=1;
                }
            }
        }
    }
}