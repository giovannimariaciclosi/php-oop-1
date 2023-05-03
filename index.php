<?php
// require_once './Models/Movie.php';

// importo i movies
require_once './db.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
  <!-- importo l'header -->
  <?php
  include './Views/partials/header.php';
  ?>

  <div class="container pt-2">
    <h1>
      Movies
    </h1>

    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Genre</th>
          <th>Duration (minutes)</th>
          <th>Lenght</th>
        </tr>
      </thead>
      <tbody>
        <!-- ciclo i film -->
        <?php 
          foreach($movies as $singleMovie) {
            ?>
            <tr>
              <td><?php echo $singleMovie->name ?></td>
              <td><?= $singleMovie->genre ?></td>
              <td><?= $singleMovie->minute ?></td>
              <td><?= $singleMovie->length ?></td>
            </tr>
            <?php
          }
        ?>
      </tbody>
    </table>
  </div>

  <!-- importo il footer -->
  <?php
  include './Views/partials/footer.php';
  ?>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>