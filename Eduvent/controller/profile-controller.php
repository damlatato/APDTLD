<?php
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

if (isset($_POST['p_field'])) {
	session_start();
	$email = $_SESSION['usermail'];
	$user = User::getUserByEmail($email);

	$p_field = $_POST['p_field'];
	$p_value = $_POST['p_value'];
	print_r ("f: " . $p_field . ", v: " . $p_value);
	
	switch ($p_field) {
		case 'userName':
			print_r ('php usr mail: ' . $email);
			print_r ('php set name: ' . $p_value);
			$user->setName($p_value);
			$newName = $user->getName();
			print_r ('php new name: ' . $newName);
			break;
		default:
			print_r ('switch error');
	}
}
else {
	$email = $_SESSION['usermail'];
	$user = User::getUserByEmail($email);
	$userName	 = $user->getName();
	$userEmail   = $user->getEmail();
	$userAddress = $user->getAddress();
	$userDOB	 = $user->getBirthDate();
	//$userInterests = str_replace('[','',json_encode($user->getInterest()));
	//$userInterests = str_replace(']','',$s);
}
?>