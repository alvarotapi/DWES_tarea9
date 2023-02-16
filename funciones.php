<?php
    /** 
    * Función que se encarga de retornar el valor lanzado por la API según la categoría seleccionada
    *
    * @param string Categoría seleccionada desde la lista desplegable
    * @return string Información para que elijas una categría o el chiste arrojado por dicha categoría
    * @author Álvaro Tapiador <alvarotapiador@gmail.com>
    * @version 1.0.0 Estable
    */
    function category($arg)
    {
        if($arg === "none")
            {
                echo "<p>Choose a f****** category!</p>";;
            }
        else
        {
            $url = "https://api.chucknorris.io/jokes/random?category=" . $arg;
            $ch = curl_init();                                                                      
            curl_setopt($ch, CURLOPT_URL, $url);                                                                  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                                                                                                                    
            $json = curl_exec($ch);
            $infoChuck = json_decode($json, true);
    
            echo "<p>" . $infoChuck["value"] . "</p>";;
        }
    }
    
    /** 
    * Función que se encarga de retornar un valor aleatorio lanzado por la API
    *
    * @return string Valor aleatorio con un chiste de Chuck Norris
    * @author Álvaro Tapiador <alvarotapiador@gmail.com>
    * @version 1.0.0 Estable
    */
    function random(){
        $url = "https://api.chucknorris.io/jokes/random";
        $infoChuck = file_get_contents($url);
        $infoChuck = json_decode($infoChuck, true);
        
        echo "<p>" . $infoChuck["value"] . "</p>";
    }
?>