<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>Bucles</h1>
	<p>Nos sirve para ejcutar un código n veces mientras la condicion se cumple o para pintar el valor de la variable en cada una de sus vueltas</p>

	<h2>Bucle while</h2>

	<?php
		/*
		
			Sintaxis:
				inicializacion;
				while(condicion){
					sentencias;
					incremento/decremento;	
				}

		*/
	?>

	<h3>Contar hasta 10</h3>

	<?php

		$a=3;
		//Mientras sea <10, pintar hola

		while ($a<10) {
			echo "Hola <br>";
			$a++;
		}
	?>

	<h3>Cuenta atrás</h3>

	<?php

	$a=0;
	//10-9-8-7-6-5-4-3-2-1-0-

	while($a <=10){
		echo 10-$a . "-";
		$a++;
	}
	?>

	<br>

	<?php

	$a=10;
	//10-9-8-7-6-5-4-3-2-1-0-

	while($a >=0){
		echo $a . "-";
		$a--;
	}
	?>

	<h3>Recorrer un array tradicional</h3>

	<?php
		$alumnos = array("Marco", "Ivan", "Maria");
		// Marco, Ivan, Maria

		$i=0;

		while($i < count($alumnos)){
			if ($i == count($alumnos)-1) {
				echo $alumnos[$i];
			} else {
				echo $alumnos[$i] . ", ";
			}			
			$i++;
		}
	?>

<!--------------------------------------------------------->

	<h2>Bucle for</h2>

	<?php
		/*
			
			Sintaxis:
			for(inicializacion;condicion;incremento/decrmento){
				sentencias
			}

		*/
	?>

	<h3>Contar hasta 10</h3>

	<?php
		//0-1-2-3-4-5-6-7-8-9-10-
		for ($i=0; $i < 11 ; $i++) { 
			echo $i . "-";
		}
	?>

	<h3>Contar atrás</h3>

	<?php
	//10-9-8-7-6-5-4-3-2-1-0-
	for ($i=10; $i >=0 ; $i--) { 
		echo $i . "-";
	}
	?>

	<h3>Recorrer un array tradicional</h3>
	<?php
		$alumnos = array("Rodrigo", "Alexander", "Gustavo");
		for ($i=0; $i < count($alumnos) ; $i++) { 
			echo $alumnos[$i] . ", ";
		}
	?>

<!-------------------------------------------------------------------->

	<h2>Bucle de tipo foreach</h2>
	<p>Es un bucle que nos sirve para recorrer tanto arrays tradicionales como asociativos</p>
	<?php
		/*
			
			Sintaxis (Array asociativos):
			foreach($array as $clave => $valor){
				sentencias
			}
			Sintaxis (Array tradicionales):
			foreach($array as $valor){
				sentencias
			}

		*/

	?>

	<h3>Recorrer un array asociativo</h3>

	<?php
		$usuarios = array("u1" => "Jhon", "u2" => "Sergio", "u3" => "Ricardo");
		foreach ($usuarios as $claveUser => $valorUser) {
			echo "El $claveUser es $valorUser <br>";
		}
	?>

	<h3>Recorrer un array tradicional</h3>

	<?php
		$usuarios = array("Andrei", "Lyulin", "Bryant");
		foreach($usuarios as $valorUser){
			echo "$valorUser <br>";
		}


	?>
</body>
</html>