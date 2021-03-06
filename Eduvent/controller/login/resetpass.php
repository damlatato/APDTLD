<?php
// require_once 'class.user.php';
// $user = new USER();

// requirements 

// 1. $id = User::getUserIDByTokenCode($code);
// 2. $name = User::getUserByID($id);
// 3. update db function for changing password

require_once '../../model/User.php';


if(empty($_GET['id']) && empty($_GET['code']))
{
// 	$user->redirect('../Eduvent/index.php?page=login');
}

if(isset($_GET['id']) && isset($_GET['code']))
{
	$id_inURL = $_GET['id'];
	$tokenCode = $_GET['code'];
	$usermail = $_SESSION['usermail'];
	
	$user = User::getUserByEmail($usermail);
	
// 	$id = User::getUserIdByTokenCode($tokenCode);
// 	$name = User::getUserById($id);
	
// 	$stmt = $user->runQuery("SELECT * FROM users WHERE ID=:uid AND tokenCode=:token");
// 	$stmt->execute(array(":uid"=>$id,":token"=>$code));
// 	$rows = $stmt->fetch(PDO::FETCH_ASSOC);
	
	
	
		if(isset($_POST['btn-reset-pass']))
		{
			$password  = $_POST['pass'];
			$cpass = $_POST['confirm-pass'];
			
			if($cpass!==$password )
			{
				$msg = "<div class='alert alert-block'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Sorry!</strong>  Password Doesn't match. 
						</div>";
			}
			else
			{
				$password = $cpass;
// 				$stmt = $user->runQuery("UPDATE users SET userPass=:upass WHERE ID=:uid");
// 				call function to update db 
				$user->setPassword($password);
				$user->putUser();
				$msg = "<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						Password Changed.
						</div>";
				header("refresh:5;../../index.php?page=login");
			}
		}	
	}
	else
	{
		$msg = "<div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
				No Account Found, Try again
				</div>";
				
	}
	
	


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Password Reset</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body id="login">
    <div class="container">
    	<div class='alert alert-success'>
			<strong>Hello !</strong>  <?php echo $name ?> you are here to reset your forgetton password.
		</div>
        <form class="form-signin" method="post">
        <h3 class="form-signin-heading">Password Reset.</h3><hr />
        <?php
        if(isset($msg))
		{
			echo $msg;
		}
		?>
        <input type="password" class="input-block-level" placeholder="New Password" name="pass" required />
        <input type="password" class="input-block-level" placeholder="Confirm New Password" name="confirm-pass" required />
     	<hr />
        <button class="btn btn-large btn-primary" type="submit" name="btn-reset-pass">Reset Your Password</button>
        
      </form>

    </div> <!-- /container -->
    <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>