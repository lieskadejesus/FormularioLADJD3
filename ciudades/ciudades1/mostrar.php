<?php

include 'ciudades.php';

echo "Probando Herencia <br>";

$veraniegas=new Veraniegas($hoteles,$playas,$parquesacuaticos,$islas);

echo $veraniegas->ciudad_mas_visitada('$hawai');