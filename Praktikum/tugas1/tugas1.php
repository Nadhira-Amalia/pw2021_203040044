<?php 
// Nadhira Amalia
// 203040044
// Jumat 10.00 - 11.00
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas 1</title>

<style>

    .warna1{
        background: salmon;
        display: inline-block;
        margin: 2px;
        border: 2px solid black;
    }

    .warna2{
        background: lightblue;
        display: inline-block;
        margin: 2px;
        border: 2px solid black;
    }
   
</style>
</head>
<body>

	<table border="0" cellpadding="20" cellspacing="0">

		<?php for( $i = 1; $i <= 6; $i++ ) : ?>
			<tr>
				
				<?php for( $j = 1; $j <= 6; $j++ ) : ?>
					
					<?php if( ($i + $j) %2 == 1 ) { ?>
						<td class="warna1"></td>
					<?php } else if( ($i + $j) %2 == 0 ) { ?>
						<td class="warna2"></td>
					<?php } ?>

				<?php endfor; ?>

			</tr>
		<?php endfor; ?>
		
	</table>

</body>
</html>