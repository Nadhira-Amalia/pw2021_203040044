<?php
/*
Nadhira Amalia
203040044
https://github.com/Nadhira-Amalia/pw2021_203040044
Pertemuan 4 - (1 maret 2021)
Mempelajari mengenai function PHP (User-defined Function)
*/
?>

<?php
// User-defined Function = function harus didefinisikan dulu 
// Function biasanya mengembalikan nilai

function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php echo salam("Siang", "Nad"); ?></h1>
</body>
</html>