<?php
session_start();
require_once 'class.user.php';
$user = new USER();

if(!$user->is_logged_in())
{
 $user->redirect('../Eduvent/index.php?page=login');
}

if($user->is_logged_in()!="")
{
 $user->logout(); 
 $user->redirect('../Eduvent/index.php?page=login');
}
?>