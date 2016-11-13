<?php
//include 'model/Event.php';
class ShoppingCartEvent {

	public $event;
	public $amountGift;
	public $amount;

	public function __construct() {
		$this->amountGift = 0;
		$this->amount = 1;
	}

	//public function __construct($asGift, $amount) {
	// $this->isAsGift = $asGift;
	//$this->amount = $amount;
	// }

	public function addAmountToEvent($amountFactor) {
		$this->amount = $this->amount + $amountFactor;
	}

	public function setAmountGift($amountGift){
		$this->amountGift = $amountGift;
	}
	public function setAmount($amount){
		$this->amount = $amount;
	}
	public function setEvent($event){
		$this->event = $event;
	}

	public function getEvent(){
		return $this->event;
	}

	public function getAmountGift(){
		return $this->amountGift;
	}

	public function getAmount(){
		return $this->amount;
	}
}