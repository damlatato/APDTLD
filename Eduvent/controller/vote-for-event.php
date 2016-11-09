<?php
include_once("D:/xampp/htdocs/APDTLD/Eduvent/model/YaasConnector.php");
function __autoload($class)
{
	include_once('D:/xampp/htdocs/APDTLD/Eduvent/model/'.$class.'.php');
}

$address=new Address(null, null, null, "Mannheim", null, "Germany");
$user=new User(uniqid(),"Leon Lourie","leonlourie@yahoo.de","12345", $address, "m", "18.01.1990", null, null);
$user->deleteUser();
$user->postUser();

$event=Event::getById($_POST['proposalId']);
$user->voteEvent($event);

$output="vote-id=" . $_POST['proposalId'] . " / " . $event->getId();
echo $output;
?>