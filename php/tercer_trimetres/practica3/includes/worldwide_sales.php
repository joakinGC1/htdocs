<?php

require("./db_conect.php");
$query = "select * from compra";
$result = $con->query($query);
//$fecha = array();
//$totales = array();

$fecha="";
$totales ="";

if($result->num_rows > 0){
    while($fila = $result->fetch_assoc()){
       
       // array_push($fecha,$fila["total"]);
        //array_push($totales,$fila["fecha"]);
        $fecha = $fecha .chr(39).$fila["fecha"] .chr(39). ","; 
        $totales = $totales .chr(39). $fila["total"] .chr(39). ",";
    }
    $fecha = substr($fecha, 0, strlen($fecha)-1);
    $totales = substr($totales, 0, strlen($totales)-1);
}else{
    
}
?>


<script>
    var ctx1 = $("#worldwide-sales").get(0).getContext("2d");
    var myChart1 = new Chart(ctx1, {
        type: "bar",
        data: {
            labels: [<?= $fecha ?>],
            datasets: [{
                    label: "PRODUCTOS",
                    data:[<?=$totales?>],
                    backgroundColor: "rgba(235, 22, 22, .7)"
                }
            ]
            },
        options: {
            responsive: true
        }
    });

    
</script>
