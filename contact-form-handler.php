<?php
	$name = $_POST['name'];
	$secondname = $_POST['secondname'];
	$baseroomname = $_POST['baseroomname'];
	$Question1 = $_POST['Question1'];
	$Code = $_POST['Code'];
	$CAD = $_POST['CAD'];
	$visitor_email = $_POST['email'];
	$year = $_POST['year'];
	$message = $_POST['message'];


	$email_from = 'testphp@gccvex.ie';

	$email_subject = "New Form Submission";

	$email_body = "User First Name: $name.\n\n".
					"User Second Name: $secondname.\n\n".
					  "User Baseroom Name: $baseroomname.\n\n".
					   "User Question 1: $Question1.\n\n".	
					    "User Code: $Code.\n\n".
					     "User CAD: $CAD.\n\n".			
					      "User Email: $visitor_email.\n\n".
					       "User Year: $year.\n\n".
					        "User Message: $message.\n\n";


	$to = "testphp@gccvex.ie";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: successful.html");
	
?>