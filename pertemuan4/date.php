<?php
/*
Nadhira Amalia
203040044
https://github.com/Nadhira-Amalia/pw2021_203040044
Pertemuan 4 - (1 maret 2021)
Mempelajari mengenai beberapa function PHP (date/time)
*/
?>

<?php
// referensi untuk melihat function php https://www.php.net/docs.php

// cara memanggil function cukup dengan mengetikan functionnya

// ---Date---
// fungsi date membutuhkan minimal 1 parameter
// memanggil sebuah fungsi didalam PHP untuk mengelola tanggal
// Untuk menampilkan tanggal dengan format tertentu
// l = hari, d = tanggal
echo date("l");
echo date("l, d-M-Y");

// ---Time---
// time boleh tidak menggunakan parameter
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// 1 Januari 1970 merupakan waktu yg disepakati untuk komputer
// Function time ini tetapi menghitung detik dari per hari ini, yang sudah berlalu sejak 1 Januari 1970
echo time();

// 2 function dapat digabungkan
// untuk mengecek 2 hari kedepan
echo date("l", time()+172800);
// untuk mempermudah cukup masukkan operasi matematika
echo date("l", time()+60*60*24*2);

// untuk mengecek 100 hari kedepan
echo date("l", time()+60*60*24*100);

// untuk mengecek 100 hari kebelakang
echo date("l", time()-60*60*24*100);
echo date("d M Y", time()-60*60*24*100);

// ---mktime---
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun

// mengetahui detik yg sudah berlalu
echo mktime(0,0,0,8,14,2020); 

// untuk mengetahui hari dari fungsi
echo date ("l", mktime(0,0,0,8,14,2020));

// ---strtotime---
// masukkan format tanggal keluar detik
echo date("l", strtotime("14 aug 2020"));
echo date("l", strtotime("14 august 2020"));
?>

<?php
/* 
---String---
strlen() untuk menghitung panjang sebuah string
strcmp() untuk membandingkan 2 buah string
explode() untuk memecah sebuah string menjadi array
htmlspecialchars untuk menjaga website kita dari hacker

---Utility--- 
var_dump() untuk mencetak isi sebuah variabel, objek, array
isset() untuk mengecek apakah sebuah variabel suda dibuat apa belum, dan akan menghasilan boolean true or false
empty() untuk mengecek apakah sebuah variabel ada isi nya atau tidak
die() ketika program bertemu die makan program dibawahnya tidak akan dieksekusi
sleep() untuk memberhentikan sementara 
*/ ?>