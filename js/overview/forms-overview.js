
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



/*
 * Detailed Specifications
 */
$( document ).on( "click", ".js_get_detailed_specs_trigger", function ( event ) {

	var $targetButton = $( event.target );
	var $downloadLink = $targetButton.parent().find( "a" );

	// Log a note on the CRM
	__OMEGA.utils.addNoteToUser( "Omega Event Log",
		"Customer REQUESTED for the Detailed Specifications on the \"Another Sky\" project webpage."
	).catch( function ( e ) {
		console.log( e.message )
	} )

	// Hide / Show the "Download" button
	$downloadLink.get( 0 ).click();
	$targetButton.slideUp( function () {
		$downloadLink.slideDown();
	} );

} );
