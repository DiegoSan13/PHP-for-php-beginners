<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
         $tipo_comida = "verdura";
         $animal = true;
         $tipos = array("carnívoro", "vegetariano", "omnívoro", "vegano");
         //Habria que crear una nueva variable para saber si es omnivoro
         $tipo_comida2 = "carne";

         if ($animal) {
         	if ($tipo_comida2=="carne"&&$tipo_comida!="verdura") {
         		echo "Eres ". $tipos[0];
         	} else {
         		if ($tipo_comida2=="carne"&&$tipo_comida=="verdura") {
         		echo "Eres ". $tipos[2];
         		} else {
         		echo "Eres ". $tipos[1];
         		}
         	}
         } else {
         	if ($tipo_comida2=="carne"&&$tipo_comida=="verdura") {
         		echo "Eres ". $tipos[2];
         	} else {
         	echo "Eres ". $tipos[3];
         	}
         }
	?>

</body>
</html>