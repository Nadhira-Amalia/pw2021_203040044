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
$garden = [
    [
        "nama" => "Lavender",
        "foto" => "b1.jpg",
        "harga" => "30000",
        "tinggi" => "25cm",
        "kategori" => "Tanaman Hias Bunga"
    ],
    [
        "nama" => "Krisan",
        "foto" => "b2.jpg",
        "harga" => "35000",
        "tinggi" => "30cm",
        "kategori" => "Tanaman Hias Bunga"
    ],
    [
        "nama" => "Alamanda",
        "foto" => "b3.jpg",
        "harga" => "20000",
        "tinggi" => "40cm",
        "kategori" => "Tanaman Hias Bunga"
    ],
    [
        "nama" => "Dahlia",
        "foto" => "b4.jpg",
        "harga" => "25000",
        "tinggi" => "50cm",
        "kategori" => "Tanaman Hias Bunga"
    ],
    [
        "nama" => "Hortensia",
        "foto" => "b5.jpg",
        "harga" => "75000",
        "tinggi" => "30cm",
        "kategori" => "Tanaman Hias Bunga"
    ],
    [
        "nama" => "Monstera",
        "foto" => "b6.jpg",
        "harga" => "75000",
        "tinggi" => "30cm",
        "kategori" => "Tanaman Hias Daun"
    ],
    [
        "nama" => "Syngonium",
        "foto" => "b7.jpg",
        "harga" => "40000",
        "tinggi" => "25cm",
        "kategori" => "Tanaman Hias Daun"
    ],
    [
        "nama" => "Philodendron",
        "foto" => "b8.png",
        "harga" => "50000",
        "tinggi" => "20cm",
        "kategori" => "Tanaman Hias Daun"
    ],
    [
        "nama" => "Anthurium Cobra",
        "foto" => "b9.jpg",
        "harga" => "100000",
        "tinggi" => "50cm",
        "kategori" => "Tanaman Hias Daun"
    ],
    [
        "nama" => "Calathea",
        "foto" => "b10.jpg",
        "harga" => "15000",
        "tinggi" => "25cm",
        "kategori" => "Tanaman Hias Daun"
    ],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloom Garden</title>
</head>
<body>
    <h1>Daftar Bunga</h1>

    <?php foreach ($garden as $bunga) : ?>
        <ul>
            <li><img src="img/<?= $bunga["foto"] ?>" alt=""></li>
            <li>Nama :<?= $bunga["nama"];  ?></li>
            <li>Ketinggian Tanaman :<?= $bunga["tinggi"];  ?></li>
            <li>Kategori :<?= $bunga["kategori"];  ?></li>
            <li>Harga :<?= $bunga["harga"];  ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>