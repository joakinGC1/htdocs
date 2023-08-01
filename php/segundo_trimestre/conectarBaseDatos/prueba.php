<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php
    $servername = "127.0.0.1:3307";
    $database = "db_joins";
    $username = "Javi";
    $password = "simanadulto1J";

    $conectar = mysqli_connect($servername, $username, $password, $database);

    if (!$conectar) {
        die("Esto no funca" . mysqli_connect_error());
    }
    //echo "Lo has logrado chaval!" . "<br>";

    $query = "  SELECT p.id,p.titulo 
                FROM peliculas p
                ORDER BY p.id LIMIT 150";

    $resultado = mysqli_query($conectar, $query);
   

        printf("La selección devolvió %d filas.\n", mysqli_num_rows($resultado));

        echo ("<table border='2'>");
        while ($rows = mysqli_fetch_assoc($resultado)) { //array asociativo
            $aux = $rows['id'];
            echo ("<tr>");
            echo ("<td><a href='peliculas.php?id=$aux'>" . $rows["id"] . "</a></td>");
            echo ("<td><a href='peliculas.php?id=$aux'>" . $rows["titulo"] . "</a></td>");
            echo ("</tr>");
        }
        echo ("</table>");

    
        $resultado->free();
        mysqli_close($conectar);
        ?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>