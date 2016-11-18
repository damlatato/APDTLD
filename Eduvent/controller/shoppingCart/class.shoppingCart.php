<?php

class ShoppingCart {

	public $events;

	public function __construct() {
		//$events = new SplObjectStorage();
		$this->events = new ArrayObject();
	}

	function addEvent($eventID,$quantity,$amountGift) {

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

		if($this->isEventByIDExisting($eventID)){
			$this->getEventbyID($eventID)->amount +=$quantity;
			$this->getEventbyID($eventID)->amountGift +=$amountGift;
		}
		else{
			$shoppingCartEvent = new ShoppingCartEvent;

			$shoppingCartEvent->setEvent($event);
			$shoppingCartEvent->setAmount($quantity);
			$shoppingCartEvent->setAmountGift($amountGift);
			//$this->events->attach($shoppingCartEvent, $eventID);
			$this->events->append($shoppingCartEvent);
			$_SESSION['shoppingCartSession'] = $this;


		}

	
		return "eventID: ".$eventID."quantity: ".$quantity."eventtitle: ".$event->getTitle();
	}

	function removeEvent($eventID) {
		foreach ($this->events  as $key => $value) {
				
			if($value->event->getId() == $eventID){

				unset($this->events[$key]);
				$_SESSION['shoppingCartSession'] = $this;
				return;
			}

		}

	}

	function getQuantityOfDifferentEvents(){
		$var = count($this->{'events'});
		return $var;
	}

	function isEventByIDExisting($eventID){
		if($this->events->count()>0){
			foreach ($this->events as $value) {
				//var_dump($value);
				if($value->event->getId() == $eventID){

					return true;
				}

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
	
	public function calcTotalPrice(){
		if($this->events->count()>0){
			$totalPrice = 0;
			foreach ($this->events as $value) {
				$tmpPrice = $value->event->getPrice();
				$tmpAmount = $value->getAmount();
				$totalPrice += ($tmpPrice*$tmpAmount);
			}
			return $totalPrice;
		}
		return 0;
	}

	public function getEvents(){
		return $this->events;
	}
}