<?php
session_start();
require_once 'class.user.php';
$user = new USER();

if(!$user->is_logged_in())
{
 $user->redirect('../../index.php?page=login');
}

if($user->is_logged_in()!="")
{
 $user->logout(); 
 $user->redirect('../../index.php?page=login');
}
?>
http://localhost/APDTLD/Eduvent/php/Eduvent/index.php?page=login