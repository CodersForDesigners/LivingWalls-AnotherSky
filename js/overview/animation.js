
// /* Video Animation Playback based on current location */

// function _getScrollPositionTop () {
// 	return window.scrollY || window.pageYOffset || ( document.documentElement || document.body.parentNode ).scrollTop;
// }

// function _getAbsoluteTopCoordinate ( node ) {
// 	return _getScrollPositionTop() + node.getBoundingClientRect().top;
// }


// /* -- Playback -- */

// /* Step 1 : Commute */
// var playback_commute = document.getElementById( "js_playback_commute" );
// var commute = setInterval( function () {
// 	if ( _getAbsoluteTopCoordinate( playback_commute ) < _getScrollPositionTop() + 250 ) {
// 		$('#video_commute video').get(0).play();
// 		console.log("play");
// 		clearInterval(commute);
// 	} else {
// 		// $('#video_commute video').get(0).pause();
// 		// console.log("pause");
// 	}
// } , 509 );


// /* Step 2 : Party */
// var playback_party = document.getElementById( "js_playback_party" );
// var party = setInterval( function () {
// 	if ( _getAbsoluteTopCoordinate( playback_party ) < _getScrollPositionTop() + 250 ) {
// 		$('#video_party video').get(0).play();
// 		console.log("play");
// 		clearInterval(party);
// 	} else {
// 		// $('#video_party video').get(0).pause();
// 		// console.log("pause");
// 	}
// } , 509 );


// /* Step 3 : Design */
// var playback_design = document.getElementById( "js_playback_design" );
// var design = setInterval( function () {
// 	if ( _getAbsoluteTopCoordinate( playback_design ) < _getScrollPositionTop() + 250 ) {
// 		$('#video_design video').get(0).play();
// 		console.log("play");
// 		clearInterval(design);
// 	} else {
// 		// $('#video_design video').get(0).pause();
// 		// console.log("pause");
// 	}
// } , 509 );


// /* Step 4 : Kids */
// var playback_kids = document.getElementById( "js_playback_kids" );
// var kids = setInterval( function () {
// 	if ( _getAbsoluteTopCoordinate( playback_kids ) < _getScrollPositionTop() + 250 ) {
// 		$('#video_kids video').get(0).play();
// 		console.log("play");
// 		clearInterval(kids);
// 	} else {
// 		// $('#video_kids video').get(0).pause();
// 		// console.log("pause");
// 	}
// } , 509 );


// /* Step 5 : Fitness */
// var playback_fitness = document.getElementById( "js_playback_fitness" );
// var fitness = setInterval( function () {
// 	if ( _getAbsoluteTopCoordinate( playback_fitness ) < _getScrollPositionTop() + 250 ) {
// 		$('#video_fitness video').get(0).play();
// 		console.log("play");
// 		clearInterval(fitness);
// 	} else {
// 		// $('#video_fitness video').get(0).pause();
// 		// console.log("pause");
// 	}
// } , 509 );


// /* Step 7 : Maintenance */
// var playback_maintenance = document.getElementById( "js_playback_maintenance" );
// var maintenance = setInterval( function () {
// 	if ( _getAbsoluteTopCoordinate( playback_maintenance ) < _getScrollPositionTop() + 250 ) {
// 		$('#video_maintenance video').get(0).play();
// 		console.log("play");
// 		clearInterval(maintenance);
// 	} else {
// 		// $('#video_maintenance video').get(0).pause();
// 		// console.log("pause");
// 	}
// } , 509 );











/* New Playback Reload */
var videoList = [
	{
		node: $( "#video_commute video" ).get( 0 ),
		played: false
	},
	{
		node: $( "#video_party video" ).get( 0 ),
		played: false
	},
	{
		node: $( "#video_design video" ).get( 0 ),
		played: false
	},
	{
		node: $( "#video_kids video" ).get( 0 ),
		played: false
	},
	{
		node: $( "#video_fitness video" ).get( 0 ),
		played: false
	},
	{
		node: $( "#video_maintenance video" ).get( 0 ),
		played: false
	}
];

var videoInMotion;
var videoInView;
// var hasNotBeenPlayed = true;

// MARIO's version
setInterval( function () {

	videoList.forEach( function ( video ) {
		if ( ! isInYPartialView( video.node ) && video.node.currentTime != 0 ) {
			video.node.load();
			video.played = false;
		}
	} );

	videoList.forEach( function ( video ) {
		if ( isInYContainedView( video.node ) && ! video.played ) {
			video.node.play();
			video.played = true;
		}
	} );

} , 501 );

















/* Video Frame Re-center on window Resize*/
$( document ).ready( function() {
	// centerNow();
} );

var centerVideo = function centerVideo () {
	centerNow();
};

/* Window resize Event */
$( window ).on( "resize" , debounce( centerVideo ) );


/* Recenter Function */
function centerNow() {
	var browser_width = $( document ).width();

	if ( browser_width < 1380 ) {
		video_offset = ( ( ( 1380 - browser_width ) / 2 ) * -1 );
		$(".video-player video").css("margin-left", video_offset );
	} else {
		$(".video-player video").css("margin-left", 0 );
	}
}






/* Start : Landing Section Title Animate */

var landing_title_animate = setInterval( function() {
	if( $('.landing-content .title').visible("true") ){
		$('.landing-content .title').addClass("animate");
		clearInterval(landing_title_animate);
	}
}, 100 );

/* End : Landing Section Title Animate */


















