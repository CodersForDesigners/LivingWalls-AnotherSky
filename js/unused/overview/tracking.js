$(document).ready(function() {

	// Scroll based events
	function scroller( ele ) {
		var interval = window.setInterval( function() {
			if ( $("#"+ele).visible(true) ) {
				// console.log(ele+" seen");
				ga('send', 'event','Overview', ele ,'Scroll');
				clearInterval( interval );
			}
		}, 250);
	}

	scroller('ga_step_0');
	scroller('ga_step_1');
	scroller('ga_step_2');
	scroller('ga_step_3');
	scroller('ga_step_4');
	scroller('ga_step_5');
	scroller('ga_step_6');
	// scroller('ga_footer');

	// Click based events
	$(".ga_general_button").on('click', function() {
		ga('send', 'event','Overview', $(this).text() ,'Click');
	});

	$(".ga_call_now").on('click', function() {
		ga('send', 'event','Overview', 'Instant Call-back Button' ,'Click');
	});

	$(".contact_form_overview_part_one").on('overview_contact_form_one_validated', function(){
	    // Triggering hotjar form submission
	    hj('formSubmitSuccessful');

		ga('send', 'event','Overview', 'Contact Form One Submitted' ,'Click');
	});

	$(".contact_form_overview_part_two").on('overview_contact_form_two_validated', function(){
	    // Triggering hotjar form submission
	    hj('formSubmitSuccessful');

		ga('send', 'event','Overview', 'Contact Form Two Submitted' ,'Click');
	});

	// Design Section Tabs
	$( document ).on( "current_tab" , function ( e , currentTab ) {
		ga('send', 'event','Overview', 'Arrow : '+currentTab.text() ,'Click');
	} );


});
