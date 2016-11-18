<?php
session_start();

if (isset($_POST['root-path'])) {
	$rootPath = $_POST['root-path'];
	define ('ROOT_PATH', $rootPath);
}

include_once(ROOT_PATH . 'model/YaasConnector.php');
spl_autoload_register(function ($class) {
    $file = ROOT_PATH . 'model/'.$class.'.php';
	if(file_exists($file)) {
		include $file;
	}
});

$userId = $_SESSION['userSession'];
$user = User::getUserById($userId);
$eventId = $_POST['proposalId'];
$event = Event::getById($eventId);
$user->voteEvent($event);
$votes = $event->getVotesNumber();

$arr = array(
	'proposalId'	=> $eventId,
	'eventId'		=> $event->getId(),
	'votes'			=> $votes,
	'userIdS'		=> $userId,
	'userId'		=> $user->getId()
);

echo json_encode($arr);
?>