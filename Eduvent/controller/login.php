<?php
require_once 'model/User.php';
// This file also contains html form with two input box which will take user email and user password entered by user
// and then after submitting the form, the php code will match that user email and password combination in database 
// and when it finds both results in table then it will start a session and
// allow user to access home page else it will show appropriate message.

//$user_login = new USER();
// ob_start();
// session_start();
if(isset($_SESSION['usermail']))
{
	//$user_login->redirect('../Eduvent/index.php');
// 	echo json_encode(User::getUserByEmail($_SESSION['usermail'])->getVotedEvents()); //just to test that session works
}

if(isset($_POST['btn-login'])) {
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtupass']);
 
	if (User::getPasswordByEmail($email)==$upass) {
		//$user_login->redirect('../Eduvent/index.php');
		$user = User::getUserByEmail($email);
		$_SESSION['username'] = $user->getName();
		$_SESSION['userSession'] = $user->getId();
		$_SESSION['usermail'] = $user->getEmail();
// 		echo $_SESSION['usermail'];
// 		echo json_encode($user->getVotedEvents());
// 		echo "you passed";
   		header("Location: http://localhost/APDTLD/Eduvent/index.php");
	}
	else {
		
		$msg = "
					<div class='alert alert-success'>
					
					Sorry! Wrong detail! Please check your password or username.
					</div>";
	}
}
?>

<div id="login">
	<div class="container">

<?php 
	if(isset($_GET['error'])) {
?>

		<div class='alert alert-error'>
			<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Sorry!</strong>Wrong details!</div>

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
<?php if(isset($msg)) echo $msg;  ?>
			<h2 class="form-signin-heading" >Log In.</h2><hr />
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
			<button class="btn btn-standard pull-left" type="submit" name="btn-login">Log in</button>
			
			<br>
			<!--<a href="../Eduvent/controller/signup.php" style="float:right;background: #c12e2a;" class="btn">Sign up</a><hr />-->
			<a href="../Eduvent/index.php?page=signup" class="btn btn-opposite">Sign up</a><hr />
			<a href="../Eduvent/index.php?page=fpass">Lost your password?</a>
		</form>

	</div> <!-- /container -->
</div>