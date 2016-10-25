<?php
include 'UserEdu.php';
$user = new UserEdu(3, "Stefan", "Gunter", "8909");	//create a user object
$user->postUser();	//post user to BD
$userslist=$user->getUserList();
?>