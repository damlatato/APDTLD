<?php
require_once '../initiatePage.php';

$check = isLoggedUserExisting();
if($check === true)
{

	session_destroy();
	$_SESSION['usermail'] = false;
	header ('Location: ../../index.php?page=login');
}

elseif ($check === false ){

	header ('Location: ../../index.php?page=login');


}
// session_start();
// require_once 'class.user.php';
// $user = new USER();

// if(!$user->is_logged_in())
// {
//  $user->redirect('../../index.php?page=login');
// }

// if($user->is_logged_in()!="")
// {
//  $user->logout(); 
//  $user->redirect('../../index.php?page=login');
// }

// destroy_session();
?>