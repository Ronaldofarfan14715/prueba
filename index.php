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

  

<script>
  
$(document).ready(function(){

  $('#ida').keyup(function(){

    let consulta = $('#ida').val();

    $.ajax({

      type:'post',
      url: 'ajax/buscar.php',
      data: {consulta:consulta},
      success: function(x){

        $('#resultado').html(x);
      },
      error: function(){
        alert("error petición ajax");
      }

    });


  });
});


 
</script>
</head>

<body>

  <div class="container ">

    <div class="row mt-5 justify-content-center ">
    <div class="col-10 mt-5 ">
      <div class="table-responsive  ">

        <h3 class="text-center mb-5">GESTOR DE ESTUDIANTES</h3>



      
        <form >
          <div class="form-group row col-9">

              <label class="text-center" >Buscar:</label>

            <div class="col-4">
              <input id="ida" name="consulta" class=" ml-2 form-control" type="text">
             </div>

             <div class="col-2">
              <button id="buscar" class="btn mt-1 btn-sm btn-outline-secondary ">Buscar</button>
             </div>
          </div>

        </form>
   



        <table class=" table table-md table-center table-bordered ">

          <thead style="color: white;" class="text-center bg-dark ">

            <th>ID ALUMNO</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>EDAD</th>
            
            <th colspan="3">OPERACIONES <a href="../prueba/vista/Agregar.html"><button id="agregar" class="btn ml-4 btn-outline-info">Agregar</button></a></th>
          </thead>

          <?php
          
          include_once("modelo/estudiante.php");

          $est= new Estudiante;

          $re=$est->MostrarEstudiante();
          
          ?>
        </table>
      </div>
</div>
    </div>

  </div>




  
</body>

</html>