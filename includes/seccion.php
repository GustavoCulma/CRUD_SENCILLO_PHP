
	<div class="row">
		<div class="col-sm-4">
			<div class="card card-body">
				<!-- aqui se envia esta información-->
				<form action="salvarTarea.php" method="POST">
					<div class="form-group">
						<input type="text" name="title" class="form-control" placeholder="Titulo de la tarea" autofocus="">
					</div>
					<div class="form-group">
						<textarea name="descripcion"rows="2" class="form-control"
						placeholder="Descripcion de la tarea"=""></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success btn-block" name="save_task" value="Crear">
					</div>
				</form>
			</div>
		</div>
		<div class="col-sm-8">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>tiulo</th>
						<th>Descripcion</th>
						<th>Fecha de creación</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query ="SELECT * FROM tarea";
					$result_task = mysqli_query($conn,$query);

					while ( $row = mysqli_fetch_array($result_task)) { ?>
						<tr>
							<td><?php echo $row['titulo']; ?></td>
							<td><?php echo $row['descripcion']; ?></td>
							<td><?php echo $row['creacion']; ?></td>
							<td>
								<a href="editar.php?id=<?php echo $row['id']; ?> " class="btn btn-primary">
									<i class="fas fa-marker"></i>
								</a>
								<a href="eliminar.php?id=<?php echo $row['id']; ?> "class="btn btn-danger"">
									<i class="far fa-trash-alt"></i>
								</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>



