$(document).ready(function() {

	// Scroll based events
	function scroller( ele ) {
		var interval = window.setInterval( function() {
			if ( $("#"+ele).visible(true) ) {
				// console.log(ele+" seen");
				ga('send', 'event','Overview', ele ,'Scroll');
				$( document ).trigger( "GA::view", ele );
				clearInterval( interval );
			}
		}, 250);
	}

	scroller('1_location');
	scroller('2_party');
	scroller('3_design');
	scroller('4_children');
	scroller('5_fitness');
	scroller('6_environment');
	scroller('7_maintenance');
	// scroller('ga_footer');

	// Click based events
	$(".ga_general_button").on('click', function() {
		ga('send', 'event','Overview', $(this).text() ,'Click');
	});

	$(".ga_call_now").on('click', function() {
		ga('send', 'event','Overview', 'Instant Call-back Button' ,'Click');
	});

	$(".contact_form_overview_part_one").on('overview_contact_form_one_validated', function(){

		ga('send', 'event','Overview', 'Contact Form One Submitted' ,'Click');
	});

	$(".contact_form_overview_part_two").on('overview_contact_form_two_validated', function(){

		ga('send', 'event','Overview', 'Contact Form Two Submitted' ,'Click');
	});

	// Design Section Tabs
	$( document ).on( "current_tab" , function ( e , currentTab ) {
		ga('send', 'event','Overview', 'Arrow : '+currentTab.text() ,'Click');
	} );


});
