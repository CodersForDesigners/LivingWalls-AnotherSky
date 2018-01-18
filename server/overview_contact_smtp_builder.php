<?php

// Pulling from the webpage
$name = ucwords($_POST['name']);
$mobile = $_POST['mobile'];
$customer_email = $_POST['email'];
$budget = $_POST['my_budget'];
$find_us = $_POST['find_us'];
$source = $_POST['source'];
$cid_resource = $_POST['cid_resource'];

// if (!is_null($_POST['find_us'])) {
//   $find_us = ' / '.$_POST['find_us'];
// }

// Pushing to Google Sheets after checking where it comes from
// if ( $source == "one" || $source == "one_manual") { // General Form Fills
// 	file_get_contents('https://docs.google.com/forms/d/e/1FAIpQLSdmHTA-7AHggVuWTTGGtPBOIqu3cA_NCYz6unvg1CC46zKgbA/formResponse?ifq&entry.97776430='.urlencode($cid_resource).'&entry.250399479='.urlencode($name).'&entry.1275616423='.urlencode($mobile).'&entry.1508179934='.urlencode($customer_email).'&entry.140019121='.urlencode($budget).'&entry.217655178='.urlencode($find_us).'&submit=Submit');
// } else { // Premium Form Fills
// 	file_get_contents('https://docs.google.com/forms/d/e/1FAIpQLSeKsAulnJzJU0c6q3b4UalVJZGLAVf8rXbZ_-94VC5IZ0Wvhg/formResponse?ifq&entry.790329688='.urlencode($cid_resource).'&entry.250399479='.urlencode($name).'&entry.1275616423='.urlencode($mobile).'&entry.1508179934='.urlencode($customer_email).'&entry.140019121='.urlencode($budget).'&entry.217655178='.urlencode($find_us).'&submit=Submit');
// }

// Exit for manual form entries
// if this script is invoked from a manual form, we don't need to send an e-mail
// so we quit
if ( $source == "one_manual" || $source == "two_manual") {
	die("Manual Form Entry Exit");
}

// Email message
$builder_message = <<<TEXT
Name : $name<br>Email : $customer_email<br>Mobile : $mobile<br>Budget : $budget<br>Finding Us : $find_us.
TEXT;





$mail_data = [
	// 'to_emails' => 'info@livingwalls.in',
	// 'to_emails_CC' => 'livingwalls@lazaro.in',
	'to_emails' => 'adityabhat@lazaro.in',
	'to_emails_CC' => [ ],

	'subject' => 'Overview : ' . $name,
	'message' => $builder_message,
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
// $request = curl_init( "http://lazaro.in/server/proxy_mailer.php" );

// curl_setopt( $request, CURLOPT_CUSTOMREQUEST, "POST" );
// curl_setopt( $request, CURLOPT_POSTFIELDS, http_build_query( $mail_data ) );
// curl_setopt( $request, CURLOPT_RETURNTRANSFER, true);
// curl_setopt( $request, CURLOPT_HEADER, "Content-Type: application/x-www-form-urlencoded");

// $response = curl_exec( $request );
// curl_close( $request );





return $response;

?>
