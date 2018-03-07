<?php

/**
 *
 * This script merely sends an e-mail
 *
 **/

/**
 *	we use the following versions of PHPMailer's files
 *
 *		class.smtp.php
 *			1ec37ad4c2f634935a864c6814ec4783d44f305f
 *		class.phpmailer.php
 *			8717a79565b2c0ed67f851d70e1949febdf3b226
 *
 */

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that


ini_set( "display_errors", "On" );
ini_set( "error_reporting", E_ALL );

// do not let this script timeout
// ( because we know it might take a while )
set_time_limit( 0 );

date_default_timezone_set( 'Asia/Kolkata' );

// if ( count( get_included_files() ) < 2 ) {
// 	die( "direct access denied." );
// }

require 'class-phpmailer.php';

// Pulling data from the request
$username_SMTP = 'noreply@livingwalls.in';
$password_SMTP = 'livingwalls2017';
// $username_SMTP = 'google@lazaro.in';
// $password_SMTP = 't34m,l4z4r0';

// $from_email = 'google@lazaro.in';
// $from_name = 'Living Walls';
$from_email = 'noreply@livingwalls.in';
$from_name = 'Living Walls';

$to_emails = $mail_data[ 'to_emails' ];
if ( is_string( $to_emails ) ) {
	$to_emails = [ $to_emails ];
}

if ( empty( $mail_data[ 'to_emails_CC' ] ) ) {
	$to_emails_CC = [ ];
} else {
	if ( is_string( $to_emails_CC ) ) {
		$to_emails_CC = [ $to_emails_CC ];
	}
}

$subject = $mail_data[ 'subject' ];
$message = $mail_data[ 'message' ];

if ( empty( $mail_data[ 'attachments' ] ) ) {
	$attachments = [ ];
} else {
	$attachments = $mail_data[ 'attachments' ];
}

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

// Timeout
// $mail->Timeout = 3600;

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = $username_SMTP;

//Password to use for SMTP authentication
$mail->Password = $password_SMTP;

//Set who the message is to be sent from
$mail->setFrom( $from_email, $from_name );

//Set an alternative reply-to address
// $mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
foreach ( $to_emails as $email_address ) {
	$mail->addAddress( $email_address, '' );
}
foreach ( $to_emails_CC as $email_address ) {
	$mail->addCC( $email_address, '' );
}

//Set the subject line
$mail->Subject = $subject;

$mail->msgHTML( $message );

// Add attachments if present
if ( ! empty( $attachments ) ) {
	foreach ( $attachments as $attachment ) {
		$name = $attachment[ 'name' ];
		$content = file_get_contents( $attachment[ 'url' ] );
		$mail->addStringAttachment( $content, $name );
	}
}

// send the message, check for errors
if ( empty( $response ) ) {
	$response = [ ];
}
if ( ! $mail->send() ) {
	$response[ "status" ] = false;
	$response[ "message" ] = "there was an auror :: \n" . $mail->ErrorInfo;
} else {
	$response[ "status" ] = true;
	$response[ "message" ] = "posted mail.";
}

return $response;
