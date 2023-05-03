<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Numero de elementos que hay en un array</h2>
	<?php
		//Funcion count($var_array) = devuelve el numero de los elementos que hay en un array
		//A. asociativo
		$usuarios = array("u1" => "Yolanda", "u2" => "Andres", "u3" => "Jose David");
		//A. tradicional
		$users = array("Yolanda", "Andres", "Jose David");
		echo 'El array $usuarios tiene '.count($usuarios). " valores <br>";
		echo 'El array $users tiene '.count($users). " valores <br>";
	?>
	<h2>Crear un array a partir de un string</h2>
	<?php
		//Funcion explode(caracter de divisio, $string) = devuelve el array resultante de dividir la cadena de texto a partir del caracter buscado, es decir, divide una cadena de texto y crea un array con estos sub-textos
		$string = "yolanda@ceacfp.com,andres@ceacfp.com,josedavid@ceacfp.com";
		$emails = explode(",", $string);
		var_dump($emails);
		echo "<br>". $emails[0]. "<br>";
		echo $emails[1]. "<br>";
		echo $emails[2]. "<br>";

		//El email josedavid@ceacfp.com tiene 20 palabras
		echo "El email ". $emails[2]. " tiene ". strlen($emails[2]). " caracteres". "<br>";
	?>
	<h2>Obtener el ultimo elemento de un array</h2>
	<h3>opcion con funcion end()</h3>
	<?php
		//Funcion end($var_name) = devuelve el ultimo elemento de un array
		$fichero = "ceac.fondo-escritorio.png";
		$fichero_array = explode(".", $fichero);
		echo end($fichero_array). "<br>";
	?>
	<h2>Opcion con funcion</h2>
	<?php
		$fichero = "casa-blanca.png";
		$fichero_array = explode(".", $fichero); //fichero_array ("casa-blanca", "jpg")
		echo $fichero_array[0]. "<br>";
		$fichero = "gatito.bonito.jpg";
		$fichero_array = explode(".", $fichero);
		echo $fichero_array[count($fichero_array)-1]. "<br>";
	?>
	<h2>Crear un string a partir de un array</h2>
	<?php
		//Funcion implode(caracter de divisor, $var_array) = devuelve una cadena de texto creada a partir de los elementos de un array separandolos por el caracter de division.
		$emails = array("yolanda@ceacfp.com","andres@ceacfp.com","josedavid@ceacfp.com");
		$string = implode(",", $emails);
		echo $string. "<br>";
		echo str_replace(",", " y ", $string). "<br>";
	?>
	<h2>Crear variables a partir de un A.asociativo</h2>
	<?php
		//Funcion extract($var_array) = crea variables a partir de las claves de un A.asociativo
		$usuarios = array("nombre" => "Yolanda", "email" => "yolanda.ruescas@ceacfp.com", "dni" => 123);
		extract($usuarios); //$nombre, $email, $dni
		echo $nombre. "<br>";
		echo $email. "<br>";
		echo $dni. "<br>";
		$obj = array("color" => "azul", "tamanio" => "medio", "forma" => "esferica");
		extract($obj);
		echo 'El $color de mi objeto es '. $color .' y su $forma es '. $forma."<br>";
	?>
	<h2>Devolver un valor aleatorio de un array</h2>
	<?php
		//Funcion array_rand($var_array) = devuelve un numero aleatorio de posicion del array
		$nombres = array("Yolanda", "Andres", "Jose david");
		$num_pos = array_rand($nombres);
		echo $nombres[$num_pos];
	?>
</body>
</html>