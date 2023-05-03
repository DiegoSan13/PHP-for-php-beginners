<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Condicionales if/else (operadores de comparacion)</h2>
	<?php
		$tope=8;
		$precio_copa_bar=10;
		if ($precio_copa_bar<=$tope) {
			echo "Ponme una copa";
		}else {
			echo "No gracias, $precio_copa_bar € me parece un timo". "<br>";
		}
	?>
	<h2>Condicionales if/else (operadores logicos)</h2>
	<?php
		$num=rand(0,10); //La funcion rand(n,m) = nos devuelve un numero aleatorio entre n y m
		if ($num==2 || $num==5) {
			echo "Tu numero es $num ........ Has ganado!!". "<br>";
		} else {
			echo "Tu numero es $num ....... sigue intentandolo!!". "<br>";
		}
	?>
	<h2>Condicionales if/else (comparadores de igualdad)</h2>
	<?php
		$a=1;
		$b="1";
		if ($a==$b) {
			echo "Son iguales". "<br>";
		} else {
			echo "No son iguales". "<br>";
		}
	?>
	<h2>Condicionales if/else (variables boolean)</h2>
	<?php
		$mujer = true;
		if ($mujer) {
			echo "Bienvenida". "<br>";
		} else {
			echo "Bienvenido". "<br>";
		}
		$edad=25;
		$zapatillas=true;
		if ($edad>=18 && !$zapatillas) {
			echo "Puedes pasar". "<br>";
		} else {
			echo "No puedes pasar". "<br>";
		}
	?>
	<h2>Condicionales if/else (Funcion true o false)</h2>
	<?php
		$texto="hola";
		if (isset($texto)) {
			echo "Esta iniciada". "<br>";
		} else {
			echo "No esta iniciada". "<br>";
		}
		if (!isset($texto)) {
			echo "No esta iniciada". "<br>";
		} else {
			echo "Esta iniciada". "<br>";
		}
		$c;
		if (!isset($c)) {
			$c=8;
		}
		echo $c;
	?>
	<!----------------------PRACTICA------------------>
	<h2>Comprobar numero de palabras</h2>
	<?php
		$texto="Hola soy Víctor";
		$numero_permitido=3;
		if (str_word_count($texto, 0, "íÍ")==$numero_permitido) {
			echo "Cumple con el numero de palabras $numero_permitido". "<br>";
		} else {
			echo "No cumple el numero permitido de palabras $numero_permitido". "<br>";
		}
	?>
	<h2>Validacion de extension</h2>
	<?php
		$fichero="gatito.bonito.jpg";
		$text_perm="jpg";
	?>
	<h4>Opcion con strrchr():</h4>
	<?php
		if (strrchr($fichero, "j")==$text_perm) { //ltrim(strrchr($fichero, .), ".") == $text_perm)
			echo "Fichero permitido";
		} else {
			echo "Fichero no permitido";
		}
	?>
	<h4>Opcion con count():</h4>
	<?php
		$fichero_array = explode(".", $fichero);
		if ($fichero_array[count($fichero_array)-1] == $text_perm) {
			echo "Fichero permitido";
		} else {
			echo "Fichero no permitido";
		}
	?>
	<h4>Opcion con end():</h4>
	<?php
		if (end($fichero_array) == $text_perm) {
			echo "Fichero permitido";
		} else {
			echo "Fichero no permitido";
		}
	?>
	<h2>Estructura de embudo</h2>
	<?php
		$edad=17;
		$mujer=true;
		//Mensajes: "Tienes $edad años y por tanto no puedes pasar", "Pasas gratis >=18 y sea mujer", no eres mujer "si quieres pasar tienes que pagar"
		if ($edad>= 18) {
			if ($mujer) {
				echo "Pasas gratis";
			} else{
				echo "Si quieres pasar tienes que pagar";
			}
		} else {
			echo "Tienes $edad y por tanto no puedes pasar";
		}
	?>
	<br>
	<?php
		$billete=true;
		$destino="Portugal";
		$mujer=false;
		//Si no tiene billete "No puedes viajar porque no tiene billete", si tiene billete y el destino es distito de portugal "buen viaje", si es portugal preguntaremos si es mujer o no le diremos "Buenas señora" y sino "Buenas señor"
		if ($billete) {
			if ($destino!="Portugal") {
				echo "Buen viaje";
			} else if ($mujer) {
				echo "Buenas señora";
			}else{
				echo "Buenas señor";
			}
		} else {
			echo "No puedes viajar porque no tiene billete";
		}
		
	?>
</body>
</html>