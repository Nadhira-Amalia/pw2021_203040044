<?php
/*
Nadhira Amalia
203040044
https://github.com/Nadhira-Amalia/pw2021_203040044
Pertemuan 2 - 12 Februari 2021
Mempelajari mengenai sintaks PHP
*/

// ctrl + / (komentar)
// untuk 1 baris
/* untuk banyak baris*/


// Standar Output
// echo, print
// print_r (untuk debugging, mencetak isi array)
// var_dump (untuk debugging)

// echo string
echo "Nadhira Amalia";

// echo angka tidak perlu menggunakan kutip
echo 203040044;

// echo booleant
echo true;
echo false;

// echo untuk mencetak string bisa menggunakan kutip 2 (") atau kutip 1 (')
// menggunakan kutip 2 (") ketika di dalam stringnya terdapat kutip
// kutip 2 sedikit lebih sakti dari kutip 1
echo "Jum'at";

//contoh print dan print_r
print "Nadhira Amalia";
print_r("Nadhira Amalia");

//var_dump memberi informasi mengenai tipe data dan ukurannya
var_dump("Nadhira Amalia");


// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// dengan menggunkan kutip dua kita dapat menggunakan konsep interpolasi
// Interpolasi = untuk mengecek ada tidak nya variabel didalam kutip dua atau string, jika ada variabel ditampilkan
$nama = "Nad";

echo "Halo, nama saya $nama";
echo 'Halo, nama saya $nama';

// Operator 
// aritmatika
// + - * / %
echo 1 + 1;

$x = 10;
$y = 20;
echo $x * $y;

// penggabung string / concatenation / concat
// operatornya titik (.)
$nama_depan = "Nadhira";
$nama_belakang = "Amalia";
echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x = 5;
echo $x;

$x = 1;
$x += 5;
echo $x;

$x = 1;
$x -= 5;
echo $x;

$nama = "Nadhira";
$nama .= " ";
$nama .= "Amalia";
echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// tidak mengecek tipe data
var_dump(1 < 5);
var_dump(1 > 5);
var_dump(1 == 5);

var_dump(1 == "1");

// Identitas
// ===, !==
var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);

$x = 30;
var_dump($x < 20 && $x % 2 == 0);

$x = 30;
var_dump($x < 20 || $x % 2 == 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>

    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>

    <?php
        echo "<h1>Halo, Selamat Datang Nadhira</h1>"
    ?>
    
</body>
</html>