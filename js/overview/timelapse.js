
/*
 * On page load, check the viewport dimensions and set the `src` attributes of
 * the video elements
 * Also, do the same whenever the viewport is re-sized
 */
setVideoSources();
onViewportResize( swapVideoFiles );

function swapVideoFiles () {

	var viewportSize = getViewportCategory();

	if ( window.__LW__.VIEWPORT_SIZE == viewportSize ) return;
	else window.__LW__.VIEWPORT_SIZE = viewportSize;

	setVideoSources();

};

function setVideoSources () {
	var $videos = $( ".video-timelapse" );
	if ( window.__LW__.VIEWPORT_SIZE == "small" ) {
		$videos.each( function ( _i, el ) {
			el.src = el.dataset.sSrc;
		} );
	}
	else if ( window.__LW__.VIEWPORT_SIZE == "large" ) {
		$videos.each( function ( _i, el ) {
			el.src = el.dataset.lSrc;
		} );
	}
}

/*
 * Play the timelapse videos only when the user is close by
 * "close by" means a little before and a little after the video
 * Otherwise, make sure it is paused.
 * We don't want to squeeze the smaller devices too much.
 *
 * But, before any of this, we need to establish if the device can play videos
 * inline and automatically, otherwise we don't even
 */

var $aboveTheFoldVideo = $( ".video-timelapse" ).first();

$aboveTheFoldVideo.one( "play", enableTimelapseVideos );

function enableTimelapseVideos ( event ) {

	// determine who invoked the function
	// the interval or the `play` event handler
	// console.log( "triggered by "play" event? " + !! event );
	if (
		( event && event.type == "play" ) ||
		$aboveTheFoldVideo.get( 0 ).currentTime > 0
	) {
		// $aboveTheFoldVideo.closest( ".container-video" ).find( ".timelapse-fallback-image" ).addClass( "js_fade_out" );
		$( ".container-video .timelapse-fallback-image" ).addClass( "js_fade_out" );
		// clearInterval( checkIfLandingVideoIsPlaying );
		playTimelapseVideos();
		$( window ).on( "scroll", runBeforePaint( playTimelapseVideos ) );
	}

}

function playTimelapseVideos () {

	var scrollTop = _getScrollPositionTop();
	var scrollBottom = scrollTop + window.__LW__.viewportHeight;
	var sensitivityOffset = window.__LW__.viewportHeight / 4;
	var $videos = $( ".video-timelapse" );

	$videos.each( function ( _i, el ) {
		var $el = $( el );
		if (
			( scrollBottom > $el.offset().top - sensitivityOffset ) &&
			( scrollTop < $el.offset().top + parseInt( $el.css( "height" ), 10 ) + sensitivityOffset )
		) {
			el.play();
		}
		else {
			el.pause();
		}
	} )

}
