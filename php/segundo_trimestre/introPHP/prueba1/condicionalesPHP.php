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

    if(true){
        echo "funciono";
    }
    
    $edad = 15;

    if($edad>=18){
        echo "<br>eres mayor de edad";
    }elseif($edad < 18){
        echo "<br> Eres menor de edad";
    }

    $edad = (18 > 19) ? "Eres mayor" : "Eres menor";

    echo $edad;

    $mojama = 7;

    switch($mojama){
        case 1:$a = 1;
        case 2: $a = 2;
        case 3: $a = 3;
        break;
        default: 
            $a = 5;
    }
    echo $a;

    ?>
    
</body>
</html>