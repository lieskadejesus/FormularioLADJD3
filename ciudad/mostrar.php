<?php

include 'ciudades.php';

echo "Buscando Veraniegas <br>";

$veraniegas=new Veraniegas('Marina','coco','Diverlan','Cuyagua');

echo $veraniegas->mensaje();
?>