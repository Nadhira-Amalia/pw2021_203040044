<?php
/* 
Nadhira Amalia
203040044
Shift Jumat 10.00 - 11.00
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Latihan2a</title>
    <style>
        .tulisan {
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-weight: bolder;
            font-style: italic;
            padding: 6px;
            margin-top: 1px;
        }
        .pembungkus {
            border-radius: 5px ;
            box-shadow: 0 0 5px gray;
            border: 2px solid black;
            padding: 3px;
            width: 50%;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php 
     function gantiStyle($tulisan, $style1, $style2) {
        echo "<div class='$style1'>

            <p class='$style2'> $tulisan </p> </div>";
    }
    ?>

    <?= gantiStyle("Selamat datang di praktikum PW", "pembungkus", "tulisan")?>
    
</body>
</html>