<?php
	$name = $_Post['name'];
	$visitor_email = $_Post['email'];
	$message = $_Post['message'];
	
	$email_from  = 'LNBDA.com'
	$email_subject = "New- FEEDBACK";
	$email_body = "Name: $sname.\n".
					"User Email: $visitor_email.\n";
					"FeedBack: $message.\n";
					
	$to = "malhotra.eshita09@gmail";
	$headers = "From: $email_from\r\n";
	$header = "Reply-To: $visitor_email\r\n";
	mail($to, $email_subject,$email_body,$headers);
	header("Loaction: feedback.html");
?>