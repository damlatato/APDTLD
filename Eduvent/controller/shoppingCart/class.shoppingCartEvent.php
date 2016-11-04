<?php

class ShoppingCart {	

	private $event;
	private $isAsGift;
	private $amount;
	
	public function __construct() {
		 $this->isAsGift = false;
		 $this->amount = 1;
    }
	
	public function __construct($asGift, $amount) {
		 $this->isAsGift = $asGift;
		 $this->amount = $amount;
    }
	
	public function add_amount_to_event($amountFactor) {
		$this->amount = $this->amount + $amountFactor;
	}

	//TODO get & set methods
}