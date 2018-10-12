<?php

ini_set( "display_errors", "On" );
ini_set( "error_reporting", E_ALL );


// continue processing this script even if
// the user closes the tab, or
// hits the ESC key
ignore_user_abort( true );

// do not let this script timeout
set_time_limit( 0 );

require '../vendor/autoload.php';
use Dompdf\Dompdf;

require 'details_constants.php';
require_once 'blocks/block_A.php';
require_once 'blocks/block_B.php';
require_once 'blocks/block_C.php';

// pulling from the landing page
$name = ucwords($_POST['name']);
$customer_email = $_POST['email'];
$parking_string = $_POST['fav_array_string'];

//Creating an array from
if ( ! empty( $parking_string ) ) {
	$parking_array = explode( ',', $parking_string );
} else {
	$parking_array = [ ];
}

$apartment = [];

$master_for_pdf = array_merge($BHK4_pdf, $BHK3P_A_pdf, $BHK3P_B_pdf, $BHK3P_C_pdf, $BHK3_A_pdf, $BHK3_B_pdf, $BHK3_C_pdf);

$attachments = [ ];

//Attach an image file
foreach ($parking_array as $parking_pdf_with_parking) {
	// $mail->addAttachment('pricing_pdf/'.$parking_pdf_with_parking);
	$parking_pdf = explode("_", $parking_pdf_with_parking);
	$apartment = $master_for_pdf[$parking_pdf[0]];

	switch ($parking_pdf[1]) {
		case 1: $car_value = 350000; $parking_text = "Covered Parking"; break;
		case 2: $car_value = 250000; $parking_text = "Open Surface Parking"; break;
		case 3: $car_value = 600000; $parking_text = "2 Linked Basement Parking"; break;
		case 4: $car_value = 700000; $parking_text = "2 Covered Parking"; break;
		case 5: $car_value = 600000; $parking_text = "1 Covered + 1 Open Surface Parking"; break;
		case 6: $car_value = 500000; $parking_text = "2 Open Surface Parking"; break;
	}

	$apt_info = calculate_total( $apartment['apt_floor'], $apartment['apt_area'], $car_value, $apartment['apt_type'] );
	$apt_info[ "#type" ] = $apartment['apt_type'];
	$apt_info[ "#area" ] = $apartment['apt_area'];
	$apt_info[ "#number" ] = $apartment['apt_number'];
	$apt_info[ "#size" ] = $apartment['apt_size'];
	$apt_info[ "#car_parking_text" ] = $parking_text;

	// Apartment Floor number to insert with the right format
	$temp_apt = $apartment['apt_floor'];
	if ( $temp_apt == 0) {
		$temp_floor_insert = 'Ground';
	} else if ( $temp_apt == 1) {
		$temp_floor_insert = '1st';
	} else if ( $temp_apt == 2) {
		$temp_floor_insert = '2nd';
	} else if ( $temp_apt == 3) {
		$temp_floor_insert = '3rd';
	} else {
		$temp_floor_insert = $temp_apt . 'th';
	}
	$apt_info[ "#floor" ] = $temp_floor_insert;
	$apt_info[ "#block" ] = $apt_info[ "#number" ][ 0 ];

	// slap data on template
	ob_start();
	require "pdf_template/index.php";
	$html = ob_get_clean();

	// create the pee-dee-eff
	$dompdf = new DOMPDF();
	$dompdf->set_options( array(
		"default_font" => "serif",
		"dpi" => 96,
		"enable_font_subsetting" => true,
		// "enable_javascript" => true,
		"enable_php" => true
	) );

	$dompdf->load_html( $html );
	$dompdf->setPaper( "A4" , "potrait" );
	$dompdf->render();

	// flush the pee-dee-eff to disk
	// $path = "build/".$apartment['apt_number'].".pdf";
	$path = '../enquiries/customer/' . $apartment[ 'apt_number' ]. '.pdf';
	file_put_contents( $path , $dompdf->output() );
	$attachments[ ] = [
		'name' => $apartment[ 'apt_number' ] . '.pdf',
		'url' => '../enquiries/customer/' . $apartment[ 'apt_number' ] . '.pdf'
		// 'url' => 'https://' . $_SERVER[ 'HTTP_HOST' ] . '/enquiries/customer/' . $apartment[ 'apt_number' ] . '.pdf'
		// 'url' => 'https://' . $_SERVER[ 'HTTP_HOST' ] . '/server/build/' . $apartment[ 'apt_number' ] . '.pdf'
	];

}

// Email message
$customer_message = <<<TEXT
Greetings from Living Walls. Thank you for showing interest in our product. We have your contact information and we will get in touch with you soon.
<br><br>
www.livingwalls.in<br>
Support Line | +91 96633 96979
TEXT;

$mail_data = [
	'to_emails' => $customer_email,
	'to_emails_CC' => [ ],

	'subject' => 'Hello, ' . $name,
	'message' => $customer_message,

	'attachments' => $attachments,
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
