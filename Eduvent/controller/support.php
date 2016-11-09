<?php


if(isset($_SESSION['usermail'])) {
	//TODO
	//fill the input fields with user data automatically
	//$user = User::getUserByEmail($email);
}



if(isset($_POST['sendsupportmail'])) {
	$name = trim($_POST['txtname']);
	$email = trim($_POST['txtmail']);
	$subject = trim($_POST['txtsubject']);
	$description = trim($_POST['txtdescription']);
	
echo "blablaaaaa";
	$user = User::getUserByEmail($email);


	$message = "
	Hello Support Team,
	<br /><br />
	The user $name with the email adress $email needs your help.<br/>
	Here is his concern:<br/>
	<br /><br />
	<br />
	Subject: $subject<br />
	$description";

	$subjectmail = "Supportrequest";

	$this->send_mail($email,$message,$subject);

}

function send_mail($email,$message,$subject)
{
	require_once('mailer/class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug  = 0;
	$mail->SMTPAuth   = true;
	$mail->SMTPSecure = "ssl";
	$mail->Host       = "smtp.gmail.com";
	$mail->Port       = 465;
	$mail->AddAddress($email);
	$mail->Username="educationevent1@gmail.com";
	$mail->Password="eduvent123456";
	$mail->SetFrom('educationevent1@gmail.com','Eduvent');
	$mail->AddReplyTo("educationevent1@gmail.com","Eduvent");
	$mail->Subject    = $subject;
	$mail->MsgHTML($message);
	//$mail->Send();
	
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}
}
?>