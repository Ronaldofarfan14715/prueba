<?php 


class Conexion{



    private $local="localhost";
    private $user="root";
    private $pass="";
    private $bd="examen";
    public $cn;


    function Conexion(){

        $this->cn= new mysqli($this->local,$this->user,$this->pass,$this->bd) or die("error");

        return $this->cn;
        


    }
}



?>