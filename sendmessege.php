<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];


	$email_from = 'testphp@gccvex.ie';

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n\n".
				  		"User Email: $visitor_email.\n\n".
								"User Message: $message.\n\n";


	$to = "testphp@gccvex.ie";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: successful.html");
	
?>