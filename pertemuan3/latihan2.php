<?php

/*
Nadhira Amalia
203040044
https://github.com/Nadhira-Amalia/pw2021_203040044
Pertemuan 2 - 21 Februari 2021
Mempelajari mengenai struktur kendali PHP yaitu pengulangan dan pengkondisian
*/

// PENGKONDISIAN / PERCABANGAN
// if else
// if else if else
// ternary (digunakan untuk mengganti if else yang sederhana)
// switch (digunakan jika sdh terlalu banyak membuat if else)

$x = 10;
if($x < 20) {
    echo "benar";
}

$x = 20;
if($x < 20) {
    echo "benar";
}

$x = 10;
if($x < 20) {
    echo "benar";
} else {
    echo "salah";
}

// --- if else if else ---
$x = 20; 
if( $x < 20 ) {
    echo "benar";
} else if( $x == 20) {
    echo "bingo!";
} else {
    echo "salah";
}

$x = 30; 
if( $x < 20 ) {
    echo "benar";
} else if( $x == 20) {
    echo "bingo!";
} else {
    echo "salah";
}

$x = 10; 
if( $x < 20 ) {
    echo "benar";
} else if( $x == 20) {
    echo "bingo!";
} else {
    echo "salah";
}

?>

<!-- contoh menggunakan if -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1,2</title>
    <style>
        .warna-baris{
            background-color:silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ( $i = 1; $i <= 3; $i++ ): ?>
            <?php if ($i%2==1) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for( $x = 0; $x <= 5; $x++): ?>
                    <td><?php echo "$i, $x" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor;  ?>
    </table>
</body>
</html>