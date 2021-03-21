<?php
/*
Nadhira Amalia
203040044
https://github.com/Nadhira-Amalia/pw2021_203040044
Pertemuan 7 - (21 maret 2021)
Mempelajari mengenai GET & POST
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
</head>
<body>

<form action="latihan4.php" method="POST">
        Masukkan nama : 
        <input type="text" name="nama">
        <button type="submit" name="submit">Kirim</button>
    </form>
    

<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<br>

<form action="" method="post">
    Masukkan Nama: 
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim</button>
</form>

</body>
</html>