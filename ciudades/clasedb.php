<<<<<<< HEAD
<?php
class clasedb{
private $db;
public function conectar(){
	$this->db= new mysqli ("localhost","root","", "programacion") or die ("No se pudo conectar con Mysql");
	return $this->db;
}
}
=======
<?php
class clasedb{
private $db;
public function conectar(){
	$this->db= new mysqli ("localhost","root","", "programacion") or die ("No se pudo conectar con Mysql");
	return $this->db;
}
}
>>>>>>> cebbfa0fe85be224e0a7fb9d0b0054bd7eb809e1
?>