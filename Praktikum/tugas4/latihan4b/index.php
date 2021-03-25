<?php
/*
Nadhira Amalia
203040044
Shift Jumat 10.00 - 11.00
*/
?>
<?php 
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// Melakukan query
$bakery = query("SELECT * FROM bakery");


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

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <title>Delicia Bakery</title>
  </head>
  <body>
  <div class="container mt-5 mb-5 text-center">
     <table id = "bakery" class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
            <th >No</th>
            <th >Name</th>
            <th >Product</th>
            <th >Topping</th>
            <th >Description</th>
            <th >Price</th>
            <th >Category</th>
            </tr>
        </thead>
    <tbody  class="table-info">
        <?php $i = 1; ?>
        <?php foreach($bakery as $bak) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $bak["name"]; ?></td>
            <td>
                <img src="assets/img/<?= $bak["product"]; ?>">
            </td>
            <td><?= $bak["topping"]; ?></td>
            <td><?= $bak["description"]; ?></td>
            <td><?= $bak["price"]; ?></td>
            <td><?= $bak["category"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
  </div>

<script type="text/javascript">
        $(document).ready(function(){
            $('#bakery').DataTable();
        } );
    </script>

 </body>
</table>
</html>