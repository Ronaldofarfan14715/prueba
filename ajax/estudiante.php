<?php 
include_once("conexion.php");




class Estudiante extends Conexion{




    public function AgregarEstudiante($nombre,$apellido,$edad){


        $query="INSERT INTO estudiante(nombreAlum,apellidoAlum,edad) VALUES('$nombre','$apellido','$edad')";

        $rs = mysqli_query($this->cn,$query);
        
        if($rs){


            


            echo "<script> 
            alert('usuario insertado'); 
            location.href='../index.php';
            </script>"; 
           
        }else{
            return "no";
        }

    }
    public function DesactivarEstudiante($id){


        $query="UPDATE estudiante SET condicion=1 WHERE idAlumno=$id";           
        $rs=mysqli_query($this->cn,$query);

       

        if($rs){
            echo "
            <script>
            alert('Estudiante desactivado');
            location.href='../index.php';
            </script>
            
            ";
        }
    }

    public function EliminarEstudiante($id){

        $query="DELETE FROM estudiante WHERE idAlumno=$id";

       
        $rs= mysqli_query($this->cn,$query);

        if($rs){
            echo "<script>
             alert('usuario eliminado');
            location.href='../index.php';
            </script>";
        }else{
            return "no";
        }

    }

    public function ModificarEstudiante($id,$nom,$ape,$edad){

        $query="UPDATE estudiante SET nombreAlum='$nom', apellidoAlum='$ape', edad='$edad' WHERE idAlumno=$id";

        $rs=mysqli_query($this->cn,$query);

        if($rs){
            echo "<script>
            
            alert('usuario modificado');
            location.href='../index.php';
            </script>";
        }

    }

    

    public function MostrarEstudiante(){

        $query="SELECT * FROM estudiante WHERE condicion=0 ";

        $rs= mysqli_query($this->cn,$query);

        
        $num=$rs->num_rows;

        if($num){
            while($row=$rs->fetch_array()){
            

            echo" <tr id='resultado' class='text-center'>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>
              <a href='vista/actualizar.php?idAlumno=$row[0]'><button class='btn btn-outline-success btn-sm'>ACTUALIZAR</button></a>
            </td>
            <td>
              <a href='controlador/desactivar.php?idAlumno=$row[0]'><button class='btn btn-outline-warning btn-sm'>DESACTIVAR</button></a>
            </td>
            <td>
              <a href='controlador/eliminar.php?idAlumno=$row[0]'><button class='btn btn-outline-danger btn-sm'>ELIMINAR</button></a>
            </td>
            </tr>";
            }
        }else{
            echo "<tr class='text-center'>
            <td colspan='7'>NO HAY REGISTROS</td>
            </tr>";
        }
    }

}







?>