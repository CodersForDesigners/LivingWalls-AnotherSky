<?php
// This is the landing file for the pricing page customer side mailer.

date_default_timezone_set('Asia/Calcutta');

//pulling from the webpage
$name = ucwords($_POST['name']);
$customer_email = $_POST['email'];
$parking_string = $_POST['fav_array_string'];
$params = $name.'~'.$customer_email.'~'.$parking_string;

// Pushing the actual big process to background and returning success to front-end
// $child = popen('php pricing_contact_smtp_customer.php -p='.$params, 'r');
$child = exec('php pricing_contact_smtp_customer.php -p='.$params.' &');

die('Server has received your mail request, human.');