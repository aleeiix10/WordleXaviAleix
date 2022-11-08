let intents = 0;
let verds  = 0;
let grocs = 0;
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
            document.getElementById("intents").value = intents+1;
            document.getElementById("verds").value = verds;
            document.getElementById("grocs").value = grocs;
            setTimeout(document.getElementById("formInfo").submit(),2000);
            guanyar = true;
        }
        else{
            if (paraulaProbada[5].length && paraulaProbada[intents].join('') != paraula){
                document.getElementById("lose").value = 1;
                document.getElementById("formInfo2").submit();
                printarColors();
            }else{
                printarColors()
                intents +=1;
                var error = new Audio("error.mp3");
                error.play();
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
            verds +=1;
        }
    }
    for (let i = 0; i < paraulaProbada[intents].length; i++) {
        if (paraula.includes(paraulaProbada[intents][i])){
            if (paraulaProbada[intents][i] !== paraula[i]){
                if(dictLetras[paraulaProbada[intents][i]]>=1){
                    document.getElementById((intents*5)+i+1).style.backgroundColor = "#f1c40f";
                    dictLetras[paraulaProbada[intents][i]] -=1;
                    grocs +=1;
                }
            }
        }
    }
}

function destroySession() {
    window.location.href = "session_destroy.php";
}