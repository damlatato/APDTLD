<?php
class Payment implements JsonSerializable{
	private $id;
	private $paymentDate;	//key
	private $paymentAmount;
	
	
	public function __construct($id, $paymentDate, $paymentAmount){	
		$this->id = $id;
		$this->paymentDate = $paymentDate;
		$this->paymentAmount = $paymentAmount;
	}
	
	public function setId($id){
		$this->id = $id;
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
	
	
	public function getId(){
		return $this->id;
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
	
	function fromJSON($jpayment){
		$paymentv = json_decode($jpayment,true);
		$payment = new Payment(1,1,1);
		foreach($paymentv as $key=>$value){
			$payment->set($key, $value);
		}
		return $payment;
	}
	
}

?>