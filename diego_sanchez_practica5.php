<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
		<input type="number" name="hora" placeholder="Inserta una hora">
		<input type="submit" value="comprobar" name="form">
	</form>
	<?php
	if (isset($_GET["form"])) {
		extract($_GET);
			if (empty($_GET["hora"])) {
				echo "Debes rellenar todos los campos";
			} else { 
				if ($hora<0 || $hora>24) {
					echo "Hora inválida";
				} else {
				switch ($hora) {
					case '7':
					case '8':
					case '9':
					case '10':
					case '11':
					case '12':
						echo "Buenos días";
						break;
					case '13':
					case '14':
					case '15':
					case '16':
					case '17':
					case '18':
					case '19':
					case '20':
						echo "Buenos tardes";
						break;
					case '6':
					case '5':
					case '4':
					case '3':
					case '2':
					case '1':
					case '21':
					case '22':
					case '23':
					case '24':
					case '00':
						echo "Buenos noches";
						break;
					}
				}
			} 
		}
	?>

</body>
</html>