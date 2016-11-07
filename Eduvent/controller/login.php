<?php

// This file also contains html form with two input box which will take user email and user password entered by user
// and then after submitting the form, the php code will match that user email and password combination in database 
// and when it finds both results in table then it will start a session and
// allow user to access home page else it will show appropriate message.

//require_once '../model/User.php';
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

<div id="login">
	<div class="container">

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

		<form class="form-signin" method="post"
			style="margin-top: 50px;
				max-width: 300px;
				padding: 19px 29px 29px;
				margin: 34px auto 20px;
				background-color: #fff;
				border: 1px solid #e5e5e5;
				font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
				font-size: 14px;
				line-height: 20px;
				color: #333;
				border-radius: 5px;box-shadow: 0 1px 2px rgba(0,0,0,.05);">

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

			<h2 class="form-signin-heading" >Sign In.</h2><hr />
			<input type="email" class="input-block-level"
				style="font-size: 16px;
					height: auto;
					margin-bottom: 15px;
					padding: 7px 9px;  border: 1px solid #ccc;  border-radius: 4px;width: 226px;"
				placeholder="Email address" name="txtemail" required />
			<input type="password" class="input-block-level"
				style="font-size: 16px;
					height: auto;
					margin-bottom: 15px;
					padding: 7px 9px; border: 1px solid #ccc;   border-radius: 4px;width: 226px;" placeholder="Password" name="txtupass" required />
			<hr />
			<button class="btn btn-large btn-primary" type="submit" name="btn-login">Sign in</button>
			<!--<a href="../Eduvent/controller/signup.php" style="float:right;background: #c12e2a;" class="btn btn-large">Sign up</a><hr />-->
			<a href="../Eduvent/index.php?page=signup" style="float:right;background: #c12e2a;" class="btn btn-large">Sign up</a><hr />
			<a href="../Eduvent/index.php?page=fpass">Lost your password?</a>
		</form>

	</div> <!-- /container -->
</div>