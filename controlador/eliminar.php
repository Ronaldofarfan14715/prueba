<?php 


include_once("../modelo/estudiante.php");


$idEstudiante = $_GET['idAlumno'];

$est = new Estudiante;




$estu=$est->EliminarEstudiante($idEstudiante);


echo $estu;





?>