<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>
    <?php
        $num = 0;
        for($i = 0; $i <= 100; $i++){
            
            $num += $i;
            echo "La suma de todos los números del " . $i . " hasta el 100 es hasta ahora: " . $i + $i;
        }

    ?>
</body>
</html>