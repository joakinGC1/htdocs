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
        $miArray = array();
        $acum = 0;
        for($i = 0; $i < 20; $i++){
            $miArray[$i] = $i+1 ;
            $acum+= $miArray[$i];
        }
        var_dump($miArray);
        echo "El promedio es: " . $acum / count($miArray);

    ?>
</body>
</html>