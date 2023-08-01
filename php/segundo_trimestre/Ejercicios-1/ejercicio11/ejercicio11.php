<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p style="font-family: 'Courier New', Courier, monospace;">
    <?php

        $n = 4;
        
        for($i = 1; $i < $n; $i++){

            for($c = $n; $c > 0; $c--){

                echo "&nbsp";            

            }

        $n--;
        for($j = $i; $j > 0; $j--){
            echo $j;
        }
        
        echo "<br>";
    }


    ?>
    </p>
</body>
</html>