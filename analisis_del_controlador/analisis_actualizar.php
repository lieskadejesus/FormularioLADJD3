<?php
public function actualizar()//Inicio de la función  "actualizar"
{
	//Extracción de los datos mandados en la consulta por el método POST de HTTP
	
	extract($_POST);
	//Instancia la clase de las conexiones a la base de datos.
	
	$db= new clasedb();
	//Creación de la conexión hacia la base de datos Guardamos esta conexión en una variable para poder usarla durante la ejecución del script.
	
	$conex=$db->conectar();

	//Estructura de la base de datos para poder verificar si la cédula y el id están registrados ya.
	
	$sql="SELECT * FROM datos_personales WHERE cedula=".$cedula." AND id<>".$id_persona;

	//Uso de la función "mysqli_query" para poder ejecutar una consulta en elservidor, guardando el resultado en una variable.
	
	$res=mysqli_query($conex, $sql);

	//Uso de la función "mysqli_query" para obtener la cantidad de filas encontradas en la consulta realizada con anticipacion. 
	
	$cant=mysqli_num_rows($res);

	//Condicional para verificar si se encuentra alguna fila que cumpla con las condiciones de la consulta, si es el caso muestra un mensaje, si es lo contrario actualiza al usuario.
	
	if ($cant>0) {
		//Cierre de las llaves PHP para poder escribir código en texto plano.
	?>
		//Etiqueta de JavaScript para poder escribir scripts en HTML
		
		<script type="text/javascript">
			//Función Alert para poder mostrar un mensaje.
			
			alert("CEDULA YA REGISTRADA");
			//Uso de la variable global window para poder cambiar de localización
			
			window.location="PersonasControlador.php?operacion=index";
			// Cierre de la etiqueta script
		</script>
		//Inicio de una llave PHP para poder escribir código en PHP.
		
		<?php
		//Caso inversa de la condicion
	} else {
		//Estructura SQL para poder actualizar los datos de un usuario ya existente en el sistema.
		
		$sql="UPDATE datos_personales SET nombres='".$nombres."',apellidos='".$apellidos."'cedula='".$cedula." WHERE id=".$id_persona;

		//Uso de la función "mysqli_query" para poder ejecutar una consulta en el servidor, guardando el resultado en una variable.
		
		$res=mysqli_query($conex,$sql);

		//Condicional para verificar si la respuesta del servidor es positiva o negativa.
		
		if($res) {
			//Cierre de las llaves PHP para poder escribir código en texto plano.
			
			?>
			//Etiqueta de JavaScript para poder escribir scripts en HTML
			
			<script type="text/javascript">
				//Función Alert para poder mostrar un mensaje en pantalla al usuario.
				
				alert("REGISTRO MODIFICADO");
				//Uso de la variable global window para poder cambiar de localización al usuario.
				
				window.location="PersonasControlador.php?operaion=index";
				// Cierre de la etiqueta script. 
			</script>
			//Inicio de una llave PHP para poder escribir código en PHP.
		
			<?php
			//Caso contrario de la condición.
		}else {
			//Cierre de las llaves PHP para poder escribir código en texto plano.
			?>
			//Etiqueta de JavaScript para poder escribir scripts en HTML
			
			<script type="text/javascript">
				//Función Alert para poder mostrar un mensaje en pantalla al usuario.
				
				alert("ERROR AL MODOFICAR EL REGISTRO");
				
				//Uso de la variable global window para poder cambiar de localización al usuario.
				
				window.location="PersonasControlador.php?operaion=index";
				// Cierre de la etiqueta script.
			</script>
			//Inicio de una llave PHP para poder escribir código en PHP.
			
			<?php
			//Caso contrario de la condición.
		}
	}
}
?>