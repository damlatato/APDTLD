<?php
//---------------- this file also contains html form with two input box which will take user email and user password entered by user-----//
//  and then after submitting the form, the php code will match that user email and password combination in database 
//  and when it finds both results in table then it will start a session and
//   allow user to access home page else it will show appropriate message.
require_once 'model/User.php';
//$reg_user = new USER();
if(isset($_SESSION['usermail'])) {
	//$reg_user->redirect('../Eduvent/index.php?page=settings');
}
if(isset($_POST['btn-signup'])) {
	$name = trim($_POST['txtuname']);
	$birthDate = trim($_POST['bday']);
	$email = trim($_POST['txtemail']);
	$password = trim($_POST['txtpass']);
	
	$user = User::getUserByEmail($email);
	if (!is_null($user)){
		$msg = "
			<div class='alert alert-error'>
			<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Sorry !</strong>  email address allready exists. Please try another one.
			</div>";
	}
	else{
		$id = uniqid();
		$tokenCode = md5(uniqid(rand()));
		$user = new User($id, $name, $email, $password, $tokenCode, "", "", $birthDate, "", "https://appharbor.com/assets/images/stackoverflow-logo.png");
		$user->postUser();	
		
		
			$message = "
			Hello $name,
			<br /><br />
			Welcome to Eduvent!<br/>
			To complete your registration, please click on the following link<br/>
			<br /><br />
			<a href='localhost/APDTLD/Eduvent/controller/login/verify.php?id=$id&code=$tokenCode'>Please click here to activate :)</a>
			<br /><br />
			Thanks,
			<br>
			Eduvent";
		
			$subject = "Confirm Registration";
		
			$user->send_mail($email,$message,$subject);
					$msg = "
					<div class='alert alert-success'>
					<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Success!</strong>  We've sent an email to $email.
					Please click on the confirmation link in the email to create your account.
					</div>";										
	}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Signup | Eduvent</title>
    <!-- Bootstrap -->
    <link href="includes/mdbootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="includes/mdbootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<!--     <link href="includes/mdbootstrap/css/style.css" rel="stylesheet" media="screen"> -->
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="includes/mdbootstrap/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <style>/** Home Page **/
/* body { */
/* 	padding-top: 60px; */
/* 	padding-bottom: 40px; */
/* 	background-color: #f5f5f5; */
/* 	background:#0ca2d1; */
/* } */
/** Login Page **/
#login {
  
    padding-bottom: 40px;
}
#login .form-signin {
    max-width: 300px;
    padding: 19px 29px 29px;
    margin: 0 auto 20px;
    background-color: #fff;
    border: 1px solid #e5e5e5;
    -webkit-border-radius: 5px;
       -moz-border-radius: 5px;
            border-radius: 5px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
       -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
}
#login .form-signin .form-signin-heading,
#login .form-signin .checkbox {
    margin-bottom: 10px;
}
#login .form-signin input[type="text"],
#login .form-signin input[type="password"],
#login .form-signin input[type="email"] {
    font-size: 16px;
    height: auto;
    margin-bottom: 15px;
    padding: 7px 9px;
}
/** 2 level sub menu **/
.dropdown-menu-with-subs .sub-menu {
  left: 100%;
  position: absolute;
  top: 0;
  visibility: hidden;
  margin-top: -1px;
}
.dropdown-menu-with-subs li:hover .sub-menu {
  visibility: visible;
  display: block;
}
.navbar .sub-menu:before {
  border-bottom: 7px solid transparent;
  border-left: none;
  border-right: 7px solid rgba(0, 0, 0, 0.2);
  border-top: 7px solid transparent;
  left: -7px;
  top: 10px;
}
.navbar .sub-menu:after {
  border-top: 6px solid transparent;
  border-left: none;
  border-right: 6px solid #fff;
  border-bottom: 6px solid transparent;
  left: 10px;
  top: 11px;
  left: -6px;
}
/** Global **/
#content {
  margin-left:0px;
}
.hide-sidebar, .show-sidebar {
  cursor: pointer;
}
.padd-bottom {
  margin-bottom: 5px;
}
.breadcrumb {
	margin: 0 0 0px;
	padding: 10px 0px;
	background-color: transparent;
}
.block {
	border: 1px solid #ccc;
	background: white;
	margin: 1em 0em;
	border-top: none;
}
.block-content {
	margin: 1em;
	min-height: .25em;
}
.block-header {
	margin-bottom: 0px;
	border-right: none;
	border-left: none;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
}
.block-header div {
	padding-top: 10px;
}
.chart-bottom-heading {
	margin-top: 5px;
	text-align: center;
}
/** Side Bar **/
.bs-docs-sidenav {
  max-width: 228px;
  margin: 30px 0 0;
  padding: 0;
  background-color: #fff;
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
  -webkit-box-shadow: 0 1px 4px rgba(0,0,0,.065);
     -moz-box-shadow: 0 1px 4px rgba(0,0,0,.065);
          box-shadow: 0 1px 4px rgba(0,0,0,.065);
}
.bs-docs-sidenav > li > a {
  display: block;
  width: 190px \9;
  margin: 0 0 -1px;
  padding: 8px 14px;
  border: 1px solid #e5e5e5;
}
.bs-docs-sidenav > li:first-child > a {
  -webkit-border-radius: 6px 6px 0 0;
     -moz-border-radius: 6px 6px 0 0;
          border-radius: 6px 6px 0 0;
}
.bs-docs-sidenav > li:last-child > a {
  -webkit-border-radius: 0 0 6px 6px;
     -moz-border-radius: 0 0 6px 6px;
          border-radius: 0 0 6px 6px;
}
.bs-docs-sidenav > .active > a {
  position: relative;
  z-index: 2;
  padding: 9px 15px;
  border: 0;
  text-shadow: 0 1px 0 rgba(0,0,0,.15);
  -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.1), inset -1px 0 0 rgba(0,0,0,.1);
     -moz-box-shadow: inset 1px 0 0 rgba(0,0,0,.1), inset -1px 0 0 rgba(0,0,0,.1);
          box-shadow: inset 1px 0 0 rgba(0,0,0,.1), inset -1px 0 0 rgba(0,0,0,.1);
}
/* Chevrons */
.bs-docs-sidenav .icon-chevron-right {
  float: right;
  margin-top: 2px;
  margin-right: -6px;
  opacity: .25;
}
.bs-docs-sidenav > li > a:hover {
  background-color: #f5f5f5;
}
.bs-docs-sidenav a:hover .icon-chevron-right {
  opacity: .5;
}
.bs-docs-sidenav .active .icon-chevron-right,
.bs-docs-sidenav .active a:hover .icon-chevron-right {
  opacity: 1;
}
.bs-docs-sidenav.affix {
  top: 40px;
}
.bs-docs-sidenav.affix-bottom {
  position: absolute;
  top: auto;
  bottom: 270px;
}
/* Icons
------------------------- */
.the-icons {
  margin-left: 0;
  list-style: none;
}
.the-icons li {
  float: left;
  width: 25%;
  line-height: 25px;
}
.the-icons i:hover {
  background-color: rgba(255,0,0,.25);
}
    </style>
  </head>
  <body id="login">
    <div class="container" style="margin-top: 50px;">
    
      <form class="form-signin" method="post" style="    max-width: 479px;
    padding: 21px 96px 29px;">
    
        <h2 class="form-signin-heading">Sign Up</h2><hr />
        <?php if(isset($msg)) echo $msg;  ?>
        <p> Username: </p><input type="text" class="input-block-level" style="font-size: 16px;
    height: auto;
    margin-bottom: 15px;
    padding: 7px 9px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 283px;" placeholder="Username" name="txtuname" required />
        
         <p> Birthday: </p><input type="date" class="input-block-level"  style="font-size: 16px;
    height: auto;
    margin-bottom: 15px;
    padding: 7px 9px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 283px;" name="bday" >
        <p> Email : </p> <input type="email" class="input-block-level" style="font-size: 16px;
    height: auto;
    margin-bottom: 15px;
    padding: 7px 9px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 283px;" placeholder="Email address" name="txtemail" required />
        <p> Password : </p><input type="password" class="input-block-level" style="font-size: 16px;
    height: auto;
    margin-bottom: 15px;
    padding: 7px 9px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 283px;" placeholder="Password" name="txtpass" required />
      <hr />
        <button class="btn btn-large btn-primary" type="submit" name="btn-signup">Sign Up</button>
        <a href="login.php" style="float:right;background: #c12e2a;    border: 1px solid transparent;" class="btn btn-large">Sign In</a>
      </form>
    </div> <!-- /container -->
  </body>
</html>