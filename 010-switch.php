<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h2>Validacion con switch</h2>

	<?php

		$lugarNacimiento = "Madrid";

		switch ($lugarNacimiento) {
			case 'Madrid':
					echo "Eres madrileño";
					break;
			case 'Barcelona':
					echo "Eres catalán";		
					break;
			default:
				echo "Eres ciudadano del mundo";
		}
	?>

	<h2>Validacion con switch multiple</h2>

	<?php

		$lugarNacimiento = "Huesca";

		switch($lugarNacimiento){
			case 'Teruel':
			case 'Huesca':
			case 'Zaragoza':
				echo "Eres maño";
				break;
			case 'Madrid':
				echo "Eres madrileño";
				break;
			default:
				echo "Eres ciudadano del mundo";
		}
	?>

	<!-------------------PRACTICA---------------------->

	<h2>Practica</h2>

	<?php

		$edad =1996;
		$destino= "Francia";
		$edad2 = 2023-$edad;

		//Usando if y switch, si la edad es menor a 18 le diremos "Debes viajar en comapañia de un adulto ya que tienes $edad años"
		//Si es mayor de 17, sia viaja a Francia le diremos "Von voyage" , si viaja a alemania le diremos "Gute fahrt" y si viaja a inglaterra le diremos "Good trip" y si viaja a cualquier otro sitio, le diremos "Buen viaje"


		if ($edad2 >17 ) {
			switch($destino){
				case 'Francia':
					echo "Von voyage";
					break;
				case 'Alemania':
					echo "Gute fahrt";
					break;
				case 'Inglaterra':
					echo "Good trip";
					break;
				default:
					echo "Buen viaje";
			}
		}else {
			echo "Debes viajar en comapañia de un adulto ya que tienes $edad2 años";
		}
	?>
</body>
</html>