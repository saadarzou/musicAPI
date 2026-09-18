<?php 
include("../config/connection.php");

$id=$_POST["id"];
$titolo=$_POST["titolo"];
$artista=$_POST["artista"];
$anno=$_POST["anno"];
$poster=$_POST["poster"];
$collegamento=$_POST["collegamento"];
$genere=$_POST["genere"];

$query = "UPDATE dischi SET
titolo='$titolo',
artista='$artista',
anno='$anno',
poster='$poster',
collegamento='$collegamento',
genere='$genere'
WHERE id=$id";

$risultato=mysqli_query($conn, $query);

header("Location: ../index.html");
?>