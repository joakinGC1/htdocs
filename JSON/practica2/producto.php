<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        table img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $json = file_get_contents('https://dummyjson.com/products/' . $id);

            $datos = json_decode($json);
            $imgs = $datos->images;
        }
    ?>
    <table class="table table-responsive">
            <thead>
                <th><?= $datos->title ?></th>
            </thead>
            <tbody>
                <tr>
                    <td><?= $datos->description ?></td>
                    </tr>
                <tr><?php
                foreach($imgs as $key => $value){
                    echo "<td> <img src='$value'></td>";
                }

?>              </tr>
            </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
