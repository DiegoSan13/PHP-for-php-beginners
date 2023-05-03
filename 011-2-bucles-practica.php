<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Contatenar valores de un array tradicional</h2>
	<?php
		$telefonos = array("601 520 541", "974 501 342", "461 205 503");
	?>
	<h3>Bucle foreach</h3>
	<?php
		$telString= "";
		foreach ($telefonos as $telefono) {
			$telString = $telString . " / " . $telefono; 
		}
		echo ltrim($telString, " / ");
	?>

	<h3>Bucle for</h3>
	<?php
		$telString= "";
		for ($i=0; $i < count($telefonos); $i++) { 
			$telString = $telString . " / " . $telefonos[$i]; 
		}
		echo ltrim($telString, " / ");
	?>

</body>
</html>