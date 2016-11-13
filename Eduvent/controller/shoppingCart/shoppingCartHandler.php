<?php
	/*
	* codes for ajax call:
	* [0] - error! shoppingCartSession not existing
	*/
	include_once 'class.shoppingCart.php';
	include_once 'class.shoppingCartEvent.php';
	include_once '../../model/YaasConnector.php';
	include_once '../../model/Event.php';
	include_once '../../model/Address.php';
	
	session_start();
	
	if(!isset($_SESSION['shoppingCartSession'])){
		echo "0";
		return;
	}

	$function = $_POST['functionname'];
	
	if ($function == "addToShoppingCart"){
		$eventID = $_POST['eventID'];
		$quantity = $_POST['quantity'];
		$amountGift = $_POST['amountGift'];
	
		$shoppingCart = $_SESSION['shoppingCartSession'];
		$success = $shoppingCart->{'addEvent'}($eventID,$quantity,$amountGift);
		echo $success;
	}else if ($function == "removeEvent"){
		$eventID = $_POST['eventID'];
		$shoppingCart = $_SESSION['shoppingCartSession'];
		$success = $shoppingCart->{'removeEvent'}($eventID);
		
	}
?>
