<?php

/**
 *
 * Discard this file on deployment to the live server
 *
 **/
if ( $_SERVER[ 'SERVER_NAME' ] != 'localhost' ) die();

ini_set( "display_errors", "On" );
ini_set( "error_reporting", E_ALL );


// continue processing this script even if
// the user closes the tab, or
// hits the ESC key
ignore_user_abort( true );

// do not let this script timeout
// ( because we know it's gonna take a while what with all the image compressing )
set_time_limit( 0 );


function logo ( $thing ) {
	echo '<pre style="white-space: pre-wrap">';
	var_dump( $thing );
	echo '</pre>';
}


// require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/another_sky' . '/vendor/autoload.php' );

logo( getenv( 'PROD' ) );
