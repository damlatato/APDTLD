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
$event = Event::getById($_POST['proposalId']);
$user->voteEvent($event);

$output = "vote-id=" . $_POST['proposalId'] . " / " . $event->getId();
echo $output;
?>