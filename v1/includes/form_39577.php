<?php	
	if(empty($_POST['home_input_email']) && strlen($_POST['home_input_email']) == 0)
	{
		return false;
	}
	
	$home_input_name = $_POST['home_input_name'];
	$home_input_email = $_POST['home_input_email'];
	$home_input_message = $_POST['home_input_message'];
	
	$to = 'dking72@gatech.edu'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from My Blocs Website.";
	$email_body = "You have received a new message. \n\n".
				  "Home_Input_Name: $home_input_name \nHome_Input_Email: $home_input_email \nHome_Input_Message: $home_input_message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $home_input_email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>