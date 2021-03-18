<?php
/*
Nadhira Amalia
203040044
https://github.com/Nadhira-Amalia/pw2021_203040044
Pertemuan 6 - (18 maret 2021)
Mempelajari mengenai Array Associative
*/
?>

<?php
// Review Array
// Membuat Array
// Cara Lama
$hari = array("Senin", "Selasa", "Rabu");
// Cara Baru
$bulan = ["Januari", "Februari", "Maret"];
// Tipe Data Yang Berbeda-beda
$arr = [100, "halo world", true];

//Menampilkan Array
//Menggunakan Versi Debungging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan 1 Elemen Pada Array
echo $arr[0];
echo "<br>";

// Menampilkan array bisa menggunakan pengulangan (for / foreach}
foreach ($hari as $h) {
    echo "$h <br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: #bada55;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <?php
// Membagi array lagi, didalam array angka terdapat array lagi.
    $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>
    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><?= $b; ?> </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>

</html>