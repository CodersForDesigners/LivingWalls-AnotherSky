<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

// `cid` nomo used
// require ("cid/get-new-cid.php");

//pulling from the webpage
$name = ucwords($_POST['name']);
$mobile = $_POST['mobile'];
$customer_email = $_POST['email'];
$selected_apts = $_POST['selected_apts'];
$fav_apts = $_POST['fav_apts'];
$finding_us = $_POST['finding_us'];

// `cid` nomo used
// $cid = get_cid();
// Pushing to Google Sheets

//General Fills
// this is a hacky-ish approach
// we're using the `file_get_contents` function to make a HTTP request to Google's API
// file_get_contents('https://docs.google.com/forms/d/e/1FAIpQLSdmHTA-7AHggVuWTTGGtPBOIqu3cA_NCYz6unvg1CC46zKgbA/formResponse?ifq&entry.97776430='.urlencode($cid).'&entry.250399479='.urlencode($name).'&entry.1275616423='.urlencode($mobile).'&entry.1508179934='.urlencode($customer_email).'&entry.140019121='.urlencode(($selected_apts.' ~ '.$fav_apts)).'&entry.217655178='.urlencode($finding_us).'&submit=Submit');

// Premium Fills
// file_get_contents('https://docs.google.com/forms/d/e/1FAIpQLSeKsAulnJzJU0c6q3b4UalVJZGLAVf8rXbZ_-94VC5IZ0Wvhg/formResponse?ifq&entry.790329688='.urlencode($cid).'&entry.250399479='.urlencode($name).'&entry.1275616423='.urlencode($mobile).'&entry.1508179934='.urlencode($customer_email).'&entry.140019121='.urlencode(($selected_apts.' ~ '.$fav_apts)).'&entry.217655178='.urlencode($finding_us).'&submit=Submit');

// Email message
$builder_message = <<<TEXT
Name : $name<br>Email : $customer_email<br>Mobile : $mobile<br>Apartments Looked At : $selected_apts<br>Wishlist Apartments : $fav_apts<br>Finding Us : $finding_us.
TEXT;

$mail_data = [
	'to_emails' => 'info@livingwalls.in',
	'to_emails_CC' => 'livingwalls@lazaro.in',
	// 'to_emails' => 'adityabhat@lazaro.in',
	// 'to_emails_CC' => [ ],

	'subject' => 'Pricing : ' . $name,
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
// $request = curl_init( "https://lazaro.in/server/proxy_mailer.php" );

// curl_setopt( $request, CURLOPT_CUSTOMREQUEST, "POST" );
// curl_setopt( $request, CURLOPT_POSTFIELDS, http_build_query( $mail_data ) );
// curl_setopt( $request, CURLOPT_RETURNTRANSFER, true);
// curl_setopt( $request, CURLOPT_HEADER, "Content-Type: application/x-www-form-urlencoded");

// $response = curl_exec( $request );
// curl_close( $request );





return $response;

?>
