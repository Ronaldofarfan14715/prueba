<?php



include_once("../modelo/estudiante.php");

$est= new Estudiante;

$condicion = $_GET['idAlumno'];

$estu = $est->DesactivarEstudiante($condicion);

echo $estu;




?>