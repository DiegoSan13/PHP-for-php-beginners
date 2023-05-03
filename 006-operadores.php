<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Operadores de asignacion (=) (+=) (-=) (.=)</h2>
	<?php
		$a=2;
		echo $a. "<br>";
		$a=3;
		echo $a. "<br>";
		$a+=2;
		echo $a. "<br>";
		$a-=1;
		echo $a. "<br>";

		$texto = "Buenos";
		$texto.= " días". "<br>";
		echo $texto. "<br>";
	?>
	<h2>Operadores de igualdad (==) (!=) (===) (!==)</h2>
	<?php
		$a=1;
		$b="1";
		$c=3;
		echo "¿$a es igual $b? ". ($a==$b). "<br>";
		echo "¿$a es igual $b? ". ($a===$b). "<br>"; //Restrictivo
		echo("¿$a es diferente $c? ". ($a!=$c)). "<br>";
		echo("¿$a es diferente en caracter y tipo a $b? ". ($a!==$b)). "<br>"; //Restrictivo
	?>
	<h2>Operadores de comparacion (>) (<) (<=) (>=)</h2>
	<?php
		$a=1;
		$b=3;
		$c="3";
		echo "¿$a es mayor $b? ". ($a>$b). "<br>";
		echo "¿$a es menor $b? ". ($a<$b). "<br>";
		echo "¿$b es mayor o igual $c? ". ($b>=$c). "<br>";
		echo "¿$b es menor o igual $c? ". ($b<=$c). "<br>";
	?>
	<h2>Operadores logicos (&& => AND // || => OR // !</h2>
	<?php
		$a=1;
		$b=3;
		$c=5;
		echo "Resultado: ". (($a<$b) && ($c<$a)). "<br>"; // T && T == T
		echo "Resultado: ". (($a<$b) && ($c>$a)). "<br>"; // F && T == F
		echo "Resultado: ". (($a<$b) || ($c<$a)). "<br>"; // T || T == T
		echo "Resultado: ". (($a>$b) || ($c>$a)). "<br>"; // F || T == T
		echo "Resultado: ". (($a>$b) || ($c>$a) && ($c<$a)). "<br>"; // F || T && F == F PRIORIDAD &&
	?>
	<h2>Operadores de autoincremento/decremento (++) (--)</h2>
	<?php
		$a=2;
		echo ++$a. "<br>"; //Primero incremento el valor y luego lo muestro
		$a=4;
		echo $a++. "<br>"; //Primero muestro el valor y luego lo incremento
		echo $a. "<br>"; //Muestro el valor ya sumado
	?>
	<h2>Operadores aritmeticos (+) (-) (/) (*) (%) (**)</h2>
	<?php
		$a=3;
		$b=6;
		echo "$a + $b = ". ($a+$b). "<br>";
		echo "$a - $b = ". ($a-$b). "<br>";
		echo "$a / $b = ". ($a/$b). "<br>";
		echo "$a * $b = ". ($a*$b). "<br>";
		echo "$a % $b = ". ($a%$b). "<br>";
		echo "$a elevado a  $b = ". ($a**$b). "<br>";
	?>
</body>
</html>