
<?php if (isset($_SESSION['message'])) {?>
	<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
		<div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible">
  		<button type="button" class="close" data-dismiss="alert">&times;</button>
  		<strong>
		<?= $_SESSION['message'] ?>
  		</strong>
		</div>
		</div>
	</div>
</div>
<?php session_unset();} ?>
