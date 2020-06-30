		Analizis personas controlador 

		Se inicializa un contador para poder recorrer todos los campos de la fila
		*/
		$i=0;

		/*
		Se inicializa una variable $datos para poder guardar todos los campos obtenidos de la
		consulta y así poder manejarlos a gusto.
		*/
		$datos[]=array();

		/*
		"mysqli_fetch_array" recorre todas las filas obtenidas de la consulta y asigna los
		campos de cada fila en un array.

		Usando el bucle "while" podemos hacer que se recorra cada fila hasta que $data sea
		"false", ya que mientras la variable $data contenga algún dato, esta valdrá "true"
		*/
		while($data=mysqli_fetch_array($res)){
			/*
			Se crea un bucle for para recorrer los diferentes campos en cada fila,
			dandole como límite la cantidad máxima de campos existentes en las tablas
			del servidor, usando la variable $campos.
			*/
			for ($j=0; $j < $campos; $j++) { 
				//Se guardan los datos de cada campo en una matriz de dos niveles.
				$datos[$i][$j]=$datos[$j]; 
			}

			//Se incrementa el contador de bucle while
			$i++;
		}

		//Se cierra la conexión creada por la clase "classdb" para evitar fugas en la seguridad
		//del programa
		mysqli_close($conex);

		/*
		Por último se usa la función "header" para poder mover al usuario a otra dirección,
		pasandole los datos obtenidos como: Número de filas obtenidas, número de campos obtenidos,
		y los datos de cada campo. Estos campos necesitan ser serializados para poder transferirlos
		entre las URL, para esto usamos la función "serialize".
		*/
		header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos))
	}
}
?>