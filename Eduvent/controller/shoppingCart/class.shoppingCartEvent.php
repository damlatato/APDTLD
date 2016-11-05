<?php
include 'model/db/Event.php';
class ShoppingCartEvent {	

	public $event;
	private $isAsGift;
	public $amount;
	
	public function __construct() {
		 $this->isAsGift = false;
		 $this->amount = 1;
    }
	
	//public function __construct($asGift, $amount) {
		// $this->isAsGift = $asGift;
		 //$this->amount = $amount;
   // }
	
	public function addAmountToEvent($amountFactor) {
		$this->amount = $this->amount + $amountFactor;
	}

	
	public function setEvent($event){
		$this->event = $event;
	}
	public function setAsGift($isAsGift){
		$this->isAsGift = $isAsGift;
	}
	public function setAmount($amount){
		$this->amount = $amount;
	}
	
	public function getEvent(){
		return $this->event;
	}
	
	public function isAsGifst(){
		return $this->isAsGift;
	}
	
	public function getAmount(){
		return $this->amount;
	}
}