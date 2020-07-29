<?php
include('clasedb.php');
extract($_REQUEST);
$db=new clasedb();
$conex=$db->conectar();

$sql="CREATE TABLE inmuebles (id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, idem varchar(50) NOT NULL, estacionamiento enum('Si','No'), status enum('Ocupado','Desocupado','Mantenimiento'), tipo enum('Casa','Apartamento','Chalet','Quinta','Otro'), cod_postal varchar(5))";


$result=mysqli_query($conex,$sql);

if($result)
{
	$sql="ALTER TABLE inmuebles ADD UNIQUE (idem)";
	$result=mysqli_query($conex,$sql);
	echo "Tabla creada con exito</br>";
	if($result)
	{
		echo "  se logro asingar el atributo UNIQUE al campo idem";
	}

	else
	{
		echo " aunque no se logro asingar el atributo UNIQUE al campo idem";
	}
}

else
{
	echo "<center>Bienvenidos</center>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inmuebles</title>
</head>
<body>
	<center><br><a href="realizar.php" >Realizar Registros</a><br></center>
		<table width="100%" bgcolor="#A9F5F2" align="center">
			<tr align="center">
				<th colspan="6" bgcolor="#04B4AE" style=" border-style:dashed;"><h2><font color="white" face="Harrington" >Registros de Datos ingresados</font></h2></th>
			</tr>
				<tr align="center">
					<td><b>Identificacion</b></td>
					<td><b>Estacionamiento</b></td>
					<td><b>Estado</b></td>
					<td><b>Tipo</b></td>
					<td><b>Cod. Postal</b></td>
				</tr>

				<?php 
		 			$sql="SELECT * FROM inmuebles";
		 			$res=mysqli_query($conex,$sql);
		 			while($reg=mysqli_fetch_array($res))
		 			{
		 		?>

			 		<tr align="center">
				
				 	    <td><?php echo $reg['idem']; ?></td>
				 		<td><?php echo $reg['estacionamiento']; ?></td>
				 		<td><?php echo $reg['status']; ?></td>
				 		<td><?php echo $reg['tipo']; ?></td>
				 		<td><?php echo $reg['cod_postal']; ?></td>
			 		</tr>
	 			<?php } ?>
		</table>

</body>
</html>

<table width="100%" bgcolor="#A9F5F2" align="center">
	<tr align="center">
	<th colspan="6" bgcolor="#04B4AE" style=" border-style:dashed;"><h2><font color="white" face="Harrington" >Obtener inmuebles con estacionamiento y desocupados</font></h2></th>
	</tr>
	<tr align="center">
        <td><b>Identificacion</b></td>
		<td><b>Estacionamiento</b></td>
		<td><b>Estado</b></td>
		<td><b>Tipo</b></td>
		<td><b>Cod. Postal</b></td>
	</tr>
	<tbody>
<?php
$sql = "SELECT * FROM inmuebles WHERE estacionamiento='Si' AND status='Desocupado'";

$result = $conex->query($sql);

while ($datos = mysqli_fetch_array($result)) {
	echo "<tr style='text-align: center'>";

	echo "<td>". $datos[1]. "</td>";

	echo "<td>". $datos[2]. "</td>";

	echo "<td>". $datos[3]. "</td>";

	echo "<td>". $datos[4]. "</td>";

	echo "<td>". $datos[5]. "</td>";

	echo "</tr>";
}

?>
	</tbody>
</table>

<table width="100%" bgcolor="#A9F5F2" align="center">
	<tr align="center">
	<th colspan="6" bgcolor="#04B4AE" style=" border-style:dashed;"><h2><font color="white" face="Harrington" >Obtener inmuebles sin estacionamiento y desocupados</font></h2></th>
	</tr>
	<tr align="center">
        <td><b>Identificacion</b></td>
		<td><b>Estacionamiento</b></td>
		<td><b>Estado</b></td>
		<td><b>Tipo</b></td>
		<td><b>Cod. Postal</b></td>
	</tr>
	<tbody>
<?php
$sql = "SELECT * FROM inmuebles WHERE estacionamiento='no' AND status='Desocupado'";

$result = $conex->query($sql);

while ($datos = mysqli_fetch_array($result)) {
	echo "<tr style='text-align: center'>";

	echo "<td>". $datos[1]. "</td>";

	echo "<td>". $datos[2]. "</td>";

	echo "<td>". $datos[3]. "</td>";

	echo "<td>". $datos[4]. "</td>";

	echo "<td>". $datos[5]. "</td>";

	echo "</tr>";
}

?>
	</tbody>

</table>

<table width="100%" bgcolor="#A9F5F2" align="center">
	<tr align="center">
		<th colspan="6" bgcolor="#04B4AE" style=" border-style:dashed;"><h2><font color="white" face="Harrington" >Total de inmuebles</font></h2>
		</th>
    </tr>
    <tr align="center">
    	<td><b>Con estacionamiento</b></td>
    	<td><b>Sin estacionamiento</b></td>
    	<td><b>Ocupados</b></td>
    	<td><b>Desocupados</b></td>
	</tr>
	<tbody>
<?php
$sql = "SELECT 
count(case when estacionamiento='Si' then 1 end),
count(case when estacionamiento='No' then 1 end),
count(case when status='Ocupado' then 1 end),
count(case when status='Desocupado' then 1 end)
FROM inmuebles";

$result = $conex->query($sql);

$datos = mysqli_fetch_array($result);

echo "<tr style='text-align: center'>";

echo "<td>". $datos[0]. "</td>";

echo "<td>". $datos[1]. "</td>";

echo "<td>". $datos[2]. "</td>";

echo "<td>". $datos[3]. "</td>";

echo "</tr>";

?>
	</tbody>
</table>