<?php
/*
Nadhira Amalia
203040044
https://github.com/Nadhira-Amalia/pw2021_203040044
Pertemuan 7 - (21 maret 2021)
Mempelajari mengenai GET & POST
*/
?>
<?php
// variabel Superglobals -- variabel spesial

// Variable Scope / lingkup variabel
$x = 10; // variabel lokal untuk file latihan 1.php

function tampilX() {
    global $x; // Memanggil/mencari variabel $x diluar function
    echo $x;
}

tampilX();

// Variabel superglobals PHP, tipenya array associative
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// cek
var_dump($_GET); // kosong
var_dump($_POST);
var_dump($_SERVER); // info server

// Memasukan data kedalam variabel get
$_GET["nama"] = "Nadhira Amalia";
var_dump($_GET);

// $_GET
// Metode Request GET adalah metode pengiriman data melalui URL dan data tersebut bisa ditangkap oleh Variabel Superglobals $_GET
$mahasiswa = [
    [
        "nrp" => "203040044",
        "nama" => "Nadhira Amalia",
        "email" => "amalianadhira@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.jpg"
    ],
    [   
        "nrp" => "203040099",
        "nama" => "Nad",
        "email" => "nad@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "2.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li> 
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
        &nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
        <?= $mhs["nama"]; ?></a>
	</li>
    <?php endforeach; ?>
</ul>
</body>
</html>