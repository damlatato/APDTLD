<?php


if(isset($_SESSION['usermail'])) {
	//TODO
	//fill the input fields with user data automatically
	//$user = User::getUserByEmail($email);
}

if(isset($_POST['sendsubscribeconfirmation'])) {
	$message = "";
	send_mail($message,"Subscribe Mail","Maria.Ocon-Palma@gmx.de");
}

if(isset($_POST['sendsupportmail'])) {
	$name = trim($_POST['txtname']);
	$email = trim($_POST['txtmail']);
	$subject = trim($_POST['txtsubject']);
	$description = trim($_POST['txtdescription']);
	
	//$user = User::getUserByEmail($email);

	if ($name == "" || $email == "" || $subject == "" || $description == "") {
		echo 'At least one of the form inputs not correct given.';
	} else {
	
		$message = "
		Hello Support Team,
		<br /><br />
		The user $name with the email adress $email needs your help.<br/>
		Here is his concern:<br/>
		$subject<br />
		Description: <br />
		$description";
	
		send_mail($message,"Support Mail","Maria.Ocon-Palma@gmx.de");
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
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent.';
	}
}
?>