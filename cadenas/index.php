<?php
//suma de dos numeros
$num1=3;
$num2=9;
$numero=$num1 + $num2;
echo "la suma de 3 y 9 es: $numero<br>";
?>
<br><br>

<?php
	// uniendo palabras

	$obj1="probando";
	$obj2="galleta";
	$obj3="chocolate";
	$string=$obj1."-".$obj2."-".$obj3;
	echo "$string";
?>
<br><br>
<?php
	//Cortando Palabras 3 letras antes y 5 despues

	$frase="Hola juan como estas???";
	$cortada=substr($frase,3,-5);

echo "frase completa es: $frase<br>";
echo "la frace cortada es: $cortada<br>";
?>
<br>

<?php
	//Cortando Palabras ultimos 10 caracteres

	$frase="Hola juan como estas???";
	$cortada=substr($frase,-10);

echo "frase completa es: $frase<br>";
echo "la frace cortada es: $cortada<br>";
?>
<br>
<?php
	//Cortando Palabras quitar los 5 primeros y mostrar los 10 caracteres siguientes

	$frase="Hola lieska, espero te encuentres muy bien";
	$cortada=substr($frase,5,-10);

echo "frase completa es: $frase<br>";
echo "la frace cortada es: $cortada<br>";
?>