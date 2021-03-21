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
if(!isset($_POST["nama"])){
    header("Location: latihan3.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <h1>Selamat Datang <?= $_POST["nama"]; ?></h1>
</body>
</html>