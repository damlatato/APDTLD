<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/APDTLD/Eduvent/model/YaasConnector.php');
spl_autoload_register(function ($class) {
    $file = $_SERVER["DOCUMENT_ROOT"] . '/APDTLD/Eduvent/model/'.$class.'.php';
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
		$(".head-logo").toggleClass("hidden-logo");
	});
});
</script>

<header>

	<!--Navbar
	<nav class="navbar navbar-light grey lighten-5 navtop">-->
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
							<img class="head-logo hidden-logo" src="../Eduvent/view/images/logo-small.png" height="50" width="">
							<img class="head-logo hidden-logo" src="../Eduvent/view/images/logo-small-yellow.jpg" height="42" width="">
						</span>
					</a>
					<!--Links-->
					<ul class="nav navbar-nav">
						<li class="nav-item"><a class="nav-link"
							href="../Eduvent/index.php?page=event-market">Event market</a></li>
						<li class="nav-item"><a class="nav-link"
							href="../Eduvent/index.php?page=create-event">Create event</a></li>
						<li class="nav-item">
							<a class="nav-link" href="../Eduvent/index.php?page=event-proposals">Event proposals</a>
						</li>
						<li class="nav-item"><a class="nav-link"
							href="../Eduvent/index.php">About</a></li>
						<li id="shoppingcartmenu" class="nav-item"><a class="nav-link"
							href="../Eduvent/index.php?page=shoppingCart"> <i
								class="fa fa-shopping-cart left"></i>&nbsp Shopping cart<?php printQuantityOfSelectedEvents()?>
							</a>
						</li>
						<li class="nav-item">
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
						//  ob_start();
						//  session_start();
						//  require_once '../Eduvent/controller/login/dbconfig.php';


						// if session is not set this will redirect to login page
						if(isLoggedUserExisting()== true) {
							$stmt = $user_home->runQuery("SELECT * FROM users WHERE ID=:uid");
							$stmt->execute(array(":uid"=>$_SESSION['userSession']));
							$row = $stmt->fetch(PDO::FETCH_ASSOC);
							?>

						<!-- $res=mysql_query("SELECT * FROM users WHERE ID=".$_SESSION['user']); -->
						<!-- 	$userRow=mysql_fetch_array($res); -->
						<!-- 	include 'Livechat/livechat.php' -->

						<li class="nav-item dropdown"><a
							class="nav-link dropdown-toggle waves-effect waves light"
							type="button" id="dropdownMenu1" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="true"> <i class="fa fa-user"></i>
								<span class="glyphicon glyphicon-user"></span>&nbsp;Hi! <?php echo $row['userName']; ?>&nbsp;<span
								class="caret"></span>
						</a>
							<div class="dropdown-menu dropdown-default"
								aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn"
								data-dropdown-out="fadeOut">
								<a class="dropdown-item waves-effect waves-light"
									href="../Eduvent/index.php?page=profile">My profile</a> <a
									class="dropdown-item waves-effect waves-light" href="#">Create
									Event</a> <a class="dropdown-item waves-effect waves-light"
									href="#">Bookings</a> <a
									class="dropdown-item waves-effect waves-light"
									href="../Eduvent/controller/login/logout.php?logout">Sign out</a>
							</div>
						</li>


						<?php
} else {
?>

						<!-- header("Location: login.php"); -->
						<!--   // select loggedin users detail -->
						<!--   $res=mysql_query("SELECT * FROM users WHERE ID=".$_SESSION['user']); -->
						<!--   $userRow=mysql_fetch_array($res); -->
						<!--   exit; -->

						<li>
							<a href="../Eduvent/index.php?page=login">
								<button type="button" class="btn btn-standard">Log in</button>
							</a>
						</li>

						<?php } ?>

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