<?php

include 'conexion.php';

$DNI=$_POST['DNI'];
$FECHA_REGISTRO=$_POST['FECHA_REGISTRO'];

$consulta="insert into entre_rios values('".$DNI."', '".$FECHA_REGISTRO."')";

mysqli_query($conexion, $consulta) or die ("Problemas al insertar".mysqli_error($conexion));
mysqli_close($conexion);

?>
