<?php
class Payment implements JsonSerializable{
	private $paymentDate;	//key
	private $paymentAmount;
	
	
	public function __construct($paymentDate, $paymentAmount){	
		$this->paymentDate = $paymentDate;
		$this->paymentAmount = $paymentAmount;
	}
	
	public function setpaymentDate($paymentDate){
		$this->paymentDate = $paymentDate;
	}
	public function setpaymentAmount($paymentAmount){
		$this->paymentAmount = $paymentAmount;
	}
	public function set($key, $id){
		$this->$key = $id;
	}
	
	
	public function getpaymentDate(){
		return $this->paymentDate;
	}
	public function getpaymentAmount(){
		return $this->paymentAmount;
	}
	
	public function jsonSerialize(){
		return json_encode(get_object_vars($this));
	}
	
	public static function fromJSON($jpayment){
		$paymentv = json_decode($jpayment,true);
		$payment = new Payment(1,1,1);
		foreach($paymentv as $key=>$value){
			$payment->set($key, $value);
		}
		return $payment;
	}
	
}

?>