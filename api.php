  <?php

include("config/connection.php");
var_dump($conn);

$genereScelto="tutte";

// vediamo se e stato scelto un genere
if(isset($_GET["genere"])){

    // se e stato scelto un genere lo salviamo all'interno del parametro genereScelto
    $genereScelto = $_GET["genere"];

}

$stessoGenere = [];

if($genereScelto == "tutte"){
    // se e sato scelto tutte prerndiamo tutti i dischi del databse
$query = "SELECT * FROM dischi";
$risultatoQuery = mysqli_query($conn, $query);
} else {
    // prendiamo solo i dischi che hanno lo stesso genere
    $query = "SELECT * FROM dischi WHERE genere = '$genereScelto'";
    // fa la richiesta sul database e salva i dati all'interno di risultatoQuery
    $risultatoQuery = mysqli_query($conn, $query);
}

//prendiamo i dati dal database
while($disco = mysqli_fetch_assoc($risultatoQuery)){

    $stessoGenere[] = $disco;

}

//trasformiamo l'array in file json
header("Content-Type: application/json");

echo json_encode($stessoGenere);



?>