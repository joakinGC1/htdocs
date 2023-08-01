<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>
    <?php

        //Constante PI:

        echo (pi());

        echo "<br>";

        //min() y max()

        echo(min(0, 150, 30, 20, -8, -200));  // retorna -200
        echo "<br>";
        echo(max(0, 150, 30, 20, -8, -200));  // retorna 150
        echo "<br>";

        //abs()

        echo(abs(-6.7));  // retorna 6.7
        echo "<br>";

        //sqrt()

        echo (sqrt(64));
        echo "<br>";

        // Redondeo:

        echo(round(0.60));  // retorna 1
        echo "<br>";
        echo(round(0.49));  // retorna 0
        echo "<br>";

        // rand()

        echo(rand());  // retorna un numero aleatorios
        echo "<br>";

        //mas control sobre rand:

        echo(rand(10,100));  //Retorna un numero aleatorio entre 10 y 100



    ?>
</body>
</html>