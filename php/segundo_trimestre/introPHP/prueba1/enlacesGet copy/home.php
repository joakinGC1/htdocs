<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>

    <label>Calculadora:</label>
    <br>
    <select name="calculo">

                <option value="sumar" name="sum">Sumar</option>
                <option value="restar" name="res">Restar</option>
                <option value="multiplicar" name="multi">Multiplicar</option>
                <option value="dividir" name="dividir">Dividir</option>

            </select>
            <input type="text" name="res">
    <?php
        $res = 0;
        if($_GET["calculo"] == "sumar"){
            $num = $_GET["res"];
            number_format($num);
            $res += $num;
        }       

        if($_GET["calculo"] == "restar"){
            $num = $_GET["res"];
            number_format($num,2);
            $res = $res - $_GET["res"];
        }

        if($_GET["calculo"] == "multiplicar"){
            $num = $_GET["res"];
            number_format($num,2);
            $res = $res * $_GET["res"];
        }

        if($_GET["calculo"] == "dividir"){
            $num = $_GET["res"];
            number_format($num,2);
            $res = $res * $_GET["res"];
        }
        $input =  '<input type="text" name="var1" value="'.$res.'">';
        echo $input;
    ?>
    <input type="submit" value="Enviar">
</form>
</body>
</html>