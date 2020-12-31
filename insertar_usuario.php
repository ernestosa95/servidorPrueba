<?php

include 'conexion.php';

$name=$_POST['name'];
$password=$_POST['password'];
$dni=$_POST['dni'];
$date=$_POST['date'];


$consulta="insert into usuarios values('".$name."', '".$password."', '".$dni."', '".$date."')";

mysqli_query($conexion, $consulta) or die ("Problemas al insertar".mysqli_error($conexion));
mysqli_close($conexion);

?>