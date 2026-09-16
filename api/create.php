<?php 
include("../config/connection.php");

$titolo=$_POST["titolo"];
$artista=$_POST["artista"];
$genere=$_POST["genere"];
$anno=$_POST["anno"];
$poster=$_POST["poster"];
$collegamento=$_POST["collegamento"];


// inseriamo i valòori query per inserire una nuova canzone nel database
$query = "INSERT INTO dischi (titolo, artista, genere, anno, poster, collegamento) VALUES ('$titolo', '$artista', '$genere', '$anno', '$poster', '$collegamento')";

// mandiamo la query al databse
$risultato= mysqli_query($conn, $query);
header("Content-Type: application/json");



?>