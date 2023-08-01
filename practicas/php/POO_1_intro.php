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
        class Auto{
            public $color;
            public $modelo;
            public  function __construct($color,$modelo){
                $this->color = $color;
                $this->modelo = $modelo;
            }

            public function mensaje(){
                return "Mi auto es un ". $this->color . " " . $this->modelo."!";
            }
        }

        $miAuto = new Auto("Rojo","Volvo");
        echo $miAuto -> mensaje();

        
    ?>
</body>
</html>