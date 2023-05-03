<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body> 
	<h2>Validación de campos de un formulario</h2> 
	<form action="<?php $_SERVER['PHP_SELF']?>" method="get">
		<input type="email" name="email" placeholder="Introduce tu email">
		<input type="password" name="password" placeholder="Introduce tu contraseña">
		<input type="submit" value ="Enviar name" name="form1">
	</form>
	<?php
		if (isset($_GET["form1"])) {
			if (empty($_GET["email"]) || empty($_GET["password"])) {
				echo "Debes rellenar todos los campos";
			} else {
				echo "Login correcto";
			} 
		}
	 //echo "Debes rellenar todos los campos"
	 //echo "Login correcto"; 
	?>
	<h2>Verificación user y password</h2> 
	<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
 	<input type="email" name="email" placeholder="Introduce tu email">
 	<input type="password" name="password" placeholder="Introduce tu contraseña">
 	<input type="submit" value ="Enviar name" >
 	</form> 
 	<?php 
 	$user_perm = array("yolanda@ceacfp.com","yolandaruescas@ceacfp.com");
 	$pass_perm = array("0000", "1234"); if($_POST){ if(($_POST["email"] == $user_perm[0] || $_POST["email"] == $user_perm[1])&& ($_POST["password"] == $pass_perm [0] || $_POST["password"] == $pass_perm[1]) ){ echo "Usuario correcto"; } else { echo "Usuario incorrecto";
 		} 
	}
	?> 
	<h2>Formulario con checkbox</h2> 
	<form action=" <?php $_SERVER['PHP_SELF']?>" method="get">
 	<input type="text" name="nombre" placeholder="Introduce tu nombre">Soy mayor de edad
 	<input type="checkbox" name="edad">
 	<input type="submit" value ="Enviar" name="form2">
 	</form> 
 	<?php
 	//Debes indicar tu nombre
 	//Eres menor de edad y no puedes pasar
 	//Bienvenido usuario
 	extract($_GET); 
 	if (isset($_GET["form2"])) { 
 		if (!empty($nombre)) {
	 		if (isset($edad)) {
 				echo "Bienvenido ". $nombre; 
 			} else {
 				echo "Eres menor de edad y no puedes entrar"; 
 			}
	 	} else {
 			echo "Debes indicar nombre";
 		}
 	} 
 	?>
 	<h2>Formulario con radio button</h2> 
	<form action=" <?php $_SERVER['PHP_SELF']?>" method="get">
 	<input type="text" name="nombre" placeholder="Introduce tu nombre">
 	<input type="number" name="edad" placeholder="Introduce tu edad">
 	<input type="radio" name ="sexo" value="mujer">M
 	<input type="radio" name ="sexo" value="hombre">H
 	<br>
 	<input type="submit" value ="Enviar" name="form3">

 	</form> 
 	<?php
 	//Eres menor $nombre -> cuando el usuario escriba una edad<18
 	//Bienvenida $nombre -> cuando el usuario sea mayor de 18 y mujer
 	//Bienvenido $nombre -> cuando el usuario sea mayor de 18 y hombre
 	extract($_GET); 
 	if (isset($_GET["form3"])) { 
 		if (!empty($nombre)) {
 			if (!empty($edad)) {
 				if ($edad>=18) {
	 				if ($sexo=="hombre") {
	 					echo "Bienvenido ". $nombre; 
	 				} else {
	 					echo "Bienvenida ". $nombre; 
	 				}
 				} else {
 					echo "Eres menor ". $nombre; 
 				}
 			} else {
 			echo "Debes indicar tu edad";
 			}
	 	} else {
 			echo "Debes indicar nombre";
 		}
 	}
 	?>
</body>
</html>