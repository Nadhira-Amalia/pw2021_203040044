<?php
/* 
Nadhira Amalia
203040044
Shift Jumat 10.00 - 11.00
*/
?>
<?php
$jawabanIsset = "Isset adalah = Function yang melakukan pemeriksaan apakah suatu variabel sudah terisi atau belum <br><br>";
$jawabanEmpty = "Empty adalah = Function yang digunakan untuk memeriksa apakah suatu variabel sudah terisi atau belum ";

$GLOBALS['jawabanIsset'] = $jawabanIsset;
$GLOBALS['jawabanEmpty'] = $jawabanEmpty;

function soal($style)
{
    echo "<div class='$style'>" 
    . $GLOBALS['jawabanIsset'] . $GLOBALS['jawabanEmpty'] .  
    "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b</title>
    <style>
    .pembungkus{
        padding: 10px;
        font-size: 20px;
        border: 1px solid black;
        box-shadow: 0 0 5px gray;
        width: 70%;
    }
    </style>
</head>
<body>
    <?php 
        echo soal("pembungkus");
    ?>
    <!--https://medikre.com/stories/penggunaan-fungsi-empty-isset-dan-unset-pada-php -->
</body>
</html>