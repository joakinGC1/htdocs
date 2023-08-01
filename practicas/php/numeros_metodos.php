<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos numeros</title>
</head>
<body>
    <?php


    //is_int()
    $x = 5985;
    var_dump(is_int($x));

    $x = 59.85;
    var_dump(is_int($x));

    //Contantes de tipo int en php:

    //PHP_INT_MAX:
    echo(PHP_INT_MAX);

    echo"<br>";

    //PHP_INT_MIN:
    echo(PHP_INT_MIN);

    echo"<br>";

    //PHP_INT_SIZE
    echo(PHP_INT_SIZE);

    //float MÉTODOS y constantes:

    //is_float
    $x = 10.365;
    var_dump(is_float($x));

    //PHP_FLOAT_MAX:
    echo "<br>";
    echo PHP_FLOAT_MAX;

    //PHP_FLOAT_MIN:
    echo "<br>";
    echo PHP_FLOAT_MIN;

    //PHP_FLOAT_DIG:
    echo "<br>";
    echo PHP_FLOAT_DIG;

    //PHP_FLOAT_EPSILON

    echo "<br>";
    echo PHP_FLOAT_EPSILON;


    // Cumprueba si el valor de numerico es infinito o no:

    $x = 1.9e411;
    var_dump($x);

    //is_finite():

    echo is_finite(2) . "<br>"; //
    echo is_finite(log(0)) . "<br>";
    echo is_finite(2000);

    //is_infinite()

    echo is_infinite(2) . "<br>";
    echo is_infinite(log(0)) . "<br>";
    echo is_infinite(2000);

    //NaN: Not a number.

    $x = acos(8);
    var_dump($x);

    // is_numeric

    $x = 5985;
    var_dump(is_numeric($x));  //True

    $x = "5985";
    var_dump(is_numeric($x));  //True

    $x = "59.85" + 100;
    var_dump(is_numeric($x));  //True

    $x = "Hello";
    var_dump(is_numeric($x));  //False

    //Transformar a float a int:

    $x = 2133.2232;
    $int_cast = (int) $x;
    echo $int_cast;

    echo "<br>";

    //Transformar String a int:

    $x = "23423.1212";
    $int_cast = (int) $x;
    echo $int_cast;

    

    ?>
</body>
</html>