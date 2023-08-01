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

    $miarray = array("Lunes", "martes", "miercoles");

    echo $miarray[0];
    echo "<br>";

    var_dump($miarray);
/*
    $miarray[9]=100;
    $miarray[10] = "domingo";
    
    echo   $miarray[9];
    echo "<br>";
    echo   $miarray[10];
*/
    $persona = array('nombre'=>'Juan', 
                'apellido'=>'valdez', 
                'edad'=>50, 
                'nacionalidad'=>'venezuela');
                
    echo "<br>". $persona['apellido'];

    for ($i=0; $i < count($miarray) ; $i++) { 
       echo $miarray[$i] . "<br>";
    }
?>
</body>
</html>