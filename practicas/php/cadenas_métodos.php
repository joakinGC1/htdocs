<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Methods Strings</title>
</head>
<body>
    <?php

        //strlen()

        echo strlen("Hello world"); // devuelve 11
        echo "<br>";

        // str_word_count()

        echo str_word_count("Hello world!"); //Devuelve 2
        echo "<br>";

        // strrev

        echo strrev("Hello world!"); // Devuelve la palabras al reves.
        echo "<br>";

        //strpos()

        echo strpos("Hello world!", "world"); // salida 6
        echo "<br>";
        echo strpos("Hell world!", "pero"). "Hola"; // Devuelve nada
        echo "<br>";
        // str_replace()

        echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
        echo "<br>";

        //Primer parametro es la palabra que remplazamos, segundo la palabra con la que
        // lo sustituimos y despues la frase que contiene y que queremos modificar.

        echo str_replace("XXXXXXXXXX", "Remplazo", "Frase XXXXXXXXXX"); // output: Frase XXXXXXXXXX


        // Documentacion de más métodos de cadenas si es que necesaitamos:: documentar abajo:
        // https://www.w3schools.com/php/php_ref_string.asp
        // Su uso y en basket:
    ?>
</body>
</html>
