<?php
/*
Nadhira Amalia
203040044
Shift Jumat 10.00 - 11.00
*/
?>
<?php 
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id']) ) {
    header("Location: ../index.php");
    exit;
}
require 'functions.php';

// mengambil id dari url 
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$bakery = query("SELECT * FROM bakery WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <title>Delicia Bakery</title>
    
  </head>
  <body>
  <p>touch the card to see more</p>
  <div class="row justify-content-around align-items-center">
          <div class="col-xl-3 col-lg-4 col-sm rotate" data-aos="flip-left">
            <div class="card text-center mb-3 deli-card">
              <div class="card-header">
                <h4 class="title-text"><?= $bakery["name"]; ?></h4>
              </div>
              <div class="card-body">
              <img src="../assets/img/<?= $bakery["product"]; ?>" class="img-fluid rounded">
              </div>
              <div class="card-footer">
                <span>Rp.<?= $bakery["price"]; ?></span>
              </div>
              <div class="back">
                <div class="back-content">
                  <h1 class="font-weight-light"><?= $bakery["category"]; ?></h1>
                  <h3 class="mb-3"><?= $bakery["description"]; ?></h3>
                  <h6>Toppings: <?= $bakery["topping"]; ?></h6>
                  <a href="../index.php" class="btn hvr-right my-4 text-capitalize">Back</a>
                </div>
              </div>
            </div>
          </div>
    </div>

 </body>
</table>
</html>