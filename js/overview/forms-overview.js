
/*
 * Getting a Quote
 */
$( document ).on( "click", ".js_get_quote_section .js_quote_quote_btn", function ( event ) {
	__OMEGA.utils.addNoteToUser( "Omega Event Log",
		"Customer REQUESTED for a quote on the \"Another Sky\" project webpage."
	).catch( function ( e ) {
		console.log( e.message )
	} )
	// Relay message to user
	var message = "We have your number. We'll call you soon.";
	alert( message );
	// Disable the button
	$( ".js_get_quote_section" ).find( ".js_quote_quote_btn" ).addClass( "no-pointer" );
	// Change the button's message
	$( ".js_get_quote_section" ).find( "[ data-loginner ]" ).attr( "style", '--quote-feedback-message: "We\'ll contact you soon."' )
} );
