<?php
/*
Nadhira Amalia
203040044
https://github.com/Nadhira-Amalia/pw2021_203040044
Pertemuan 5 - (12 maret 2021)
Mempelajari mengenai Array
Pengulangan Array
*/
?>
<?php
// Pengulangan pada array
// for / foreach
$angka = [3, 2, 14, 39, 15, 8, 71, 99];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>
    <?php foreach ( $angka as $a ) { ?>
        <div class="kotak"><?php echo $a ?></div>
    <?php } ?>

    <div class="clear"></div>

        <!-- templating -->
    <?php foreach ( $angka as $a ) : ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach; ?>
    
</body>
</html>