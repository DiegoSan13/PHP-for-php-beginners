<?php
	//Variables superglobales = son aquellas variables disponibles en todos los ambitos a lo largo del script.
	//$_GET = es un array asociativo que recoge los valores procedentes de un formulario enviado por el metodo = get
	//$_POST = es un array asociativo que recoge los valores procedentes de un formulario enviado por el metodo = post
	//$_REQUEST = es un array asociativo que recoge los valores procedentes de un formulario

	//Estos arrays asociativos, asocian valores procedentes del formulario, con las claves que corresponden a los name de los inputs
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>nashe</title>
</head>
<body>
	<h2>Formulario ejecutado en fichero externo con metodo get</h2>
	<form action="008-2-superglobales-get.php" method="get">
		<input type="text" name="nameUser" placeholder="Inserta tu nombre">
		<input type="text" name="lastNameUser" placeholder="Inserta tu apellido">
		<input type="email" name="email" placeholder="Inserta tu email">
		<input type="submit" value="Probar get">
	</form>

	<h2>Formulario ejecutado en fichero externo con metodo request</h2>
	<form action="008-2-superglobales-request.php" method="get">
		<input type="text" name="nameUser" placeholder="Inserta tu nombre">
		<input type="text" name="lastNameUser" placeholder="Inserta tu apellido">
		<input type="email" name="email" placeholder="Inserta tu email">
		<input type="submit" value="Probar get/request">
	</form>

	<h2>Formulario ejecutado en el mismo documento con metodo request</h2>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
		<input type="text" name="nameUser" placeholder="Inserta tu nombre">
		<input type="text" name="lastNameUser" placeholder="Inserta tu apellido">
		<input type="email" name="email" placeholder="Inserta tu email">
		<input type="submit" value="Probar get/request">
	</form>
	<?php
		echo "Bienvenido ". $_REQUEST["nameUser"]. " " .$_REQUEST["lastNameUser"]. ", tu correo es ". $_REQUEST["email"] ;
	?>

	<h2>Formulario ejecutado en fichero externo con metodo post</h2>
	<form action="008-2-superglobales-post.php" method="post">
		<input type="text" name="nameUser" placeholder="Inserta tu nombre">
		<input type="text" name="lastNameUser" placeholder="Inserta tu apellido">
		<input type="email" name="email" placeholder="Inserta tu email">
		<input type="submit" value="Probar post">
	</form>

	<h2>Formulario ejecutado en fichero externo con metodo post</h2>
	<form action="008-2-superglobales-request.php" method="post">
		<input type="text" name="nameUser" placeholder="Inserta tu nombre">
		<input type="text" name="lastNameUser" placeholder="Inserta tu apellido">
		<input type="email" name="email" placeholder="Inserta tu email">
		<input type="submit" value="Probar post">
	</form>

	<h2>Formulario ejecutado en el mismo documento con metodo post</h2>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
		<input type="text" name="nameUser" placeholder="Inserta tu nombre">
		<input type="text" name="lastNameUser" placeholder="Inserta tu apellido">
		<input type="email" name="email" placeholder="Inserta tu email">
		<input type="submit" value="Probar post">
	</form>
	<?php
		echo "Bienvenido ". $_POST["nameUser"]. " " .$_POST["lastNameUser"]. ", tu correo es ". $_POST["email"] ;
	?>
</body>
</html>