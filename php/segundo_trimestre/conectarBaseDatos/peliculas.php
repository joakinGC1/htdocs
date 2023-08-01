<?php




    $servername = "127.0.0.1:3307";
    $database = "db_joins";
    $username = "Javi";
    $password = "simanadulto1J";

    $conectar = mysqli_connect($servername, $username, $password, $database);

    if (!$conectar) {
        die("Esto no funca" . mysqli_connect_error());
    }

    
    $axu = $_GET['id'];
    echo $axu; 
    $query = "  SELECT * 
	            FROM peliculas p
		        INNER JOIN peliculas_actores pe_ac on pe_ac.pelicula_id = p.id 
                INNER JOIN actores ac on ac.id = pe_ac.actor_id 
	            WHERE  p.id = $axu;";
    $actores = '';
    $resultado = mysqli_query($conectar, $query);

    echo ("<table border='2'>");
        while ($rows = mysqli_fetch_assoc($resultado)) { //array asociativo
            $axu = implode(" ",$rows);
            echo $axu;
            echo ("<tr>");
            echo ("<td>");
            echo ($rows['titulo']);
            echo ("</br>");
            echo ("Producida en: ".$rows['produccion']);
            echo ("</br>");
            
              $actores = $actores ." , ". $rows['actor'];
            echo ("</td>");
            echo ("</tr>");
        }

        //echo("Actores: ");
        //echo ($actores);

        echo ("</table>");

?>