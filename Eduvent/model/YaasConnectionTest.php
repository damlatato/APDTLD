<?php
$titles = array();
$descriptions = array();
include "Event.php";
include "User.php";
include "Address.php";
include "YaasConnector.php";
include "thesaurus.php";
include "Notification.php";
include "Booking.php";

$tests= array();



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
		array_push($tests,1);
		echo "<br> notification json is ok";
	}
	if ($notification1 == $notification3) {
		array_push($tests,2);
		echo "<br> notification from json is ok";
	}
	if ($notificationA == $notificationA1) {
		array_push($tests,3);
		echo "<br> notification array is ok";
	}
	if ($notificationA == $notificationA1) {
		array_push($tests,4);
		echo "<br> notification array from json is ok";
	}
//test

$interest1 = array($interest["Health"]);
$interest2 = array($interest["HR"], $interest["Health"]);	

$address1 = new Address("Uni Mannheim", "Universitat Strasse", 53, "Mannheim", 168159, "Germany");
$address2 = new Address("Uni Mannheim", "Universitat Strasse", 54, "Mannheim", 168160, "Germany");
//test
	$jaddress1 = $address1->jsonSerialize();
	$address3 = Address::fromJSON($jaddress1);
	$jaddress3 = $address3->jsonSerialize();
	
	if ($jaddress1 == $jaddress3) {
		array_push($tests,5);
		echo "<br> address json is ok";
	}
	if ($address1 == $address3) {
		array_push($tests,6);
		echo "<br> address from json is ok";
	}
//test

$event1 = new Event(1, $eventtypes["Conference"], "My first Event", "So good event", "25.10.2016 13:56", $address1, $interest['Art'], 11, $statuses["Proposed"], "https://static.pexels.com/photos/191830/pexels-photo-191830-large.jpeg");
$event2 = new Event(2, $eventtypes["Course"], "My second Event", "So good second event", "26.12.2016 14:56", $address2, $interest['Business'], 0, $statuses["Published"], "https://static.pexels.com/photos/191830/pexels-photo-191830-large.jpeg");
$event4 = new Event(4, $eventtypes["Course"], "My fourth Event", "So good fourth event", "26.12.2016 14:56", $address2, $interest['Business'], 0, $statuses["Published"], "https://static.pexels.com/photos/191830/pexels-photo-191830-large.jpeg");
$eventA = array($event1, $event2);
//test
	$jevent1 = $event1->jsonSerialize();
	$event3 = Event::fromJSON($jevent1);
	$jevent3 = $event3->jsonSerialize();
	$jeventA = json_encode($eventA);
	$eventA1 = Event::fromJSONa($jeventA);
	$jeventA1 = json_encode($eventA1);
	if ($jevent1 == $jevent3) {
		array_push($tests,7);
		echo "<br> event json is ok";
	}
	if ($event1 == $event3) {
		array_push($tests,8);
		echo "<br> event from json is ok";
	}
	if ($eventA == $eventA1) {
		array_push($tests,9);
		echo "<br> event array is ok";
	}
	if ($jeventA == $jeventA1) {
		array_push($tests,10);
		echo "<br> event array from json is ok";
	}
//test

$booking1 = new Booking($event1->getId(), "24.09.2016 13:56");
$booking2 = new Booking($event2->getId(), "25.09.2016 13:56");
$bookingA = array();
array_push($bookingA, $booking2);
array_push($bookingA, $booking1);

//test
	$jbooking1 = $booking1->jsonSerialize();
	$booking3 = Booking::fromJSON($jbooking1);
	$jbooking3 = $booking3->jsonSerialize();
	$jbookingA = json_encode($bookingA);
	
	$bookingA1 = Booking::fromJSONa($jbookingA);
	if ($jbooking1 == $jbooking3) {
		array_push($tests,11);
		echo "<br> booking json is ok";
	}
	if ($booking1 == $booking3) {
		array_push($tests,12);
		echo "<br> booking from json is ok";
	}
	if ($bookingA == $bookingA1) {
		array_push($tests,13);
		echo "<br> booking array is ok";
	}
	if ($bookingA == $bookingA1) {
		array_push($tests,14);
		echo "<br> booking array from json is ok";
	}
//test


$wishlist = array($event1->getId(), $event2->getId());
$organizedEvents = array($event1->getId());
$votedEvents = array($event2->getId());
$proposedEvents = array($event2->getId());


$user1 = new User(111, "Leonid Gunko","leonidgunko1@yandex.ru","213322", "", "", $genders["Mr."], "09.07.1992", $interest1, "/images/img1");
$user2 = new User(222, "Leonid Gunko","leonidgunko2@yandex.ru","213", "", "Mannheim hans sachs ring", $genders["Mrs."], "09.07.1994", $interest2, "/images/img2");
$userA = array($user1,$user2);
//test
	$juser1 = $user1->jsonSerialize();
	$user3 = User::fromJSON($juser1);
	$juser3 = $user3->jsonSerialize();
	$juserA = json_encode($userA);
	$userA1 = User::fromJSONa($juserA);
	$juserA1 = json_encode($userA1);
	
	if ($juser1 == $juser3) {
		array_push($tests,15);
		echo "<br> user json is ok";
	}
	if ($user1->getEmail() == $user3->getEmail() && $user1->getPassword() == $user3->getPassword()
	&&$user1->getAddress() == $user3->getAddress() && $user1->getGender() == $user3->getGender() && $user1->getBirthDate() == $user3->getBirthDate()
	&&$user1->getInterest() == $user3->getInterest() && $user1->getNotifications() == $user3->getNotifications()
	&&$user1->getBookings() == $user3->getBookings() && $user1->getWishlist() == $user3->getWishlist()
	&&$user1->getOrganizedEvents() == $user3->getOrganizedEvents() && $user1->getVotedEvents() == $user3->getVotedEvents()
	&& $user1->getProposedEvents() == $user3->getProposedEvents()) {
		array_push($tests,16);
		echo "<br> user from json is ok";;
	}
	if ($userA == $userA1) {
		array_push($tests,17);
		echo "<br> user array is ok";
	}
	if ($juserA == $juserA1) {
		array_push($tests,18);
		echo "<br> user array from json is ok";
	}
//test


$user1->deleteUser();	//delete test user from BD
$user2->deleteUser();	//delete tes user from BD
$event1->deleteEvent();	//delete test user from BD
$event2->deleteEvent();	//delete tes user from BD
$event4->deleteEvent();	//delete tes user from BD

$user1->postUser();	//post user to BD
$user2->postUser();	//post user to BD

$userslist=User::getUserList();
$u1=false;
$u2=false;
foreach($userslist as $user) {
    if ($user->getEmail() == $user1->getEmail() && $user->getPassword() == $user1->getPassword()
    	&&$user->getAddress() == $user1->getAddress() && $user->getGender() == $user1->getGender() && $user->getBirthDate() == $user1->getBirthDate()
    	&&$user->getInterest() == $user1->getInterest() && $user->getNotifications() == $user1->getNotifications()
    	&&$user->getBookings() == $user1->getBookings() && $user->getWishlist() == $user1->getWishlist()
    	&&$user->getOrganizedEvents() == $user1->getOrganizedEvents() && $user->getVotedEvents() == $user1->getVotedEvents()) {
    	$u1 = true;
    }
    if ($user->getEmail() == $user2->getEmail() && $user->getPassword() == $user2->getPassword()
    &&$user->getAddress() == $user2->getAddress() && $user->getGender() == $user2->getGender() && $user->getBirthDate() == $user2->getBirthDate()
    &&$user->getInterest() == $user2->getInterest() && $user->getNotifications() == $user2->getNotifications()
    &&$user->getBookings() == $user2->getBookings() && $user->getWishlist() == $user2->getWishlist()
    &&$user->getOrganizedEvents() == $user2->getOrganizedEvents() && $user->getVotedEvents() == $user2->getVotedEvents()) {
    	$u2 = true;
    }
}

if ($u1==true && $u2==true){
	array_push($tests,19);
	echo "<br>";
	echo "Yaas PostUser TestSuccesfull";
}

$u1=false;
$u2=false;

$user1->bookEvent($event1);

$userslist=User::getUserList();
foreach($userslist as $user) {	
	if ($user->getEmail() == $user1->getEmail() && $user->getPassword() == $user1->getPassword()
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
	array_push($tests,20);
	echo "<br>";
	echo "Yaas BookEvent TestSuccesfull";
}

$user = User::getUserByEmail("leonidgunko1@yandex.ru");
if ($user->getEmail() == $user1->getEmail() && $user->getPassword() == $user1->getPassword()
	&&$user->getAddress() == $user1->getAddress() && $user->getGender() == $user1->getGender() && $user->getBirthDate() == $user1->getBirthDate()
	&&$user->getInterest() == $user1->getInterest() && $user->getNotifications() == $user1->getNotifications()
	&&$user->getBookings() == $user1->getBookings() && $user->getWishlist() == $user1->getWishlist()
	&&$user->getOrganizedEvents() == $user1->getOrganizedEvents() && $user->getVotedEvents() == $user1->getVotedEvents()) {
		array_push($tests,21);
		echo "<br>";
		echo "Yaas GetUser by Email Test Successfull";
}


$event1->postEvent();	//post user to BD
$event2->postEvent();	//post user to BD
$e1=false;
$e2=false;
$eventlist = Event::getEventList();
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
	array_push($tests,22);
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
	array_push($tests,23);
	echo "<br>";
	echo "Yaas PutEvent TestSuccesfull";
}

$eventlist=Event::getByTopic("Art");
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
	array_push($tests,24);
	echo "<br>";
	echo "Yaas Get Event by Topic Test Succesfull";
}

$eventlist=Event::getByEventType("Conference");
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
	array_push($tests,25);
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
	array_push($tests,26);
	echo "<br>";
	echo "Yaas Get Event by PriceCategory Test Succesfull";
}


if (User::getPasswordByEmail("leonidgunko1@yandex.ru")=="213322" && User::getPasswordByEmail("leonidgunko2@yandex.ru")=="213"){
	array_push($tests,27);
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
	array_push($tests,28);
	echo "<br>";
	echo "Yaas GetByDate Event TestSuccesfull";
}

$user = User::getUserByEmail("adkljfbad@adhfv.de");
$u1=false;
if (is_null($user)){
	$u1=true;
}
if ($u1==true){
	array_push($tests,29);
	echo "<br>";
	echo "Yaas GetUserByWrongEmail Test Succesfull";
}

$event = Event::getById(2);
$u1=false;
if ($event->getTitle() == $event2->getTitle()){
	$u1=true;
}
if ($u1==true){
	array_push($tests,30);
	echo "<br>";
	echo "Yaas GetEventById Test Succesfull";
}

$user = User::getUserById(111);
$u1=false;
if ($user->getEmail() == $user1->getEmail()){
	$u1=true;
}
if ($u1==true){
	array_push($tests,31);
	echo "<br>";
	echo "Yaas GetUserById Test Succesfull";
}

$status = User::getStatusById(111);
$u1=false;
if ($status == $user1->getStatus()){
	$u1=true;
}
if ($u1==true){
	array_push($tests,32);
	echo "<br>";
	echo "Yaas GetStatusById Test Succesfull";
}

$name = User::getNameById(111);
$u1=false;
if ($name == $user1->getName()){
	$u1=true;
}
if ($u1==true){
	array_push($tests,33);
	echo "<br>";
	echo "Yaas GetNameById Test Succesfull";
}

$event1->addOffer($event2);
$u1=false;
$event1->getById($event1->getId());
if (in_array($event2->getId(),$event1->getOffers())){
	$u1=true;
}
if ($u1==true){
	array_push($tests,34);
	echo "<br>";
	echo "Yaas adOffer Test Succesfull";
}

$events = Event::getByTopicAndStatus('Business', 'Published');
$u1=false;
if ($events[0]->getId() == $event2->getId()){
	$u1=true;
}
if ($u1==true){
	array_push($tests,35);
	echo "<br>";
	echo "Yaas getByTopicAndStatus Test Succesfull";
}

if (count($tests)==35){
	echo "<br>";
	echo "All the tests are done";
}
else{
	echo "<br>";
	foreach($tests as $test){
		echo $test;
		echo " , ";
	}
}
  
/*$event1->deleteEvent();	//delete test user from BD
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
*/


?>