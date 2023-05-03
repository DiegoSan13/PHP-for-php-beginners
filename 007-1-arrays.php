<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Arrays asociativos</h2>
	<?php
		//Array asociativo = asocia valores con claves.
		//Sintaxis: $var = array("clave" => "valor","clave" => "valor",........)
		$capitales = array("España" => "Madrid", "Francia" => "Paris", "Alemania" => "Berlin",);
		echo "La capital de España es " .$capitales["España"]. "<br>";
		echo "La capital de Francia es " .$capitales["Francia"]. "<br>";
		echo "La capital de Alemania es " .$capitales["Alemania"]. "<br>";
	?>
	<h2>Array tradicional</h2>
	<?php
		//Array tradicional = asocia valores con indices o posiciones
		//Sintaxis: $var = array(valor1, valor2,....)
		$capitales = array("Madrid","Paris","Berlin","Londres");
		echo "La capital de España es " .$capitales[0]. "<br>";
		echo "La capital de Francia es " .$capitales[1]. "<br>";
		echo "La capital de Alemania es " .$capitales[2]. "<br>";
		echo "La capital de Gran Bretaña es " .$capitales[3]. "<br>";
	?>
	<h2>Pintar por pantalla el contenido de un array</h2>
	<?php
		//No podemos pintar el contenido de un array con echo $capitales
		//Funcion var_dump($var_array) = imprime por pantalla el contenido del array, devolviendo informacion sobre el numero de elementos que contiene, tipos de datos, longitud de caracteres de cada uno de los valores y la sntaxiss "clave" ==> "valor"
		var_dump($capitales). "<br>";
		//Funcion print_r($var_array) = imprime por pantalla contenido del array, devolviendo unicamente la sintaxis "clave" => "valor"
		$usuarios = array("Ivan", "Marco", "Maria");
		echo 'Los $usuarios de mi plataforma son '. $usuarios[0];

 	?>
</body>
</html>