<?php
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username) or empty($password)){
		echo '<div class="alert alert-danger">Username or password is empty</div>';
	} else {
		$user = new User;
		if($user->getUser($username, $password)){
			session_start();
			$_SESSION['usuario'] = $username;
			header('Location: welcome.php');
		} else {
			echo '<div class="alert alert-danger">Invalid User or password</div>';
		}
	}
}