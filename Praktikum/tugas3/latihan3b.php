<?php
/*
Nadhira Amalia
203040044
Shift Jumat 10.00 - 11.00
*/
?>

<?php 
$pemainBola = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
</head>
<style>
    .tabel {
        border: 2px solid;
        width: 55%;
        padding: 10px;
        text-align: left;
        font-family: Arial, Helvetica, sans-serif;
        line-height: 30px;
    }

</style>
<body>
    <div class="tabel">
    <p><b> Daftar pemain bola terkenal</b></p>
    <ol>
        <?php foreach($pemainBola as $pl) : ?>
            <li><?= $pl ?></li>
        <?php endforeach; ?>
    </ol>

    <?php
    array_push($pemainBola,"Luca Modric","Sadio Mane");

    sort($pemainBola);
    ?>

    <p><b>Daftar pemain bola terkenal baru</b></p>
    <ol>
        <?php foreach($pemainBola as $pb) : ?>
            <li><?= $pb ?></li>
        <?php endforeach; ?>
    </ol>
    </div>
</body>
</html>