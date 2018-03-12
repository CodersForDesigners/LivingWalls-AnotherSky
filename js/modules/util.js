
/* -----
 * DEFINING A CUSTOM GLOBAL NAMESPACE
 ----- */
window.__LW__ = window.__LW__ || { };


/*
 *
 */
function runOnDebounce ( eventHandlerExecutorFunction, debounceBy ) {

	debounceBy = debounceBy || 51; // 51 milli-seconds
	var animationFrameId = null;
	var timeoutId = null;

	return function ( event ) {

		if ( timeoutId ) {
			window.clearTimeout( timeoutId );
			timeoutId = null;
		}
		timeoutId = window.setTimeout( function () {

			if ( animationFrameId ) {
				window.cancelAnimationFrame( animationFrameId );
				animationFrameId = null;
			}
			animationFrameId = window.requestAnimationFrame( eventHandlerExecutorFunction );

		}, debounceBy );
	};

}

function runOnThrottle ( eventHandlerExecutorFunction, throttleBy ) {

	throttleBy = throttleBy || 51;
	var animationFrameId = null;
	var timeoutId = null;

	return function ( event ) {

		// If the event handling is pending, do not schedule another
		// i.e. do nothing
		if ( timeoutId ) {
			return;
		}

		timeoutId = window.setTimeout( function () {

			if ( animationFrameId ) {
				window.cancelAnimationFrame( animationFrameId );
				animationFrameId = null;
			}
			animationFrameId = window.requestAnimationFrame( eventHandlerExecutorFunction );
			// window.clearTimeout( timeoutId );
			timeoutId = null;

		}, throttleBy );

	};

}


/* -----
	EXECUTE FUNCTION RIGHT BEFORE PAINT
		takes a function as input
		returns another function that only executes the given function
		before the next paint
 ----- */
function runBeforePaint ( fn ) {

	var animationFrameId = null;

	return function ( event ) {

		if ( animationFrameId ) {
			window.cancelAnimationFrame( animationFrameId );
			animationFrameId = null;
		}
		animationFrameId = window.requestAnimationFrame( fn.bind( null, event ) );

	};

};



/* -----
 * VIEWPORT "RESIZE" EVENT HANDLING INFRASTRUCTURE
 ----- */
// list of "resize" event handlers
window.__LW__.viewportResizeHandlers = [ ];

// this function allows you to register a new "resize" event handler, or
function onViewportResize ( fn ) {
	window.__LW__.viewportResizeHandlers.push( fn );
}

// this function invokes all the registered "resize" event handlers
function runViewportResizeHandlers () {
	window.__LW__.viewportResizeHandlers.forEach( function ( fn ) {
		fn();
	} );
}

window.addEventListener( "resize", runOnDebounce( runViewportResizeHandlers ), true );


/*
 * Store the viewport size
 */
 function getViewportCategory () {

	var viewportSize;
	var width = _getViewportWidth();

	// if ( width >= 1380 ) viewportSize = "xlarge";
	// else if ( width >= 1040 ) viewportSize = "large";
	// else if ( width >= 640 ) viewportSize = "medium";
	if ( width >= 640 ) viewportSize = "large";
	else viewportSize = "small";

	return viewportSize;

}
window.__LW__.VIEWPORT_SIZE = getViewportCategory();
onViewportResize( getViewportCategory );



/* -----
 * VIEWPORT "SCROLL" EVENT HANDLING INFRASTRUCTURE
 ----- */
// list of "scroll" event handlers
window.__LW__.viewportThrottledScrollHandlers = [ ];
window.__LW__.viewportDebouncedScrollHandlers = [ ];

// this function allows you to register a new "scroll" event handler, or
function onViewportScrollThrottle ( fn ) {
	window.__LW__.viewportThrottledScrollHandlers.push( fn );
}
function onViewportScrollDebounce ( fn ) {
	window.__LW__.viewportDebouncedScrollHandlers.push( fn );
}

// this function invokes all the registered "scroll" event handlers that are to be throttled
function runViewportThrottledScrollHandlers () {
	window.__LW__.viewportThrottledScrollHandlers.forEach( function ( fn ) {
		fn();
	} );
}
// this function invokes all the registered "scroll" event handlers that are to be debounced
function runViewportDebouncedScrollHandlers () {
	window.__LW__.viewportDebouncedScrollHandlers.forEach( function ( fn ) {
		fn();
	} );
}

window.addEventListener( "scroll", runOnThrottle( runViewportThrottledScrollHandlers ), true );

window.addEventListener( "scroll", runOnDebounce( runViewportDebouncedScrollHandlers, 5000 ), true );



function debounce ( fn , duration ) {

	duration = duration || 501;
	var timer;

	return function ( evt ) {

		clearTimeout( timer );
		timer = setTimeout( fn.bind( this , evt ) , duration );

	}

};

function _getViewportWidth () {
	return window.innerWidth || ( document.documentElement && document.documentElement.clientWidth );
}

function _getViewportHeight () {
	return window.innerHeight || ( document.documentElement && document.documentElement.clientHeight );
}
function setViewportHeight () {
	window.__LW__.viewportHeight = _getViewportHeight();
}
onViewportResize( setViewportHeight );

function _getScrollPositionTop () {
	return window.scrollY || window.pageYOffset || ( document.documentElement || document.body.parentNode ).scrollTop;
}

function _getAbsoluteYCoordinates ( node ) {
	var nodeCoordinatesRelativeToScrollPosition = node.getBoundingClientRect();
	var top = _getScrollPositionTop() + nodeCoordinatesRelativeToScrollPosition.top;

	return {
		top: top,
		bottom: top + node.offsetHeight
	};
}

function isInYContainedView ( node ) {
	var nodeAbsoluteYCoordinates = _getAbsoluteYCoordinates( node );
	var scrollPositionTop = _getScrollPositionTop();
	var scrollPositionBottom = scrollPositionTop + _getViewportHeight();

	return (
		! ( scrollPositionTop > nodeAbsoluteYCoordinates.top )
	) && ( (
		( scrollPositionTop > nodeAbsoluteYCoordinates.top - node.offsetHeight / 4 )
	) || (
		( scrollPositionTop < nodeAbsoluteYCoordinates.top ) &&
		( scrollPositionBottom > nodeAbsoluteYCoordinates.bottom )
	) );

}

function isInYPartialView ( node ) {
	var nodeAbsoluteYCoordinates = _getAbsoluteYCoordinates( node );
	var scrollPositionTop = _getScrollPositionTop();
	var scrollPositionBottom = scrollPositionTop + _getViewportHeight();

	return (
		( nodeAbsoluteYCoordinates.top < scrollPositionBottom ) &&
		( nodeAbsoluteYCoordinates.bottom > scrollPositionTop )
	);

}
