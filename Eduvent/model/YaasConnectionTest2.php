<?php
include 'thesaurus.php';
include 'User.php';

$address1 = new Address(1, "Uni Mannheim", "Universitat Strasse", 53, "Mannheim", 168159, "Germany");
$address2 = new Address(2, "Uni Mannheim", "Universitat Strasse", 54, "Mannheim", 168160, "Germany");
$interest1 = new Interest(1, $interest["Studing"], 1);
$interest2 = new Interest(2, $interest["Sport"], 2);
$interestA = array($interest1, $interest2);
$tests = array();

$event4 = new Event(4, $eventtypes["Presentation"], "My second Event", "So good second event", "26.12.2016 14:56", $address2, $interest['Sport'], 0, $statuses["Published"], "https://static.pexels.com/photos/191830/pexels-photo-191830-large.jpeg");
$event5 = new Event(5, $eventtypes["Presentation"], "My second Event", "So good second event", "26.12.2016 14:56", $address2, $interest['Sport'], 0, $statuses["Published"], "https://static.pexels.com/photos/191830/pexels-photo-191830-large.jpeg");

$user1 = new User(111,"Leonid Gunko","leonidgunko1@yandex.ru","213322", $address1, $genders["Mr."], "09.07.1992", $interestA, "/images/img1");

$event4->deleteEvent();
$event5->deleteEvent();
$user1->deleteUser();	
$user1->postUser();	

$user1->organizeEvent($event4);
$user1->organizeEvent($event5);
$userslist=User::getUserList();
$u1=false;
$u2 = false;

foreach($userslist as $user) {
	if ($user->getId() == $user1->getId() && $user->getEmail() == $user1->getEmail() && $user->getPassword() == $user1->getPassword()
	&&$user->getAddress() == $user1->getAddress() && $user->getGender() == $user1->getGender() && $user->getBirthDate() == $user1->getBirthDate()
	&&$user->getInterest() == $user1->getInterest() && $user->getNotifications() == $user1->getNotifications()
	&&$user->getBookings() == $user1->getBookings() && $user->getWishlist() == $user1->getWishlist()
	&&$user->getOrganizedEvents() == $user1->getOrganizedEvents() && $user->getVotedEvents() == $user1->getVotedEvents()) {
		$u1 = true;
	}
}
if (in_array($event4->getId(),$user1->getOrganizedEvents()) && in_array($event5->getId(),$user1->getOrganizedEvents())) {
	$u2 = true;
}
if ($u1==true && $u2==true){
	array_push($tests,1);
	echo "<br>";
	echo "Yaas organizeEvent TestSuccesfull";
}

$user1->bookEvent($event4);
$user1->bookEvent($event5);
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
}
if (in_array($user1->getId(),$event4->getUsers()) && in_array($user1->getId(),$event5->getUsers())) {
	$u2 = true;
}
if ($u1==true && $u2==true){
	array_push($tests,2);
	echo "<br>";
	echo "Yaas BookEvent TestSuccesfull";
}

$event4->deleteEvent();
$event5->deleteEvent();
$user1->proposeEvent($event4);
$user1->proposeEvent($event5);
$u1=false;
$userslist=User::getUserList();
foreach($userslist as $user) {
	if ($user->getId() == $user1->getId() && $user->getEmail() == $user1->getEmail() && $user->getPassword() == $user1->getPassword()
	&&$user->getAddress() == $user1->getAddress() && $user->getGender() == $user1->getGender() && $user->getBirthDate() == $user1->getBirthDate()
	&&$user->getInterest() == $user1->getInterest() && $user->getNotifications() == $user1->getNotifications()
	&&$user->getBookings() == $user1->getBookings() && $user->getWishlist() == $user1->getWishlist()
	&&$user->getOrganizedEvents() == $user1->getOrganizedEvents() && $user->getVotedEvents() == $user1->getVotedEvents()) {
		$u1 = true;
	}
}
if ($u1==true){
	array_push($tests,3);
	echo "<br>";
	echo "Yaas proposeEvent TestSuccesfull";
}


$user1->wishEvent($event4);
$user1->wishEvent($event5);
$u1=false;
$userslist=User::getUserList();
foreach($userslist as $user) {
if ($user->getId() == $user1->getId() && $user->getEmail() == $user1->getEmail() && $user->getPassword() == $user1->getPassword()
&&$user->getAddress() == $user1->getAddress() && $user->getGender() == $user1->getGender() && $user->getBirthDate() == $user1->getBirthDate()
&&$user->getInterest() == $user1->getInterest() && $user->getNotifications() == $user1->getNotifications()
&&$user->getBookings() == $user1->getBookings() && $user->getWishlist() == $user1->getWishlist()
&&$user->getOrganizedEvents() == $user1->getOrganizedEvents() && $user->getVotedEvents() == $user1->getVotedEvents()) {
		$u1 = true;
	}
}
if ($u1==true){
	array_push($tests,4);
	echo "<br>";
	echo "Yaas wishevent Test Successfull";
}


$user1->voteEvent($event4);
$user1->voteEvent($event5);
$userslist=User::getUserList();
$u1=false;
foreach($userslist as $user) {
if ($user->getId() == $user1->getId() && $user->getEmail() == $user1->getEmail() && $user->getPassword() == $user1->getPassword()
&&$user->getAddress() == $user1->getAddress() && $user->getGender() == $user1->getGender() && $user->getBirthDate() == $user1->getBirthDate()
&&$user->getInterest() == $user1->getInterest() && $user->getNotifications() == $user1->getNotifications()
&&$user->getBookings() == $user1->getBookings() && $user->getWishlist() == $user1->getWishlist()
&&$user->getOrganizedEvents() == $user1->getOrganizedEvents() && $user->getVotedEvents() == $user1->getVotedEvents()) {
		$u1 = true;
	}
}
if ($u1==true){
	array_push($tests,5);
	echo "<br>";
	echo "Yaas wishevent Test Successfull";
}


$userlist=User::getUserListByEvent($event4);
$user = $userlist[0];
echo $user->getId();
echo count($userlist);
if ($user->getId()==111 && count($userlist)==1){
	array_push($tests,6);
	echo "<br>";
	echo "getUserListByEvent Test Successfull";
}

$event4 = Event::getById($event4->getId());

$userId=$event4->geteventOrganizer();
if ($userId==$user1->getId()){
	array_push($tests,7);
	echo "<br>";
	echo "getEventOrganizer Test Successfull";
}

if ($event4->getUsersNumber()==1){
	array_push($tests,8);
	echo "<br>";
	echo "getNumberOfParticipants Test Successfull";
}

$proposedevents = Event::getProposedEventList();
$publishedevents = Event::getPublishedEventList();
$u1=false;
$u2=false;
echo json_encode($proposedevents);
foreach($proposedevents as $event) {
	if ($event->getId() == 4) {
		$u1=true;
	}
	if ($event->getId() == 5) {
		$u2=true;
	}
}
if ($u1==true && $u2=true){
	array_push($tests,9);
	echo "<br>";
	echo "Yaas getproposedevents Test Successfull";
}

if (count($tests)==9){
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
?>