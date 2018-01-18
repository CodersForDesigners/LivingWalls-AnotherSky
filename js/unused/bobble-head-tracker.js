
var headsImage = {
	width: 1380,
	height: 802
};

var points = [
	{ x: 376 , y: 537 }
];

var $bobbleHeads = $( ".bobble-head" );

$( document ).one( "ready" , function () {
	// trackPoints();
	// $( window ).on( "resize" , debounce( trackPoints ) );
} );

function trackPoints () {
	var viewportWidth = _getViewportWidth();
	var viewportHeight = _getViewportHeight();

	// get largest dimension increase
	var xScale = viewportWidth / headsImage.width;
	var yScale = viewportHeight / headsImage.height;

	var scale;
	var yOffset = 0;
	var xOffset = 0;

	if (xScale > yScale) {
		// The image fits perfectly in x axis, stretched in y
		scale = xScale;
		yOffset = (viewportHeight - (headsImage.height * scale)) / 2;
	} else {
		// The image fits perfectly in y axis, stretched in x
		scale = yScale;
		xOffset = (viewportWidth - (headsImage.width * scale)) / 2;
	}

	$bobbleHeads.each( function ( _i , node ) {
		$( node ).css( {
			top: points[ _i ].y * scale + yOffset,
			left: points[ _i ].x * scale + xOffset
		} );
	} );

}
