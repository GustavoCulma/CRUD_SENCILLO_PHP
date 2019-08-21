<?php

include("db.php");


if (isset($_GET['id'])	) {
	$id = $_GET['id'];
	$query = "SELECT * FROM tarea WHERE id = $id";
	$result = mysqli_query($conn,$query);
	if (mysqli_num_rows($result)==1) {
		$row= mysqli_fetch_array($result);
		$titlle = $row['titulo'];
		$description = $row['descripcion'];

	}

if (isset($_POST['Actualizar'])	) {
	$id = $_GET['id'];
	$titlle= $_POST['titlle'];
	$description= $_POST['description'];
	$query = "UPDATE tarea SET titulo = '$titlle', descripcion = '$description' WHERE id = '$id'";
	mysqli_query($conn,$query);
	$_SESSION['message']= "tarea actualizada";
	$_SESSION['message_type']= 'danger';


	header(	"location: index.php");
}

}

 ?>
 <?php include"includes/header.php"?>

	<div class="container p-4">
		<div class="col-md-4 mx-auto">
			<div class="card card-body">
				<form action="editar.php?id=<?php 	echo $_GET['id']; ?>" method="POST">
					<div class="form-group">
						<input type="text" name="titlle" value="<?php echo $titlle ?>" class="form-control" placeholder="Acualiza el titulo">
					</div>
					<div class="form-group">
						<textarea name="description"rows="2" class="form-control"
						placeholder="Actualiza la descripción"=""><?php echo $description?></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success btn-block" name="Actualizar" value="Actualizar">
					</div>
				</form>
			</div>
		</div>
	</div>

 <?php include"includes/footer.php"?>



