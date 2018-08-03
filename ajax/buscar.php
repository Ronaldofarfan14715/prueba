<?php 

include_once('../modelo/conexion.php');


$con = new Conexion();

$conBD = $con->Conexion();


$buscar = $_POST['consulta'];

$query = "SELECT * FROM estudiante WHERE idAlumno=$buscar";

$rs=mysqli_query($conBD,$query);
$num=$rs->num_rows;


if($num!==0){
    
while($row=$rs->fetch_array()){

    echo "<tr class='text-center'>
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
    <td>$row[3]</td>
    </tr>";

}

    
}else{


 

        echo "<tr class='text-center'>
        <td colspan='7'>NO HAY REGISTROS</td>
        </tr>";
    
    
}









?>