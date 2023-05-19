
<?php 
session_start();
		if (isset($_SESSION['usuario'])) {
			header('Location: Welcome.php');
		}

include "Database/db.php";
include "userModel.php";
include "userController.php";
?>
<?php include "partials/header.php"; ?>

<div class="container">
  <div class="row mt-3 justify-content-md-center">
  	<div class="col-md-6">
  		<form action="" method="POST">
  			<div class="mb-3">
    			<label for="username" class="form-label">Username</label>
    			<input type="text" class="form-control" id="username" name="username">
  			</div>
  			<div class="mb-3">
    			<label for="password" class="form-label">Password</label>
    			<input type="password" class="form-control" id="password" name="password">
  			</div>
  			<button type="submit" name="submit" class="form-control btn btn-block btn-primary">Login</button>
		</form>
  	</div>
  </div>
</div>
<?php include "partials/footer.php"; ?>