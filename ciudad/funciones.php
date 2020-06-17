<?php
include("conexion.php");
extract($_REQUEST);

class funcioneslista
{
	public function guardar()
	{
	extract($_REQUEST);
	$db=new conexion();
	$con=$db->conectar();
	$sql="INSERT INTO comic VALUES(NULL,'".$nombre."','".$apodo."','".$ubicacion."','".$poblacion."','".$natalidad."','".$mortalidad."')";
	$resultado=mysqli_query($con,$sql);
	if ($resultado)
		 {
			?>
			<script type="text/javascript">
				alert("Ciudad Registrada");
				window.location="index.php";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("Error al registrar la ciudad");
				window.location="index.php";
			</script>
			<?php
			}
	}

	public function modificar()
	{
		extract($_REQUEST);
        $db=new conexion();
        $conex=$db->conectar();
        $sql="SELECT * FROM ciudad WHERE id=".$id_ciudad."";
		$res=mysqli_query($conex,$sql);
        $data=mysqli_fetch_array($res);

        header("Location: modificar.php?data=".serialize($data));
	}

	public function actualizar(){
        extract($_REQUEST);
        $db=new conexion();
        $conex=$db->conectar();

        $sql="UPDATE ciudad set nombre='$nombre', apodo='$apodo', ubicacion='$ubicacion', poblacion='$poblacion', natalidad='$natalidad', mortalidad='$mortalidad'  WHERE id=$id_ciudad";
       	$res=mysqli_query($conex,$sql);
        	if ($res) {
        		?>
        		<script>
        			alert("REGISTRO MODIFICADO");
        			window.location="mostrarregistro.php";
        		</script>
        		<?php
        	}else{
        		?>
        		<script>
        			alert("ERROR AL MODIFICAR REGISTRO");
        			window.location="mostrarregistro.php";
        		</script>
        		<?php
        	}
    }


	public function eliminar()
	{
		extract($_REQUEST);
		$db=new conexion();
		$conex=$db->conectar();

		$sql="DELETE FROM ciudad WHERE id=".$id_ciudad;
		$res=mysqli_query($conex,$sql);
		if($res)
		{
			?>
			<script type="text/javascript">
				alert("Registro de Ciudad Eliminado");
				window.location="mostrarregistro.php";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("Error al eliminar Registro");
				window.location="mostrarregistro.php";
			</script>
			<?php

			} 

		}



	static function controlador($operacion){
		$ciudad=new funcioneslista();
		switch ($operacion) {
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
					<script>
						alert("No existe la ruta");
						window.location="funciones.php?operacion=index.php";
					</script>
				<?php
				break;
		}//switch
	}//funcion controlador
}//class
funcioneslista::controlador($operacion);
?>