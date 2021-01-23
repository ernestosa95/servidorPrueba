<?php

include 'conexion.php';

$COORDENADAS=$_POST['COORDENADAS'];


$consulta="insert into COORDENADAS values('".$COORDENADAS."')";

mysqli_query($conexion, $consulta) or die ("Problemas al insertar".mysqli_error($conexion));
mysqli_close($conexion);

?>