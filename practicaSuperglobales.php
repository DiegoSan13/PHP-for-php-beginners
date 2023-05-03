<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$num_pos = array_rand($_POST);
		echo "El ganador es ". $_POST[$num_pos];
	?>
</body>
</html>