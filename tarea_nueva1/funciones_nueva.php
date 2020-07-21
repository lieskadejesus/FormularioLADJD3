<!DOCTYPE html>
<html >
<head>
	
	<title> Tarea funciones </title>
</head>
<body>
<?php
echo "<****************************Funciones de Strings************************><br>";

echo "<br><b>1)Función round:</b> Esta es una función que permite redondear la cantidad de un flotante o redondear el resultado decimal de una operación matematica<br>";

echo "<br>a) <b>Se redondea 7.5 dando como resultado:</b><br>";
echo round(7.5);
echo "<br><br>b) <b>Se redondea hacia abajo 2.4 dando como resultado:</b><br>";
echo round(2.4);
echo "<br><br>c) <b>Redondear 1.9172 mostrando tres decimales:</b><br>";
echo round(1.9172, 3);
?>
<br>
<br>

<?php
echo "<br><b>2)Función floor:</b> redondea fracciones hacia abajo<br>";

echo "<br>a) <b>Se redondea la fracción 4.39:</b><br>";
echo floor(4.39);
echo "<br><br>b) <b>Se redondea la fracción -12.6:</b><br>";
echo floor(-12.6);
echo "<br><br>c) <b>Se redondea la fracción -20.40:</b><br>";
echo floor(-20.40);

?>
<br>
<br>
<?php
echo "<br><b>3)Función ceil</b> redondea fracciones hacia arriba<br>";

echo "<br>a) <b>Se redondea 9:</b><br>";
echo ceil(9);
echo "<br><br>b) <b>Se redondea 7.1:</b><br>";
echo ceil(7.1);
echo "<br><br>c) <b>Se redondea -7.1:</b><br>";
echo ceil(-7.1);

?>
<br>
<br>
<?php
echo "<br><b>4)Función rand</b> Genera numeros aleatorios<br>";

echo "<br>a) <b>Genera:</b><br>";
$d=rand(10,40);
	 echo "$d"; 
echo "<br><br>b) <b>Genera:</b><br>";
$d=rand(1,30);
	 echo "$d"; 
echo "<br><br>c) <b>Genera:</b><br>";
echo rand(-10,400);
	  
?>

<br>
<br>
<?php
echo "<br><b>5)Función strtoupper</b>  Convierte a mayúsculas los caracteres de una cadena string<br>";

echo "<br>a) <b>Cambia lieska de jesus a:</b><br>";
$cadena = "lieska de jesus";
$cadena_cambio = strtoupper($cadena);
echo "$cadena_cambio";


echo "<br>b) <b>Cambia holaaa a:</b><br>";
echo strtoupper("holaaa");

echo "<br>c) <b>Cambia bienvenido a paris a:</b><br>";
echo strtoupper("bienvenido a paris");
	  

?>

<br>
<br>
<?php
echo "<br><b>6)Función strtolower</b>  Convierte a minúsculas los caracteres de una cadena string<br>";

echo "<br>a) <b>Cambia LIESKA DE JESUS a:</b><br>";
$cadena = "LIESKA DE JESUS";
$cadena_cambio = strtolower($cadena);
echo "$cadena_cambio";


echo "<br>b) <b>Cambia PAN DE QUESO a:</b><br>";
echo strtolower("PAN DE QUESO");

echo "<br>c) <b>QUE LINDA SON LAS MARGARITAS a:</b><br>";
echo strtolower("QUE LINDA SON LAS MARGARITAS");
?>

<br>
<br>
<?php
echo "<br><b>7)Función ucfirst</b>  Convierte a mayúscula la primera letra de una cadena de texto<br>";

echo "<br>a) <b>Cambia lieska de jesus a:</b><br>";
$cadena = "lieska de jesus";
$cadena_cambio = ucfirst($cadena);
echo "$cadena_cambio";


echo "<br>b) <b>Cambia pan de queso a:</b><br>";
echo ucfirst("pan de queso ");

echo "<br>c) <b>hola manuel, como estas a:</b><br>";
echo ucfirst("hola manuel, como estas");
?>


<br>
<br>
<?php
echo "<br><b>8)Función ucwords</b>  Convierte a mayúscula la primera letra de una cadena de texto<br>";

echo "<br>a) <b>Cambia lieska de jesus a:</b><br>";
$cadena = "lieska de jesus";
$cadena_cambio = ucwords($cadena);
echo "$cadena_cambio";


echo "<br>b) <b>Cambia pan de queso a:</b><br>";
echo ucwords("pan de queso ");

echo "<br>c) <b>hola manuel, como estas a:</b><br>";
echo ucwords("hola manuel, como estas");
?>


<br>
<br>
<?php
echo "<br><b>9)Función strlen</b>  Calcula la longitud de una cadena de texto (Numero de letras que hay en la cadena de texto)<br>";

echo "<br>a) <b>La cadena (Lieska De Jesus) tiene :</b><br>";
$cadena = "Lieska De Jesus";
$cadena_cambio = strlen($cadena);
echo "$cadena_cambio";


echo "<br>b) <b>La cadena (Pan de queso) tiene :</b><br>";
echo strlen("Pan de queso ");

echo "<br>c) <b>La cadena (Hola Manuel, como estas) tiene:</b><br>";
echo strlen("hola manuel, como estas");

?>

<br>
<br>
<?php
echo "<br><b>10)Función var_dump</b>  Muestra el tipo de variable y su contenido<br>";

echo "<br>a) <b>La cadena (Lieska De Jesus):</b><br>";
$cadena = "Lieska De Jesus";
$cadena_cambio = var_dump($cadena);
echo "$cadena_cambio";


echo "<br>b) <b>El numero 1995 :</b><br>";
	$number = 1995;
	var_dump($number);

echo "<br>c) <b>La cadena (Hola Manuel, como estas):</b><br>";
echo var_dump("hola manuel, como estas");

?>

<br>
<br>
<?php
echo "<br><b>11)Función count</b>  Cuenta todos los elemento en un array o en un objeto<br>";

echo "<br>a) <b>Array canciones:</b><br>";
$canciones=array("la china"=>array("Señorita"),
	 	"AM"=>array("DIWN","505")
	  );
	 echo "Numero de canciones:" . count($canciones);


echo "<br>b) <b>Array series a:</b><br>";
	$series=array(
	 	"netflix"=>array("Stranger things"),
	 	"CBS"=>array("TBBT"),
	 	"amc"=>array("Breaking bad")
	  );
	 echo "Numero de series:" . count($series);

echo "<br>b) <b>Array marcas de vehiculos:</b><br>";
	$vehiculos=array(
	 	"Ford"=>array("mustang"),
	 	"Chevrolet"=>array("Camaro"),
	 	"Dodge"=>array("charger")
	  );
	 echo "Numero de vehiculos:" . count($vehiculos);

?>

<br>
<br>
<?php
echo "<br><b>12)Función explode</b>  Dividir o convertir un string en un array<br>";

echo "<br>a) <b>Numero de elementos:</b><br>";
$cadena = "dos, tres, cuatro";
	$array = explode(",", $cadena);
	echo "El numero de elementos en el array es: ". count($array);

echo "<br>b) <b>Numero de elementos:</b><br>";
	$cadena = "Casa, carro, edificio, piso, silla, mesa";
	$array = explode(",", $cadena);
	echo "El numero de elementos en el array es: ". count($array) ;

echo "<br>c) <b>Numero de elementos:</b><br>";
$cadena = "monitor, raton, teclado, cpu, intel, amd, ryzen, control";
	$array = explode(",", $cadena);
	echo "El numero de elementos en el array es: ". count($array) ;
?>

<br>
<br>
<?php
echo "<br><b>14)Función implode</b>  Convertir un array en una cadena de texto<br>";

echo "<br>a) <b> Convertir:</b><br>";
$array_equipo = array('portero', 'laterales', 'centrales', 'mediocentros');

	 $cadena_equipo = implode(";", $array_equipo);
	 echo "El equipo separado por ';' es el siguiente:" .$cadena_equipo;

echo "<br>b) <b> Convertir:</b><br>";
	$array_equipo = array('mustang', 'camaro', 'ferrari');

	 $cadena_equipo = implode(";", $array_equipo);
	 echo "Los vehiculos separado por ';' es el siguiente:" .$cadena_equipo;


echo "<br>c) <b> Convertir:</b><br>";
$array_equipo = array('bohemian rhapsody', 'hotel california', 'adults are talking');

	 $cadena_equipo = implode(";", $array_equipo);
	 echo "Las canciones separadas por ';' es el siguiente:" .$cadena_equipo;

	?>
</body>
</html>
