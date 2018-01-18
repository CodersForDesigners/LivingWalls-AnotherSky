/*
 * This file is not used anywhere.
 * #unused
 */
/* Sticky Footer being visible based on current location */
function _getScrollPositionTop () {
	return window.scrollY || window.pageYOffset || ( document.documentElement || document.body.parentNode ).scrollTop;
}

function _getAbsoluteTopCoordinate ( node ) {
	return _getScrollPositionTop() + node.getBoundingClientRect().top;
}

var breakdance = document.getElementById( "breakdance" );
// var toof = document.getElementById( "footer" );
var $toof = $( ".js_sticky_section_visibility" );

setInterval( function () {

	if ( _getAbsoluteTopCoordinate( breakdance ) < _getScrollPositionTop() ) {

		$toof.fadeIn();

	} else {

		$toof.fadeOut();

	}

} , 509 );
