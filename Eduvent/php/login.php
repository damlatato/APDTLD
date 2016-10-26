<?php

// This file also contains html form with two input box which will take user email and user password entered by user
// and then after submitting the form, the php code will match that user email and password combination in database 
// and when it finds both results in table then it will start a session and
// allow user to access home page else it will show appropriate message.

require_once 'login/class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
	$user_login->redirect('../Eduvent/index.php');
}

if(isset($_POST['btn-login'])) {
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtupass']);
 
	if ($user_login->login($email,$upass)) {
		$user_login->redirect('../Eduvent/index.php');
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
			<strong>Sorry!</strong>This Account is not. Please click on the activation link in your email. 
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
				<strong>Wrong Details!</strong> 
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
			<a href="signup.php" style="float:right;background: #c12e2a;" class="btn btn-large">Sign up</a><hr />
			<a href="Login/fpass.php">Lost your Password?</a>
		</form>

	</div> <!-- /container -->
</div>