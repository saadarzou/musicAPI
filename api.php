  <?php

//1. CONNECTION ( Tramite le config/connection.php)
// 1.1 Creare config/connection.php 
//1.2 allegare a questo foglio API il conneciton.php.
//2. COMPORRE LA QUERY MY SQL
//3. SALVARE I DATI IN VARIABILI.



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