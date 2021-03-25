<?php
/*
Nadhira Amalia
203040044
Shift Jumat 10.00 - 11.00
*/
?>
<?php 

// function melakukan connect ke database
$conn = mysqli_connect("localhost", "root", "", "pw_tubes_203040044");
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040044");

    return $conn;
}

// function untuk melakukan query dan memasukkannya ke dalam ARRAY
function query($sqL)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sqL);
    $bakery = [];
    while ($bak = mysqli_fetch_assoc($result)) {
        $bakery[] = $bak;
    };
    return $bakery;
}
?>