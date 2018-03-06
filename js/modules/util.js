
/* -----
 * DEFINING A CUSTOM GLOBAL NAMESPACE
 ----- */
window.__LW__ = window.__LW__ || { };



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

window.addEventListener(
	"resize",
	function () {

		var animationFrameId = null;
		var timeoutId = null;

		// \/ optimization
		// leveraging both a throttle/debounce and an animation frame
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
				animationFrameId = window.requestAnimationFrame( runViewportResizeHandlers );

			}, 51 );
		};

	}(),
	true
);


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
window.__LW__.viewportScrollHandlers = [ ];

// this function allows you to register a new "scroll" event handler, or
function onViewportScroll ( fn ) {
	window.__LW__.viewportScrollHandlers.push( fn );
}

// this function invokes all the registered "scroll" event handlers
function runViewportScrollHandlers () {
	window.__LW__.viewportScrollHandlers.forEach( function ( fn ) {
		fn();
	} );
}

window.addEventListener(
	"scroll",
	function () {

		var animationFrameId = null;
		var timeoutId = null;

		// \/ optimization
		// leveraging both a throttle and an animation frame
		return function ( event ) {

			if ( ! timeoutId ) {
				timeoutId = window.setTimeout( function () {

					if ( animationFrameId ) {
						window.cancelAnimationFrame( animationFrameId );
						animationFrameId = null;
					}
					animationFrameId = window.requestAnimationFrame( runViewportScrollHandlers );
					window.clearTimeout( timeoutId );
					timeoutId = null;

				}, 51 );
			}
		};

	}(),
	true
);



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
