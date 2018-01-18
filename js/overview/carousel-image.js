
var reframinate = function () {

	var $carousels = $( ".js-carousel" );
	var $$strips = $carousels
		.find( ".js-strip" )
		.map( function ( _i , el ) {
			return $( el );
		} );

	return function reframinate () {

		$carousels
			.find( ".js-pictur--active" )
			.map( function ( _i , el ) {
				return $( el );
			} )
			.each( function ( _i , $el ) {
				framinate( $$strips[ _i ] , {
					scrollLeft: getPositionRelativeToParent( $el )
				} );
			} )
		;

	}();

}

$( window ).on( "resize" , debounce( reframinate , 1009 ) );


/*
 * --------
 * carousel
 * --------
 */

function carouse ( e ) {

	var $carousel = $( e.target ).closest( ".js-carousel" );
	var $controls = $carousel.find( ".js-controls" );

	var imageIndicator = $carousel.find( ".js-strip [ data-bridge ]" ).data( "bridge" );
	if ( ! imageIndicator ) {
		imageIndicator = $carousel.find( ".js-strip[ data-bridge ]" ).data( "bridge" );
	}
	var dotIndicator = $carousel.find( ".js-controls [ data-bridge ]" ).data( "bridge" );

	// get the direction the carousel has to translate towards
	// this information is acquired from either the swipe events or the `data-slide` attribute of the arrow control
	/**]opt
		use closure
	**/
	var directionTranslater = {
		swipeleft: "+", 
		swiperight: "-" 
	};
	var translationDirection = directionTranslater[ e.type ] || $( e.target ).data( "slide" );

	var $currentImage = getCurrentElement( $carousel , imageIndicator );
	var $nextImage = getNextElement( $currentImage , translationDirection );

	if ( $currentImage[0] == $nextImage[0] ) {
		return;
	}

	// detach click handlers
	// $controls.off( "click" );

	if ( dotIndicator ) {

		var $currentDot = getCurrentElement( $carousel , dotIndicator );
		var $nextDot;
		if ( /[+-]/.test( translationDirection ) ) {
			$nextDot = $controls.find( ".js-dot:nth-child(" + ( $nextImage.index() + 1 ) + ")" );
		} else {
			$nextDot = $( e.target );
		}
		$currentDot.removeClass( dotIndicator );
		$nextDot.addClass( dotIndicator );

	}

	var $strip = $carousel.find( ".js-strip" );

	framinate( $strip , {
		scrollLeft: getPositionRelativeToParent( $nextImage )
	} , "js-pictur--active caption--active" , $currentImage , $nextImage );

	// restore click handlers once the animation is done
	// $strip.one( "carousel-animation-end" , function () {
	// 	$controls.on( "click" , ".js-control" , carouse );
	// } );

}

// auto carouse
function autoCarouse ( $carousel , dotIndex ) {

	var $controls = $carousel.find( ".js-controls" );

	var imageIndicator = $carousel.find( ".js-strip [ data-bridge ]" ).data( "bridge" );
	if ( ! imageIndicator ) {
		imageIndicator = $carousel.find( ".js-strip[ data-bridge ]" ).data( "bridge" );
	}
	var dotIndicator = $carousel.find( ".js-controls [ data-bridge ]" ).data( "bridge" );

	var $currentImage = getCurrentElement( $carousel , imageIndicator );
	var $nextImage = $( $currentImage.parent().children().get( dotIndex ) );

	if ( dotIndicator ) {

		var $currentDot = getCurrentElement( $carousel , dotIndicator );
		var $nextDot = $controls.find( ".js-dot:nth-child(" + ( dotIndex + 1 ) + ")" );
		$currentDot.removeClass( dotIndicator );
		$nextDot.addClass( dotIndicator );

	}

	var $strip = $carousel.find( ".js-strip" );

	framinate( $strip , {
		scrollLeft: getPositionRelativeToParent( $nextImage )
	} , "js-pictur--active caption--active" , $currentImage , $nextImage );

}

function getCurrentElement ( $ctx , indicator ) {

	return $ctx.find( "." + indicator );

}

function getNextElement ( $currentElement , pointer ) {

	var $nextElement;
	if ( pointer == "+" ) {
		$nextElement = $currentElement.next();
		return $nextElement.length ? $nextElement : $currentElement;
	}
	if ( pointer == "-" ) {
		$nextElement = $currentElement.prev();
		return $nextElement.length ? $nextElement : $currentElement;
	}

	var index = parseInt( pointer , 10 ) - 1;
	return $( $currentElement.parent().children().get( index ) );

}

function getPositionRelativeToParentIfChildrenAreNOTInline ( $element , positioner ) {

	// `positioner` would be the class `position` that positioned the element relatively
	if ( positioner ) {
		$element.parent().addClass( positioner );
	}

	var coordinate = $element.position().left;

	if ( positioner ) {
		$element.parent().removeClass( positioner );
	}

	return coordinate;

}

function getPositionRelativeToParent ( $element ) {

	var $images = $element.parent().children();
	var offset = 0;

	for (
		var _i = 0, len = $element.index() ;
		_i < len ;
		_i += 1
	) {
		offset += $images[ _i ].offsetWidth;
	}

	return offset;

}

function framinate ( $animateElement , properties , toggler , $currentElement , $nextElement ) {

	$animateElement
		.stop()	// not required, just for robustness
		.animate( properties , {
			duration: 691,
			start: function () {
				$currentElement && $currentElement.removeClass( toggler );
			},
			complete: function () {
				$nextElement && $nextElement.addClass( toggler );
				// $animateElement.trigger( "carousel-animation-end" )
			}
		} )
	;

}

$( document ).one( "ready" , function () {

	// registering handlers
	// carousel [ on ] swipe
	$( ".js-carousel" ).hammer().on( "swipeleft swiperight" , carouse );
	// carousel [ on ] arrows and dots
	// var $carouselControls = $( ".js-controls" );
	$( ".js-controls" ).on( "click" , ".js-control" , carouse );

} );

$( window ).one( "load" , function () {

	// auto-carou-scrolling
	var $carousels = $( ".js-carousel" );
	$carousels.each( function ( i , carousel ) {
		$( carousel ).data( "seq" , i );
	} );

	var carousels = Array.prototype.map.call( $carousels , function ( carousel ) {
		return {
			$node: $( carousel ),
			seq: $( carousel ).data( "seq" ),
			position: 0,
			length: $( carousel ).find( ".js-pictur" ).length
		};
	} );

	$carousels.one( "click swipeleft swiperight" , function ( e ) {
		// console.log( "clicked" , e.target );
		var seq = $( e.target ).data( "seq" );
		if ( ! seq ) {
			seq = $( e.target ).closest( ".js-carousel" ).data( "seq" );
		}
		carousels = carousels.filter( function ( carousel , i ) {
			return carousel.seq != seq;
		} );
	} );

	var carouservalId = setInterval( function carouserval () {

		if ( ! carousels.length ) {
			clearInterval( carouservalId );
		}

		carousels.forEach( function ( carousel ) {
			if ( isInYContainedView( carousel.$node[ 0 ] ) ) {
				carousel.position = ( carousel.position + 1 ) % carousel.length;
				autoCarouse( carousel.$node , carousel.position );
			}
		} );

	} , 3501 );

} );
