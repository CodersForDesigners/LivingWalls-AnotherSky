
/*
 *
 * Wire in the phone country code UI
 *
 */
$( document ).on( "change", ".js_phone_country_code", function ( event ) {
	var $countryCode = $( event.target );
	var countryCode = $countryCode.val().replace( /[^+0-9]/g, "" );
	$countryCode
		.closest( "form" )
		.find( ".js_phone_country_code_label" )
		.text( countryCode );

	// Re-enable and focus on the phone number field
	var $trapSite = $countryCode.closest( "[ data-loginner ]" );
	$trapSite.find( ".loginner_form_phone .js_phone_number" )
				.prop( "disabled", false )
				.get( 0 ).focus();

} );
// Disable the phone number field, so that the country code can be selected
//  	because there's some bug that's holding back the selection dropdown
//  	from showing up.
$( ".js_phone_country_code" ).on( "focus", function ( event ) {
	var $countryCode = $( event.target );
	var $trapSite = $countryCode.closest( "[ data-loginner ]" );
	$trapSite.find( ".loginner_form_phone .js_phone_number" ).prop( "disabled", true );
} );
// Re-enable and focus on the phone number field
$( ".js_phone_country_code" ).on( "blur", function ( event ) {
	var $countryCode = $( event.target );
	var $trapSite = $countryCode.closest( "[ data-loginner ]" );
	$trapSite.find( ".loginner_form_phone .js_phone_number" )
				.prop( "disabled", false )
				.get( 0 ).focus();
} );



/*
 *
 * Register all the phone traps
 *
 */
// -----
// 1. Define all hook functions that are common across all the phone traps
// -----
var onTrigger = function onTrigger ( event ) {
	var $triggerElement = $( event.target ).closest( ".js_user_required" );
	$triggerElement.closest( ".is-hide" ).removeClass( "is-hide" );
	var $trapSite = $triggerElement.closest( "[ data-loginner ]" );
	$trapSite
		.find( ".loginner_form_phone" )
			.removeClass( "fade" )
			.find( ".js_phone_number" )
				.get( 0 ).focus();
};
var onPhoneValidationError = function onPhoneValidationError ( message ) {
	__OMEGA.utils.notify( message, {
		level: "error",
		context: "Login Prompt"
	} );
};
var onPhoneSend = function onPhoneSend () {
	$( this ).find( ".js_feedback_message" ).text( "Sending....." );
};
var onShowOTP = function ( domPhoneForm, domOTPForm ) {
	$( domPhoneForm ).addClass( "hidden" );
	$( domOTPForm ).removeClass( "hidden" );
};
var onOTPSend = function () {
	$( this ).find( ".js_feedback_message" ).text( "Sending....." );
};
var onPhoneError = function ( code, message ) {
	__OMEGA.utils.notify( message, {
		level: "error",
		context: "Login Prompt"
	} );
	console.log( message )
	$( this ).find( "[ type = submit ] span" ).text( "→" );
	$( this ).find( "input, select, button" ).prop( "disabled", false );
};
var onOTPError = function ( code, message ) {
	__OMEGA.utils.notify( message, {
		level: "error",
		context: "Login Prompt"
	} );
	$( this ).find( "[ type = submit ] span" ).text( "Send" );
	$( this ).find( "input, select, button" ).prop( "disabled", false );
};
var onOTPVerified = function ( context, phoneNumber ) {
	// var url = "/trac/user/new/" + context;
	// __OMEGA.utils.trackPageVisit( url );
};



// -----
// 2. Set the traps.....
// -----
// Get a Quote ( at the top )
var $getQuoteTopFormSite = $( "[ data-loginner = 'Get Quote Top' ]" );
Loginner.registerLoginPrompt( "Get Quote Top", {
	onTrigger: onTrigger,
	onPhoneValidationError: onPhoneValidationError,
	onPhoneSend: onPhoneSend,
	onShowOTP: onShowOTP,
	onOTPSend: onOTPSend,
	onPhoneError: onPhoneError,
	onOTPError: onOTPError,
	onOTPVerified: onOTPVerified,
	onLogin: function ( user, context ) {
		if ( this ) {
			// Disable and Hide the form
			$( this )
				.find( "input, select, button" )
				.prop( "disabled", true );

			$( this ).find( ".js_feedback_message" ).text( "We'll contact you soon." );
		}
		else {
			__OMEGA.utils.notify( "We have your number. We'll contact you soon." );
		}
	}
} );
// Get a Quote ( at the bottom )
var $getQuoteTopFormSite = $( "[ data-loginner = 'Get Quote Bottom' ]" );
Loginner.registerLoginPrompt( "Get Quote Bottom", {
	onTrigger: onTrigger,
	onPhoneValidationError: onPhoneValidationError,
	onPhoneSend: onPhoneSend,
	onShowOTP: onShowOTP,
	onOTPSend: onOTPSend,
	onPhoneError: onPhoneError,
	onOTPError: onOTPError,
	onOTPVerified: onOTPVerified,
	onLogin: function ( user, context ) {
		if ( this ) {
			// Disable and Hide the form
			$( this )
				.find( "input, select, button" )
				.prop( "disabled", true );

			$( this ).find( ".js_feedback_message" ).text( "We'll contact you soon." );
		}
		else {
			__OMEGA.utils.notify( "We have your number. We'll contact you soon." );
		}
	}
} );