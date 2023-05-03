<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$nota=9;
		//Si la nota es menor de 5 = "Suspenso" si es menor que 7 = "Bien", si es menor de 9 = "Notable", si no = sobresaliente
		if ($nota>=5) {
			if ($nota>=7) {
				if ($nota>=9) {
				echo "Sobresaliente";
				} else {
				echo "Notable";
				}
				
			} else {
				echo "Bien";
			}
		} else {
			echo "Suspenso";
		}
	?>
</body>
</html>