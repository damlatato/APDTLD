<?php
require_once(__DIR__.'/model/YaasConnector.php');
spl_autoload_register(function ($class) {
    $file = __DIR__.'/model/'.$class.'.php';
	if(file_exists($file)) {
		include $file;
	}
});
include_once ("../Eduvent/model/thesaurus.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Eduvent</title>

<!-- JQuery -->
<script type="text/javascript" src="../Eduvent/lib/js/jquery-3.1.1.min.js"></script>

<!-- CSS -->

<!-- Font Awesome-->
<link rel="stylesheet" href="../Eduvent/lib/font-awesome/css/font-awesome.min.css" type='text/css'>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="../Eduvent/lib/css/bootstrap.min.css" type='text/css'>

<!-- Material Design Bootstrap -->
<link rel="stylesheet" href="../Eduvent/lib/css/mdb.min.css" type='text/css'>

<!-- Custom styles -->
<link rel="stylesheet" href="../Eduvent/lib/css/styles.css" type='text/css'>

<!-- Datepicker -->
<link rel="stylesheet" href="../Eduvent/lib/datepicker/css/datepicker.css" type='text/css'>

<!-- Multi-step form -->


<!-- Favicons and touch icons -->
<link rel="shortcut icon" type="image/x-icon" href="../Eduvent/view/images/favicon.png">

</head>

<body>
<header>
<?php
include 'view/header.php';
?>
</header>

<!--Main-->
<main>

<?php
if (isset($_GET['page'])) {
	$page=$_GET['page'];
	
	if ($page=='home' or
		$page=='event-market' or
		$page=='create-event' or
		$page=='event-proposals' or
		$page=='create-proposal' or
		$page=='offer-event' or
		$page=='profile') {
		include('view/'.$page.'.php');
	}
	else {
		include('controller/'.$page.'.php');
	}
}
else {
	include('view/home.php');
}
?>

</main>
<!--/.Main-->

<!--Footer-->
<footer class="page-footer center-on-small-only">

<?php
include 'view/footer.php';
?>

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->

<!-- JQuery UI -->
<script type="text/javascript" src="../Eduvent/lib/js/jquery-ui.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../Eduvent/lib/js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../Eduvent/lib/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="../Eduvent/lib/js/mdb.min.js"></script>

<!-- Datepicker -->
<script type="text/javascript" src="../Eduvent/lib/datepicker/js/bootstrap-datepicker.js"></script>

<!-- MSF Scripts 
<script type="text/javascript" src="../Eduvent/lib/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="../Eduvent/lib/js/placeholder.js"></script>
<script type="text/javascript" src="../Eduvent/lib/js/msf-scripts.js"></script>-->

<!-- Custom scripts -->
<script type="text/javascript" src="controller/js/shoppingCart.js"></script>

</body>
</html>