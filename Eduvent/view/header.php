<?php
include_once('model/YaasConnector.php');
ob_start();
// require_once 'controller/initiatePage.php';
spl_autoload_register(function ($class) {
    $file = 'model/'.$class.'.php';
	if(file_exists($file)) {
		include $file;
	}
});

include_once 'controller/shoppingCart/class.shoppingCart.php';
include_once 'controller/shoppingCart/class.shoppingCartEvent.php';
require_once 'controller/initiatePage.php';
?>
<script>
$( document ).ready(function() {
	$(".theme-switch").click(function(){
		$(".navtop").toggleClass("theme-dark");
		$(".navtop").toggleClass("navbar-light");
		$(".navtop").toggleClass("navbar-dark");
		$(".head-logo").toggleClass("hidden");
	});
});
</script>

<header>
	<!--Navbar-->
	<nav class="navbar navbar-light navtop">
		<div class="navbar-inner">

			<!-- Collapse button-->
			<button class="navbar-toggler hidden-sm-up" type="button"
				data-toggle="collapse" data-target="#collapseEx2">
				<i class="fa fa-bars"></i>
			</button>

			<div class="container">

				<!--Collapse content-->
				<div class="collapse navbar-toggleable-xs" id="collapseEx2">
					<a class="navbar-brand" href="../Eduvent/index.php">
						<span>
							<img class="head-logo" src="../Eduvent/view/images/logo-banner-small.png" height="50" width="">
							<img class="head-logo hidden" src="../Eduvent/view/images/logo-small.png" height="50" width="">
							<img class="head-logo hidden" src="../Eduvent/view/images/logo-small-yellow.jpg" height="42" width="">
						</span>
					</a>
					<!--Links-->
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="../Eduvent/index.php?page=event-market">Event market</a></li>
						<li class="nav-item">
							<a class="nav-link" href="../Eduvent/controller/createevent.php">Create event</a></li>
						<li class="nav-item">
							<a class="nav-link" href="../Eduvent/index.php?page=event-proposals">Event proposals</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../Eduvent/index.php">About</a></li>
						<li id="shoppingcartmenu" class="nav-item">
							<a class="nav-link" href="../Eduvent/index.php?page=shoppingCart">
								<i class="fa fa-shopping-cart left"></i>
								&nbsp Shopping cart<?php if (!isset($_POST['purchaseshoppingCart'])){ printQuantityOfSelectedEvents();} ?>
							</a>
						</li>
						<li class="nav-item">
							&nbsp&nbsp
							<label class="switch">
								<input class="theme-switch" type="checkbox"><div class="slider round"></div>
							</label>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<!--<li class="nav-item"><a class="nav-link waves-effect waves-light" href="#"><i class="fa fa-envelope"></i>&nbspContact</a></li>-->

						<!-- this part  shows welcome message of logged in user with username and  -->
						<!-- a hyper link to logout the user and redirects the logout.php page. -->
<?php

// if session is not set this will redirect to login page
// 	if(isLoggedUserExisting()== true) {
// 	$stmt = $user_home->runQuery("SELECT * FROM users WHERE ID=:uid");
// 	$stmt->execute(array(":uid"=>$_SESSION['userSession']));
// 	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$check = isLoggedUserExisting();
	if ($check == true) {
?>

						<li class="nav-item dropdown">
							<a class="hd-account nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<b><img class="head-logo" src="../Eduvent/view/images/user.png" height="35" width="">
								<span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $_SESSION['username']; ?>&nbsp;</b>
							</a>
							<div class="dropdown-menu dropdown-default" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
								<a class="dropdown-item waves-effect waves-light" href="../Eduvent/index.php?page=profile">My profile</a>
								<a class="dropdown-item waves-effect waves-light" href="../Eduvent/controller/createevent.php">Create Event</a>
								<a class="dropdown-item waves-effect waves-light" href="../Eduvent/index.php?page=profile">Bookings</a>
								<a class="dropdown-item waves-effect waves-light" href="../Eduvent/index.php?page=analytics">Eduvent Analytics</a>
								<a class="dropdown-item waves-effect waves-light" href="controller/login/logout.php">Sign out</a>
							</div>
						</li>
<?php
	}
	else 
	{
?>
						<li>
							<a href="../Eduvent/index.php?page=login">
								<button type="button" class="btn btn-standard">Log in</button>
							</a>
						</li>
<?php 
	} 
?>
					</ul>

				</div>
				<!--/.Collapse content-->
			</div>
		</div>
	</nav>
	<!--/.Navbar-->
</header>