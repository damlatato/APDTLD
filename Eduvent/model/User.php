<?php
$statuses = ["Proposed"=>"Proposed", "Published"=>"Published"];

spl_autoload_register(function ($class) {
    $file = $_SERVER["DOCUMENT_ROOT"] . '/APDTLD/Eduvent/model/'.$class.'.php';
	if(file_exists($file)) {
		include $file;
	}
});

class User implements JsonSerializable{
	private $id;
	private $name;
	private $email;				//=login
	private $password;
	private $status;
	private $tokenCode;
	private $address;			//class
	private $gender;			//thesaurus
	private $birthDate;
	private $interest; //class
	private $notifications; //class
	private $bookings;	//array of ->{event, payment} 
	private $wishlist;	//array of events
	//private $settings;	//class
	private $organizedEvents;	//array
	private $votedEvents;	//array
	private $proposedEvents;	//array
	
	public function __construct($id, $name, $email, $password, $tokenCode, $address, $gender, $birthDate, $interest, $imgHref){
		$this->id = $id;
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
		$this->status = "N";
		$this->tokenCode = $tokenCode;
		$this->address = $address;
		$this->gender = $gender;
		$this->birthDate = $birthDate;
		if ($interest == ""){
			$interest = array();
		}
		$this->interest = $interest;
		$this->notifications = array();
		$this->bookings = array();
		$this->wishlist = array();
		//$this->settings = $settings;
		$this->organizedEvents = array();
		$this->votedEvents = array();
		$this->proposedEvents= array();
		$this->imgHref = $imgHref;
	}
		
	
	public function setId($id){
		$this->id = $id;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function setPassword($password){
		$this->password = $password;
	}
	public function setStatus($status){
		$this->status = $status;
	}
	public function setTokenCode($tokenCode){
		$this->tokenCode = $tokenCode;
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
	public function setProposedEvents($proposedEvents){
		$this->proposedEvents = $proposedEvents;
	}
	public function setimgHref($imgHref){
		$this->imgHref = $imgHref;
	}
	public function set($key, $value){
		$this->$key = $value;
	}
	
	public function getId(){
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getStatus(){
		return $this->status;
	}
	public function getTokenCode(){
		return $this->tokenCode;
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
	public function getProposedEvents(){
		return $this->proposedEvents;
	}
	public function getimgHref(){
		return $this->imgHref;
	}
	
	public static function getUserByEmail($email){
		$juserlist = get("user?pageNumber=1&pageSize=500&q=email:".chr(34).$email.chr(34));
		$usera = User::fromJSONa($juserlist);
		if (count($usera)>0){
		return User::fromJSONa($juserlist)[0];
		}
		else{
			return null;
		}
	}
	
	public static function getUserById($id){
		$juserlist = get("user?pageNumber=1&pageSize=500&q=id:".chr(34).$id.chr(34));
		return User::fromJSONa($juserlist)[0];
	}
	
	public static function getStatusbyId($id){
		$juserlist = get("user?pageNumber=1&pageSize=500&q=id:".chr(34).$id.chr(34));
		return User::fromJSONa($juserlist)[0]->getStatus();
	}
	
	public static function getNamebyId($id){
		$juserlist = get("user?pageNumber=1&pageSize=500&q=id:".chr(34).$id.chr(34));
		return User::fromJSONa($juserlist)[0]->getName();
	}
	
	public static function getPasswordByEmail($email){
		$juserlist = get("user?pageNumber=1&pageSize=500&q=email:".chr(34).$email.chr(34));
		return User::fromJSONa($juserlist)[0]->getPassword();
	}
	
	public static function getUserIdByTokenCode($tokenCode){
		$juserlist = get("user?pageNumber=1&pageSize=500&q=tokenCode:".chr(34).$tokenCode.chr(34));
		return User::fromJSONa($juserlist)[0]->getId();
	}
	
	public static function getUserListByEvent($event){
		$userslist=User::getUserList();
		$resultUserArray = array();
		foreach ($userslist as $user){
			$bookingslist=$user->getBookings();
			foreach ($bookingslist as $booking){
				if($booking->getEventId() == $event->getId()){
					array_push($resultUserArray,$user);
				}
			}
		}
		return $resultUserArray;
	}
	
/*	public static function getEventOrganizer($event){
		$userslist=User::getUserList();
		foreach ($userslist as $user){
			$organizedEventslist=$user->getOrganizedEvents();
			foreach ($organizedEventslist as $organizedEvent){
				if($organizedEvent == $event->getId()){
					return $user;
				}
			}
		}
	}*/
	
	public function organizeEvent($event){
		if ($event->geteventOrganizer() != $this->getId()){
			$event->seteventOrganizer($this->getId());
		}
		if ($event->getstatus() != Event::$statuses["Published"]){
			$event->setstatus(Event::$statuses["Published"]);
		}
		$organizedEvents = $this->getOrganizedEvents();
		array_push($organizedEvents, $event->getId());
		$this->setOrganizedEvents($organizedEvents);
		$this->putUser();
		$event->postEvent();
	}
	
	public function proposeEvent($event){
		if ($event->getStatus() != Event::$statuses["Proposed"]){
			$event->setStatus(Event::$statuses["Proposed"]);
		}
		$proposedEvents = $this->getProposedEvents();
		array_push($proposedEvents, $event->getId());
		$this->setProposedEvents($proposedEvents);
		$event->postEvent();
		$this->putUser();
	}
	
	public function voteEvent($event){
		if (!in_array($this->getId(),$event->getVotes())){
			$eventVotes = $event->getVotes();
			array_push($eventVotes, $this->getId());
			$event->setVotes($eventVotes);
			$event->putEvent();
		}
		if (!in_array($event->getId(),$this->getVotedEvents())){
			$votedEvents = $this->getVotedEvents();
			array_push($votedEvents, $event->getId());
			$this->setVotedEvents($votedEvents);
			$this->putUser();
		}
	}
	
	public function wishEvent($event){	//wishlist
		$wishlist = $this->getWishlist();
		array_push($wishlist, $event->getId());
		$this->setWishlist($wishlist);
		$this->putUser();
	}
	
	public function bookEvent($event){	//wishlist
		if (!in_array($this->getId(),$event->getUsers())){
			$eventUsers = $event->getUsers();
			array_push($eventUsers, $this->getId());
			$event->setUsers($eventUsers);
		}
		$booking = new Booking($event->getId(), date('d.m.y'));
		$bookings = $this->getBookings();
		array_push($bookings, $booking);
		$this->setBookings($bookings);
		$event->putEvent();
		$this->putUser();
	}
	
	public function payBooking($booking){	//wishlist
		if (in_array($booking, $this->getBookings())){
			$date = date('Y/m/d H:i:s');
			$payment = new Payment(1,$date,100);
			$bookings = $this->getBookings();
			foreach($bookings as $bookingv){
				if ($bookingv->getId()==$booking->getId())
					$bookingv->setPayment($payment);
					break;
			}
			$this->putUser();
		}
	}
	
	public function jsonSerialize(){	
		$str = json_encode([
		'id'=>$this->id,
		'name'=>$this->name,
		'email'=>$this->email,	//=login
		'password'=>$this->password,
		'status'=>$this->status,
		'tokenCode'=>$this->tokenCode,
		'address'=>$this->address->jsonSerialize(),	//class
		'gender'=>$this->gender,	//thesaurus
		'birthDate'=>$this->birthDate,
		'interest'=>json_encode($this->interest), //thesaurus
		'notifications' =>json_encode($this->notifications), //class
		'bookings' =>json_encode($this->bookings),	//class
		'wishlist' =>json_encode($this->wishlist),	//class
		'organizedEvents' =>json_encode($this->organizedEvents),	//class
		'votedEvents' =>json_encode($this->votedEvents),	//class
		'proposedEvents' =>json_encode($this->proposedEvents),	//class
		'imgHref'=>$this->imgHref
		]);
		
		/*$str = str_replace(chr(92), '', $str);
		$str = str_replace('"{', '{', $str);
		$str = str_replace('}"', '}', $str);
		$str = str_replace('"[', '[', $str);
		$str = str_replace(']"', ']', $str);*/
		
		return $str;
	}
	
	
	public static function fromJSON($juser){
		$userv = json_decode($juser,true);
		$user = new User(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
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
				$interestvA = json_decode($value);
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
				$wishlistvA = json_decode($value);
				$user->set('wishlist', $wishlistvA);
				continue;
			}
			if($key=='organizedEvents'){
				$organizedEventsvA = json_decode($value);
				$user->set('organizedEvents', $organizedEventsvA);
				continue;
			}
			if($key=='votedEvents'){
				$votedEventsvA = json_decode($value);
				$user->set('votedEvents', $votedEventsvA);
				continue;
			}
			if($key=='proposedEvents'){
				$proposedEventsvA = json_decode($value);
				$user->set('proposedEvents', $proposedEventsvA);
				continue;
			}
			/*if($key=='wishlist'){
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
			if($key=='proposedEvents'){
				$votedEventsvA = Event::fromJSONa($value);
				$user->set('proposedEvents', $proposedEventsvA);
				continue;
			}*/
			
			$user->set($key, $value);
		}
		return $user;
	}
	
	public static function fromJSONa($userAj){
		$userAv = json_decode($userAj);
		if (count($userAv)<1){
			return array();
		}
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
	
	public static function getUserList(){
		$juserlist = get("user");
		return User::fromJSONa($juserlist);
	}
	
	function send_mail($email,$message,$subject)
	{
		require_once('mailer/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug  = 0;
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host       = "smtp.gmail.com";
		$mail->Port       = 465;
		$mail->AddAddress($email);
		$mail->Username="educationevent1@gmail.com";
		$mail->Password="eduvent123456";
		$mail->SetFrom('educationevent1@gmail.com','Eduvent');
		$mail->AddReplyTo("educationevent1@gmail.com","Eduvent");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->Send();
	}

}
?>