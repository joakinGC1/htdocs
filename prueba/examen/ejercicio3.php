<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<style>

.titulo{
    font-size: 50px;
    font-style: italic;
    color: red;
}

.p{
    font-size: 40px;
    color: blueviolet;
}

.h1{
    color: goldenrod;
    font-size: 70px;
}
    </style>    
<body>
    <h1 class="h1">Chiste que dan gustos.</h1>
    <?php
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://v2.jokeapi.dev/joke/Any?lang=es&amount=3',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    
    $response = curl_exec($curl);
    $chistes = json_decode($response,true);
    curl_close($curl);

    foreach($chistes["jokes"] as $chiste){
        
        ?>
        <h1 class="titulo">
        <?php
        
            if($chiste["type"]== "twopart"){
                echo $chiste["setup"]."<br></h1>";
                echo "<p class='p'>".$chiste["delivery"]."<br></p>";
            }else{
                echo $chiste["joke"]."</h1>";
            }

        ?>
    
<?php
    }
    
?>
 
    
    
</body>
</html>