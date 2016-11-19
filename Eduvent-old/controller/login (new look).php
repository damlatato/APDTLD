<?php

// This file also contains html form with two input box which will take user email and user password entered by user
// and then after submitting the form, the php code will match that user email and password combination in database 
// and when it finds both results in table then it will start a session and
// allow user to access home page else it will show appropriate message.

//$user_login = new USER();
ob_start();
session_start();
if(isset($_SESSION['usermail']))
{
	//$user_login->redirect('../Eduvent/index.php');
	echo json_encode(User::getUserByEmail($_SESSION['usermail'])->getVotedEvents()); //just to test that session works
}

if(isset($_POST['btn-login'])) {
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtupass']);
 
	if (User::getPasswordByEmail($email)==$upass) {
		//$user_login->redirect('../Eduvent/index.php');
		$user = User::getUserByEmail($email);
		$_SESSION['usermail'] = $user->getEmail();
		echo $_SESSION['usermail'];
		echo json_encode($user->getVotedEvents());
	}
}
?>

<div class="container flex-center">
	<div class="row">
		<div class="col-lg-12">

<?php 
	if(isset($_GET['inactive'])) {
?>

		<div class='alert alert-error'>
			<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Sorry!</strong>This Account is not activated. Please click on the activation link in your email. 
		</div>

<?php
	}
?>

			<!--Form-->
			<form class="form-signin" method="post">

<?php
	if(isset($_GET['error'])) {
?>

			<div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Wrong details!</strong> 
			</div>

<?php
	}
?>

				<div class="card">
					<div class="card-block">

						<div class="text-xs-center">
							<h3><i class="fa fa-user"></i> Log in:</h3>
							<hr>
						</div>

						<div class="md-form">
							<i class="fa fa-envelope prefix"></i>
							<input type="text" id="form2" class="form-control">
							<label for="form2">Your email</label>
						</div>

						<div class="md-form">
							<i class="fa fa-lock prefix"></i>
							<input type="password" id="form4" class="form-control">
							<label for="form4">Your password</label>
						</div>

						<div class="text-xs-center">
							<a href="#" class="btn btn-ins btn-standard" type="submit" name="btn-login">Log in</a>
							<a href="../Eduvent/index.php?page=signup" class="btn btn-ins btn-opposite">Sign up</a>
						</div>
						<hr>
						<a href="../Eduvent/index.php?page=fpass">Lost your password?</a>

					</div>
				</div>
			</form>
			<!--/.Form-->

		</div>
	</div>
</div>