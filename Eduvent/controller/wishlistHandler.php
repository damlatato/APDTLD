<?php
	/*
	* codes for ajax call:
	* [0] - error! shoppingCartSession not existing
	*/
	include_once '../model/YaasConnector.php';
	include_once '../model/User.php';
	include_once '../model/Notification.php';
	include_once '../model/Booking.php';
	

	$function = $_POST['functionname'];
	if ($function == "addToWishlist"){
		$eventID = $_POST['eventID'];
		$usermail = $_POST['userMail'];
		if ($usermail === "NO EMAIL"){
			header ('Location: ../../index.php?page=login');
		}
		echo "<script>alert('wishlist handler'+$eventID+'  '+$usermail);</script>";
		$user = User::getUserByEmail($usermail);
		$user->wishEventById($eventID);	
	}
?>
