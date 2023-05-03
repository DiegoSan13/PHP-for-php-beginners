<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Práctica entregable superglobales Diego </h2>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
		<input type="text" name="nameUser1" placeholder="Inserta tu nombre">
		<input type="text" name="nameUser2" placeholder="Inserta tu nombre">
		<input type="text" name="nameUser3" placeholder="Inserta tu nombre">
		<input type="submit" value="Probar">
	</form>
	<?php
		$num_pos = array_rand($_GET);
		echo "El ganador es ". $_GET[$num_pos];
	?>
	<form action="practicaSuperglobales.php" method="post">
		<input type="text" name="nameUser1" placeholder="Inserta tu nombre">
		<input type="text" name="nameUser2" placeholder="Inserta tu nombre">
		<input type="text" name="nameUser3" placeholder="Inserta tu nombre">
		<input type="submit" value="Probar post">
	</form>
</body>
</html>