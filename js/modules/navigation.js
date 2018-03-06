
$( ".js_menu_item" ).on( "click", function ( event ) {

	event.preventDefault();

	var linkTo = event.target.getAttribute( "href" );
	$( ".modal .close" ).first().trigger( "click" );

	setTimeout( function () {
		document.querySelector( linkTo ).scrollIntoView( { behavior: 'smooth' } );
	}, 400 );

} );

var currentScrollPosition = 0;

var onScrollNavigation = function () {
	var $landingSection = $( ".js_landing_section" );
	var $menuWidget = $( ".js_nav_menu" );

	return function onScrollNavigation () {

		var scrollTop = window.scrollY || document.body.scrollTop;

		/*
		 * Fix the menu toggle after a certain scroll depth
		 */
		if ( scrollTop >= $landingSection.height() ) {
			$menuWidget.addClass( "sticky" );
		} else {
			$menuWidget.removeClass( "sticky" );
		}

		/*
		 * Show / hide the menu toggle depending on the scroll direction
		 */
		// Scrolling down
		if ( scrollTop > currentScrollPosition ) {
			$menuWidget.addClass( "hide" );
		}
		// Scrolling up
		if ( scrollTop < currentScrollPosition ) {
			$menuWidget.removeClass( "hide" );
		}
		currentScrollPosition = scrollTop;

	};


}();

onViewportScroll( onScrollNavigation );
