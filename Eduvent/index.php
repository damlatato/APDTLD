<?php
$titles = array();
$descriptions = array();
define('ROOT_PATH', str_replace('\\','/',__DIR__).'/');
include_once('model/YaasConnector.php');
spl_autoload_register(function ($class) {
    $file = 'model/'.$class.'.php';
	if(file_exists($file)) {
		include $file;
	}
});
include_once 'model/thesaurus.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Eduvent</title>

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="../Eduvent/lib/js/jquery-3.1.1.min.js"></script>

<!-- JQuery UI -->
<script type="text/javascript" src="../Eduvent/lib/js/jquery-ui.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../Eduvent/lib/js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../Eduvent/lib/js/bootstrap.min.js"></script>

<!-- Datepicker -->
<script type="text/javascript" src="../Eduvent/lib/datepicker/js/bootstrap-datepicker.js"></script>

<!-- CSS -->
	
<!-- Font Awesome -->
<link rel="stylesheet" href="../Eduvent/lib/font-awesome/css/font-awesome.min.css" type='text/css'>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="../Eduvent/lib/css/bootstrap.min.css" type='text/css'>

<!-- Material Design Bootstrap -->
<link rel="stylesheet" href="../Eduvent/lib/css/mdb.min.css" type='text/css'>

<!-- Custom styles -->
<link rel="stylesheet" href="../Eduvent/lib/css/styles.css" type='text/css'>

<!-- Datepicker -->
<link rel="stylesheet" href="../Eduvent/lib/datepicker/css/datepicker.css" type='text/css'>

<!-- Favicon -->
<link rel="shortcut icon" href="../Eduvent/view/images/favicon.png" type="image/x-icon">

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
//  		$page=='create-event' or
		$page=='event-proposals' or
		$page=='create-proposal' or
		$page=='mail-success' or
		$page=='event-description' or
		$page=='offer-event' or
		$page=='analytics' or
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
<footer class="page-footer center-on-small-only grey darken-3">

<?php
include 'view/footer.php';
?>

</footer>
<!--/.Footer-->

<!-- MDB core JavaScript -->
<script type="text/javascript" src="../Eduvent/lib/js/mdb.min.js"></script>

<!-- Fusion Charts 
<script src="../Eduvent/lib/fusioncharts/fusioncharts.js"></script>
<script src="../Eduvent/lib/fusioncharts/fusioncharts.theme.fint.js"></script>
<script src="../Eduvent/lib/fusioncharts/fusioncharts.charts.js"></script>
<script src="../Eduvent/lib/fusioncharts/fusioncharts.widgets.js"></script>-->

<!-- Custom scripts -->
<script type="text/javascript" src="../Eduvent/controller/js/shoppingCart.js"></script>

</body>
</html>