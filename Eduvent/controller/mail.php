<?php

if (isset($_POST['purchaseshoppingCart'])){
	
	//$usermail = User::getUserById($_SESSION['userSession']);
	$message = "Thank you for your booking.";
	$success = send_mail($message,"Purchase Confirmation",$_SESSION['usermail']);
}


if(isset($_POST['sendsubscribeconfirmation'])) {
	if ($email == ""){
		echo "Please type a correct email.";
	} else {
		$message = "You successfully subscribed to newsletter of the company ".$event->geteventOrganizer().".";
		$success = send_mail($message,"Subscribe Mail",$email); 
		if ($success){
			echo "You successfully subscribed to newsletter: ".$event->geteventOrganizer()." with your email ".$email.".</br>";
			echo "Message has been sent.";
		} else {
			echo "Subscription to the newsletter fails. </br>";
			echo 'Message could not be sent.';
		}
	}
}

if(isset($_POST['sendsupportmail'])) {
	$name = trim($_POST['txtname']);
	$email = trim($_POST['txtmail']);
	$subject = trim($_POST['txtsubject']);
	$description = trim($_POST['txtdescription']);
	
	//$user = User::getUserByEmail($email);

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
	
		$success = send_mail($message,"Support Mail","maryoupi@gmail.de");
		if ($success){
			echo 'Message has been sent.';
		} else {
			echo 'Message could not be sent. ' . $mail->ErrorInfo;
		}
	}
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
	//$mail->Send();
	
	if(!$mail->send()) {
		return false;
	} else {
		return true;
	}
}
?>