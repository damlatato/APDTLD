<?php
class Booking implements JsonSerializable{
	private $id;
	private $eventId;	//key
	private $bookingTime;
	private $payment;	//class
	
	public function __construct($id, $eventId, $bookingTime, $payment){
		$this->id = $id;
		$this->eventId = $eventId;
		$this->bookingTime = $bookingTime;
		$this->payment = $payment;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	public function seteventId($eventId){
		$this->eventId = $eventId;
	}
	public function setbookingTime($bookingTime){
		$this->bookingTime = $bookingTime;
	}
	public function setpayment($payment){
		$this->payment = $payment;
	}
	public function set($key, $value){
		$this->$key = $value;
	}
	
	
	public function getId(){
		return $this->id;
	}
	public function geteventId(){
		return $this->eventId;
	}
	public function getbookingTime(){
		return $this->bookingTime;
	}
	public function getpayment(){
		return $this->payment;
	}
	
	public function jsonSerialize(){
		$payment = $this->getpayment();
		return json_encode([
		'id'=>$this->id,
		'eventId'=>$this->eventId,	//key
		'bookingTime'=>$this->bookingTime,
		'payment'=>$payment->jsonSerialize()
		]);
	}
	
	function fromJSON($jbooking){
		$booking = new Booking(1, 1, 1, 1);
		$bookingv = json_decode($jbooking,true);
		foreach($bookingv as $key=>$value){
			if($key==='payment'){
				$paymentv = json_decode($value);
				$payment = new Payment(1,1,1);
				foreach($paymentv as $key=>$value){
					$payment->set($key, $value);
				}
				$booking->set('payment', $payment);
				continue;
			}
			$booking->set($key, $value);
		}
		return $booking;
	}
	
	function fromJSONa($bookingAj){
		$bookingAv = json_decode($bookingAj);
		$bookingsA = array();
		foreach($bookingAv as $key=>$bookingj){
			$booking = Booking::fromJSON($bookingj);
			array_push($bookingsA, $booking);
		}
		return $bookingsA;
	}
}

?>