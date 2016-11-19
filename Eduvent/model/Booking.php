<?php
spl_autoload_register(function ($class) {
    $file = '../Eduvent/model/'.$class.'.php';
	if(file_exists($file)) {
		include $file;
	}
});

class Booking implements JsonSerializable{
	private $eventId;	
	private $bookingTime;
	
	public function __construct($eventId, $bookingTime){
		$this->eventId = $eventId;
		$this->bookingTime = $bookingTime;
	}
	
	public function seteventId($eventId){
		$this->eventId = $eventId;
	}
	public function setbookingTime($bookingTime){
		$this->bookingTime = $bookingTime;
	}
	public function set($key, $value){
		$this->$key = $value;
	}
	
	
	public function geteventId(){
		return $this->eventId;
	}
	public function getbookingTime(){
		return $this->bookingTime;
	}
	
	public function jsonSerialize(){
		return json_encode([
		'eventId'=>$this->eventId,	//key
		'bookingTime'=>$this->bookingTime
		]);
	}
	
	public static function fromJSON($jbooking){
		$booking = new Booking(1, 1);
		$bookingv = json_decode($jbooking,true);
		foreach($bookingv as $key=>$value){
			$booking->set($key, $value);
		}
		return $booking;
	}
	
	public static function fromJSONa($bookingAj){
		$bookingAv = json_decode($bookingAj);
		if (count($bookingAv)<1){
    		return array();
    	}
		$bookingsA = array();
		foreach($bookingAv as $key=>$bookingj){
			$booking = Booking::fromJSON($bookingj);
			array_push($bookingsA, $booking);
		}
		return $bookingsA;
	}
}

?>