let cont = 1;
let paraulaProbada = [];
function escriureLletra(lletra){
    if (paraulaProbada.length <5){
    document.getElementById(cont).innerHTML=lletra;
    paraulaProbada.push(lletra);
    console.log(paraulaProbada);
    cont +=1;
    }

}
function esborrarLletra(){
    if (cont != 1){
        if (paraulaProbada.length>=0){
            document.getElementById(cont-1).innerHTML= "";
            paraulaProbada.pop();
            console.log(paraulaProbada);
            cont -=1;
        }
        
    }
}
function enviar(){
    if (paraulaProbada.length<5){
        alert("La paraula ha de contenir 5 lletres");
    }
    else{
        paraulaProbada= [];
        console.log(cont);
        console.log(paraulaProbada); 
    }
    
}