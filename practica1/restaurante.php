<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi comida favorita es - <?php echo $_GET['favFood'];?></title>
</head>
<body>
<?php
   	echo 'Mi comida favorita en el restaurante es:  ';
   	echo $_GET['favFood'];
   	echo '<br/>';
   	$restRating = 5;
   	echo 'Y la calificacion que le doy es de: ';
   	echo $restRating;
 ?>
</body>
</html>