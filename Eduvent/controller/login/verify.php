<?php
require_once '../../model/User.php';
// $user = new USER();


// -----------------REQUIREMENTS TO ARRANGE-------------------------------------
// needs:  adding two field to db 

// 1.'userStatus'--> enum('Y', 'N') --> userStatus default value has to be set as 'N'
// 2. 'tokenCode' --> varchar(100) --> token code deafult value has to be empty

// other requirements:
// creating functions,
// 1. $id = User::getUserByTokenCode($code);  --> to get id I need to create this function by using Tokencode to get the id of a user
// 2. User::getStatusbyId($id)  --> to get status I need to create this function by using ID to get status of a user
// -----------------END OF REQUIREMENTS TO ARRANGE-------------------------------------

if(empty($_GET['id']) && empty($_GET['code']))
{
//  $user->redirect('../Eduvent/index.php?page=login');
}

if(isset($_GET['id']) && isset($_GET['code']))
{
 $id_inURL = $_GET['id'];
 $code = $_GET['code'];
 
 $statusY = "Y";
 $statusN = "N";
 
 
 
//  select from database where user id and token code are matched int provided url
 

 	$id = User::getUserIDByTokenCode($code);
 	
 	if ($id == $id_inURL) {
 		if (User::getStatusbyId($id)== $statusN) {
 		
//  		update status as 'yes' in db
			User::setStatus($statusY);
 			$msg = "
             <div class='alert alert-success'>
       <button class='close' data-dismiss='alert'>&times;</button>
       <strong>WoW !</strong>  Your Account is Now Activated: <a href='../../index.php?page=login'>Login here</a>
          </div>
          ";
 	}
else {
	
	
	$msg = "
             <div class='alert alert-error'>
       <button class='close' data-dismiss='alert'>&times;</button>
       <strong>sorry !</strong>  Your Account is allready Activated : <a href='../../index.php?page=login'>Login here</a>
          </div>
          ";
	
}
 	
 	}
 	else
 	{
 		$msg = "
         <div class='alert alert-error'>
      <button class='close' data-dismiss='alert'>&times;</button>
      <strong>sorry !</strong>  No Account Found : <a href='../Eduvent/index.php?page=signup'>Signup here</a>
      </div>
      ";
 	}
 	

 
 
//  $stmt = $user->runQuery("SELECT ID,userStatus FROM users WHERE ID=:uID AND tokenCode=:code LIMIT 1");
//  $stmt->execute(array(":uID"=>$id,":code"=>$code));
//  $row=$stmt->fetch(PDO::FETCH_ASSOC);
//  if($stmt->rowCount() > 0)
//  {
//   if($row['userStatus']==$statusN)
//   {
//    $stmt = $user->runQuery("UPDATE users SET userStatus=:status WHERE ID=:uID");
//    $stmt->bindparam(":status",$statusY);
//    $stmt->bindparam(":uID",$id);
//    $stmt->execute(); 
   
//    $msg = "
//              <div class='alert alert-success'>
//        <button class='close' data-dismiss='alert'>&times;</button>
//        <strong>WoW !</strong>  Your Account is Now Activated: <a href='../../index.php?page=login'>Login here</a>
//           </div>
//           "; 
//   }
//   else
//   {
//    $msg = "
//              <div class='alert alert-error'>
//        <button class='close' data-dismiss='alert'>&times;</button>
//        <strong>sorry !</strong>  Your Account is allready Activated : <a href='../../index.php?page=login'>Login here</a>
//           </div>
//           ";
//   }
//  }
//  else
//  {
//   $msg = "
//          <div class='alert alert-error'>
//       <button class='close' data-dismiss='alert'>&times;</button>
//       <strong>sorry !</strong>  No Account Found : <a href='../Eduvent/index.php?page=signup'>Signup here</a>
//       </div>
//       ";
//  } 
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Confirm Registration</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">
  <?php if(isset($msg)) { echo $msg; } ?>
    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>