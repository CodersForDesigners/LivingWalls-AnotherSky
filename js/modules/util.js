
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
