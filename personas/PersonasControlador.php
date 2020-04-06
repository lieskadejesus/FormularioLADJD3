<?php
include("../clasedb.php");
extract($_REQUEST);

class PersonasControlador
{

	public function index(){
		$db=new clasedb();//instanciando clasedb
		$conex=$db->conectar();//conectando con la base de datos

		$sql="SELECT * FROM datos_personales";//query

		$res=mysqli_query($conex,$sql);//ejecutando query
		$campos=mysqli_num_fields($res);//cuantos campos traer la consulta
		$filas=mysqli_num_rows($res);//cuantos registro trae la consulta
		$i=0;
		$datos[]=array();//Inicializando array
        //extrayendo datos
        while($data=mysqli_fetch_array($res)) {
        	for ($j=0; $j <$campos ; $j++) { 
        		$datos[$i][$j]=$data[$j];
 	        }
 	        $i++;
        }
       mysqli_close($conex);
           //enviando datos
           header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}//fin de la funcion index
	
	static function controlador($operacion){
		$persona=new PersonasControlador();
		switch ($operacion) {
			case 'index':
				$persona->index();
				break;
			case 'registrar':
				//$persona->registrar();
				break;
			case 'guardar':
				//$persona->guardar();
				break;
			case 'actualizar':
				//$persona->actualizar();
				break;
			case 'eliminar':
				//$persona->eliminar();
				break;
			default:
			?>
			<script type="text/javascript">
				alert("No existe la ruta");
				window.location="PersonasControlador.php?operacion=index";
			</script>
			<?php
			break;
		}//cierre del switch
	}//cierre de la funcion controlador
}// cierre de la clase Personas Controlador

PersonasControlador::controlador($operacion);