<?php
/*
 * This script sets cookies on a page.
 * It's used for setting cookies asynchronously.
 */

if ( empty( $_GET ) )
	exit;

$cookieName = $_GET[ '_cookie' ];
$cookieDuration = (int) $_GET[ '_duration' ];
if ( empty( $_GET[ 'value' ] ) )
	$cookieValue = base64_encode( $_GET[ 'data' ] );
else
	$cookieValue = $_GET[ 'value' ];

setcookie( $cookieName, $cookieValue, time() + $cookieDuration, '/' );

exit;
