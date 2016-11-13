<?php


// rewuirements 

// 1. function --> User::getIDbyEmail($email) needed to be set
// 2. function --> User::getTokenCodebyEmail($email); needed to be set

require_once '../model/User.php';
// require_once '../model/class.user.php';
// $user = new USER();

// if($user->is_logged_in()!="") {
// 	$user->redirect('../Eduvent/index.php?page=settings');
// }

if(isset($_POST['btn-submit'])) {
	$email = $_POST['txtemail'];
	if ($password == User::getPasswordByEmail($email)) {
// 		need
		$id = User::getIdbyEmail($email);
// 		need
		$tokenCode = User::getTokenCodebyEmail($email);
// 		send message to update his or her password 
			
		$message = "
		Hello , $email
		<br /><br />
		We got requested to reset your password, if you do this then just click the following link to reset your password, if not just ignore                   this email,
		<br /><br />Please click on the following link to reset your password<br /><br />
		<a href='http://localhost/APDTLD/Eduvent/controller/login/resetpass.php?id=$id&code=$tokenCode'>click here to reset your password</a>
		<br /><br />
		thank you :)";
		
		$subject = "Password Reset";
		$user->send_mail($email,$message,$subject);
		$msg = "<div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
		We've sent an email to $email.
		Please click on the password reset link in the email to generate new password.
		</div>";
	}
	
	
	else {
		$msg = "<div class='alert alert-danger'>
			<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Sorry!</strong>this email not found.</div>";
	}
}
// 	$stmt = $user->runQuery("SELECT ID FROM users WHERE EmailAddress=:email LIMIT 1");
// 	$stmt->execute(array(":email"=>$email));
// 	$row = $stmt->fetch(PDO::FETCH_ASSOC); 

// 	if($stmt->rowCount()==1) {
// 		$id = base64_encode($row['ID']);
// 		$code = md5(uniqid(rand()));
// 		$stmt = $user->runQuery("UPDATE users SET tokenCode=:token WHERE EmailAddress=:email");
// 		$stmt->execute(array(":token"=>$code,"email"=>$email));

// 		$message = "
// 			Hello , $email
// 			<br /><br />
// 			We got requested to reset your password, if you do this then just click the following link to reset your password, if not just ignore                   this email,
// 			<br /><br />Please click on the following link to reset your password<br /><br />
// 			<a href='http://localhost/APDTLD/Eduvent/controller/login/resetpass.php?id=$id&code=$code'>click here to reset your password</a>
// 			<br /><br />
// 			thank you :)";

// 		$subject = "Password Reset";
// 		$user->send_mail($email,$message,$subject);
// 		$msg = "<div class='alert alert-success'>
// 			<button class='close' data-dismiss='alert'>&times;</button>
// 			We've sent an email to $email.
// 			Please click on the password reset link in the email to generate new password. 
// 			</div>";
// 	}
// 	else {
// 		$msg = "<div class='alert alert-danger'>
// 			<button class='close' data-dismiss='alert'>&times;</button>
// 			<strong>Sorry!</strong>this email not found.</div>";
// 	}
// }
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
				Please enter your email address. You will receive an email with a link to create a new password.
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