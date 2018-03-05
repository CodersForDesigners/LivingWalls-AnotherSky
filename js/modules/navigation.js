
$( ".js_menu_item" ).on( "click", function ( event ) {

	event.preventDefault();

	var linkTo = event.target.getAttribute( "href" );
	$( ".modal .close" ).first().trigger( "click" );

	setTimeout( function () {
		document.querySelector( linkTo ).scrollIntoView( { behavior: 'smooth' } );
	}, 400 );

} );
