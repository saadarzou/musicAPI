<?php
include("../config/connection.php");

$id=$_POST["id"];
$query= "DELETE FROM dischi WHERE id=$id";
mysqli_query($conn, $query);

?>