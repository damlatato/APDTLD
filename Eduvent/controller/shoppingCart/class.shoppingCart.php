<?php

class ShoppingCart {	

	public $events;
	
	public function __construct() {
		$events = new SplObjectStorage();
    }
	
	function addEvent($eventID,$quantity) {
		//TODO fetch event from db
		
		//TODO check if event already exists in shopping cart
	
		return "eventID: ".$eventID."quantity: ".$quantity;
	}
	
	public function removeEvent($eventID, $amount) {
	
	}
	
	function getQuantityOfDifferentEvents(){
		$var = count($this->{'events'});
		return $var;
	}

}