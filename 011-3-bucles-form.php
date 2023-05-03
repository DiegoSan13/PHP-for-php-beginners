<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Formulario con checkbox</h2>
	<form action="<?php $_SERVER['PHP_SELF']?>"method="get">
		<input type="checkbox" name="ciudad[]" value="Madrid">Madrid
		<input type="checkbox" name="ciudad[]" value="Zaragoza">Zaragoza
		<input type="checkbox" name="ciudad[]" value="Barcelona">Barcelona
		<input type="submit" value="Comprobar" name="btn1">
		</form>
		<?php
			if (isset($_GET["btn1"])) {
				extract($_GET); //$ciudad("","",""), $btn1
				$ciudadElegida="";
				foreach ($ciudad as $valorCiudad) {
					$ciudadElegida .= $valorCiudad . ", ";
				}
				echo "Te gustaria viajar a: " . $ciudadElegida;
			}
		?>
		<h2>Formulario con select multiple</h2>
		<form>
			<select name="paises[]" multiple>
				<option>España</option>
				<option>Italia</option>
				<option>Portugal</option>
			</select>
			<input type="submit" value="Comprobar" name="btn2">
		</form>
		<?php
			if (isset($_GET["btn2"])) {
				extract($_GET);
				$paisesSeleccionados="";
				foreach($paises as $pais){
					$paisesSeleccionados .= $pais . ", ";
				}
				echo $paisesSeleccionados;
			}
		?>
</body>
</html>