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
        $xml =  simplexml_load_file("xml.xml");
        $xml2 =  simplexml_load_file("xml2.xml");

        if(!$xml)exit;
        if(!$xml2)exit;

        foreach($xml->item as $elemnt){
            echo "El titulo es: ". $elemnt->title."<br>";
            echo "El titulo es: ". $elemnt->link."<br>";
            echo "El titulo es: ". $elemnt->description."<br>";
            echo "El titulo es: ". $elemnt->thumbnail."<br>";
            echo "</br>";
        }

        

        foreach($xml->prueba as $elemnt){
            echo "El titulo es: ". $elemnt->title."<br>";
            echo "El titulo es: ". $elemnt->link."<br>";
            echo "El titulo es: ". $elemnt->description."<br>";
            echo "El titulo es: ". $elemnt->thumbnail."<br>";
            echo "</br>";
        }

        foreach($xml2->articulo as $elemnt){
            echo "El titulo es: ". $elemnt->identificador."<br>";
            echo "El titulo es: ". $elemnt->texto."<br>";
            echo "El titulo es: ". $elemnt->precio."<br>";
            echo $elemnt['código']."<br>";
            echo $elemnt['color']."<br>";
            echo "</br>";
        }
    ?>
</body>
</html>