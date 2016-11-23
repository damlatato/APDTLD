<?php
if (isset($_POST['purchaseshoppingCart'])){
	$message = "Thank you for your booking.";
	$success = send_mail($message,"Purchase Confirmation",$_SESSION['usermail']);
	$_POST = array();
}


if (isset($_POST['sendsubscribeconfirmation'])) {
	if ($email == ""){
		echo "Please type a correct e-mail.";
	} else {
		$user = User::getUserById($event->geteventOrganizer());
		
		$message = "You successfully subscribed to newsletter of the company ".$user->getName().".";
		$success = send_mail($message,"Subscribe Mail",$email); 
		if ($success){
			echo "You successfully subscribed to newsletter: ".$user->getName()." with your email ".$email.".</br>";
			
		} else {
			echo 'Message could not be sent. Please try later again.';
		}
	}
	$_POST = array();
}

if (isset($_POST['sendsupportmail'])) {
	$name = trim($_POST['txtname']);
	$email = trim($_POST['txtmail']);
	$subject = trim($_POST['txtsubject']);
	$description = trim($_POST['txtdescription']);
	

	if ($name == "" || $email == "" || $subject == "" || $description == "") {
		echo 'At least one of the form inputs are not correct given.';
	} else {
	
		$message = "
		Hello Support Team,
		<br /><br />
		The user $name with the email adress $email needs your help.<br/>
		Here is his concern:<br/>
		$subject<br />
		Description: <br />
		$description";
	
		$success = send_mail($message,"Support Mail","educationevent1@gmail.com");
		if ($success){
			echo "You successfully sent a support mail. Our Support Team will contact you as soon as possible.</br>";
		} else {
			echo 'Message could not be sent. Please try later again. ';
		}
	}
	$_POST = array();
}

function send_mail($message,$mailsubject,$emailTo)
{
	require_once('model/mailer/class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug  = 0;
	$mail->SMTPAuth   = true;
	$mail->SMTPSecure = "ssl";
	$mail->Host       = "smtp.gmail.com";
	$mail->Port       = 465;
	$mail->AddAddress($emailTo);
	$mail->Username="educationevent1@gmail.com";
	$mail->Password="eduvent123456";
	$mail->SetFrom('educationevent1@gmail.com','Eduvent');
	$mail->AddReplyTo("educationevent1@gmail.com","Eduvent");
	$mail->Subject    = $mailsubject;
	$mail->MsgHTML($message);

	
	if(!$mail->send()) {
		return false;
	} else {
		return true;
	}
}
?>