<?php
class Lieska{
     public $nombre;
     public $apellido;
	 public $edad;
	 public $cedula;
	 public function __construct($nombre,$apellido,$edad,$cedula)
{
	$this->nombre=$nombre;
	$this->apellido=$apellido;
	$this->edad=$edad;
	$this->cedula=$cedula;
}
}
?>