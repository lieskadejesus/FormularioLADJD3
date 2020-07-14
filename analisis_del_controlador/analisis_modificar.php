
<?php
// Analisis de la funcion modificar
public function modificar()//Inicio de la función publica  "modificar"
{
	//Extrayendo  datos 
	extract($_REQUEST);

	//Instancia de la clase que se conecta a la base de datos.
	$db=new clasedb();
	//Realizar una conexion hacia la base de datos y guardar el resultado en una variable
	$conex=$db->conectar();


	//Consulta a realizar a la base de datos para obtener el usuario en el servidor.
	$sql="SELECT * FROM datos_personales WHERE id=".$id_persona."";
	//Uso de la función "mysqli_query" para poder ejecutar una consulta en el
	//servidor, guardando el resultado en una variable.
	$res=mysqli_query($conex,$sql);

	//Uso de la función "mysqli_fetch_array" para poder extraer todos los datos obtenidos de la consulta y regresarlos con un array.
	//Guardamos el resultado en la variable para poder usar estos datos.
	$data=mysqli_fetch_array($res);

	//Uso de la función "header" para poder redireccionar al usuario a otra parte del programa, pasandole los datos obtenidos de la consulta serializados, permitiendo que se puedan transferir por el método Get.
	header("Location: editar.php?data=".serialize($data));
}
?>