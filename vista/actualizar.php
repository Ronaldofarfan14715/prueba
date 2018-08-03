<?php 



include_once('../modelo/conexion.php');
include_once('../modelo/estudiante.php');

$con = new Conexion;

$conBD = $con->Conexion();

$id= $_GET['idAlumno'];


$query="SELECT * FROM estudiante WHERE idAlumno=$id";

$rs= mysqli_query($conBD,$query);

$row=$rs->fetch_row();

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   


</head>

<body>

    <div class="container ">
        <div class="row mt-5 justify-content-center ">
            <div class="col-6 border mt-5">

                <form method="post" class="m-5" action="../controlador/actualizar.php?idAlumno=<?php echo $row[0]; ?>">

                    <div class="form-group">
                        <label >Nombre</label>
                        <input class="form-control" name="nom" type="text" value="<?php echo $row[1];?>">
                    </div>

                     <div class="form-group">
                        <label >Apellido</label>
                        <input class="form-control" name="ape" type="text" value="<?php echo $row[2];?>">
                    </div>

                     <div class="form-group">
                        <label >Edad</label>
                        <input class="form-control" name="edad" type="text" value="<?php echo $row[3];?>">
                    </div>


                    <div class="d-flex justify-content-center">
                        <button  class="btn mt-3 btn-dark btn-lg ">Registrar</button>
                    </div>


                </form>

               
            </div>
        </div>
    </div>


</body>


</html>