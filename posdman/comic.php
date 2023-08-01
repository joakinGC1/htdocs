<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic</title>
</head>
<body>
    
    <?php
    
    if(isset($_GET["link"])){
        if(strlen($_GET["link"])>1){
            $curl = curl_init();
            $date = time();
            $key = "53213bb582743ea4336c89844fb2ec70";
            $keyJuntas = $date."eea4c07f84028cab90d30ec0c1d68f9635ce0cb553213bb582743ea4336c89844fb2ec70";
            $hash = hash("md5",$keyJuntas);


            curl_setopt_array($curl, array(
                CURLOPT_URL => $_GET['link'].'?ts='. $date.'&apikey='. $key.'&hash='.$hash,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));
      
            $response = curl_exec($curl);
            curl_close($curl);
            
            echo $response;
      
            $data = json_decode($response,true);

        }
    }else{
        echo "NO EXISTE";
    }
?>

</body>
</html>