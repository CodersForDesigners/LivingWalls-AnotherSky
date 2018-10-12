<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

// Pulling from the webpage
$name = ucwords($_POST['name']);
$customer_email = $_POST['email'];

// Email message
$customer_message = <<<TEXT
Greetings from Living Walls. Thank you for showing interest in our product. We have your contact information and we will get in touch with you soon.<br><br>
In the meanwhile, if you would like to view our available apartments, use our online pricing app - livingwalls.in/apartment-pricing <br><br>
www.livingwalls.in<br>
Support Line | +91 96633 96979
TEXT;





$mail_data = [
	'to_emails' => $customer_email,

	'subject' => 'Hello, ' . $name,
	'message' => $customer_message,
];

/*
 * -----
 * Mail sending
 * -----
 */
require 'mailer.php';

/*
 * In the scenario where the mailing has to be delegated
 * over to another server that supports SMTP
 */

// cURL is used to make an HTTP request
// $request = curl_init( "https://lazaro.in/server/proxy_mailer.php" );

// curl_setopt( $request, CURLOPT_CUSTOMREQUEST, "POST" );
// curl_setopt( $request, CURLOPT_POSTFIELDS, http_build_query( $mail_data ) );
// curl_setopt( $request, CURLOPT_RETURNTRANSFER, true);
// curl_setopt( $request, CURLOPT_HEADER, "Content-Type: application/x-www-form-urlencoded");

// $response = curl_exec( $request );
// curl_close( $request );





return $response;

?>
