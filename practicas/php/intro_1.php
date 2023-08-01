<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $txt = "PHP";
        echo "I love $txt";
    ?>

    <?php
    //Sin destinción entre mayusculas y minusculas entre funciones, clases y demas
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>";

    //Con destinción entre variables

        $color = "red";
        echo "My car is " . $color . "<br>";
        //echo "My house is " . $COLOR . "<br>"; No esta definida
        //echo "My boat is " . $coLOR . "<br>"; // DEstincion entre ellas



    // Comentarios:

    // This is a single-line comment

    # This is also a single-line comment

    /*
        This is a multiple-lines comment block
        that spans over multiple
        lines
    */
    $txt = "Hello world!";
    $x = 5;
    $y = 10.5;
    

    //Contenaciones:

    $txt = "W3Schools.com";
    echo "I love $txt!";

    $txt = "W3Schools.com";
    echo "I love " . $txt . "!";

    $x = 5;
    $y = 4;
    echo $x + $y;

    //Alcance de variables:

    $x = 5; // global scope

    function myTest() {
        // Si usamos x dentro de la funcion genera error.
        //echo "<p>Variable x inside function is: $x</p>"; 
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";

    function myTest2() {
        $x2 = 5; // local scope
        echo "<p>Variable x inside function is: $x2</p>";
      }
      myTest2();
      
      // Si usamos x2 fuera de la funcion esta genera error porque es una variable local
      //echo "<p>Variable x outside function is: $x2</p>";

      //global

    $x3 = 5;
    $y1 = 10;

    function myTest3() {
        global $x3, $y1;
        $y1 = $x3 + $y1;
    }

    myTest3();
    echo $y1; // outputs 15

    // Se puede rescribir el codigo anterior

    $x4 = 5;
    $y2 = 10;
    
    function myTest4(){
        $GLOBALS['y2'] = $GLOBALS['x4'] + $GLOBALS['y2'];
    }

    myTest4();

    echo "<br>$y2";

    //Palabra clave static:

    function myTest5() {

        //Guardar el valor de la variable x5 una vez ya terminada la funcion
        static $x = 0;
        echo $x;
        $x++;
        echo "<br>";

/*teniendo el información que contenía desde la última vez que se llamó a la función.

Nota: La variable sigue siendo local a la función.*/
      }
      
      myTest5();
      myTest5();
      myTest5();

      //Echo y Print:

        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";


        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;

        echo "<h2>" . $txt1 . "</h2>";
        echo "Study PHP at " . $txt2 . "<br>";
        echo $x + $y;

        print "<h2>PHP is Fun!</h2>";
        print "Hello world!<br>";
        print "I'm about to learn PHP!";

        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;

        print "<h2>" . $txt1 . "</h2>";
        print "Study PHP at " . $txt2 . "<br>";
        print $x + $y;
      
        //Tipos de datos:

        $x = "Hello world!";
        $y = 'Hello world!';

        //Acepta ambas comillas.

        echo $x;
        echo "<br>";
        echo $y;
      

        $x = 5985;
        var_dump($x);   

        //var_dump devuelve el tipo de dato y valor del mismo.

        // float:

        $x = 10.69;
        var_dump($x);

        $verdad = true;
        $falso = false;

        $cars = array("Volvo","BMW","Toyota");
        var_dump($cars);

        //Null

        $x = "Hello world!";
        $x = null;
        var_dump($x);

        

    ?>
    
</body>
</html>