
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <title>Leer un documento XML</title>
  </head>
  <body>
  <div>
  
  <?php

  // Cargar el documento XML local  simplexml_load_file()
  // devuelve un objeto de la clase simplexml_element o FALSE en caso de error (documento XML mal formado, por ejemplo)
  $xml = simplexml_load_file('xml2.xml');
  if (! $xml) { exit; }

  // El objeto $xml tiene una estructura que corresponde a la
  // estructura de nuestro documento:
  // - articulo (matriz de objetos)
  //     - identificador
  //     - texto
  //     - precio

	//sacamos indormación de cada articulo y de sus atributos
  echo "<b>Ruta de \$xml->articulo</b><br />\n";
  foreach ($xml->articulo as $articulo) {
		printf("%s,%s,%s,%s,%s<br />\n",
           $articulo->identificador,
           $articulo->texto,
           $articulo->precio,
           $articulo['código'],
           $articulo['color']);
  }

	// Si queremos acceder directamente a un nodo, por ejemplo el tercer nodo:
	echo "<b>Acceso a una información particular</b><br />\n";
	printf("%s,%s,%s<br />\n",
         $xml->articulo[2]->texto,
         $xml->articulo[2]->precio,
         $xml->articulo[2]['código']);

	// Extracción de los atributos de un nodo = método attributes()
	$atributos = $xml->articulo[2]->attributes();

	// Ruta de los atributos así recuperados.
	  echo "<b>Atributos del tercer articulo</b><br />\n";
	  foreach($atributos as $nombre => $valor) {
			echo $nombre . " -> ". $valor;
			echo "<br/>";
	  }

  // Extraer los hijos de un nodo mediante el método children()
  // - devuelve un objeto de la clase simplexml_element
  echo "<br /><br /><br />";
  echo "<b>Ruta del árbol</b><br />";
 
  foreach ($xml->children() as $nombre1 => $nivel1) {
    echo $nombre1 ." Atributos:".$nivel1['código']. " ". $nivel1['color'] ."<br/>";
    foreach ($nivel1->children() as $nombre2 => $nivel2) {
		echo "-----".$nombre2 . " ".$nivel2 ."<br/>";
    }
  }
  echo "<br /><br /><br />";
  

  ?>
  
  </div>
  </body>
</html>
