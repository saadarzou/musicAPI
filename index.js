
let select= document.getElementById("genere");
let dischi=document.getElementById("dischi");

function cambiaDisco(){

let genereScelto=select.value;
let filtrato = [];

fetch("api.php?genere=" +  encodeURIComponent(genereScelto))
.then(response => response.json())

.then(data => {

    dischi.innerHTML = "";

    for(let i=0; i<data.length; i++){

      if(genereScelto=="tutte"||genereScelto== data[i].genere){
        filtrato.push(data[i]);

    }

}


 for(let i=0; i< filtrato.length; i++){
    dischi.innerHTML += 
     
   ` <div class="card">

        <img src="${filtrato[i].poster}" class="immagini"></img>

        <div class="titoloCard">
            ${filtrato[i].titolo}
        </div>

        <div class="artistaCard">
            ${filtrato[i].artista}
        </div>

        <div class="genereAnnoCard">
            ${filtrato[i].genere} - ${filtrato[i].anno}
        </div>

    </div>
   `
 }
})
 
};

select.addEventListener("change", function(){
    cambiaDisco();
})

cambiaDisco();
