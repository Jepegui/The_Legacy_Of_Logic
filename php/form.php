<?php
// hide the errors
error_reporting( 0 );

// Get the values from html form
$name    = $_POST['app_name'];
$email   = $_POST['app_email'];
$number  = $_POST['app_phone'];
//$website = $_POST['app_website'];
$email_message = $_POST['app_message'];
echo $name;
echo $email;
echo $number;
echo $email_message;
/*
// Email Address where you want to received the mails
$to = "guimaraesjepe@gmail.com";

// Mail Subject
$sub = "Enquiry From Your Productions Website";


//send mail
mail( $to, $sub, $email_message, "TLOL" );

if ( $mail ) {

	// Success message
	echo 'Your mail was sent successfully';
} else {

	// Error message
	echo 'Error';
}*/
?>