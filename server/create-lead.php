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
$lead_source = $_POST[ 'lead_source' ];

if ( $lead_source == 'Home' ) {
	$lead_data = [
		'rep_id' => 'livingadmin',
		'channel_id' => $lead_source,
		'subject' => '',
		'project' => 'Another Sky',
		'notes' => '',
		'f_name' => $_POST[ 'first_name' ],
		'l_name' => $_POST[ 'last_name' ],
		'phonefax' => $_POST[ 'contact_number' ]
	];
}
if ( $lead_source == 'Detailed Specifications' ) {
	$lead_data = [
		'rep_id' => 'livingadmin',
		'channel_id' => $lead_source,
		'subject' => '',
		'project' => 'Another Sky',
		'notes' => '',
		'phonefax' => $_POST[ 'contact_number' ]
	];
}
if ( $lead_source == 'Pricing' ) {
	$lead_data = [
		'rep_id' => 'livingadmin',
		'channel_id' => $lead_source,
		'subject' => '',
		'project' => 'Another Sky',
		'notes' => '',
		'f_name' => $_POST[ 'first_name' ],
		'l_name' => $_POST[ 'last_name' ],
		'phonefax' => $_POST[ 'contact_number' ],
		'email' => $_POST[ 'email_address' ],
		'disco_1' => $_POST[ 'discovery_source' ],
		'apart_1' => $_POST[ 'apartments_viewed' ],
		'apart_2' => $_POST[ 'apartments_liked' ]
	];
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
