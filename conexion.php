<?php

$hostname='localhost';
$database='Proyecto1'; //nombre de la tabla
$username='root';
$password='';

$conexion= new mysqli($hostname, $username, $password, $database);

if($conexion->connect_errno){
	echo "lo sentimos";
}

?>