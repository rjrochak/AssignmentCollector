<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
 
try {
	 									
	$mail->isSMTP();		                                    // Set mailer to use SMTP								
	$mail->Host	 = 'smtp.gmail.com';				            // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;							            // Enable SMTP authentication
	$mail->Username = 'prajjwalsahu19@gmail.com';                   // email id of the sender.				
	$mail->Password = 'vjsqkeqlcginjrmi';	     	            // randomly generated password by 2-step-varification proccess.		
	$mail->SMTPSecure = 'tls';						            // Enable TLS encryption, `ssl` also accepted
	$mail->Port	 = 587;                                         // TCP port to connect to

	$mail->setFrom('prajjwalsahu19@gmail.com', 'Prajjwal Sahu');		
	$mail->addAddress($email_id);            
	
	$mail->isHTML(true);	                                    // Set email format to HTML							
	$mail->Subject = 'From Prajjwal Sahu';
	$mail->Body =   "Your Reset Verification Code is ". $otp ;
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>