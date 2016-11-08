<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Eduvent</title>

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="../Eduvent/lib/js/jquery-2.2.3.min.js"></script>

<!-- JQuery UI -->
<script type="text/javascript" src="../Eduvent/lib/js/jquery-ui.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../Eduvent/lib/js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../Eduvent/lib/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="../Eduvent/lib/js/mdb.min.js"></script>

<!--MDB Compiled-->
<script type='text/javascript' src='../Eduvent/lib/js/compiled.min.js'></script>

<!-- Datepicker -->
<script type="text/javascript" src="../Eduvent/lib/datepicker/js/bootstrap-datepicker.js"></script>

<!-- Backstretch -->
<script type="text/javascript" src="../Eduvent/lib/js/jquery.backstretch.min.js"></script>

<!-- Custom scripts -->
<script type="text/javascript" src="controller/js/shoppingCart.js"></script>

<!-- CSS -->

<!-- Font Awesome-->
<link rel="stylesheet" href="../Eduvent/lib/font-awesome/css/font-awesome.min.css">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="../Eduvent/lib/css/bootstrap.min.css">

<!-- Material Design Bootstrap -->
<link rel="stylesheet" href="../Eduvent/lib/css/mdb.min.css">

<!--MDB Compiled-->
<link rel='stylesheet' id='compiled.css-css' href='../Eduvent/lib/css/compiled.min.css' type='text/css' media='all' />

<!-- Custom styles -->
<link rel="stylesheet" href="../Eduvent/lib/css/styles.css">

<!-- Datepicker -->
<link rel="stylesheet" href="../Eduvent/lib/datepicker/css/datepicker.css">

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
	
	if ($page=='event-market' or
		$page=='event-proposals' or
		$page=='create-proposal' or
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

</body>
</html>