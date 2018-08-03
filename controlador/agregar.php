<?php


require_once("../modelo/estudiante.php");






$nom=$_POST['nom'];
$ape=$_POST['ape'];
$edad=$_POST['edad'];



$obj= new Estudiante;
$rs=$obj->AgregarEstudiante($nom,$ape,$edad);


?>