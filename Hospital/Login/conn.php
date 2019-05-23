<?php
$host = "localhost";
//usuario de la bd
$usuario="root";
//clave de acceso de la base de datos
$clave="";
//bae de datos
$db="centromedico";
//conexion con MySQL
$conn = mysqli_connect($host,$usuario,$clave,$db) or die("Error al abrir la base de datos");
?>
