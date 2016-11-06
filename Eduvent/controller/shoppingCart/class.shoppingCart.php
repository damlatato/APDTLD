<?php

class ShoppingCart {

	public $events;

	public function __construct() {
		//$events = new SplObjectStorage();
		$this->events = new ArrayObject();
	}

	function addEvent($eventID,$quantity) {

		include 'class.shoppingCartEvent.php';
		include '../../model/db/YaasConnector.php';
		include '../../model/db/Event.php';
		include '../../model/db/Address.php';
		//$event = new Event(3, null, "Test event of Maria", "So good event", "25.10.2016 13:56", null, 'Studing', 11);
		//$eventlist=get("event");
		$eventlist=Event::getEventlist();

		if(!isset($eventlist)){
			return;
		}

		foreach ($eventlist as $value) {
			if($value->getId() == $eventID){
				$event = $value;

			}

		}

		if(!isset($event)){
			return;
		}


		//TODO check if event already exists in shopping cart
		if($this->isEventByIDExisting($eventID)){
			getEventbyID($eventID)->amount +=$quantity;
		}
		else{
			$shoppingCartEvent = new ShoppingCartEvent;

			$shoppingCartEvent->setEvent($event);
			$shoppingCartEvent->setAmount($quantity);
			$shoppingCartEvent->setAsGift(false);
			//$this->events->attach($shoppingCartEvent, $eventID);
			$this->events->append($shoppingCartEvent);
			$_SESSION['shoppingCartSession'] = $this;


		}


		return "eventID: ".$eventID."quantity: ".$quantity."eventtitle: ".$event->getTitle();
	}

	function removeEvent($eventID, $amount) {

	}

	function getQuantityOfDifferentEvents(){
		$var = count($this->{'events'});
		return $var;
	}

	function isEventByIDExisting($eventID){

		$shoppingcartt = $_SESSION['shoppingCartSession'];
		if($shoppingcartt->events->count()>0){

			foreach ($shoppingcartt->events as $value) {
				//echo $value->getEvent()->getId();
				var_dump($value);
				//	echo $value->amount;
				//	if($value->event->getId() == $eventID){

				//		return true;
				//	}

			}
		}
		return false;
	}
	
	function getEventbyID($eventID){

		foreach ($this->events as $value) {
			if($value->getEvent()->getId() == $eventID){
				return $value;
			}
		}
		return null;
	}

	public function getEvents(){
		return $this->events;
	}
}