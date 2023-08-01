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
        $nombresConM = array();
        $nombres = array("roberto","juan","marta","moria","martin","jorge","miriam","nahuel","mirta");
        $cont = 0;
        for($i = 0; $i < count($nombres); $i++){

            
            
            if(substr($nombres[$i],0,1) == "m") {
                
                $nombreConM[$cont] = $nombres[$i];
                $cont++;
                
            }
        }

        var_dump($nombreConM);

    ?>
</body>
</html>