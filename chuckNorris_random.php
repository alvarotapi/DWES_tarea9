<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> 
    <title>Random joke - Chuck Norris API - Álvaro Tapiador</title>
</head>
<body>
    <div id="contenedor">
        <h1>The Chuck "Random" Norris - API</h1>
        <img src="media/chuck-norris.jpeg" alt="MDN">
    
        <?php
            require('funciones.php');

            random();
        ?>
    </div>
</body>
</html>

