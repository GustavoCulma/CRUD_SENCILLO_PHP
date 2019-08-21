<?php

// insertar a la base de datos
include"db.php";

if (isset($_POST['save_task'])) {
	$title = $_POST['title'];
	$description = $_POST['descripcion'];

	$query ="INSERT INTO tarea(titulo, descripcion) VALUES ('$title',' $description')";

	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query failed");
	}
	header("location: index.php");

	//aqui estoy guardando un mensaje en la sesion
	//y dandole un color

	$_SESSION['message']= "tarea guardada";
	$_SESSION['message_type']= 'danger';

}

?>