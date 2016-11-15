<?php
require_once 'model/User.php';
if(isset($_POST['btn-submit'])) {
	$email = $_POST['txtemail'];
	$user = User::getUserByEmail($email);
	$password = User::getPasswordByEmail($email);
		
	if ($password !== null) {
					
		$message = "
		Hello , $email
		<br /><br />
		We got requested to reset your password, Your password: $password<br /><br />
		
		<br /><br />
		thank you :)";
		
		$subject = "Forgotten Password";
		$user->send_mail($email,$message,$subject);
		$msg = "<div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
		We've sent an email to $email.
		</div>";
	}	
	else {
		$msg = "<div class='alert alert-danger'>
			<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Sorry!</strong>this email not found..</div>";
	}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Forgot Password</title>
  </head>
  <body id="login">
    <div class="container">

		<form class="form-signin" method="post" style="margin-top: 50px;
			max-width: 300px;
			padding: 19px 29px 29px;
			margin: 34px auto 20px;
			background-color: #fff;
			border: 1px solid #e5e5e5;
			font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
			font-size: 14px;
			line-height: 20px;
			color: #333;
			border-radius: 5px;
			box-shadow: 0 1px 2px rgba(0,0,0,.05);">

			<h2 class="form-signin-heading">Forgot Password.</h2><hr />
        
<?php
if(isset($msg)) {
	echo $msg;
}
else {
?>

			<div class='alert alert-info'>
				Please enter your email address. You will receive an email.
			</div>  
<?php
}
?>

			<input type="email" class="input-block-level"
				style="font-size: 16px;
				height: auto;
				margin-bottom: 15px;
				padding: 7px 9px;
				border: 1px solid #ccc;
				border-radius: 4px;
				width: 226px;" placeholder="Email address" name="txtemail" required />
			<hr />
			<button class="btn btn-danger btn-primary" type="submit" name="btn-submit">Generate new password</button>
		</form>

    </div> <!-- /container -->
  </body>
</html>