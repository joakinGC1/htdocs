<?php

    if(isset($_GET["nombre"])&&isset($_GET["tel"])){
       if(strlen($_GET["nombre"])>=1&&strlen($_GET["tel"])){
        $nombre = $_GET["nombre"];
        $tel = $_GET["tel"];
        
            $arr = array(
                "nombre" => "$nombre",
                "tel" => "$tel"
            );
            
           $json =  json_encode($arr);
           
           $bytes = file_put_contents("myfile.json", $json); 
           $json = file_get_contents("myfile.json",true);

           $datos = json_decode($json);

           echo $json;
        }else{

        }
    }else{

    }
?>
