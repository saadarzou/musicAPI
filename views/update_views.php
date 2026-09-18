<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views.css">
</head>
<body>

<?php  

include("../config/connection.php");

$id= $_GET["id"];
$query = "SELECT * FROM dischi WHERE id=$id";
$risultato= mysqli_query($conn,$query);
$disco= mysqli_fetch_assoc($risultato);


?>


<div class="contenitore" >

<div class="header">
    <h2>MODIFICA CANZONE</h2>
</div>

<form method="POST" action="../api/update.php">

<input type="hidden" name="id" value="<?php echo $disco["id"]; ?>">

 <div>
    <label for="titolo">Titolo:</label>
    <input type="text" id="titolo" name="titolo" value="<?php echo $disco["titolo"]; ?>" required>
</div>

 <div>
    <label for="artista">Artista:</label>
    <input type="text" id="artista" name="artista" value="<?php echo $disco["artista"]; ?>" required>
</div>


 <div>
    <label for="anno">Anno:</label>
    <input type="text" id="anno" name="anno" value="<?php echo $disco["anno"]; ?>" required>
</div>

 <div>
    <label for="poster">Poster:</label>
    <input type="text" id="poster" name="poster" value="<?php echo $disco["poster"]; ?>" required>
</div>

 <div>
    <label for="collegamento">Collegamento:</label>
    <input type="text" id="collegamento" name="collegamento" value="<?php echo $disco["collegamento"]; ?>" required>
</div>


<div>

    <label for="genere">Genere:</label>

    <select id="genere" name="genere" required>

    <option value="POP" <?php if($disco["genere"] == "POP") echo "selected"; ?>>
     POP
    </option>

    <option value="Rap" <?php if($disco["genere"] == "Rap") echo "selected"; ?>>
     Rap
    </option>

    <option value="R&B" <?php if($disco["genere"] == "R&B") echo "selected"; ?>>
      R&B
    </option>

    </select>

    <button type="submit">
        MODIFICA CANZONE
    </button>


</form>

<a href="../index.html" >
 <button>ANNULLA</button>
 </a>


</div>





    
</body>
</html>