<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		//Ejercicio 1 Crear una variable llamada "mensaje" que contenga el siguiente valor "Hoy es lunes" y muestra por pantalla que tipo de dato almacena la variable "mensaje".
		$mensaje = "Hoy es lunes";
		echo(gettype($mensaje)). "<br>"; //La funcion gettype($var_name) = obtiene el nombre del tipo de variable que tenemos
		//Ejercicio 2 Usa una función para eliminar el valor de la variable "mensaje".
		echo('La variable $mensaje esta vacio' . empty($mensaje)). "<br>"; //La funcion empty($var_name) = borra todo lo que contanga la variable
		//Ejercicio 3 Muestra TRUE (1), si la variable "mensaje" no tiene valor.
		$mensaje_vacio = empty($mensaje);
		echo empty($mensaje_vacio). "<br>";
		//Ejercicio 4 Crea una nueva variable, llamándola como quieras que contenga como valor "No CuenTes LoS Días, Haz qUe los DÍas cuEnTeN", y muestra por pantalla sin crear nuevas variables "los días, haz que".
		$frase = "No CuenTes LoS Días, Haz qUe los DÍas cuEnTeN";
 		echo mb_strtolower(mb_substr($frase,11,17)). "<br>"; //La funcion mb_substr($var_name, n, m) = devuelve el contenido de tu variable que se encuentre desde la posicion "n" hasta la "m"
 		//Ejercicio 5 Usando la variable anterior y sin crear nuevas variables, sustituye las palabras "Días" por "meses", mostrando por pantalla "No Cuentes Los Meses, Haz Que Los Meses Cuenten" (Debe mostrarse el mensaje en el mismo formato indicado).
 		echo ucwords(mb_strtolower(str_replace(array('DÍas', 'Días'), "meses", $frase))). "<br>"; // La funcion ucwords($var_name) = la primera letra de todas las palabras de tu variable en mayusculas y str_replace(palabra a buscar, palabra de remplazo, $var_name) = devuelve la cadena de texto modificada. Si admite caracteres especiales
 		//Ejercicio 6 Sin crear una nueva variable, y usando la variable anterior, muestra por pantalla el número de palabras que tiene la variable
 		echo str_word_count($frase, 0, "íÍ"). "<br>"; // La funcion str_word_count($var_name) = al numero de palabras que contiene tu variable

	?>
</body>
</html> 