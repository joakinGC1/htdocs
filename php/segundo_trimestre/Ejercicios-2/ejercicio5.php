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
        $array = array();
        for($i = 0; $i < 50;$i++){
            $array[$i] = $i+1;
        }
        var_dump($array);
        $cum = 0;

        for($i = 1; $i < count($array);$i++){
            
            for($j = i; $j = $i; $j++){

                $cum = $array[$j];
                    
                if((($i % $j) === 0) && (($j != 0) || ($j != 1))){
                    echo "&nbsp". $array[$i] . "&nbsp" ;
                }

            }
            
        }
        
        

    ?>
</body>
</html>