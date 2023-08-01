
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
/*1) Realiza  un programa que muestra por pantalla los numeros del 1 al 100 usando un for*/
$cont = 0;
$cont2 = 100;
for($i = 1; $i <= 100; $i++){
    
    
    for($f = $cont2; $f > 0; $f--){
        echo "&nbsp";
        
    }
    $cont2 --;
    for($j = 1; $j <= $i; $j++ ){
        
            echo  $j;
            $cont = $j;
        }
    
    for($j = $cont; $j > 1; $j-- ){
        echo $j - 1;
        }
    
    echo "<br>";
}


    ?>
    </p>
</body>
</html>