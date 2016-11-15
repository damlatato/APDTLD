<?php
include_once('../../model/YaasConnector.php');
spl_autoload_register(function ($class) {
    $file = '../../model/'.$class.'.php';
	if(file_exists($file)) {
		include $file;
	}
});
echo "HI!";
echo $_GET['id'];

if(isset($_GET['id']))
{
 $id = $_GET['id'];
 $statusY = "Y";
 $statusN = "N";
 
//  select from database where user id and token code are matched int provided url
 		$user = User::getUserById($id);
 		echo $user->getStatus();
 		if ($user->getStatus()== $statusN) {
//  		update status as 'yes' in db
			$user->setStatus($statusY);
			echo "updating status";
			$user->putUser();
			header("Location: ../../index.php?page=login");
 			$msg = "
             <div class='alert alert-success'>
       <button class='close' data-dismiss='alert'>&times;</button>
       <strong>WoW !</strong>  Your Account is Now Activated: <a href='../../index.php?page=login'>Login here</a>
          </div>
          ";
 	}
else {
	echo $_SESSION['usermail'];
	
	$msg = "
             <div class='alert alert-error'>
       <button class='close' data-dismiss='alert'>&times;</button>
       <strong>sorry !</strong>  Your Account is allready Activated : <a href='../../index.php?page=login'>Login here</a>
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
<!--     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
<!--     <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen"> -->
<!--     <link href="assets/styles.css" rel="stylesheet" media="screen"> -->
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--     <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script> -->
  </head>
  <body id="login">
    <div class="container">
  <?php if(isset($msg)) { echo $msg; } ?>
    </div> <!-- /container -->
   
  </body>
</html>