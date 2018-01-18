<?php


function get_cid() {
	// Setting a default value meant for debugging purposes
	$cid_to_return = '-1';

	// Opening the file in read plus write mode
	$fp = fopen( 'cid/secure-cid.txt', 'r+' );

	if ( flock($fp, LOCK_EX) ) { // Trying to get an Exclusive lock on the file

		// Fetching the CID from the file
		$cid_to_return = fgets($fp);

		// Resetting file pointer to beginning of the file
		fseek($fp, 0);

		// Increment the CID and writing into the file
		fwrite($fp, strval( intval( $cid_to_return ) + 1 ) );

		// Release the lock
		flock($fp, LOCK_UN);

	} else {
		// Ideally we shouldn't get here
    	echo "Couldn't get the lock!";

		$cid_to_return = '-2';
	}

	// Safely closing the file handle
	fclose( $fp );

	return ($cid_to_return);
}

// function get_cid() {
// 	$cid_array = json_decode( file_get_contents( 'cid/super-secure-cid.json' ), TRUE );
// 	$cid_to_return = $cid_array['cid'];

// 	// Increment the CID
// 	$cid_array['cid'] = strval( intval( $cid_array['cid'] ) + 1 );
// 	$fp = fopen( 'cid/super-secure-cid.json', 'w' );
// 	fwrite( $fp, json_encode( $cid_array ) );
// 	fclose( $fp );

// 	return ($cid_to_return);
// }
