<?php
/*
Nadhira Amalia
203040044
https://github.com/Nadhira-Amalia/pw2021_203040044
Pertemuan 5 - (12 maret 2021)
Mempelajari mengenai Array
Array multi dimensi
*/
?>

<?php
// membuat array didalam array (array multi dimensi)
// Array numerik, indeksnya angka yang dimulai dari 0
$mahasiswa = [
    ["Nadhira Amalia", "203040044", "Teknik Informatika", "amalianadhira@gmail.com"],
    ["Amalia Nadhira", "193040044", "Teknik Pangan", "nadhira@gmaill.com"],
    ["Nad", "183040044", "Teknik Industri", "nad@gmaill.com"]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>NRP: <?= $mhs[1]; ?></li>
            <li>Jurusan: <?= $mhs[2]; ?></li>
            <li>Email: <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

    <!-- Cara pertama -->
    <!-- <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?php echo $mhs; ?></li>
    <?php endforeach; ?>
    </ul> -->
</body>

</html>