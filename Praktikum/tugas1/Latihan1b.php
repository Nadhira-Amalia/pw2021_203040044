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
    <title>Latihan 1b</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>

        <?php for( $i = 1; $i <= 5; $i++ ) :  ?>
            <tr>
            <th>Baris <?= $i; ?></th>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td><?php echo "Baris $i, Kolom $j"; ?></td>
                <?php endfor; ?>
            </tr>  
        <?php endfor; ?>
        
    </table>           
</body>
</html>