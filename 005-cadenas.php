<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Longitud de cadena de textos </h2>
	<?php
		// Funcion mb_internal_encoding("UTF-8") = modifica la variable del encoding, para aplicarse en el resto de funcion mb_, sin tener que añadir en cada una de las funciones mb_ el encoding como parametro
		mb_internal_encoding("UTF-8");
		// Funcion strlen($var_name)= devuelve la longitud de un string

		echo strlen("Hola mundo"). "<br>";
		$texto = "Hola mundo";	
		echo strlen($texto). "<br>";
		$length =strlen($texto);
		echo "$texto, tiene $length caracteres";

	?>
	<!--comentario HTML -->
	<h2>Longitud de cadena de textos con cadenas especiales</h2>

	<?php
		// Funcion mb_strlen($var_name, "UTF-8")= devuelve el numero de caracteres incluyendo los caracteres especiales
		echo mb_strlen("Hola Andrés"). "<br>";
		$texto = "Hola Andrés";
		echo mb_strlen("$texto", "UTF-8"). "<br>";
		echo $texto. " tiene " . $length . " caracteres";
	?>

	<h2>Número de palabras de una cadena</h2>
	<?php
		// Funcion str_word_count($var_name) = devuelve el número de palabaras de una frase
		echo str_word_count("Hola soy Yolanda"). "<br>";
		$texto = "Hola soy Yolanda";
		echo str_word_count($texto). "<br>";
		echo $texto . " tiene " . str_word_count($texto) . " palabras" . "<br>";

		// Las comillas dobles prevalecen sobre las interiores
		$length = str_word_count($texto);
		echo "$texto tiene $length palabras" . "<br>";
		echo '"$texto"  tiene $length palabras' . "<br>";
		echo "\"$texto\"  tiene $length palabras" . "<br>";
		$texto = "Los 10 mandamientos";
		echo str_word_count($texto, 0,"0123456789") . "<br>";
		$texto = "tengo un á rbol";
		echo str_word_count($texto, 0, "áéíóúÁÉÍÓÚÑñ0123456789") . "<br>";

	?>
	<h2>Convertir texto en mayúsculas y minúsculas</h2>
	<?php
		$texto = "Hola Andrés, Bienvenido";
		echo mb_strtolower($texto, "UTF-8"). "<br>";
		echo mb_strtoupper($texto, "UTF-8"). "<br>";
	?>
	<h2>Primera letra en mayusculas de todas las palabras</h2>
	<?php
		//Funcion ucfirst($var_name) = devuelve la frase con la primera letra en mayusculas. No permite encoding (UTF-8) tendremos problemas con los caracteres especiales.

		echo ucfirst("primera letra de la oracion en may"). "<br>";
		$texto = "primera letra de la oracion en may". "<br>";

		echo ucfirst($texto);
		$texto = "pRIMERA LETRA DE LA ORACION EN MAY". "<br>";
		echo ucfirst(mb_strtolower($texto, "UTF-8")). "<br>";
 	?>
 	<h2>Convertir la primera letra de cada palabra en minusculas</h2>
 	<?php
 		//Funcion ucwords($var_name) = devuelve la oracion con la primera letra de cada palabra en mayusculas. No permite encoding (UTF-8) tendremos problemas con los caracteres especiales.
 		$texto = "pRimera Letra De lA orACIon en MayuSculAs";
 		echo ucwords(mb_strtolower($texto, "UTF-8"));
 	?>
 	<h2>Conversion en funcion de metodos</h2>
 	<?php
 		//Funcion mb_convert_case($var_name, metodo, encoding) = segun el metodo que le especifiquemos a la funcion realizara una conversion u otra. Hay tres disponibles (MB_CASE_UPPER, MB_CASE_LOWER, MB_CASE_TITLE)
 		$texto = "tengo un árbol en mi patio";
 		$texto_may = mb_convert_case($texto,MB_CASE_UPPER, "UTF-8");
 		echo mb_convert_case($texto, MB_CASE_UPPER, "UTF-8"). "<br>";
 		
 	?>
 	<h2>Cortar un string y concatenar funciones</h2>
 	<?php
 		// Funcion mb_substr($var_name, stsr pos, length/cantidad, encoding) = devuelve una parte de la cadena (substring)
 		$texto = "árbol amarillo";
 		$texto_a = mb_substr($texto,0);
 		echo mb_substr($texto,0,1). "<br>";
 		echo mb_strtoupper($texto_a). "<br>";
 		$texto_rest = mb_substr($texto, 1, mb_strlen($texto)-1);
 		$texto_rest = mb_substr($texto, 1);
 		echo mb_strtoupper(mb_substr($texto,0,1)). "<br>";
 		echo mb_strtolower($texto). "<br>";
 		$texto = "árBOL VerdE dE Mi JaRdíN";
 		echo mb_strtoupper(mb_substr($texto,0,1)) . mb_substr(mb_strtolower($texto),1). "<br>";
 	?>
 	<h2>Quitar espacios o caracteres al inicio o al final de una cadena</h2>
 	<?php
 		// Funcion trim($var_name, caracter a eliminar) = elimina los caracteres buscados del principio y final de la cadena, si no indico el caracter a eliminar por defecto quita los espacios
 		// Funcion rtrim($var_name, caracter a eliminar) = elimina los caracteres del final
 		// Funcion ltrim($var_name, caracter a eliminar) = elimina los caracteres del principio
 		$correo = "@diego.sanchez@alu.ceacfp.com@";
 		echo trim($correo, "@") ."<br>";
 		echo rtrim($correo, "@") . "<br>";
 		echo ltrim($correo, "@") . "<br>";
 		$texto = "* */-HOL-a*/-";
 		echo trim($texto, "*/-") ."<br>";
 		echo rtrim($texto, "*/-") . "<br>";
 		echo ltrim($texto, "*/-") . "<br>";
 	?>
 	<h2>Buscar y remplazar</h2>
 	<?php
 		// Funcion str_replace(palabra a buscar, palabra de remplazo, $var_name) = devuelve la cadena de texto modificada. Si admite caracteres especiales
 		// Funcion str_ireplace(palabra a buscar, palabra de remplazo, $var_name) = devuelve la cadena de texto modificada, no es sensible al uso de mayusculas o minusculas
 		$texto = "Debo comer más árbol para estar sano";
 		echo str_replace("árbol", "verduras", $texto). "<br>";
 		echo str_ireplace("árbOl", "verduras", $texto). "<br>";
 		$texto = "tengo una oracion con palabras mal sonantes del tipo tonto, bobo, feo";
 		$listado_palabras = array("tonto", "bobo", "feo");
 		echo str_replace($listado_palabras, "***", $texto). "<br>";
 		$texto = " 1 2 3 4 5 6 7 8 9 ";
 		echo trim(str_replace(" ", " - ", $texto), " - "). "<br>";
 	?>
 	<h2>Devolver una subcadena</h2>
 	<?php
 		// Funcion strchr($var_name, elemento a buscar desde la izquierda) = devuelve los caracteres en sentido de lectura, a partir del caracter buscado y encontrado desde la izquierda (este incluido)
 		// Funcion strrchr($var_name, elemento a buscar desde la derecha) = devuelve los caracteres en sentido de lectura, a partir del caracter buscado y encontrado desde la derecha (este incluido)
 		$fichero = "foto.gatito.bonito.jpg";
 		echo strchr($fichero, "."). "<br>";
 		echo strrchr($fichero, "."). "<br>";
 		echo ltrim(strrchr($fichero, "."), "."). "<br>";
 	?>
 	<h2>Convertir un string en un array</h2>
 	<?php
 		// Funcion str_split($var_name, caracter/vacio) = 
 	?>
</body>
</html>