<?php
//aqui estoy guardando una sesion
session_start();
/* de esta manera se realiza la conexion
a la base de datos de una manera sencilla
utilizando la funcion  mysqli_connect y asignadola
a una variable  $conn */
 $conn = mysqli_connect(
 	'localhost',
	'root',
	'',
 	'crud_php'
 );
 ?>