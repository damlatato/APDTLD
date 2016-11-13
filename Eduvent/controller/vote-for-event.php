<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/APDTLD/Eduvent/model/YaasConnector.php');
spl_autoload_register(function ($class) {
    $file = $_SERVER["DOCUMENT_ROOT"] . '/APDTLD/Eduvent/model/'.$class.'.php';
	if(file_exists($file)) {
		include $file;
	}
});
/*$eventList=Event::getEventList();
foreach ($eventList as $varEvent) {
    $varEvent->deleteEvent();
}*/

//$address=new Address(null, null, null, "Mannheim", null, "Germany");
$address=new Address(null, null, null, null, null, null);
$user=new User(uniqid(),"Leon Lourie","leonlourie@yahoo.de","12345", $address, "m", "18.01.1990", null, null);
$user->deleteUser();
$user->postUser();

$event=Event::getById($_POST['proposalId']);
$user->voteEvent($event);

$output="vote-id=" . $_POST['proposalId'] . " / " . $event->getId();
echo $output;
?>