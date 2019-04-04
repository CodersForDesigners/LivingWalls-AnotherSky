/* Open Modal Window */
$("body").on("click", ".js_modal_trigger", function ( event ) {

	event.preventDefault();

	var modId = $( this ).attr( "data-modal-trigger" );
	$( "#" + modId ).addClass( "show" );

	if ( modId == "content-navigation" ) {
		var modProj = $( this ).attr( "data-modal-navigation" );
		$( ".content-navigation" ).removeClass("visuallyhidden");
	}

	else if ( modId == "content-text" ) {
		var modForm = $( this ).attr( "data-modal-form" );
		$( ".content-text .former." + modForm ).removeClass("visuallyhidden");
		// Make a note on the CRM
		var unitNumber = $( event.target ).data( "viewDetails" );
		console.log( unitNumber )
		__OMEGA.utils.addNoteToUser( "Omega Event Log",
			"Customer VIEWED unit " + unitNumber + " on \"Another Sky\" project webpage."
		).catch( function ( e ) {
			console.log( e.message )
		} )
	}

	else if ( modId == "content-video" ) {
		var modSrc = $( this ).attr( "data-modal-video" );
		$( ".content .video iframe" ).attr( "src", modSrc );
	}

	else if ( modId == "content-projects" ) {
		var modProj = $( this ).attr( "data-modal-project" );
		$( ".content-projects .project." + modProj ).removeClass("visuallyhidden");
	}

	// extract scroll offset from the window and stick into the page container
	var scrollOffset = $( window ).scrollTop();

	// Freeze scroll on Body
	$( 'body' ).addClass( 'modal_freeze' );
	$( '.wrapper' ).scrollTop( scrollOffset );

});


/* close with escape button */
$( window ).on( "keyup", function ( event ) {

	if ( event.keyCode != 27 )
		return;

	if ( ! $( "body" ).hasClass( "modal_freeze" ) )
		return;

	close_modal();

	// Triggering special event for pricing_close_lightbox()
	$( window ).trigger( "js_pricing_close_lightbox" );

} );

/* Click outside to close */
$(".modal").on("click", function( e ) {
	if( ! $( e.target ).closest( ".content" ).length ) {
		close_modal();
	}
});

/* Close with x button */
$(".modal .close, .modal .modal-close ").on("click", function() {
		close_modal();
});

function close_modal() {

	// extract scroll offset from the root container and stick into the window
	var scrollOffset = $( ".wrapper" ).scrollTop();

	// Un-freeze scroll on Body
	$( "body" ).removeClass( "modal_freeze" );
	$( window ).scrollTop( scrollOffset );


	$(".content.show").removeClass("show");
	$("body").removeClass("freeze");
	$( ".content .video iframe" ).attr( "src", "" );
	$( ".content-text .former").addClass("visuallyhidden");
	$( ".content-projects .project").addClass("visuallyhidden");
}








$( document ).on( "ready", function () {

	console.log( "run the iframe." );

	// $( document ).on( "click", ".container-iframe", function ( event ) {

		// $( ".container-iframe" ).addClass( "go-back" );
		// $( ".container-iframe iframe" ).focus();

	// } );

	// $( document ).on( "blur", ".container-iframe iframe", function ( event ) {

		// $( ".container-iframe" ).removeClass( "go-back" );

	// } );

} );
