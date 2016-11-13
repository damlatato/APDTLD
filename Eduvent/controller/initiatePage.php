<?php
	
	session_start();
	
	isLoggedUserExisting();
	
	isShoppingCartExisting();
	
	checkIfPurchaseHasBeenDone();
	
	function isShoppingCartExisting() {
		//$_SESSION['shoppingCartSession'] = new ShoppingCart;
		if(!isset($_SESSION['shoppingCartSession'])){			
			$_SESSION['shoppingCartSession'] = new ShoppingCart;
		}
	}

	function checkIfPurchaseHasBeenDone() {
		if (isset($_POST['purchaseshoppingCart'])){
			$_SESSION['shoppingCartSession'] = new ShoppingCart;
		}
	}
	
	function hasShoppingCartAtLeastOneEvent(){
		$shoppingCart = $_SESSION['shoppingCartSession'];
		$quantity = $shoppingCart->{'getQuantityOfDifferentEvents'}();
		if ($quantity>0){
			return true;
		} else {
			return false;
		}
	}
	
	function printQuantityOfSelectedEvents(){
		$shoppingCart = $_SESSION['shoppingCartSession'];
		$quantity = $shoppingCart->{'getQuantityOfDifferentEvents'}();
		if ($quantity>0){
			echo ' ('.$quantity.')';
		}
	}
	
	//TODO ????????????????????????????????????????????????????????????????????????
	function isLoggedUserExisting() {
		if(isset($_SESSION['userSession'])){
			return true;
		} else {
			return false;
		}
	}

?>