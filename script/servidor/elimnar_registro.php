<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>


	<?php 
    include("conexion.php");
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
                   echo "<br>".$fila[0]." ".$fila[1]." ".$fila[2]." ".$fila[3]." ".$fila[4]." ".$fila[5]." ".$fila[6]."<a href='prosesar_baja.php?id=$fila[0]'>ELIMINAR</a>";
        }
    }else{
      echo "No hay registros";
    }

   ?>
</body>
</html>