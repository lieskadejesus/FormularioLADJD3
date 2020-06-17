<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!Doctype html>
<html>
<head>
<title>Registro de Ciudades
</title>
<link rel="stylesheet" type="text/css" href="tablas.css">
</head>
<body>
<a href="index.php"><input type="button" value="Volver" class="boton"></a>
<br><br><br><center>
    <form method="post" action="funciones.php">
        <table>
            <tr>
                <th> Registro de Ciudades</th>
            </tr>
            <tr>
                <td>
                    <input type="text" id="ciudad" placeholder="Nombre de la Ciudad" name="ciudad" class="cuadros" value="<?=$data[1]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="apodo" placeholder="Apodo" name="apodo" class="cuadros" value="<?=$data[2]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="ubicacion" placeholder="Ubicacion" name="ubicacion" class="cuadros" value="<?=$data[3]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="poblacion" placeholder="Poblacion" name="poblacion" class="cuadros" value="<?=$data[4]?>">
                </td>
           </tr>
            <tr>
                <td>
                    <input type="text" id="natalidad" placeholder="Tasa De Natalidad" name="natalidad" class="cuadros" value="<?=$data[5]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="tex" id="mortalidad" placeholder="Tasa De Mortalidad" name="mortalidad" class="cuadros" value="<?=$data[6]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id_ciudad"value="<?=$data[0]?>">
                    <input type="hidden" name="operacion"value="actualizar">
                    <input type="submit" name="enviar" value="Modificar" class="boton">
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
