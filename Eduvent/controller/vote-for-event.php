<?php
/*function __autoload($class)
{
  include_once '../Eduvent/model/'.$class.'.php';
}*/

include_once ROOT_DIR.'/model/User.php';

$user=new User(uniqid(),"Leon Lourie","leonlourie@yahoo.de","12345", $address, "m", "18.01.1990", null, null);
$user->deleteUser();
$user->postUser();

$event=Event::getById($_POST['proposalId']);
$user->voteEvent($event);

$output="vote-id=" . $_POST['proposalId'] . " / " . $event->getId();
echo $output;
?>