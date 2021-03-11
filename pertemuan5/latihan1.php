<?php
/*
Nadhira Amalia
203040044
https://github.com/Nadhira-Amalia/pw2021_203040044
Pertemuan 5 - (12 maret 2021)
Mempelajari mengenai Array
*/
?>
<?php
// Array
// Array adalah sebuah variable yang dapat memiliki banyak nilai
// Element pada array boleh memiliki tipe data yang berbeda 
// Definisi array adalah pasangan antara key dan value
// Key nya adalah index yang dimulai dari 0 

// Variabel biasa
$hari1 = "Senin";
$hari2 = "Selasa";

//cara lama (sebelum php versi 5.4)
$hari = array("Senin", "Selasa", "Rabu");

//cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan  1 elemen pada Array
// ketika 1 elemen boleh menggunakan echo
echo $arr1[0];
echo "<br>";
echo $bulan[1];

// Menambahkan elemen baru pada Array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

?>