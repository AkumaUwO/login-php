<?php 
	session_start();
	if (isset($_POST['logOut'])) {
		unset($_SESSION['usuario']);
		header('Location: index.php');
	}
?>
<?php if (isset($_SESSION['usuario'])){

?>

<?php include "partials/header.php"; ?>

<div class="container">
  <div class="row mt-3 justify-content-md-center">
  	<div class="col-md-6">
  		<h3>Welcome, <?php echo '<strong>'. $_SESSION['usuario'] .'<strong>' ?></h3>
  		<form action="" method="POST">

  			<button type="submit" name="logOut" class="form-control btn btn-block btn-primary">logout</button>
		</form>
  	</div>
  </div>
</div>
<?php include "partials/footer.php"; ?>

<?php }else{
	header('Location: index.php');
}  ?>