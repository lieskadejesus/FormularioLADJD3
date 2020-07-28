<?php
include('clasedb.php');
extract($_REQUEST);
$db=new clasedb();
$conex=$db->conectar();

for($i=1;$i<=20;$i++)
{
	
	$id=rand(1,1000);

	
	$auto=rand(1,2);
		if($auto==1)
			{
				$auto='Si';
			}
		else
			{
				$auto='No';
			}

	
	$situacion=rand(1,3);
		if($situacion==1)
			{
				$situacion='Ocupado';
			}
		else if($situacion==2)
			{
				$situacion='Desocupado';
			}
		else if($situacion==3)
			{
				$situacion='Mantenimiento';
			}

	
	$tipo=rand(1,5);
		if($tipo==1)
			{
				$tipo='Apartamento';
			}
		else if($tipo==2)
			{
				$tipo='Casa';
			}
		else if($tipo==3)
			{
				$tipo='Quinta';
			}
		else if($tipo==4)
			{
				$tipo='Chalet';
			}
		else if($tipo==5)
			{
				$tipo='Otro';
			}
			
	$cod_postal=rand(1000,9999);
 	//El primer script se utilizo un rand para la identificacion del condominio
   //El segundo script se utilizo un rand para ver si tiene o no estacionamiento
  //El tercer script se utilizo un rand para la situacion del condominio
 //El cuarto script se utilizo un rand para el tipo de condominio
 //El cuarto script se utilizo un rand para el codigo postal
	$sql="INSERT INTO inmuebles (id,idem,estacionamiento,status,tipo,cod_postal) 

	VALUES (NULL,'$id','$auto','$situacion','$tipo','$cod_postal')";

	$result=mysqli_query($conex,$sql);
		 if($result)
		{	
			echo $i.' registro ingresado :)<br>';
		}

		else
		{
			echo $i.' Registro no ingresado :(<br>';
		}
}
echo '<a href="index.php">Volver</a>';
?>
