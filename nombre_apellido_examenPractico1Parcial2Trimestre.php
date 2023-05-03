<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
		<input type="number" name="dia" placeholder="Inserta el dia">
		<input type="number" name="mes" placeholder="Inserta el mes">
		<input type="number" name="año" placeholder="Inserta el año">
		<input type="submit" value="Enviar" name="form">
	</form>
	<?php
		$meses = array("enero", "febrero", "marzo", "abril", "mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		extract($_GET); 
 		if (isset($_GET["form"])) { 
 			if (!empty($dia)) {
 				if (!empty($mes)) {
 					if (!empty($año)) {
 						if ($dia>31 || $dia<1) {
 							echo "Los días van del 1 al 31";
 						} else {
 							if ($mes>12 || $mes<1) {
 								echo "Los meses van comprendidos del 1 al 12";
 							} else {
 								if ($dia>30) {
 									if ($mes=='4' || $mes=='6' || $mes=='9' || $mes=='11') {
 										echo "Este mes tiene 30 días";
 									}
 								} else {
 									if ($dia>28 && $mes=='2') {
 										echo "El mes de $meses[1] tiene como máximo 28 días";
 									} else {
 										switch ($mes) {
 											case '1':
 												echo "Fecha correcta, $dia de $meses[0] de $año";
 												break;
 											case '2':
 												echo "Fecha correcta, $dia de $meses[1] de $año";
 												break;
 											case '3':
 												echo "Fecha correcta, $dia de $meses[2] de $año";
 												break;
 											case '4':
 												echo "Fecha correcta, $dia de $meses[3] de $año";
 												break;
 											case '5':
 												echo "Fecha correcta, $dia de $meses[4] de $año";
 												break;
 											case '6':
 												echo "Fecha correcta, $dia de $meses[5] de $año";
 												break;
 											case '7':
 												echo "Fecha correcta, $dia de $meses[6] de $año";
 												break;
 											case '8':
 												echo "Fecha correcta, $dia de $meses[7] de $año";
 												break;
 											case '9':
 												echo "Fecha correcta, $dia de $meses[8] de $año";
 												break;
 											case '10':
 												echo "Fecha correcta, $dia de de $meses[9] de $año";
 												break;
 											case '11':
 												echo "Fecha correcta, $dia de $meses[10] de $año";
 												break;
 											case '12':
 												echo "Fecha correcta, $dia de $meses[11] de $año";
 												break; 											
 										}
 									}
 									
 								}
 							}
 						}
	 			} else {
 					echo "Debes rellenar todos los datos";
 				}
	 		} else {
 				echo "Debes rellenar todos los datos";
 			}
	 	} else {
 			echo "Debes rellenar todos los datos";
 		}
 	}
 ?>

</body>
</html>