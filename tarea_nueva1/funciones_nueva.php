<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Ejercicios (3 Ejemplos) </title>
</head>
<body>
	<div align="left">
			<h1> Función round() </h1> 

	<!-- Si el primer argumento es un número entero, el analizador convierte el número entero en un tipo de datos decimal antes del procesamiento. Si el primer argumento es un número decimal, el analizador procesa la función sin conversión, lo que deriva en mejor rendimiento. -->

	<br>

	<h3> Ejemplo 1 </h3>

	<b> Se redondea 5.5 dando como resultado: </b>

	<br>
	<br>

	<?php 

	//Ejemplo nro. 1

	echo round(5.5);

	?>

	<br>
	<br>
	<br>
	<br>

	<h3> Ejemplo 2 </h3>

	<b> Se redondea hacia abajo 1.4 dando como resultado: </b>

	<br>
	<br>

	<?php  

	//Ejemplo nro. 2

	echo round(1.4, 0, PHP_ROUND_HALF_DOWN);

	?>

	<br>
	<br>
	<br>
	<br>

	<h3> Ejemplo 3 </h3>

	<b> Redondear 1.917 mostrando dos decimales: </b>

	<br>
	<br>

	<?php 

	//Ejemplo nro.3

	echo round(1.917, 2);

	 ?>

	<br>
	<br>
	<br>
	<br>	 

		


	</div>
	
	
</body>
</html>