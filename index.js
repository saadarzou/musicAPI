
let select= document.getElementById("genere");
let dischi=document.getElementById("dischi");
console.log("IL FILE JS FUNZIONA");





function apriVideo(link, i){
    let contenitore = document.getElementById("video"+i);

    contenitore.innerHTML = `<iframe width="560" height="315"  border-radius: "15px" src="${link}" allowfullscreen> </iframe>`;
   
}









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

    console.log(filtrato[i].link);

    dischi.innerHTML += 
     
   ` <div class="card">

  
        <img src="${filtrato[i].poster}" class="immagini" onclick="apriVideo('${filtrato[i].collegamento}', ${i})"> 
      <div id="video${i}"></div>
   
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

