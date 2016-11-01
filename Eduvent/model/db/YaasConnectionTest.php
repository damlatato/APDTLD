<?php
include 'Booking.php';
include 'Payment.php';
include 'User.php';
include 'thesaurus.php';

$payment1 = new Payment(1, "25.09.2016", 1000);
$payment2 = new Payment(2, "26.09.2016", 2000);
//test
	$jpayment1 = $payment1->jsonSerialize();
	$payment3 = Payment::fromJSON($jpayment1);
	$jpayment3 = $payment3->jsonSerialize();
	if ($jpayment1 == $jpayment3) {
		echo "<br> payment json is ok";
	}
	if ($payment1 == $payment3) {
		echo "<br> payment from json is ok";
	}
//test

$notification1 = new Notification(1, "25.10.2016 13:56", $notificationtypes["Message"], true);	
$notification2 = new Notification(2, "27.10.2016 11:56", $notificationtypes["Update"], false);	
$notificationA = array($notification1, $notification2);
//test
	$jnotification1 = $notification1->jsonSerialize();
	$notification3 = Notification::fromJSON($jnotification1);
	$jnotification3 = $notification3->jsonSerialize();
	$jnotificationA = json_encode($notificationA);
	$notificationA1 = Notification::fromJSONa($jnotificationA);
	if ($jnotification1 == $jnotification3) {
		echo "<br> notification json is ok";
	}
	if ($notification1 == $notification3) {
		echo "<br> notification from json is ok";
	}
	if ($notificationA == $notificationA1) {
		echo "<br> notification array is ok";
	}
	if ($notificationA == $notificationA1) {
		echo "<br> notification array from json is ok";
	}
//test

$interest1 = new Interest(1, $interest["Studing"], 1);
$interest2 = new Interest(2, $interest["Sport"], 2);	
$interestA = array($interest1, $interest2);
//test
	$jinterest1 = $interest1->jsonSerialize();
	
	$interest3 = Interest::fromJSON($jinterest1);
	$jinterest3 = $interest3->jsonSerialize();
	$jinterestA = json_encode($interestA);
	$interestA1 = Interest::fromJSONa($jinterestA);
	
	if ($jinterest1 == $jinterest3) {
		echo "<br> interest json is ok";
	}
	if ($interest1 == $interest3) {
		echo "<br> interest from json is ok";
	}
	if ($interestA == $interestA1) {
		echo "<br> interest array is ok";
	}
	if ($interestA == $interestA1) {
		echo "<br> interest array from json is ok";
	}
//test


$address1 = new Address(1, "Uni Mannheim", "Universitat Strasse", 53, "Mannheim", 168159, "Germany");
$address2 = new Address(2, "Uni Mannheim", "Universitat Strasse", 54, "Mannheim", 168160, "Germany");
//test
	$jaddress1 = $address1->jsonSerialize();
	$address3 = Address::fromJSON($jaddress1);
	$jaddress3 = $address3->jsonSerialize();
	
	if ($jaddress1 == $jaddress3) {
		echo "<br> address json is ok";
	}
	if ($address1 == $address3) {
		echo "<br> address from json is ok";
	}
//test

$event1 = new Event(1, $eventtypes["Show"], "My first Event", "So good event", "25.10.2016 13:56", $address1, $interest['Studing'], 11);
$event2 = new Event(2, $eventtypes["Presentation"], "My second Event", "So good second event", "26.12.2016 14:56", $address2, $interest['Sport'], 0);
$eventA = array($event1, $event2);
//test
	$jevent1 = $event1->jsonSerialize();
	$event3 = Event::fromJSON($jevent1);
	$jevent3 = $event3->jsonSerialize();
	$jeventA = json_encode($eventA);
	$eventA1 = Event::fromJSONa($jeventA);
	$jeventA1 = json_encode($eventA1);
	if ($jevent1 == $jevent3) {
		echo "<br> event json is ok";
	}
	if ($event1 == $event3) {
		echo "<br> event from json is ok";
	}
	if ($eventA == $eventA1) {
		echo "<br> event array is ok";
	}
	if ($jeventA == $jeventA1) {
		echo "<br> event array from json is ok";
	}
//test

$booking1 = new Booking(1, $event1, "24.09.2016 13:56", $payment1);
$booking2 = new Booking(2, $event2, "25.09.2016 13:56", $payment2);
$bookingA = array($booking1, $booking2);

//test
	$jbooking1 = $booking1->jsonSerialize();
	$booking3 = Booking::fromJSON($jbooking1);
	$jbooking3 = $booking3->jsonSerialize();
	$jbookingA = json_encode($bookingA);
	
	$bookingA1 = Booking::fromJSONa($jbookingA);
	if ($jbooking1 == $jbooking3) {
		echo "<br> booking json is ok";
	}
	if ($booking1 == $booking3) {
		echo "<br> booking from json is ok";
	}
	if ($bookingA == $bookingA1) {
		echo "<br> booking array is ok";
	}
	if ($bookingA == $bookingA1) {
		echo "<br> booking array from json is ok";
	}
//test


$wishlist = array($event1, $event2);
$organizedEvents = array($event1);
$votedEvents = array($event2);


$user1 = new User(111,"leonidgunko1@yandex.ru","213322", $address1, $genders["Mr."], "09.07.1992", $interestA, $notificationA, $bookingA, $wishlist, $organizedEvents, $votedEvents);
$user2 = new User(222,"leonidgunko2@yandex.ru","213", $address2, $genders["Mrs."], "09.07.1994", $interestA, $notificationA, $bookingA, $wishlist, $organizedEvents, $votedEvents);
$userA = array($user1,$user2);
//test
	$juser1 = $user1->jsonSerialize();
	$user3 = User::fromJSON($juser1);
	$juser3 = $user3->jsonSerialize();
	$juserA = json_encode($userA);
	$userA1 = User::fromJSONa($juserA);
	$juserA1 = json_encode($userA1);
	if ($juser1 == $juser3) {
		echo "<br> user json is ok";
	}
	if ($user1 == $user3) {
		echo "<br> user from json is ok";
	}
	if ($userA == $userA1) {
		echo "<br> user array is ok";
	}
	if ($juserA == $juserA1) {
		echo "<br> user array from json is ok";
	}
//test


$user1->deleteUser();	//delete test user from BD
$user2->deleteUser();	//delete tes user from BD
$event1->deleteEvent();	//delete test user from BD
$event2->deleteEvent();	//delete tes user from BD

$user1->postUser();	//post user to BD
$user2->postUser();	//post user to BD

$userslist=User::getUserList();
$u1=false;
$u2=false;
foreach($userslist as $user) {
    if ($user->getId() == $user1->getId() && $user->getEmail() == $user1->getEmail() && $user->getPassword() == $user1->getPassword()
    	&&$user->getAddress() == $user1->getAddress() && $user->getGender() == $user1->getGender() && $user->getBirthDate() == $user1->getBirthDate()
    	&&$user->getInterest() == $user1->getInterest() && $user->getNotifications() == $user1->getNotifications()
    	&&$user->getBookings() == $user1->getBookings() && $user->getWishlist() == $user1->getWishlist()
    	&&$user->getOrganizedEvents() == $user1->getOrganizedEvents() && $user->getVotedEvents() == $user1->getVotedEvents()) {
    	$u1 = true;
    }
    if ($user->getId() == $user2->getId() && $user->getEmail() == $user2->getEmail() && $user->getPassword() == $user2->getPassword()
    &&$user->getAddress() == $user2->getAddress() && $user->getGender() == $user2->getGender() && $user->getBirthDate() == $user2->getBirthDate()
    &&$user->getInterest() == $user2->getInterest() && $user->getNotifications() == $user2->getNotifications()
    &&$user->getBookings() == $user2->getBookings() && $user->getWishlist() == $user2->getWishlist()
    &&$user->getOrganizedEvents() == $user2->getOrganizedEvents() && $user->getVotedEvents() == $user2->getVotedEvents()) {
    	$u2 = true;
    }
}

if ($u1==true && $u2==true){
	echo "<br>";
	echo "Yaas PostUser TestSuccesfull";
}

$u1=false;
$u2=false;

$user1->setBookings(array($booking1));
$user1->putUser();

$userslist=User::getUserList();
foreach($userslist as $user) {	
	if ($user->getId() == $user1->getId() && $user->getEmail() == $user1->getEmail() && $user->getPassword() == $user1->getPassword()
	&&$user->getAddress() == $user1->getAddress() && $user->getGender() == $user1->getGender() && $user->getBirthDate() == $user1->getBirthDate()
	&&$user->getInterest() == $user1->getInterest() && $user->getNotifications() == $user1->getNotifications()
	&&$user->getBookings() == $user1->getBookings() && $user->getWishlist() == $user1->getWishlist()
	&&$user->getOrganizedEvents() == $user1->getOrganizedEvents() && $user->getVotedEvents() == $user1->getVotedEvents()) {
		$u1 = true;
	}
	if ($user->getId() == $user2->getId() && $user->getEmail() == $user2->getEmail() && $user->getPassword() == $user2->getPassword()
	&&$user->getAddress() == $user2->getAddress() && $user->getGender() == $user2->getGender() && $user->getBirthDate() == $user2->getBirthDate()
	&&$user->getInterest() == $user2->getInterest() && $user->getNotifications() == $user2->getNotifications()
	&&$user->getBookings() == $user2->getBookings() && $user->getWishlist() == $user2->getWishlist()
	&&$user->getOrganizedEvents() == $user2->getOrganizedEvents() && $user->getVotedEvents() == $user2->getVotedEvents()) {
		$u2 = true;
	}
}
if ($u1==true && $u2==true){
	echo "<br>";
	echo "Yaas PutUser TestSuccesfull";
}

$user = User::getUserByEmail("leonidgunko1@yandex.ru");
if ($user->getId() == $user1->getId() && $user->getEmail() == $user1->getEmail() && $user->getPassword() == $user1->getPassword()
	&&$user->getAddress() == $user1->getAddress() && $user->getGender() == $user1->getGender() && $user->getBirthDate() == $user1->getBirthDate()
	&&$user->getInterest() == $user1->getInterest() && $user->getNotifications() == $user1->getNotifications()
	&&$user->getBookings() == $user1->getBookings() && $user->getWishlist() == $user1->getWishlist()
	&&$user->getOrganizedEvents() == $user1->getOrganizedEvents() && $user->getVotedEvents() == $user1->getVotedEvents()) {
		echo "<br>";
		echo "Yaas GetUser by Email Test Successfull";
}


$event1->postEvent();	//post user to BD
$event2->postEvent();	//post user to BD
$eventlist=Event::getEventList();
$e1=false;
$e2=false;
foreach($eventlist as $event) {
	if ($event->getID() == $event1->getID() && $event->getEventType() == $event1->getEventType() && $event->getTitle() == $event1->getTitle()
		&& $event->getDescription() == $event1->getDescription() && $event->getLocation() == $event1->getLocation() ) {
		$e1 = true;
	}
	if ($event->getID() == $event2->getID() && $event->getEventType() == $event2->getEventType() && $event->getTitle() == $event2->getTitle()
		&& $event->getDescription() == $event2->getDescription() && $event->getLocation() == $event2->getLocation() ) {
		$e2 = true;
	}
}

if ($e1==true && $e2==true){
	echo "<br>";
	echo "Yaas PostEvent TestSuccesfull";
}
$event1->setLocation($address2);
$event1->putEvent();
$eventlist=Event::getEventList();
$e1=false;
$e2=false;
foreach($eventlist as $event) {
	if ($event->getID() == $event1->getID() && $event->getEventType() == $event1->getEventType() && $event->getTitle() == $event1->getTitle()
		&& $event->getDescription() == $event1->getDescription() && $event->getLocation() == $event1->getLocation() ) {
		$e1 = true;
	}
	if ($event->getID() == $event2->getID() && $event->getEventType() == $event2->getEventType() && $event->getTitle() == $event2->getTitle()
		&& $event->getDescription() == $event2->getDescription() && $event->getLocation() == $event2->getLocation() ) {
		$e2 = true;
	}
}
if ($e1==true && $e2==true){
	echo "<br>";
	echo "Yaas PutEvent TestSuccesfull";
}

$eventlist=Event::getByTopic("Studing");
$e1=false;
$e2=false;
foreach($eventlist as $event) {
	if ($event->getID() == $event1->getID() && $event->getEventType() == $event1->getEventType() && $event->getTitle() == $event1->getTitle()
	&& $event->getDescription() == $event1->getDescription() && $event->getLocation() == $event1->getLocation() ) {
		$e1 = true;
	}
	if ($event->getID() == $event2->getID() && $event->getEventType() == $event2->getEventType() && $event->getTitle() == $event2->getTitle()
	&& $event->getDescription() == $event2->getDescription() && $event->getLocation() == $event2->getLocation() ) {
		$e2 = true;
	}
}
if ($e1==true && $e2==false){
	echo "<br>";
	echo "Yaas Get Event by Topic Test Succesfull";
}

$eventlist=Event::getByEventType("Show");
$e1=false;
$e2=false;
foreach($eventlist as $event) {
	if ($event->getID() == $event1->getID() && $event->getEventType() == $event1->getEventType() && $event->getTitle() == $event1->getTitle()
	&& $event->getDescription() == $event1->getDescription() && $event->getLocation() == $event1->getLocation() ) {
		$e1 = true;
	}
	if ($event->getID() == $event2->getID() && $event->getEventType() == $event2->getEventType() && $event->getTitle() == $event2->getTitle()
	&& $event->getDescription() == $event2->getDescription() && $event->getLocation() == $event2->getLocation() ) {
		$e2 = true;
	}
}
if ($e1==true && $e2==false){
	echo "<br>";
	echo "Yaas Get Event by EventType Test Succesfull";
}

$eventlist=Event::getByPriceCategory("Paid");
$e1=false;
$e2=false;
foreach($eventlist as $event) {
	if ($event->getID() == $event1->getID() && $event->getEventType() == $event1->getEventType() && $event->getTitle() == $event1->getTitle()
	&& $event->getDescription() == $event1->getDescription() && $event->getLocation() == $event1->getLocation() ) {
		$e1 = true;
	}
	if ($event->getID() == $event2->getID() && $event->getEventType() == $event2->getEventType() && $event->getTitle() == $event2->getTitle()
	&& $event->getDescription() == $event2->getDescription() && $event->getLocation() == $event2->getLocation() ) {
		$e2 = true;
	}
}
if ($e1==true && $e2==false){
	echo "<br>";
	echo "Yaas Get Event by PriceCategory Test Succesfull";
}


$userlist=User::getUserListByEvent($event2);
$user = $userlist[0];
if ($user->getId()==222 && count($userlist)==1){
	echo "<br>";
	echo "getUserListByEvent Test Successfull";
}

$user=User::getEventOrganizer($event1);
if ($user->getId()==111){
	echo "<br>";
	echo "getEventOrganizer Test Successfull";
}

$user1->organizeEvent($event2);
$userslist=User::getUserList();
$u1=false;
$u2=false;
foreach($userslist as $user) {
	if ($user->getId() == $user1->getId() && $user->getEmail() == $user1->getEmail() && $user->getPassword() == $user1->getPassword()
	&&$user->getAddress() == $user1->getAddress() && $user->getGender() == $user1->getGender() && $user->getBirthDate() == $user1->getBirthDate()
	&&$user->getInterest() == $user1->getInterest() && $user->getNotifications() == $user1->getNotifications()
	&&$user->getBookings() == $user1->getBookings() && $user->getWishlist() == $user1->getWishlist()
	&&$user->getOrganizedEvents() == $user1->getOrganizedEvents() && $user->getVotedEvents() == $user1->getVotedEvents()) {
		$u1 = true;
	}
	if ($user->getId() == $user2->getId() && $user->getEmail() == $user2->getEmail() && $user->getPassword() == $user2->getPassword()
	&&$user->getAddress() == $user2->getAddress() && $user->getGender() == $user2->getGender() && $user->getBirthDate() == $user2->getBirthDate()
	&&$user->getInterest() == $user2->getInterest() && $user->getNotifications() == $user2->getNotifications()
	&&$user->getBookings() == $user2->getBookings() && $user->getWishlist() == $user2->getWishlist()
	&&$user->getOrganizedEvents() == $user2->getOrganizedEvents() && $user->getVotedEvents() == $user2->getVotedEvents()) {
		$u2 = true;
	}
}
if ($u1==true && $u2==false){
	echo "<br>";
	echo "Yaas organizeEvent TestSuccesfull";
}

$user1->voteEvent($event1);
$userslist=User::getUserList();
$u1=false;
$u2=false;
foreach($userslist as $user) {
	if ($user->getId() == $user1->getId() && $user->getEmail() == $user1->getEmail() && $user->getPassword() == $user1->getPassword()
	&&$user->getAddress() == $user1->getAddress() && $user->getGender() == $user1->getGender() && $user->getBirthDate() == $user1->getBirthDate()
	&&$user->getInterest() == $user1->getInterest() && $user->getNotifications() == $user1->getNotifications()
	&&$user->getBookings() == $user1->getBookings() && $user->getWishlist() == $user1->getWishlist()
	&&$user->getOrganizedEvents() == $user1->getOrganizedEvents() && $user->getVotedEvents() == $user1->getVotedEvents()) {
		$u1 = true;
	}
	if ($user->getId() == $user2->getId() && $user->getEmail() == $user2->getEmail() && $user->getPassword() == $user2->getPassword()
	&&$user->getAddress() == $user2->getAddress() && $user->getGender() == $user2->getGender() && $user->getBirthDate() == $user2->getBirthDate()
	&&$user->getInterest() == $user2->getInterest() && $user->getNotifications() == $user2->getNotifications()
	&&$user->getBookings() == $user2->getBookings() && $user->getWishlist() == $user2->getWishlist()
	&&$user->getOrganizedEvents() == $user2->getOrganizedEvents() && $user->getVotedEvents() == $user2->getVotedEvents()) {
		$u2 = true;
	}
}
if ($u1==true && $u2==false){
	echo "<br>";
	echo "Yaas voteEvent TestSuccesfull";
}

if (User::getPasswordByEmail("leonidgunko1@yandex.ru")=="213322" && User::getPasswordByEmail("leonidgunko2@yandex.ru")=="213"){
	echo "<br>";
	echo "Yaas getPasswordByEmail for Login TestSuccesfull";
}

$eventlist = Event::getByDate("12.10.2016","28.10.2016");
$u1=false;
$u2=false;
foreach($eventlist as $event) {
	if ($event->getId() == $event1->getId()) {
		$u1 = true;
	}
	if ($event->getId() == $event2->getId()) {
		$u2 = true;
	}
}
if ($u1==true && $u2==false){
	echo "<br>";
	echo "Yaas GetByDate Event TestSuccesfull";
}
  
$event1->deleteEvent();	//delete test user from BD
$event2->deleteEvent();	//delete tes user from BD
$eventlist=Event::getEventList();
$e1=false;
$e2=false;
foreach($eventlist as $event) {
	if ($event->getID() == $event1->getID() && $event->getEventType() == $event1->getEventType() && $event->getTitle() == $event1->getTitle()
		&& $event->getDescription() == $event1->getDescription() && $event->getLocation() == $event1->getLocation() ) {
		$e1 = true;
	}
	if ($event->getID() == $event2->getID() && $event->getEventType() == $event2->getEventType() && $event->getTitle() == $event2->getTitle()
		&& $event->getDescription() == $event2->getDescription() && $event->getLocation() == $event2->getLocation() ) {
		$e2 = true;
	}
}
if ($e1==false && $e2==false){
	echo "<br>";
	echo "Yaas DeleteEvent TestSuccesfull";
}

$user1->deleteUser();	//delete test user from BD
$user2->deleteUser();	//delete tes user from BD

$userslist=User::getUserList();
$u1=false;
$u2=false;
foreach($userslist as $user) {
	if ($user->getId() == $user1->getId() && $user->getEmail() == $user1->getEmail() && $user->getPassword() == $user1->getPassword()
	&&$user->getAddress() == $user1->getAddress() && $user->getGender() == $user1->getGender() && $user->getBirthDate() == $user1->getBirthDate()
	&&$user->getInterest() == $user1->getInterest() && $user->getNotifications() == $user1->getNotifications()
	&&$user->getBookings() == $user1->getBookings() && $user->getWishlist() == $user1->getWishlist()
	&&$user->getOrganizedEvents() == $user1->getOrganizedEvents() && $user->getVotedEvents() == $user1->getVotedEvents()) {
		$u1 = true;
	}
	if ($user->getId() == $user2->getId() && $user->getEmail() == $user2->getEmail() && $user->getPassword() == $user2->getPassword()
	&&$user->getAddress() == $user2->getAddress() && $user->getGender() == $user2->getGender() && $user->getBirthDate() == $user2->getBirthDate()
	&&$user->getInterest() == $user2->getInterest() && $user->getNotifications() == $user2->getNotifications()
	&&$user->getBookings() == $user2->getBookings() && $user->getWishlist() == $user2->getWishlist()
	&&$user->getOrganizedEvents() == $user2->getOrganizedEvents() && $user->getVotedEvents() == $user2->getVotedEvents()) {
		$u2 = true;
	}
}
if ($u1==false && $u2==false){
	echo "<br>";
	echo "Yaas DeleteUser TestSuccesfull";
}


?>