<?php

class ShoppingCart {	

	public $events;
	
	public function __construct() {
		$events = new SplObjectStorage();
    }
	
	function addEvent($eventID,$quantity) {

		include 'class.shoppingCartEvent.php';
		include '../../model/db/YaasConnector.php';
		include '../../model/db/Event.php';
		//$event = new Event(3, null, "Test event of Maria", "So good event", "25.10.2016 13:56", null, 'Studing', 11);
		//$eventlist=get("event");
		$eventlist=Event::getEventlist();
		
		if($eventlist==null){
			echo 'No event in eventlist';
		}else{
			echo 'Some events in eventlist';
		}
		
		foreach ($eventlist as $value) {
			if($value->getId() == $eventID){
				$event = $value;
				
			}
				
		}
		
		if(!isset($event)){
			return;
		}
		

		$shoppingCartEvent = new ShoppingCartEvent;
		
		//TODO set as gift
		
		$shoppingCartEvent->add_amount_to_event($quantity);
		
		$shoppingCart = $_SESSION['shoppingCartSession'];
		
		//TODO check if event already exists in shopping cart
		if(isEventByIDExisting($eventID)){
			$eventTemp = getEventbyID($eventID);
			$eventTemp->amount+=$quantity;
			
		}
		else{
			
			$shoppingCartEvent->setEvent($event);
			$shoppingCart->$events->attach($shoppingCartEvent);
			$_SESSION['shoppingCartSession'] = $shoppingCart;
		}
		
		
		return "eventID: ".$eventID."quantity: ".$quantity;
	}
	
	public function removeEvent($eventID, $amount) {
	
	}
	
	function getQuantityOfDifferentEvents(){
		$var = count($this->{'events'});
		return $var;
	}

	function isEventByIDExisting($eventID){
		
		foreach ($events as $value) {
			if($value->id == $eventID){
				return true;
			}
		}
		return false;
	}
	function getEventbyID($eventID){
		foreach ($eventlist as $value) {
			if($value->id == $eventID){
				return $value;
			}
		}
		return null;
	}
}