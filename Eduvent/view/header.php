<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Eduvent</title>

<!-- Font Awesome
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css"> -->

<!-- Bootstrap core CSS -->
<link href="includes/css/bootstrap.min.css" rel="stylesheet">

<!-- Material Design Bootstrap -->
<link href="includes/css/mdb.min.css" rel="stylesheet">

<!-- Custom styles -->
<link href="includes/css/styles.css" rel="stylesheet">

</head>

<body>


	<!-- Start your project here-->
	<header>

		<!--Navbar-->
		<nav class="navbar navbar-dark bg-primary ">

			<!-- Collapse button-->
			<button class="navbar-toggler hidden-sm-up" type="button"
				data-toggle="collapse" data-target="#collapseEx2">
				<i class="fa fa-bars"></i>
			</button>

			<div class="container">

				<!--Collapse content-->
				<div class="collapse navbar-toggleable-xs" id="collapseEx2">
					<!--Navbar Brand-->
					<a class="navbar-brand" href="#">Eduvent</a>
					<!--Links-->
					<ul class="nav navbar-nav">
						<li class="nav-item active"><a class="nav-link" href="#">Home <span
								class="sr-only">(current)</span>
						</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="#">Event market</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="#">Create event</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="#">About</a>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li class="nav-item active"><a
							class="nav-link waves-effect waves-light" href="#"><i
								class="fa fa-envelope"></i> Contact</a>
						</li>
<!-- 						this part  shows welcome message of logged in user with username and -->
<!-- 						 a hyper link to logout the user and redirects the ‘logout.php’ page.  -->
						<?php
//  ob_start();
//  session_start();
//   require_once 'Login/dbconfig.php';?>
 <?php 
 session_start();
require_once 'Login/class.user.php';
$user_home = new USER();

 
 // if session is not set this will redirect to login page
 if($user_home->is_logged_in()!="")
{
$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);?>
<!-- $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']); -->
<!--  	$userRow=mysql_fetch_array($res); -->
<!-- 	include 'Livechat/livechat.php' -->
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle waves-effect waves light"
							type="button" id="dropdownMenu1" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="true"> <i class="fa fa-user"></i>
								 <span class="glyphicon glyphicon-user"></span>&nbsp;Hi! <?php echo $row['userName']; ?>&nbsp;<span class="caret"></span></a>
						</a>
							<div class="dropdown-menu dropdown-default"
								aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn"
								data-dropdown-out="fadeOut">
								<a class="dropdown-item waves-effect waves-light" href="Login/member.php">My Profile</a>
								<a class="dropdown-item waves-effect waves-light" href="#">Create Event</a>
									<a class="dropdown-item waves-effect waves-light" href="#">Bookings</a>
								<a class="dropdown-item waves-effect waves-light" href="#">Another
									action</a> <a class="dropdown-item waves-effect waves-light"
									href="Login/logout.php?logout">Sign Out</a>
									
							</div>
						</li>  








 
 <?php } else { 
 	

?>
<!-- header("Location: login.php"); -->
<!--   // select loggedin users detail -->
<!--   $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']); -->
<!--   $userRow=mysql_fetch_array($res); -->
<!--   exit; -->
<li class="nav-item"><a class="nav-link" href="Login/login.php">Log in</a>
<?php } ?>

						<li class="nav-item"><a class="nav-link waves-effect waves-light"
							href="#"><i class="fa fa-gear"></i> Settings</a>
						</li>
					</ul>
					<!--Search form-->
					<form class="form-inline">
						<input class="form-control" type="text" placeholder="Search">
					</form>
				</div>
				<!--/.Collapse content-->

			</div>

		</nav>
		<!--/.Navbar-->

	</header>