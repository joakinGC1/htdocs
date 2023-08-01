<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marvel Comics</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <?php
    $curl = curl_init();
    $date = time();
    $key = "53213bb582743ea4336c89844fb2ec70";
    $keyJuntas = $date . "eea4c07f84028cab90d30ec0c1d68f9635ce0cb553213bb582743ea4336c89844fb2ec70";
    $hash = hash("md5", $keyJuntas);

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://gateway.marvel.com/v1/public/comics?ts=' . $date . '&apikey=' . $key . '&hash=' . $hash . '&limit=99',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($response, true);
    $comics = $data['data']['results'];

    foreach ($comics as $comic) {
      $creators = [];
      foreach ($comic['creators']['items'] as $creator) {
        $creators[] = $creator['name'];
      }
    ?>
      <div class="row mt-4">
        <div class="col-md-4">
          <a data-bs-toggle="modal" data-bs-target="#comicModal<?= $comic['id'] ?>">
            <img src="<?= $comic['thumbnail']['path'] . '.' . $comic['thumbnail']['extension'] ?>" class="img-fluid" alt="<?= $comic['title'] ?>">
          </a>
        </div>
        <div class="col-md-8">
          <h2><?= $comic['title'] ?></h2>
          <p><strong>Descripción:</strong> <?= $comic['description'] ?></p>
          <p><strong>Precio:</strong> <?= $comic['prices'][0]['price'] ?></p>
          <p><strong>Creadores:</strong> <?= implode(', ', $creators) ?></p>
          <p><strong>Serie:</strong> <?= $comic['series']['name'] ?></p>
          <p><strong>Número de edición:</strong> <?= $comic['issueNumber'] ?></p>
          <p><strong>Páginas:</strong> <?= $comic['pageCount'] ?></p>
        </div>
      </div>
      <hr>
      <!-- Modal -->
      <div class="modal fade" id="comicModal<?= $comic['id'] ?>" tabindex="-1" aria-labelledby="comicModalLabel<?= $comic['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="comicModalLabel<?= $comic['id'] ?>"><?= $comic['title'] ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-4">
                  <img src="<?= $comic['thumbnail']['path'] . '.' . $comic['thumbnail']['extension'] ?>" class="img-fluid" alt="<?= $comic['title'] ?>">
                </div>
                <div class="col-md-8">
                  <p><strong>Descripción:</strong> <?= $comic['description'] ?></p>
                  <p><strong>Precio:</strong> <?= $comic['prices'][0]['price'] ?></p>
                  <p><strong>Creadores:</strong> <?= implode(', ', $creators) ?></p>
                  <p><strong>Serie:</strong> <?= $comic['series']['name'] ?></p>
                  <p><strong>Número de edición:</strong> <?= $comic['issueNumber'] ?></p>
                  <p><strong>Páginas:</strong> <?= $comic['pageCount'] ?></p>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
