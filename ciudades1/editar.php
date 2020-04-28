<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editando Ciudades</title>
</head>
<body>
	<br>
	<form action="CiudadesControlador.php" method="post" name="ciudades">
		<table>
			<tr>
				<td colspan="2">Editar Ciudades:</td>
			</tr>
			<tr>
				<td>Nombre:</td><td><input type="text" name="nombre" id="nombre" placeholder="Ej: Paris" title="Ingrese el nombre de la ciudad" value="<?=$data[1]?>"></td>
			</tr>
			<tr>
				<td>Apodo:</td><td><input type="text" name="apodo" id="apodo" placeholder="Ej: Ciudad del amor" title="Ingrese el apodode la ciudad" value="<?=$data[2]?>"></td>
			</tr>
			<tr>
				<td>Ubicacion:</td><td><input type="text" name="ubicacion" id="ubicacion" placeholder="Ej: Francia" title="Ingrese la ubicacion" value="<?=$data[3]?>"></td>
			</tr>
			<tr>
				<td>Poblacion:</td><td><input type="number" name="poblacion" id="poblacion" placeholder="Ej: 100.000" title="Ingrese el numero de habitantes" value="<?=$data[4]?>"></td>
			</tr>
			<tr>
				<td>Tasa de Natalidad:</td><td><input type="number" name="natalidad" id="natalidad" placeholder="Ej: 50.000" title="Ingrese el numero de nacimientos" value="<?=$data[5]?>"></td>
			</tr>
			<tr>
				<td>Tasa de Mortalidad:</td><td><input type="number" name="mortalidad" id="mortalidad" placeholder="Ej: 40.000" title="Ingrese el numero de muertes" value="<?=$data[6]?>"></td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id_ciudad" value="<?=$data[0]?>">
					<input type="hidden" name="operacion" value="actualizar">
					<input type="submit" name="enviar" value="Enviar"></td>		
			</tr>
		</table>
	</form>
</body>
</html>