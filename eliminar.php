<?php
include("db.php");
if (isset($_GET['id'])	) {
	$id = $_GET['id'];
	$query = "DELETE FROM tarea WHERE id = $id";
	$result = mysqli_query($conn,$query);
	if (!$result) {
		die("no existe");
	}

	$_SESSION['message']= "tarea eliminada";
	$_SESSION['message_type']= 'danger';
	header('location: index.php');
}
?>