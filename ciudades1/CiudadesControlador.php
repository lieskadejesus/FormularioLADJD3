<?php
include("../clasedb.php");
extract($_REQUEST);

class CiudadesControlador
{

	public function index(){
		$db=new clasedb();//instanciando clasedb
		$conex=$db->conectar();//conectando con la base de datos

		$sql="SELECT * FROM datos_ciudades";//query

		$res=mysqli_query($conex,$sql);//ejecutando query
		$campos=mysqli_num_fields($res);//cuantos campos traer la consulta
		$filas=mysqli_num_rows($res);//cuantos registro trae la consulta
		$i=0;
		$datos[]=array();//Inicializando array
        //extrayendo datos
        while($data=mysqli_fetch_array($res)){
        	for ($j=0; $j <$campos ; $j++) { 
        		$datos[$i][$j]=$data[$j];
 	        }
 	        $i++;
        }
       mysqli_close($conex);
           //enviando datos
           header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}//fin de la funcion index
	
 	public function modificar(){
 		extract($_REQUEST);//extrayendo valores de url
 		$db=new clasedb();
 		$conex=$db->conectar();//conectando con la base de datos

 		$sql="SELECT * FROM datos_ciudades WHERE id=".$id_ciudad."";
 		$res=mysqli_query($conex,$sql);//ejecutando consulta
 		$data=mysqli_fetch_array($res);//extrayendo datos en array

 		header("Location: editar.php?data=".serialize($data));
 	}//fin de la funcion modificar

 	public function actualizar()
 	{
 		extract($_POST);//EXTRAYENDO VARIABLES DEL FORMULARIO
 		$db=new clasedb();
 		$conex=$db->conectar();//conectando con la base de datos

   			$sql="SELECT * FROM datos_ciudades WHERE nombre=".$nombre." AND id<>".$id_ciudad;
   	//echo $sql;
    $res=mysqli_query($conex,$sql);
    $cant=mysqli_num_rows($res);//trae cuantos registros tiene la consulta
        if ($cant>0) {
        	?>
        	   <script type="text/javascript"> 
                  alert("NOMBRE YA REGISTRADO");
                  window.Location="CiudadesControlador.php?operation=index";
        	   </script>
            <?php
        }else{
        $sql="UPDATE datos_ciudades SET nombre='".$nombre."',apodo='".$apodo."',ubicacion='".$ubicacion."',poblacion='".$poblacion."',natalidad='".$natalidad."',mortalidad='".$mortalidad."' WHERE id=".$id_ciudad;
        $res=mysqli_query($conex,$sql);
            if ($res) {
            	?>
            	<script type="text/javascript">
            		alert("REGISTRO MODIFICADO");
            		window.Location="CiudadesControlador.php?operacion=index";
            	</script>
            	<?php
            } else {
            	?>
            	<script type="text/javascript">
            		alert("ERROR AL MODIFICAR EL REGISTRO");
            		window.Location="CiudadesControlador..php?operacion=index";
            	</script>
            	<?php
            }

    }


}//fin de la funcion actualizar
 	public function eliminar()
 	{
 		extract($_REQUEST);//extrayendo variables del url
 		$db=new clasedb();
 		$conex=$db->conectar();//conectando con la base de datos

 		$sql="DELETE FROM datos_ciudades WHERE id=".$id_ciudad;

 		$res=mysqli_query($conex,$sql);
 		if ($res) {
 			?>
 			<script type="text/javascript">
 				alert("REGISTRO ELIMINADO");
 				window.location="CiudadesControlador.php?operacion=index";
 			</script>
 			<?php
 		} else {
 			?>
 			<script type="text/javascript">
 				alert("REGISTRO NO ELIMINADO");
 				window.location="CiudadesControlador.php?operacion=index";
 			</script>
 			<?php
 		}
 	}//fin de la funcion eliminar

	static function controlador($operacion){
		$ciudad=new CiudadesControlador();
		switch ($operacion) {
			case 'index':
				$ciudad->index();
				break;
			case 'registrar':
				$ciudad->registrar();
				break;
			case 'guardar':
				$ciudad->guardar();
				break;
			case 'modificar':
				$ciudad->modificar();
				break;	
			case 'actualizar':
				$ciudad->actualizar();
				break;
			case 'eliminar':
				$ciudad->eliminar();
				break;
			default:
			?>
			<script type="text/javascript">
				alert("No existe la ruta");
				window.location="CiudadesControlador.php?operacion=index";
			</script>
			<?php
			break;
		}//cierre del switch
	}//cierre de la funcion controlador
}// cierre de la clase Personas Controlador

CiudadesControlador::controlador($operacion);
?>