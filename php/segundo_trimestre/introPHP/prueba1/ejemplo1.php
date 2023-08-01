<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <h1>Mi pagina</h1>


echo"Siempre dentro de < ? ´php";

    <?php
        $variable = 2;
        // Se le puede asignar nuevo valor y elimina al anterior
        $variable = "victor<br/>";
        echo $variable;

        //Las formas de concatenar variables.
        echo "<b>Hola mundo $variable</b>" . $variable;

        //No se puede usar.
        echo '<b>Hola mundo $variable</b>';
        
    ?>
    <!--Forma de colocar variable fuera del php se usa el < ? =  y no es necesario usar el signo-->
    <h6>mi pie de pagina<?= $variable ?></h6>

</body>
</html>
