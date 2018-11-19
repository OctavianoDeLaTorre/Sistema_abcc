<!DOCTYPE html>
<html lang="es">
<head>
  <title>Altas alumnos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Altas alumnos</h2>
  <form  method="POST" action="../script/servidor/procesar_altas.php">
    <div class="form-group">
     
         <div class="form-group">
          <label>Num. Control:</label>
          <input type="text" class="form-control" placeholder="Ej. Octaviano" name="txt_num_control">
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>

       <div class="form-group">
          <label>Nombre:</label>
          <input type="text" class="form-control" placeholder="Ej. Octaviano" name="txt_nombre">
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>

        <div class="form-group">
          <label>Primera apellido:</label>
          <input type="text" class="form-control" placeholder="Ej. De La Torre" name="txt_primer_ap">
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>

        <div class="form-group">
          <label>Segundo apellido:</label>
          <input type="text" class="form-control" placeholder="Ej. De La Torre" name="txt_segundo_ap">
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>

        <div class="form-group">
          <label>Edad:</label>
          <input type="text" class="form-control" placeholder="Ej. 20" name="txt_edad">
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>

         <div class="form-group">
          <label>Semestre:</label>
          <input type="text" class="form-control" placeholder="Ej. 2" name="txt_semestre">
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>
        
         <div class="form-group">
          <label>Carrera:</label>
          <input type="text" class="form-control" placeholder="Ej. Sistemas" name="txt_carrera">
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <?php 
    include("../script/servidor/conexion.php");
    $h = 'localhost';
    $u = 'root';
    $p = '';
    $bd = 'bd_escuela';

    $enlace = conexion($h, $u, $p ,$bd);

    $sql = "SELECT * FROM alumnos";

    $resultado = mysqli_query($enlace,$sql);

    //var_dump($resultado);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_array($resultado)) {
          echo "<br>".$fila[0];
          echo "<br>".$fila[1];
          echo "<br>".$fila[2];
          echo "<br>".$fila[3];
          echo "<br>".$fila[4];
          echo "<br>".$fila[5];
          echo "<br>".$fila[6];
        }
    }else{
      echo "No hay registros";
    }
   ?>

</div>

</body>
</html>
