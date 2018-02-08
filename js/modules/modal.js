/* Open Modal Window */
$("body").on("click", ".js_modal_trigger", function() {

	var modId = $( this ).attr( "data-modal-trigger" );
	$( "#" + modId ).addClass( "show" );

	if ( modId == "content-video" ) {
		var modSrc = $( this ).attr( "data-modal-video" );
		$( ".content .video iframe" ).attr( "src", modSrc );
	}

	else if ( modId == "content-projects" ) {
		var modProj = $( this ).attr( "data-modal-project" );
		$( ".content-projects .project." + modProj ).removeClass("visuallyhidden");
	}

	/* close with escape button */
	$(window).on( "keyup",function(evt) {
		if (evt.keyCode == 27) {

			close_modal();

			$(window).off('keyup');

			// Triggering special event for pricing_close_lightbox()
			$(window).trigger("js_pricing_close_lightbox");
		}
	});

	// extract scroll offset from the window and stick into the page container
	var scrollOffset = $( window ).scrollTop();

	// Freeze scroll on Body
	$( 'body' ).addClass( 'modal_freeze' );
	$( '.wrapper' ).scrollTop( scrollOffset );

});


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
