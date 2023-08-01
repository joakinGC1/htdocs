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

        $array = array(20,50,10,20,61,29,28,2,91,1);
        $max = $array[0];
        for($i = 0; $i < count($array);$i++){

            if($max < $array[$i]) $max = $array[$i];
            
        }

        echo $max;

    ?>
</body>
</html>