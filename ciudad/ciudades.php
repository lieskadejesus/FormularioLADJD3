<?php
class ciudades 
{
	
    public $nombre;
    public $apodo;
    public $ubicacion;
    public $poblacion;
    public $tasadenatalidad;
    public $tasademortalidad;

    public function __construct($nombre,$apodo,$ubicacion,$poblacion,$tasadenatalidad,$tasademortalidad){
    	$this->nombre=$nombre;
    	$this->apodo=$apodo;
    	$this->ubicacion=$ubicacion;
    	$this->poblacion=$poblacion;
    	$this->tasadenatalidad=$tasadenatalidad;
    	$this->tasademortalidad=$tasademortalidad;
    }
    public function mensaje()
    {
        return 'ha entrado a la funcion';
    }
}

class Veraniegas extends ciudades
{
    	public $hoteles;
    	public $playas;
    	public $parquesacuaticos;
    	public $islas;

    	public function __construct($hoteles,$playas,$parquesacuaticos,$islas){
    		$this->hoteles=$hoteles;
    		$this->playas=$playas;
    		$this->parquesacuaticos=$parquesacuaticos;
    		$this->islas=$islas;
    	}
}
?>