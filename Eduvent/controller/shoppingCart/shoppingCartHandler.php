<?php
	/*
	* codes for ajax call:
	* [0] - error! shoppingCartSession not existing
	*/
	include_once 'class.shoppingCart.php';
	
	session_start();
	if(!isset($_SESSION['shoppingCartSession'])){
		echo "0";
		return;
	}

	$function = $_POST['functionname'];
	
	if ($function == "addToShoppingCart"){
		$eventID = $_POST['eventID'];
		$quantity = $_POST['quantity'];
	
		$shoppingCart = $_SESSION['shoppingCartSession'];
		$success = $shoppingCart->{'addEvent'}($eventID,$quantity);
		echo $success;
	}
?>
