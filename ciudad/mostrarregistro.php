<?php
    include("conexion.php");
    extract($_REQUEST);
    $db=new conexion();
    $conex=$db->conectar();

    $sql="SELECT * FROM ciudad";
        
    $res=mysqli_query($conex,$sql);
    $columnas=mysqli_num_fields($res);
    $filas=mysqli_num_rows($res);
    $i=0;
    $datos[]=array();

    while($data=mysqli_fetch_array($res))
        {
            for($j=0;$j<$columnas;$j++)
            {
                $datos[$i][$j]=$data[$j];
            }
            $i++;
        }
    mysqli_close($conex);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Ciudades</title>
   <link rel="stylesheet" type="text/css" href="tablas.css">
<script type="text/javascript">
    function eliminar(id) 
    {
        if (confirm("Seguro desea eliminar el registro?")) 
            {window.location="funciones.php?operacion=eliminar&id_ciudad="+id;}
    }
</script>
</head>
<body>
<a href="index.php"><input type="button" value="Volver"  class="boton"></a>
<br>
<center>
<table align="center" width="90%">
    <tr>
    	<th colspan="8">REGISTRO DE CIUDADES</th>
    </tr>
    <tr>
        <th>id</th>
        <th>Ciudad</th>
        <th>Apodo</th>
        <th>Ubicacion</th>
        <th>Poblacion</th>
        <th>Tasa De Natalidad</th>
        <th>Tasa De Mortalidad</th>
        <th></th>
    </tr>
    <?php $num=1;
        for ($i=0; $i< $filas;$i++) {
            echo "<tr>";
    ?>
<td><?=$num?></td>
    <?php for ($j=1;$j <$columnas; $j++) { ?>
        <td><?=$datos[$i][$j]?></td>
<?php } ?>
<td>
   <a href="funciones.php?operacion=modificar&id_ciudad=<?=$datos[$i][0]?>"><input type="button" value="Modificar" class="boton"></a><br>
   <a href="javascript:eliminar(<?=$datos[$i][0]?>)"><input type="button" value="Eliminar" class="boton"></a>
</td>
<?php
    $num++;
    }   ?>

</table>
</center>
</body>
</html> 