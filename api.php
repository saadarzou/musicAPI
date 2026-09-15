  <?php

include("connection.php");

$genereScelto="tutte";

if(isset($_GET["genere"])){
    $genereScelto=$_GET["genere"];

}

$stessoGenere = [];

for($i=0;$i < count($dischi); $i++){

    if($genereScelto=="tutte"){
        $stessoGenere[] = $dischi[$i];
    } elseif ($genereScelto  == $dischi[$i]["genere"]){
        $stessoGenere[] = $dischi[$i];
    }

}


header("Content-Type: application/json");
$risultato=json_encode($stessoGenere);
echo $risultato;








?>