<?php
include('clasedb.php');
extract($_REQUEST);

//echo $nombre."-".$apodo."-".$ubicacion."-".$poblacion."-".$natalidad."-".$mortalidad;
$db=new clasedb();
$con=$db->conectar();
$sql="INSERT INTO datos_ciudades VALUES(NULL,'".$nombre."','".$apodo."','".$ubicacion."','".$poblacion."','".$natalidad."','".$mortalidad."')";
$resultado=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if ($resultado) {
		?>
		<b>Registro ingresado ---> <a href="index.php">Volver</a></b>
		<?php
	}else{
		?>
		<b>Registro no ingresado ---> <a href="index.php">Volver</a></b>
		<?php
	}
	?>
</body>
</html