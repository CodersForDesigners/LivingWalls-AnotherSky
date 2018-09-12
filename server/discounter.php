<?php

/*
 * ---------
 * For the discount-engine
 * ---------
 */

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

 //pulling from the landing page
$salesperson_email = $_POST['salesperson_email'];
$name = ucwords($_POST['customer_name']);
$customer_id = $_POST['customer_id'];
$apartment_number = $_POST['apartment_number'];
$car_parking_feature = $_POST['car_parking_feature'];
$car_parking_cost = $_POST['car_parking_cost'];

$params_to_calc_func = [
	'rate_sqft' => $_POST['rate_sqft'],
	'floor_rise' => $_POST['floor_rise'],
	'club_house' => $_POST['club_house'],
];

$master_for_pdf = array_merge($BHK4_pdf, $BHK3P_A_pdf, $BHK3P_B_pdf, $BHK3P_C_pdf, $BHK3_A_pdf, $BHK3_B_pdf, $BHK3_C_pdf);
$apartment = $master_for_pdf[$apartment_number];


$apt_info = calculate_total( $apartment['apt_floor'], $apartment['apt_area'], $car_parking_cost, $params_to_calc_func );
$apt_info[ "#type" ] = $apartment['apt_type'];
$apt_info[ "#area" ] = $apartment['apt_area'];
$apt_info[ "#number" ] = $apartment['apt_number'];
$apt_info[ "#size" ] = $apartment['apt_size'];
$apt_info[ "#car_parking_text" ] = $car_parking_feature;

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
require 'pdf_template/index.php';
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
$attachments = [ ];
$path = 'enquiries/salesperson/' . $apartment[ 'apt_number' ]. '.pdf';
file_put_contents( $path , $dompdf->output() );
$attachments[ ] = [
	'name' => $apartment[ 'apt_number' ] . '.pdf',
	// 'url' => 'http://' . $_SERVER[ 'HTTP_HOST' ] . '/discount-engine/sales_build/' . $apartment[ 'apt_number' ] . '.pdf'
	'url' => 'http://' . $_SERVER[ 'HTTP_HOST' ] . '/enquiries/salesperson/' . $apartment[ 'apt_number' ] . '.pdf'
];

	// echo $html;
// Email message
// $customer_message =
// "Hello ".$name.",<br><br>
//  Greetings from Living Walls. Thank you for showing interest in our product. We have attached your quotation for Apartment - ".$apartment_number." to this email.<br><br>
//  If you would like to view other available apartments, use our online pricing app - livingwalls.in/apartment-pricing <br><br>
//  www.livingwalls.in<br>
//  Support Line | +91 96633 96979";
$customer_message = "Customer Name : ".$name."<br>Customer Id : ".$customer_id;




$mail_data = [

	// 'to_email' => [ 'adityabhat@lazaro.in', /*'mark@lazaro.in'*/ ],
	// 'to_emails_CC' => [ /*'google@lazaro.in', 'barbarabangalore@gmail.com'*/ ],
	'to_email' => $salesperson_email,
	'to_emails_CC' => [ 'info@livingwalls.in', 'livingwalls@lazaro.in' ],

	'subject' => 'Discount Engine - ' . $apartment_number,
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
// $request = curl_init( "http://lazaro.in/server/proxy_mailer.php" );

// curl_setopt( $request, CURLOPT_CUSTOMREQUEST, "POST" );
// curl_setopt( $request, CURLOPT_POSTFIELDS, http_build_query( $mail_data ) );
// curl_setopt( $request, CURLOPT_RETURNTRANSFER, true);
// curl_setopt( $request, CURLOPT_HEADER, "Content-Type: application/x-www-form-urlencoded");

// $response = curl_exec( $request );
// curl_close( $request );





return $response;

?>
