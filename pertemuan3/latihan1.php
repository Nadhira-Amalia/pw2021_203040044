<?php

/*
Nadhira Amalia
203040044
https://github.com/Nadhira-Amalia/pw2021_203040044
Pertemuan 2 - 21 Februari 2021
Mempelajari mengenai struktur kendali PHP yaitu pengulangan dan pengkondisian
*/


// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// --- for ---
for( $i = 0; $i < 5; $i++ ) {
    echo "Hello World! <br>";
}
// didalamnya ada 3 bagian 
// 1.inisialisasi, menentukan variabel awal untuk pengulangannya
// 2.kondisi terminasi, digunakan untuk memberhentikan pengulangannya
// 3.Increment/Decrement, agar pengulangannya dapat maju atau mundur

// Array didalam PHP indexnya dimulai dari 0

// --- while ---
$i = 0;
while ( $i < 5 ) {
    echo "Hello World! <br>";
$i++;
}

$i = 10;
while ( $i < 5 ) {
    echo "Hello World! <br>";
$i++;
}

// --- do.. while ---
$i = 0;
do {
    echo "Hello World! <br>";
$i++;
} while( $i < 5 );

$i = 10;
do {
    echo "Hello World! <br>";
$i++;
} while( $i < 5 );
?>