/* Global Vars*/
var video_width = 320;
var video_quant = 12;
var website_max_width = 1380;

var video_carousel = $("#video_carousel .inner");
var current_active_video = video_carousel.find( ".video .active" ).data( "videoIndex" );

/* -- Active Video Repositioning -- */

function reposition() {

	// console.log( "what" );

	// active_video = video_carousel.find( ".video .active" ).data( "videoIndex" );
	$( ".inner .video img" ).removeClass("active");
	$(".inner .video:nth-child("+current_active_video+") img").addClass("active");

	var browser_width = $( document ).width();

	if ( browser_width <= website_max_width ) {

		var inner_center = ( video_width * current_active_video ) - ( video_width / 2 );
		var inner_offset = ( browser_width / 2 ) - inner_center ;

		// console.log( inner_center );
		// console.log( inner_offset );
		// console.log( browser_width );

		video_carousel.css( "margin-left", inner_offset );

	} else {

		var browser_width = website_max_width;

		var inner_center = ( video_width * current_active_video ) - ( video_width / 2 );
		var inner_offset = ( browser_width / 2 ) - inner_center ;

		// console.log( inner_center );
		// console.log( inner_offset );

		video_carousel.css( "margin-left", inner_offset );

	}
	$("#video_carousel .dots .dot").removeClass("active");
	$("#video_carousel .dots .dot:nth-child("+current_active_video+")").addClass("active");

}





/* active video */

// Click on video event
$( ".video img" ).on( "click",function(){
	current_active_video = $(this).data( "videoIndex" );
	reposition();
	video_modal();
} );

// Click on dot event
$("#video_carousel .dots .dot").on("click", function() {
	current_active_video = $(this).data( "dotIndex" );
	reposition();
});

var ele = document.getElementById('video_carousel');
var hammertime = new Hammer( ele );

// swipeleft gesture is moving towards the right
hammertime.on('swipeleft', function() {
	current_active_video += 1;
	if (current_active_video <= video_quant) {
		reposition();
	}
});

// swiperight gesture is moving towards the left
hammertime.on('swiperight', function() {
	current_active_video -= 1;
	if (current_active_video >= 1) {
		reposition();
	}
});







/*  Video Modal Lightbox */
function video_modal() {

	/* Open Light-Box */

		/*$(".wrapper").addClass('blur');
		$("#video_lightbox").removeClass('visuallyhidden');
		$(window).on('keyup',function(evt) {
	    if (evt.keyCode == 27) {
	       close_video_lightbox();
	    }
		});*/
}

/* Close Light-Box */
/*$("#video_lightbox .close, #video_lightbox .lightbox-overlay").on('click', function(){
	close_video_lightbox();
});*/

function close_video_lightbox() {
	/*$(".wrapper").removeClass('blur');
	$("#video_lightbox").addClass('visuallyhidden');
	$(window).off('keyup');*/
}





$( document ).ready( function() {
	reposition();
} );

var realignCarousel = function realignCarousel () {

	reposition();

};

$( window ).on( "resize" , debounce( realignCarousel ) );


