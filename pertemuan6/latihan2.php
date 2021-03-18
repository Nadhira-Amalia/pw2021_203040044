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
// Array Numerik (array biasa)
$mahasiswa = ["Nadhira Amalia", "203040044", "amalianadhira@gmail.com", "Teknik Informatika"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li>
    </ul>
</body>
</html>

<?php
// Array Associative
// sama dengan array numerik, tetapi key nya string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Nadhira Amalia",
        "nrp" => "203040044",
        "email" => "amalianadhira@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "Arihdan",
        "nrp" => "203040098",
        "email" => "dan@gmail.com",
        "jurusan" => "Teknik Pangan",
        "gambar" => "2.png",
        "tugas" => [87, 80, 85]
    ]
];

echo $mahasiswa[1]["tugas"][1];

// Menampilkan array associative di html yang didalamnya terdapat gambar 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"];  ?>" alt="">
            </li>
            <li>Nama :<?= $mhs["nama"]; ?></li>
            <li>NRP :<?= $mhs["nrp"]; ?></li>
            <li>Email :<?= $mhs["email"]; ?></li>
            <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>