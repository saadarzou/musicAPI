
let select= document.getElementById("genere");
let dischi=document.getElementById("dischi");






function apriVideo(link, i){
    let contenitore = document.getElementById("video"+i);

    contenitore.innerHTML = `<iframe width="560" height="315"  border-radius: "15px" src="${link}" allowfullscreen> </iframe>`;
   
}

function modificaDisco(id){
 window.location.href = "views/update_views.php?id=" + id;
}

function eliminaDisco(id){
    
    console.log("ID da eliminare:", id);

fetch("api/delete.php",{

    method: "POST",
    headers: {
        "Content-Type": "application/x-www-form-urlencoded" 
    },

     body: "id=" + id

})

.then(response => response.text())

.then(data=>{
    cambiaDisco();
});


}










function cambiaDisco(){

let genereScelto=select.value;
let filtrato = [];

fetch("api/read.php?genere=" + encodeURIComponent(genereScelto))
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

        <button onclick="eliminaDisco(${filtrato[i].id})">
         Elimina
        </button>

        <button onclick="modificaDisco(${filtrato[i].id})">
            modifica
        </button>

    </div>
   `
 }
})
 
};

select.addEventListener("change", function(){
    cambiaDisco();
})



cambiaDisco();

