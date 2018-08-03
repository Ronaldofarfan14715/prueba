<?php 

include_once("../modelo/estudiante.php");


$est= new Estudiante;


$id=$_GET['idAlumno'];
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$edad=$_POST['edad'];


$estu=$est->ModificarEstudiante($id,$nom,$ape,$edad);


echo $estu;


?>