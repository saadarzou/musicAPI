<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi canzone</title>
   <link rel="stylesheet" href="views.css">
</head>
<body>

<div class="contenitore">
 
    <div class="header">

    <h2>AGGIUNGI UNA CANZONE</h2>
    
    </div>

    <form id="inserisciCanzone" method="POST" action="../api/create.php">

        <div>
            <label for="titolo">Titolo: </label>
            <input type="text" id="titolo" name="titolo" required>
        </div>

        <div>
            <label for="artista">Artista: </label>
            <input type="text" id="artista" name="artista" required>
        </div>

        <div>
            <label for="anno">Anno: </label>
            <input type="text" id="anno" name="anno" required>
        </div>

        <div>
            <label for="poster">Poster: </label>
            <input type="text" id="poster" name="poster" required>
        </div>

        <div>
            <label for="collegamento">Collegamento: </label>
            <input type="text" id="collegamento" name="collegamento" required>
        </div>


        <div>

        <label for="genere">Genere:</label>

        <select id="genere" name="genere" required>
            <option value="POP">POP</option>
            <option value="Rap">Rap</option>
            <option value="R&B">R&B</option>


        </select>


        </div>

        <button type="submit">AGGIUNGI CANZONE</button>


    </form>




</div>
    
</body>
</html>