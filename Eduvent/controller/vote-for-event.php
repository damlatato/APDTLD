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

$votes1 = $event->getVotesNumber();
$user->voteEvent($event);
set_time_limit(5);
$votes2 = $event->getVotesNumber();

$arr = array(
	'proposalId'	=> $event->getId(),
	'votes1'		=> $votes1,
	'votes2'		=> $votes2,
	'userId'		=> $user->getId(),
	'userName'		=> $user->getName()
);

echo json_encode($arr);
?>