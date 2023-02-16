<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> 
    <title>Chuck Norris API - Álvaro Tapiador</title>
</head>
<body>
    <div id="contenedor">
        <h1>The Chuck Norris - API</h1>
        <img src="media/chuck-norris.jpeg" alt="MDN">
    
        <div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                <select name="taskOption">
                    <option value="none" selected>Choose option</option>
                    <option value="animal">Animal</option>
                    <option value="career">Career</option>
                    <option value="dev">Dev</option>
                    <option value="explicit">Explicit</option>
                    <option value="fashion">Fashion</option>
                    <option value="food">Food</option>
                    <option value="history">History</option>
                    <option value="money">Money</option>
                    <option value="movie">Movie</option>
                    <option value="music">Music</option>
                    <option value="political">Political</option>
                    <option value="religion">Religion</option>
                    <option value="science">Science</option>
                    <option value="sport">Sport</option>
                    <option value="travel">Travel</option>
                </select>
                <input type="submit" name="submit">
            </form>
        </div>
        
        <?php
            require('funciones.php');
            
            if(isset($_POST["taskOption"])){
                category($_POST["taskOption"]);
            }
        ?>
        <br>
        <br>
        <a href="chuckNorris_random.php">Random joke</a>
    </div>
</body>
</html>