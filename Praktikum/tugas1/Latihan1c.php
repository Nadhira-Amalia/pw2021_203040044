<?php 
// Nadhira Amalia
// 203040044
// Jumat 10.00 - 11.00
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1c</title>
    <style>
        
        div{
            width: 50px;
            height:50px;
            background: salmon;
            border-radius: 50%;
            text-align: center;
            line-height: 50px;
            display: inline-block;
            border: 2px solid black;
            margin: 0px 10px 10px 0px;
        }
    </style>
</head>
<body>

<?php
for ($i=1; $i <=3; $i++){ 
    for ($j=$i; $j>=1; $j--){
    echo "<div>$i</div>";
 }echo "<br>";
} ?>
    

</body>
</html>