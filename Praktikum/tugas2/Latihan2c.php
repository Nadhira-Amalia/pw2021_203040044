<?php
/* 
Nadhira Amalia
203040044
Shift Jumat 10.00 - 11.00
*/
?>
<?php 
    function tumpukanBola($tumpukan)
    {
        for($i = 1; $i <= $tumpukan; $i++) {
            for ($j=1; $j <= $i; $j++){
                echo "<div class = 'bola'>$i</div>";
            }
        echo "<br>";
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
    .bola{
        margin: 5px 5px 0 0;
        text-align: center;
        line-height: 50px;
        width: 50px;
        height: 50px;
        background-color: salmon;
        border: 1px solid black;
        display: inline-block;
        border-radius: 100%;
    }

    .pembungkus {
        border: 2px solid black;
        width: 50%;
        padding: 10px;
    }
    </style>
</head>
<body>
    <div class="pembungkus">
        <?php echo tumpukanBola(7); ?>
    </div>
</body>
</html>