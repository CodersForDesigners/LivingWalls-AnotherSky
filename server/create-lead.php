<?php

/*
 * This script creates a lead on Paramantra based on data in the request
 */

ini_set( "display_errors", "On" );
ini_set( "error_reporting", E_ALL );

function logo ( $thing ) {
	echo '<pre style="white-space: pre-wrap">';
	var_dump( $thing );
	echo '</pre>';
}


/*
 * Pulling data from the request
 */
$form_data = [
	'lead_source' => $_POST[ 'lead_source' ],
	'first_name' => $_POST[ 'first_name' ],
	'last_name' => $_POST[ 'last_name' ],
	'contact_number' => $_POST[ 'contact_number' ],
];
if ( $form_data[ 'lead_source' ] == 'Pricing' ) {
	$form_data[ 'email_address' ] = $_POST[ 'email_address' ];
	$form_data[ 'discovery_source' ] = $_POST[ 'discovery_source' ];
	$form_data[ 'apartments_viewed' ] = $_POST[ 'apartments_viewed' ];
	$form_data[ 'apartments_liked' ] = $_POST[ 'apartments_liked' ];
}

$lead_data = [
	'rep_id' => 'livingadmin',
	'channel_id' => $form_data[ 'lead_source' ],
	'subject' => '',
	'project' => 'Another Sky',
	'f_name' => $form_data[ 'first_name' ],
	'l_name' => $form_data[ 'last_name' ],
	'phonefax' => $form_data[ 'contact_number' ],
	'notes' => ''
];

if ( $form_data[ 'lead_source' ] == 'Pricing' ) {
	$lead_data[ 'email' ] = $form_data[ 'email_address' ];
	$lead_data[ 'disco_1' ] = $form_data[ 'discovery_source' ];
	$lead_data[ 'apart_1' ] = $form_data[ 'apartments_viewed' ];
	$lead_data[ 'apart_2' ] = $form_data[ 'apartments_liked' ];
}

/*
 * Preparing communication to Paramantra
 */
$api_endpoint = 'https://cloud.paramantra.com/paramantra/index.php/api/data/new/format/json';
$api_key = 'CtK56wGsIAq2AHwIwDztrCDyIN';
$app_name = 'pMJL11163szvL6';

$request = curl_init();
curl_setopt( $request, CURLOPT_URL, $api_endpoint );
curl_setopt( $request, CURLOPT_HTTPHEADER, [
	'X-API-KEY:' . $api_key,
	'ACTION-ON:' . $app_name
] );
curl_setopt( $request, CURLOPT_USERPWD, $api_key );
curl_setopt( $request, CURLOPT_POSTFIELDS, $lead_data );
curl_setopt( $request, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $request, CURLOPT_CONNECTTIMEOUT, 300 );
$response = curl_exec( $request );
$error = [
	'number' => curl_errno( $request ),
	'message' => curl_error( $request )
];
curl_close( $request );


/*
 * Preparing client response
 */
$client_response = [];
if ( ! empty( $error[ 'number' ] ) && ! empty( $error[ 'message' ] ) ) {
	$client_response[ 'status' ] = 'error';
	$client_response[ 'message' ] = $error[ 'message' ];
	die( json_encode( $client_response ) );
}

$response = json_decode( $response, true );
foreach ( $response as $r ) {
	$client_response = array_merge( $client_response, $r );
}

// die( json_encode( $client_response ) );
die( json_encode( array_merge( $client_response, $lead_data ) ) );

// logo( $response );
// logo( $error );
