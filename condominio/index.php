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
		<table width="100%" bgcolor="C38BFC" align="center">
			<tr align="center">
				<th colspan="6" bgcolor="8C29C2" style=" border-style:dashed;"><h2><font color="white" face="Harrington" >Registros de Datos ingresados</font></h2></th>
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