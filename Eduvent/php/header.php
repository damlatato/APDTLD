<header>

	<!--Navbar-->
	<nav class="navbar navbar-light grey lighten-5 navtop">
	<div class="navbar-inner">

		<!-- Collapse button-->
		<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2"><i class="fa fa-bars"></i></button>

		<div class="container">

			<!--Collapse content-->
			<div class="collapse navbar-toggleable-xs" id="collapseEx2">
				<a class="navbar-brand" href="../Eduvent/index.php">
					<span><img src="../Eduvent/images/logo.png" height="50" width="54"></span>Eduvent
				</a>
				<!--Links-->
				<ul class="nav navbar-nav">
					<li class="nav-item"><a class="nav-link" href="#">Event market</a></li>
					<li class="nav-item"><a class="nav-link" href="../Eduvent/index.php?page=createevent">Create event</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Event proposal</a></li>
					<li class="nav-item"><a class="nav-link" href="#">About</a></li>
				</ul>
				<ul class="nav navbar-nav pull-right">
					<li class="nav-item"><a class="nav-link waves-effect waves-light" href="#"><i class="fa fa-envelope"></i>&nbspContact</a></li>
<!-- 						this part  shows welcome message of logged in user with username and -->
<!-- 						 a hyper link to logout the user and redirects the �logout.php� page.  -->
						<?php
//  ob_start();
//  session_start();
//   require_once 'login/dbconfig.php';?>
 <?php 
 session_start();
require_once 'login/class.user.php';
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
<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle waves-effect waves light" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		<i class="fa fa-user"></i>
		<span class="glyphicon glyphicon-user"></span>&nbsp;Hi! <?php echo $row['userName']; ?>&nbsp;<span class="caret"></span>
	</a>
	</a>
	<div class="dropdown-menu dropdown-default" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
		<a class="dropdown-item waves-effect waves-light" href="login/member.php">My Profile</a>
		<a class="dropdown-item waves-effect waves-light" href="#">Create Event</a>
		<a class="dropdown-item waves-effect waves-light" href="#">Bookings</a>
		<a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
		<a class="dropdown-item waves-effect waves-light" href="login/logout.php?logout">Sign Out</a>
	</div>
</li>  


 <?php } else { 
 	

?>
<!-- header("Location: login.php"); -->
<!--   // select loggedin users detail -->
<!--   $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']); -->
<!--   $userRow=mysql_fetch_array($res); -->
<!--   exit; -->
<li class="nav-item"><a href="../Eduvent/index.php?page=login" class="nav-link">Log in</a>
<?php } ?>

					<li class="nav-item"><a class="nav-link waves-effect waves-light" href="../Eduvent/index.php?page=settings"><i class="fa fa-gear"></i> Settings</a></li>
				</ul>
				<!--Search form-->
				<!--<form class="form-inline">
					<input id="search-general" class="form-control" type="text" placeholder="Search">
				</form>-->
			</div>
			<!--/.Collapse content-->
		</div>
			
	</div>
	</nav>
	<!--/.Navbar-->

</header>