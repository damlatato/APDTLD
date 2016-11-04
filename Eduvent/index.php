<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Eduvent</title>

<!-- JQuery -->
<script type="text/javascript" src="../Eduvent/lib/jquery-2.2.3.min.js"></script>

<!-- JQuery UI -->
<script type="text/javascript" src="../Eduvent/lib/jquery-ui.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../Eduvent/lib/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../Eduvent/lib/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="../Eduvent/lib/mdb.min.js"></script>

<!-- Datepicker -->
<script type="text/javascript" src="../Eduvent/view/datepicker/js/bootstrap-datepicker.js"></script>

<!-- PrefixFree -->
<script type="text/javascript" src="../Eduvent/lib/prefixfree.min.js"></script>
	
<!-- Font Awesome-->
<link rel="stylesheet" href="../Eduvent/view/font-awesome/css/font-awesome.min.css">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="../Eduvent/view/css/bootstrap.min.css">

<!-- Material Design Bootstrap -->
<link rel="stylesheet" href="../Eduvent/view/css/mdb.min.css">

<!-- Custom styles -->
<link rel="stylesheet" href="../Eduvent/view/css/styles.css">

<!-- Datepicker -->
<link rel="stylesheet" href="../Eduvent/view/datepicker/css/datepicker.css">

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
		$page = $_GET['page'] . '.php';
		include('controller/'.$page);
	}	/* if $page has a value, include it */
	else {
		include('controller/home.php');
	}	/* otherwise, include the default page */

?>

</main>
<!--/.Main-->

<script type="text/javascript" src="controller/js/search.js"></script>
<script type="text/javascript" src="controller/js/shoppingCart.js"></script>

<!--Footer-->
<footer class="page-footer center-on-small-only">

<?php
include 'view/footer.php';
?>

</footer>
<!--/.Footer-->

</body>
</html>