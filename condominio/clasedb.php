<?php
    class clasedb{
        private $db;
        public function conectar()
        {
            $this->db=new mysqli("localhost","root","","condominio") or die ("No se pudo conectar con la base de datos :(");
        return $this->db;
        }
    }