<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Eduvent</title>

<!-- JQuery -->
<script type="text/javascript" src="../Eduvent/lib/jquery-2.2.3.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../Eduvent/lib/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../Eduvent/lib/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="../Eduvent/lib/mdb.min.js"></script>

<!-- PrefixFree -->
<script type="text/javascript" src="../Eduvent/lib/prefixfree.min.js"></script>
	
<!-- Font Awesome-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css"> 

<!-- Bootstrap core CSS -->
<link href="../Eduvent/css/bootstrap.min.css" rel="stylesheet">

<!-- Material Design Bootstrap -->
<link href="../Eduvent/css/mdb.min.css" rel="stylesheet">

<!-- Custom styles -->
<link href="../Eduvent/css/styles.css" rel="stylesheet">

</head>

<body>
<header>
<?php
include 'php/header.php';
?>
</header>
	
<!--Main-->
<main>

<?php

	if (isset($_GET['page'])) {
		$page = $_GET['page'] . '.php';
		include('php/'.$page);
	}	/* if $page has a value, include it */
	else {
		include('php/home.php');
	}	/* otherwise, include the default page */

?>

</main>
<!--/.Main-->

<script type="text/javascript" src="js/search.js"></script>

<!--Footer-->
<footer class="page-footer center-on-small-only">

<?php
include 'php/footer.php';
?>

</footer>
<!--/.Footer-->

</body>
</html>