<?php
include 'YaasConnector.php';
include 'Event.php';
include 'Address.php';
include 'Interest.php';
include 'Notification.php';

class User implements JsonSerializable{
	private $id;
	private $email;				//=login
	private $password;
	private $address;			//class
	private $gender;			//thesaurus
	private $birthDate;
	private $interest;			//class
	private $notifications;		//class
	private $bookings;			//array of class ->{event, payment} 
	private $wishlist;			//array of events
	//private $settings;		//class
	private $organizedEvents;	//array
	private $votedEvents;		//array
	
	public function __construct($id, $email, $password, $address, $gender, $birthDate, $interest, $notifications, $bookings, $wishlist, $organizedEvents, $votedEvents){
		$this->id = $id;
		$this->email = $email;
		$this->password = $password;
		$this->address = $address;
		$this->gender = $gender;
		$this->birthDate = $birthDate;
		$this->interest = $interest;
		$this->notifications = $notifications;
		$this->bookings = $bookings;
		$this->wishlist = $wishlist;
		//$this->settings = $settings;
		$this->organizedEvents = $organizedEvents;
		$this->votedEvents = $votedEvents;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	public function setPassword($password){
		$this->password = $password;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setAddress($address){
		$this->address = $address;
	}
	public function setGender($gender){
		$this->gender = $gender;
	}
	public function setBirthDate($birthDate){
		$this->birthDate = $birthDate;
	}
	public function setInterest($interest){
		$this->interest = $interest;
	}
	public function setNotifications($notifications){
		$this->notifications = $notifications;
	}
	public function setBookings($bookings){
		$this->bookings = $bookings;
	}
	public function setWishlist($wishlist){
		$this->wishlist = $wishlist;
	}
	//public function setSettings($settings){
	//	$this->settings = $settings;
	//}
	public function setOrganizedEvents($organizedEvents){
		$this->organizedEvents = $organizedEvents;
	}
	public function setVotedEvents($votedEvents){
		$this->votedEvents = $votedEvents;
	}
	public function set($key, $value){
		$this->$key = $value;
	}
	
	public function getId(){
		return $this->id;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getAddress(){
		return $this->address;
	}
	public function getGender(){
		return $this->gender;
	}
	public function getBirthDate(){
		return $this->birthDate;
	}
	public function getInterest(){
		return $this->interest;
	}
	public function getNotifications(){
		return $this->notifications;
	}
	public function getBookings(){
		return $this->bookings;
	}
	public function getWishlist(){
		return $this->wishlist;
	}
	//public function getSettings(){
	//	return $this->settings;
	//}
	public function getOrganizedEvents(){
		return $this->organizedEvents;
	}
	public function getVotedEvents(){
		return $this->votedEvents;
	}
	
	public function getUserByEmail($email){
		$juserlist = get("user?q=email:".chr(34).$email.chr(34));
		return User::fromJSONa($juserlist)[0];
	}
	
	public function getPasswordByEmail($email){
		$juserlist = get("user?q=email:".chr(34).$email.chr(34));
		return User::fromJSONa($juserlist)[0]->getPassword();
	}
	
	public function getUserListByEvent($event){
		$userslist=User::getUserList();
		$resultUserArray = array();
		foreach ($userslist as $user){
			$bookingslist=$user->getBookings();
			foreach ($bookingslist as $booking){
				if($booking->getEvent()->getId() == $event->getId()){
					array_push($resultUserArray,$user);
				}
			}
		}
		return $resultUserArray;
	}
	
	public function getEventOrganizer($event){
		$userslist=User::getUserList();
		$resultUserArray = array();
		foreach ($userslist as $user){
			$organizedEventslist=$user->getOrganizedEvents();
			foreach ($organizedEventslist as $organizedEvent){
				if($organizedEvent->getId() == $event->getId()){
					array_push($resultUserArray,$user);
				}
			}
		}
		return $resultUserArray[0];
	}
	
	public function organizeEvent($event){
		if (gettype($event)=="Event"){
			$event->postEvent();
			$this->setOrganizedEvents(array_push($this->getOrganizedEvents(), $event));
		}
		$this->putUser();
	}
	
	public function voteEvent($event){
		echo gettype($event);
		if (gettype($event)=="Event"){
			$this->setVotedEvents(array_push($this->getVotedEvents(), $event));
		}
		$this->putUser();
	}
	
	public function proposeEvent($event){	//wishlist
		echo gettype($event);
		if (gettype($event)=="Event"){
			$this->setWishlist(array_push($this->getWishlist(), $event));
		}
		$this->putUser();
	}
	
	public function bookEvent($event){	//wishlist
		echo gettype($event);
		if (gettype($event)=="Event"){
			$this->setBookings(array_push($this->getBookings(), $event));
		}
		$this->putUser();
	}
	
	public function jsonSerialize(){	
		$str = json_encode([
		'id'=>$this->id,
		'email'=>$this->email,	//=login
		'password'=>$this->password,
		'address'=>$this->address->jsonSerialize(),	//class
		'gender'=>$this->gender,	//thesaurus
		'birthDate'=>$this->birthDate,
		'interest'=>json_encode($this->interest), //thesaurus
		'notifications' =>json_encode($this->notifications), //class
		'bookings' =>json_encode($this->bookings),	//class
		'wishlist' =>json_encode($this->wishlist),	//class
		'organizedEvents' =>json_encode($this->organizedEvents),	//class
		'votedEvents' =>json_encode($this->votedEvents)	//class
		]);
		
		/*$str = str_replace(chr(92), '', $str);
		$str = str_replace('"{', '{', $str);
		$str = str_replace('}"', '}', $str);
		$str = str_replace('"[', '[', $str);
		$str = str_replace(']"', ']', $str);*/
		
		return $str;
	}
	
	
	function fromJSON($juser){
		$userv = json_decode($juser,true);
		$user = new User(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
		foreach($userv as $key=>$value){
			if($key=='address'){
				$addressv = json_decode($value);
				$address = new Address(1, 1, 1, 1, 1, 1, 1);
				foreach($addressv as $key=>$value){
					$address->set($key, $value);
				}
				$user->set('address', $address);
				continue;
			}
			if($key=='interest'){
				$interestvA = Interest::fromJSONa($value);
				$user->set('interest', $interestvA);
				continue;
			}
			if($key=='notifications'){
				$notificationsvA = Notification::fromJSONa($value);
				$user->set('notifications', $notificationsvA);
				continue;
			}
			if($key=='bookings'){
				$bookingsvA = Booking::fromJSONa($value);
				$user->set('bookings', $bookingsvA);
				continue;
			}
			if($key=='wishlist'){
				$wishlistvA = Event::fromJSONa($value);
				$user->set('wishlist', $wishlistvA);
				continue;
			}
			if($key=='organizedEvents'){
				$organizedEventsvA = Event::fromJSONa($value);
				$user->set('organizedEvents', $organizedEventsvA);
				continue;
			}
			if($key=='votedEvents'){
				$votedEventsvA = Event::fromJSONa($value);
				$user->set('votedEvents', $votedEventsvA);
				continue;
			}
			
			$user->set($key, $value);
		}
		return $user;
	}
	
	function fromJSONa($userAj){
		$userAv = json_decode($userAj);
		$userA = array();
		foreach($userAv as $key=>$userj){
			if (gettype($userj)=="string"){
				$user = User::fromJSON($userj);
				array_push($userA, $user);
			}
			if (gettype($userj)=="object"){
				$juserj = json_encode($userj);
				$user = User::fromJSON($juserj);
				array_push($userA, $user);
			}
		}
		return $userA;
	}
	
	//////////////////////////////////////////////////
	public function postUser(){
		post("user", $this->jsonSerialize());
	}
	
	public function putUser(){
		put("user", $this->getId(), $this->jsonSerialize());
	}
	
	public function deleteUser(){
		delete("user", $this->getId());
	}
	
	public function getUserList(){
		$juserlist = get("user");
		return User::fromJSONa($juserlist);
	}

}
?>