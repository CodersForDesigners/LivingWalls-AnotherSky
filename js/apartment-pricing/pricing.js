
/*

This file deals with interactions and UI flows on the apartment pricing page.

This file has code that can be largely broken down into the following types:
	- global variables
	- event registrations
	- functions
		- event handlers
		- helpers
	- procedural section
		this is the code that runs when the page loads regardless of what happens





First, let's go over all the UI components that you'll find on the page,

Apartment size cards
	list of types of apartments categorized by their size
	choosing a type narrows the scope of apartment that can be viewed

Price range selector
	a widget that allows a user to select a price range

"Find Apartments" button
	displays an apartment detail-list based on the range selection

Apartment detail-list
	a list of apartments along with some details such as floor and price

Wishlist
	list of apartments that the user has explicitly favorited/hearted
	it is a horizontally flowing list of blue balloons having brief details on each apartment
	clicking on a balloon opens up more details on that apartment in a modal window
	clicking on the "x" symbol at the end of a balloon removes that apartment from the wishlist

Apartment details modal window
	details about an apartment including a cost-breakdown

EMI calculator
	present in the apartment details modal window
	allows the user to calculate EMI (duh)

Form
	found at the bottom of the page when the "Find Apartments" button has been clicked atleast once
	users can send information about themselves in exchange for PDFs of the apartments in their wishlist





# functions
## helper
F1.
associative_array_cost_asc_sort
	callback function for the array sort method
	sorts an apartment array by ascending order of price

F2.
associative_array_cost_desc_sort
	callback function for the array sort method
	sorts an apartment array by descending order of price

F3.
associative_array_floor_asc_sort
	callback function for the array sort method
	sorts an apartment array by ascending order of floor

F4.
associative_array_floor_desc_sort
	callback function for the array sort method
	sorts an apartment array by descending order of floor

F5.
associative_array_cost_range_filter
	callback function for the array filter method
	filters apartments within pre-set price range

F6.
fav_array_delete_filter
	callback function for the array filter method
	filters out apartments that match an apartment number

F7.
commafy
	formats numbers with commas in accordance with the Indian number system

F8.
uncommafy
	strips the commas from a number

F9.
print_list
	prints out the detail-list of apartments within an apartment size
		taking into account those that are favorited

F10.
empty_list
	clears out the markup for the apartment list

F11.
inactive_list
	called when another apartment size card is selected
	resets the UI of the apartment detail-list and then greys out the existing one

F12.
get_apt_from_concerned_array
	finds and returns an apartment object given an apartment number from the concerned array

F13.
get_apt_from_fav_array
	finds and returns an apartment object given an apartment number from the favorite array

F14.
get_apartment_list
	Gets the list of apartments based on the "Apartment type" and "Price range" selected

F15.
get_detailed_description
	shows a modal with all the information relating to an apartment

F16.
get_parking_value
	returns the cost of a car parking type

F17.
fav_array_car_parking_dropdown_populator
	saves the car parking option for a favorited apartment

F18.
pricing_close_lightbox
	resets things on the modal
	closes the modal

F19.
slider_reset
	set the price range to reflect the selected apartment size

F20.
fav_list_populator
	adds an apartment balloon to the wishlist

F21.
$.fn.filterByData
	extension of the jQuery object
	filters a jQuery selection by a data attribute

F22.
formatNumberToCurrency

F23.
removeNonDigitCharacters
	given a string, removes characters that aren't digits or dots ( decimal points )

F24.
emi_calculator_func
	calculates and sets the values relating to EMI





# event handlers
E1.
on selecting a apartment size
	=>
	scroll down a bit
	reset the boundaries of price range selector
	grey out the apartment detail-list if there is one

E2.
on hitting the price sort button
	=>
	sort apartment detail-list by price
	subsequent hits on the button
		sorts by a different order

E3.
on hitting the floor sort button
	=>
	sort apartment detail-list by floor
	subsequent hits on the button
		sorts by a different order

E4.
on clicking "Find Apartments"
	=>
	display the detail-list of apartments based on the price range selected

E5.
E6.
on clicking "view details" against an apartment on the detail-list, or
on clicking a bubble on the wishlist
	=>
	show more details on that apartment in modal window

E7.
on selecting a car parking type in the apartment details modal
	=>
	re-calculate the values

E8.
E9.
on clicking outside the modal or on the close button, or
on hitting the escape key
	=>
	close the modal

E10.
on interacting with the price-range slider
	=>
	grey out the apartment detail-list if it's there

E11.
on "hearting" an apartment on the apartment detail-list
	=>
	save that apartment and add it to the wishlist

E12.
on "hearting" an apartment on its modal window
	=>
	save that apartment and add it to the wishlist
	also save the cark parking option

E13.
on clicking the "x" symbol on a balloon on the wishlist
	=>
	remove the apartment from the favorite list
	remove the balloon from the wishlist

E14.
on clicking "Calculate Your EMI" on the apartment details modal window
	=>
	hide the cost breakup
	show the EMI calculator

E15.
on inputting values in field in the EMI calculator
	=>
	re-calculate the values

E16.
while inputting values in form fields that have a class of `js_format_currency`
	=>
	show a formatted pre-view of the value next to the input field

E17.
on submitting the form
	=>
	validate the data
	if all good,
		send data to two different server scripts each of which will trigger an e-mail
	if not all good,
		give feedback





# procedural section
P1.
pull apartment data from the server

P2.
setup the price range slider

*/

$(document).ready( function() {

	/* -----
		{ V1 }
	 ----- */

	var json_string, json_array, json_string_2, json_array_2;
	var four_bhk_array, three_bhk_plus_array, three_bhk_array;
	var four_bhk_num = 16, three_bhk_plus_num = 50, three_bhk_num = 44;
	var cost_sort_order, floor_sort_order; // 0 - ascending, 1 - descending
	var current_apt_type, concerned_array, fav_array = [];
	var lower_limit_range_filter = 20000000, higher_limit_range_filter = 25000000; // 3BHKP default
	var slider_min_max_range, selected_apt_string = "";
	var or_section_obj = null;

	/* -----
		{ P1 }
	 ----- */
	$.ajax({
		    url: "server/availability.php",
		    dataType: "JSON",
		    success: function(json_obj) {
		    		var json_string = JSON.stringify(json_obj);

		    		// Used for debugging
		        // $("#dump").text(json_string);

		    		// Setting global json array
		        json_array = $.parseJSON(json_string);

		        // Extracting relevant arrays from master array
		        four_bhk_array = json_array['4BHK'];
		        three_bhk_plus_array = json_array['3BHKP'];
		        three_bhk_array = json_array['3BHK'];

		        // Setting default sorting order states
		        cost_sort_order = 0;
		        floor_sort_order = 1;

		        // Doing an ascending order sort by cost by default on all arrays
		        four_bhk_array.sort( associative_array_cost_asc_sort);
		        three_bhk_plus_array.sort( associative_array_cost_asc_sort);
		        three_bhk_array.sort( associative_array_cost_asc_sort);

		        // Setting default apartment type and printing the list
		        current_apt_type = '3BHKP';
		        // the array of apartments which is currently being viewed, i.e. 3BHK, 4BHK, etc
		        concerned_array = three_bhk_plus_array;
		        // $("#js_apartment_count").text(concerned_array.length);
		        // $("#js_apartment_type").text('3BHK+');
		        // print_list();
		        // $(".one-more-wrapper").removeClass("visuallyhidden").removeClass("inactive");

		        /*
		         * Default behaviour
		         */
		        // Populate the apartment list
		        get_apartment_list()

        }
	});

	/* -----
		{ F1 }
	 ----- */
	function associative_array_cost_asc_sort( x , y ) {
		return x.apt_price < y.apt_price ? -1 : 1;
	};

	/* -----
		{ F2 }
	 ----- */
	function associative_array_cost_desc_sort( x , y ) {
		return x.apt_price > y.apt_price ? -1 : 1;
	};

	/* -----
		{ F3 }
	 ----- */
	function associative_array_floor_asc_sort( x , y ) {
		return parseInt(x.apt_floor) < parseInt(y.apt_floor) ? -1 : 1;
	};

	/* -----
		{ F4 }
	 ----- */
	function associative_array_floor_desc_sort( x , y ) {
		return parseInt(x.apt_floor) > parseInt(y.apt_floor) ? -1 : 1;
	};

	/* -----
		{ F5 }
	 ----- */
	function associative_array_cost_range_filter ( x ) {
    return ( (x.apt_price >= lower_limit_range_filter) && (x.apt_price < higher_limit_range_filter) );
	}

	/* -----
		{ F6 }
	 ----- */
	function fav_array_delete_filter ( x ) {
		return ( x.apt_number != this );
	}

	/* -----
		{ F7 }
	 ----- */
	function commafy(add_to_str) {
		return add_to_str.toString().replace(/(\d)(?=(\d\d)+\d$)/g, "$1,");
	}

	/* -----
		{ F8 }
	 ----- */
	function uncommafy( string ) {

		return (
			string.replace( /\D/g, "" )
		);

	}

	/* -----
		{ F9 }
	 ----- */
	function print_list() {

	    	for (var i=0; i < concerned_array.length; i++) {
	    		// Changing '0' floor to 'G' floor
	    		var temp_floor = concerned_array[i]['apt_floor'];
	    		if ( concerned_array[i]['apt_floor'] == 0 ) {
	    			temp_floor = 'G';
	    		}
	    		var temp_apt_number = concerned_array[i]['apt_number'];

	    		if ( concerned_array[i]['apt_blocking'] == '1') {
					$("#listing").append( "<li class='item block clearfix'><span class='i-number'>" + temp_apt_number + "</span>" + "<span class='i-floor'>" + temp_floor + " FLOOR</span>" + "<span class='i-area'>" + concerned_array[i]['apt_area'] + " SFT</span>" + "<span class='i-price'>₹ " + commafy(concerned_array[i]['apt_price']) + "</span>" + "<span class='fl-right'><span class='inline-middle button outline js_view_details js_modal_trigger js_user_required' data-modal-trigger='content-text' data-view-details='"+temp_apt_number+"'>View Details</span></span></li>");
	    		} else {
					$("#listing").append( "<li class='item block clearfix'><span class='i-number'>" + temp_apt_number + "</span>" + "<span class='i-floor'>" + temp_floor + " FLOOR</span>" + "<span class='i-area'>" + concerned_array[i]['apt_area'] + " SFT</span>" + "<span class='i-price'>₹ " + commafy(concerned_array[i]['apt_price']) + "</span>" + "<span class='fl-right'><span class='inline-middle button blue-outline js_view_details js_modal_trigger js_user_required' data-modal-trigger='content-text' data-view-details='"+temp_apt_number+"'>View Details</span></span></li>");
				}
	    	} // end of for loop

    		// Deactivating items in the wishlist
    		// the apartments that have already been favorited;
    		// mark them as favorited,
    		// and prevent them from being re-favorited
	    	if ( fav_array.length ) {
	    		for (var j=0; j < fav_array.length; j++) {
	    			$("#listing .item img")
	    				.filterByData('viewDetails', fav_array[j]['apt_number'])
	    				.attr('src', 'media/images/pricing/heart-on.svg?v=2.1')
	    				.addClass('no-pointer');
	    		}
	    	}

	}

	/* -----
		{ F10 }
	 ----- */
	function empty_list(){
		$("#listing").empty();
	}

	/* -----
		{ F11 }
	 ----- */
	// All actions to perform when a change is made in the selection
	// i.e. when another of the big block/card thingies is clicked, we grey out the list below
	function inactive_list() {
		// Sorting buttons reset
		$(".apt-sort span").removeClass("grey-outline");
		$(".apt-sort span").addClass("grey-outline");
		$("#price_sort").text("Price ↑↓");
		$("#floor_sort").text("Floor ↑↓");

		// Making one-more-wrapper inactive
		$(".one-more-wrapper").addClass("inactive");
	}

	/* -----
		{ F12 }
	 ----- */
	function get_apt_from_concerned_array( apt_number ) {
		var temp_apt;
    for (var i = 0; i < concerned_array.length; i++) {
    	if (apt_number == concerned_array[i]['apt_number']) {
    		temp_apt = concerned_array[i];
    		break;
    	}
    }
    return temp_apt;
	}

	/* -----
		{ F13 }
	 ----- */
	function get_apt_from_fav_array( apt_number ) {
		var temp_apt;
    for (var i = 0; i < fav_array.length; i++) {
    	if (apt_number == fav_array[i]['apt_number']) {
    		temp_apt = fav_array[i];
    		break;
    	}
    }
    return temp_apt;
	}

	/* -----
		{ E1 }
	 ----- */
	/* Apartment Selection Events */
	// i,e, the main three big blocks/cards
	$(".js_apt_type_selector").on('click', function() {

		//scroll to budget
		// $('.bud_trigger').on( "click" , function() {} );
		// $('.bud_trigger').trigger("click");


		// Setting class on type selector for mobile and desktop
		$(".js_apt_type_selector_main .js_apt_type_selector").removeClass("selected");
		var sel_type_date_attr = $(this).data('aptType');
		$(".js_apt_type_selector_main ."+sel_type_date_attr).addClass("selected");

		inactive_list();

		// Clearing listing section
		// empty_list();
		switch (sel_type_date_attr) {
			case '3BHK':
									concerned_array = three_bhk_array;
									current_apt_type = '3BHK';
									slider_min_max_range = [ 1.9 , 2.2 ];
									break;
			case '3BHKP':
									concerned_array = three_bhk_plus_array;
									current_apt_type = '3BHKP';
									slider_min_max_range = [ 2.0 , 2.5 ];
									break;
			case '4BHK':
									concerned_array = four_bhk_array;
									current_apt_type = '4BHK';
									slider_min_max_range = [ 2.5 , 2.9 ];
									break;
		}
		slider_reset();
		// print_list();
		$( "#js_find_apartments" ).trigger( "click" );
	});
	setTimeout( function () {
		$(".js_apt_type_selector:first").trigger('click');
	}, 1000 );

	/* -----
		{ E2 }
	 ----- */
	$("#price_sort").on('click', function() {
		empty_list();
		$(".apt-sort span").removeClass("grey-outline");
		$("#floor_sort").addClass("grey-outline").text("Floor ↑↓");
		if (cost_sort_order == 0) {
			// do desc sort
			cost_sort_order = 1;
			concerned_array.sort(associative_array_cost_desc_sort);
			$(this).text("Price ↓");
		} else {
			cost_sort_order = 0;
			concerned_array.sort(associative_array_cost_asc_sort);
			$(this).text("Price ↑");
		}
		print_list();
	});

	/* -----
		{ E3 }
	 ----- */
	$("#floor_sort").on('click', function() {
		empty_list();
		$(".apt-sort span").removeClass("grey-outline");
		$("#price_sort").addClass("grey-outline").text("Price ↑↓");
		if (floor_sort_order == 0) {
			// do desc sort
			floor_sort_order = 1;
			concerned_array.sort(associative_array_floor_desc_sort);
			$(this).text("Floor ↓");
		} else {
			floor_sort_order = 0;
			concerned_array.sort(associative_array_floor_asc_sort);
			$(this).text("Floor ↑");
		}
		print_list();
	});


	/* -----
		{ F14 }
	 ----- */
	function get_apartment_list () {
		// The concerned array is always re-populated from the base arrays. It hence is dependent on the current apartment type
		empty_list();

		// Removing visuallyhidden on '.one-more-wrapper'
		$(".one-more-wrapper").removeClass("visuallyhidden").removeClass("inactive");

		switch (current_apt_type) {
			case '3BHK': {
				concerned_array = three_bhk_array;
				number_of_apts_sold = three_bhk_num - concerned_array.length;
				break;
			}
			case '3BHKP': {
				concerned_array = three_bhk_plus_array;
				number_of_apts_sold = three_bhk_plus_num - concerned_array.length;
				break;
			}
			case '4BHK': {
				concerned_array = four_bhk_array;
				number_of_apts_sold = four_bhk_num - concerned_array.length;
				break;
			}
		}
		// Don't filter out these units anymore. The price range filter widget has been removed.
		// concerned_array = concerned_array.filter(associative_array_cost_range_filter);
		var temp_type = current_apt_type;
		if (temp_type == "3BHKP") {
			temp_type = "3BHK+";
		}
		$("#js_apartment_sold_count").text( number_of_apts_sold );
		$("#js_apartment_count").text(concerned_array.length);
		$("#js_apartment_type").text(temp_type);
		print_list();

		// Moving the or separator section to after the form - just for the first time
		if ( ! or_section_obj ) {
			or_section_obj = $( "#call_section_before" ).detach();
			or_section_obj.appendTo( "#call_section_after" );
			$("#js_back_to_top").removeClass("visuallyhidden");

			// if back_to_top is fixed or absolute
			setInterval ( function() {
				if( $('.copyright small').visible("true") || $('.back_to_fade').visible("true") ) {
					$("#js_back_to_top").fadeOut();
				} else {
					$("#js_back_to_top").fadeIn();
				}
			} , 100 );

		}
	}


	/* -----
		{ E4 }
	 ----- */
	// Sorting the array by range
	$("#js_find_apartments").on('click', get_apartment_list );

	/* -----
		{ E5 }
	 ----- */
	/* Get detailed description modal window */

	// From listing
	$("#listing").on('click', '.js_view_details', function() {
		var apt_number = $(this).data('viewDetails');
		var temp_apt = get_apt_from_concerned_array(apt_number);
		var temp_type = current_apt_type;
		if (temp_type == "3BHKP") {
			temp_type = "3BHK+";
		}
		get_detailed_description(temp_apt, temp_type);
	});

	/* -----
		{ E6 }
	 ----- */

	// From wishlist
	$("#js_wishlist").on('click', '.js_view_details', function() {
		get_detailed_description( get_apt_from_fav_array( $(this).data('viewDetails') ) , $(this).data('aptSize') );
	});

	/* -----
		{ F15 }
	 ----- */
	// Details Fetch from Server
	// populate modal with apartment details from the concerned array as well as more info from the server (images and such)
	function get_detailed_description( temp_apt, temp_apt_type ) {
			// EMI section reset
			$(".emi-wrapper").hide();
			$(".emi-unwrapper").show();
			$(".js_calculate_emi").text("Calculate Your EMI");

			// Apartment Floor number to insert with the right format
			var temp_floor_insert;
			if ( temp_apt['apt_floor'] == '0') {
				temp_floor_insert = 'Ground';
			} else if ( temp_apt['apt_floor'] == '1') {
				temp_floor_insert = '1st';
			} else if ( temp_apt['apt_floor'] == '2') {
				temp_floor_insert = '2nd';
			} else if ( temp_apt['apt_floor'] == '3') {
				temp_floor_insert = '3rd';
			} else {
				temp_floor_insert = temp_apt['apt_floor']+'th';
			}

			var temp_apt_number = temp_apt['apt_number'];
			// Modal header text plugins
			$("#modal_header_apt_number").text(temp_apt_number);
			$("#modal_header_apt_size").text(temp_apt_type);
			$("#modal_header_apt_floor").text(temp_floor_insert);
			$("#modal_header_apt_area").text(temp_apt['apt_area']+" sft");
			$("#modal_header_apt_block").text(temp_apt_number.substr(0, 1));

			$(".modal .unit-plan img").attr("src","media/images/pricing/unit-plans/type_"+temp_apt['apt_type']+".jpg?v=2.1");

			// Setting default car parking value
			var car_parking_val = 350000;

			// Checking for whether the apartment is in fav_array - set classes accordingly
			var temp_fav_apt = get_apt_from_fav_array(temp_apt_number);
			if ( temp_fav_apt != undefined ) {
				$(".modal .addwish").addClass('blue').removeClass('grey').addClass('no-pointer');
				$("#addwish_button_text").text("Added");

				// Setting car parking dropdown selected
				$("#car_parking_selector option:nth-child("+temp_fav_apt['parking_dropdown']+")").attr("selected","selected");
				// switch ( temp_fav_apt['parking_dropdown'] ) {
				// 	case 1 : car_parking_val = 350000; break;
				// 	case 2 : car_parking_val = 250000; break;
				// 	case 3 : car_parking_val = 600000; break;
				// }
				car_parking_val = get_parking_value ( temp_fav_apt['parking_dropdown'] );
			}

			$.ajax({
							type: "POST",
							data: {
											selected_apt_floor: temp_apt['apt_floor'],
											area_sq_ft: temp_apt['apt_area'],
											car_parking: car_parking_val,
											apt_type: temp_apt['apt_type'],
										},
					    url: "server/details.php",
					    dataType: "JSON",
					    success: function(json_obj_2) {
					    		var json_string_2 = JSON.stringify(json_obj_2);

				    			// Used for debugging
					        // $("#dump").text(json_string_2);
					        // document.getElementById("myDialog").showModal();

					        // parsing the json string for the corresponding array
					        var json_array_2 = $.parseJSON(json_string_2);

					        // plugging details into the section
					        for ( index in json_array_2 ) {
					        	$(index).html(json_array_2[index]);
					        }

						} // success function
					});

			// Adding data to parking drop down
			$("#car_parking_selector").attr("data-apt-area", temp_apt['apt_area']).attr("data-apt-floor", temp_apt['apt_floor']).attr("data-apt-number", temp_apt_number);

			// Adding data to modal window add to wishlist button
			$(".modal .addwish").attr("data-view-details", temp_apt_number);

			// Adding data to calculate emi button
			$(".js_calculate_emi").attr("data-price-int", temp_apt['apt_price']);

			// Appending selected apt string
			selected_apt_string =  selected_apt_string + "," + temp_apt_number;
	}

/* -----
	{ F16 }
 ----- */
function get_parking_value ( input ) {
	switch ( input ) {
		case "1" : return 350000;
		case "2" : return 250000;
		case "3" : return 600000;
		case "4" : return 700000;
		case "5" : return 600000;
		case "6" : return 500000;
	}
}

/* -----
	{ E7 }
 ----- */
// Parking change special case
$("#car_parking_selector").on("change", function() {
	// var car_parking_selected_value = $("#car_parking_selector").find(":selected").val();
	var car_parking_selected_value = get_parking_value($("#car_parking_selector").find(":selected").val());
	var temp_apt_number = $(this).attr("data-apt-number");

	$.ajax({
					type: "POST",
					data: {
									area_sq_ft: $(this).attr("data-apt-area"),
									selected_apt_floor: $(this).attr("data-apt-floor"),
									// car_parking: car_parking_selected_value,
									car_parking: car_parking_selected_value,
									apt_type: 1, // passing random number to avoid -1 condition
								},
			    url: "server/details.php",
			    dataType: "JSON",
			    success: function(json_obj_2) {
			    		var json_string_2 = JSON.stringify(json_obj_2);

		    			// Used for debugging
			        // $("#dump").text(json_string_2);
			        // document.getElementById("myDialog").showModal();

			        // parsing the json string for the corresponding array
			        var json_array_2 = $.parseJSON(json_string_2);

			        // plugging details into the section
			        for ( index in json_array_2 ) {
			        	$(index).html(json_array_2[index]);
			        }

				} // success function
			});

 	// If apartment is present in the fav_array, modify the parking option suitably
 	fav_array_car_parking_dropdown_populator( $("#car_parking_selector").find(":selected").val() , temp_apt_number );

});

/* -----
	{ F17 }
 ----- */
// when an apartment is favorited, remember the parking option chosen and select that by default the next time the modal for the apartment is opened
function fav_array_car_parking_dropdown_populator( car_parking_selected_value,  temp_apt_number ) {
	if ( fav_array.length ) {
		for (var i = 0; i < fav_array.length; i++) {
			if ( temp_apt_number == fav_array[i]['apt_number']) {
				fav_array[i]['parking_dropdown'] = car_parking_selected_value;
				// switch (car_parking_selected_value) {
				// 	case "350000" : fav_array[i]['parking_dropdown'] = 1; break;
				// 	case "250000" : fav_array[i]['parking_dropdown'] = 2; break;
				// 	case "600000" : fav_array[i]['parking_dropdown'] = 3; break;
				// }
				break;
			}
		}
	}
}

/* -----
	{ E8 }
 ----- */
// Closing the modal window via clicking on cross
$(".modal-close, .modal .close").on("click", function() {
	pricing_close_lightbox();
});

/* -----
	{ E9 }
 ----- */
// Closing modal by hitting 'esc'
$(window).on("js_pricing_close_lightbox", function() {
	pricing_close_lightbox();
});

/* -----
	{ F18 }
 ----- */
function pricing_close_lightbox() {
	// Clearing add to wishlist button classes
	$(".modal .addwish").addClass('grey').removeClass('blue').removeClass('no-pointer');
	$("#addwish_button_text").text(" Wishlist");

	// Resetting the parking dropdown pre-selected option
	$("#car_parking_selector option:first-child").attr("selected","selected");
}


/* -----
	{ P2 }
 ----- */
// Start slider
var range = $("#range_slider");
range.ionRangeSlider({
    type: "double",
    min: 1.9,
    max: 2.9,
    step: 0.1,
    min_interval: 0.1,
    from: 2.0, // 3BHKP default
    from_min: 2.0,
    from_max: 2.5,
    to: 2.5,
    to_min: 2.0,
    to_max: 2.5,
    prefix: '₹ ',
    postfix: ' cr',
    grid: true,
    grid_num: 10
});

/* -----
	{ E10 }
 ----- */
range.on("change", function () {
		// Empty listing
		// empty_list();

		inactive_list();

    var $this = $(this),
        value = $this.prop("value").split(";");
    var amt = 10000000;
    lower_limit_range_filter = amt * value[0];
    higher_limit_range_filter = amt * value[1];
});

var slider = range.data("ionRangeSlider");

/* -----
	{ F19 }
 ----- */
function slider_reset() {
	slider.update({
	    from: slider_min_max_range[0],
	    to: slider_min_max_range[1],
	    from_min: slider_min_max_range[0],
      from_max: slider_min_max_range[1],
	    to_min: slider_min_max_range[0],
      to_max: slider_min_max_range[1],
	});
}

/* Fav List Processing */

/* -----
	{ E11 }
 ----- */
// From listing
$("#listing").on("click", ".js_add_to_fav", function() {
	// Changing src of image to make it cool like that
	$(this).attr('src', 'media/images/pricing/heart-on.svg?v=2.1').addClass('no-pointer');
	var apt_number = $(this).data('viewDetails');
	fav_list_populator(apt_number);
	$( document ).trigger( "wishlist::change" );
});

/* -----
	{ E12 }
 ----- */
// From modal button
$(".modal .addwish").on("click", function() {
	// Changing src of image to make it cool like that
	$(this).addClass('blue').removeClass('grey').addClass('no-pointer');
	$("#addwish_button_text").text(" Added");
	var apt_number = $(this).attr('data-view-details');
	$("#listing .item img").filterByData('viewDetails', apt_number).attr('src', 'media/images/pricing/heart-on.svg?v=2.1').addClass('no-pointer');
	fav_list_populator(apt_number);
	$( document ).trigger( "wishlist::change" );

	// Updating parking dropdown
	var car_parking_selected_value = $("#car_parking_selector").find(":selected").val();
	fav_array_car_parking_dropdown_populator( car_parking_selected_value, apt_number );
});

/* -----
	{ F20 }
 ----- */
// the balloons under the "My Wishlist" section
function fav_list_populator( apt_number ) {
	var temp_apt = get_apt_from_concerned_array(apt_number);

	var temp_type = current_apt_type;
	if (temp_type == "3BHKP") {
		temp_type = "3BHK+";
	}

	// Reduced price text
	var temp_price_num = temp_apt['apt_price'];
	temp_price_num = parseInt ( temp_price_num / 100000 );
	var temp_price = temp_price_num.toString();
	temp_price = temp_price.substr(0, 1) + '.' + temp_price.substr(1);

	$(".apt-wishlist .wishlist").append("<li class='wish'><span class='view inline-middle js_view_details js_modal_trigger' data-modal-trigger='content-text' data-view-details='"+apt_number+"' data-apt-size='"+temp_type+"'><img class='inline-middle' src='media/images/pricing/heart-small.svg?v=2.1'><span class='w-number inline-middle'>"+apt_number+"</span><span class='inline-middle'><span class='w-type block'>"+temp_type+"</span><span class='w-price block'>₹ "+temp_price+"cr</span></span></span><span class='remove inline-middle'>&times;</span></li>");

	// setting default parking type to 350000 which is type 1 in the backend
	temp_apt['parking_dropdown'] = 1;
	fav_array.push(temp_apt);

	// return fav_array;
}

/* -----
	{ E13 }
 ----- */
/* Remove from Fav list */
$("#js_wishlist").on("click", ".wish .remove", function() {
	var temp_apt_number = $(this).closest(".wish").children(".js_view_details").data('viewDetails');
	$("#listing .item .no-pointer").filterByData('viewDetails', temp_apt_number).attr('src', 'media/images/pricing/heart.svg?v=2.1').removeClass('no-pointer');
	$(this).closest(".wish").remove();

	// Delete from fav_array
	fav_array = fav_array.filter( fav_array_delete_filter , temp_apt_number );
	$( document ).trigger( "wishlist::change" );
});

/* -----
	{ F21 }
 ----- */
$.fn.filterByData = function(prop, val) {
    return this.filter(
        function() { return $(this).data(prop)==val; }
    );
}

/* -----
	{ F22 }
 ----- */
	function formatNumberToCurrency ( number ) {

		// partition number to an integer part and a fractional
		// more parts may be formed, but we're only interested in the first two
		var partitionedNumber = removeNonDigitCharacters( number )
			.toString()
			.split( /[^[+-]?\d\.]/ )[ 0 ]
			.split( /\./ )
		;

		// extract integer part if it exists and "trim" leading zeroes ( that is ↵
		// what `parseInt` is for )
		// else set it to an empty string
		var integerPart = parseInt( partitionedNumber[ 0 ] ) || "";
		// if the second partition exists, set the decimal separator to a `.`
		// else set it to an empty string
		var decimalSeparator = partitionedNumber[ 1 ] != void 0 ? "." : "";
		// extract fractional part if it exists
		// else set it to an empty string
		var fractionalPart = partitionedNumber[ 1 ] || "";
		// reduce the fractional part to two places ↵
			// anyways, it kind of makes sense because there are only a 100 paisas
		fractionalPart = fractionalPart.slice( 0, 2 );

		// if integer the integer part is not an empty string, format it ↵
		// according to the Indian currency format
		if ( integerPart ) {
			integerPart = integerPart
				.toString()
				.replace( /(\d)(?=(\d\d)+\d$)/g , "$1," );
		}

		// merge and return the complete formatted number
		return ( integerPart + decimalSeparator + fractionalPart );

	}

/* -----
	{ F23 }
 ----- */
	// given a string, removes characters that aren't digits or dots (decimal points)
	function removeNonDigitCharacters ( currency ) {

		if ( ! currency ) {
			return "";
		}

		return (
			currency.replace( /[^.\d]/g, "" )
		);

	};

/* -----
	{ E14 }
 ----- */
	/* EMI section toggle */
	$(".js_calculate_emi").on("click", function(){
		$('.emi-wrapper').slideToggle();
		$('.emi-unwrapper').slideToggle();

		/* toggle text */
		var text1 = "Calculate Your EMI";
		var text2 = "Show Cost Breakup";

		if ( $( this ).text() == text1 ) {
			$( this ).text( text2 );
		} else {
			$( this ).text( text1 );
		}

		var dp_placeholder = parseInt($(this).data('priceInt'), 10) * 0.2;
		$("#down_payment").val(commafy(Math.round(dp_placeholder)));
		$("#tenure").val(240);
		$("#interest_pa").val(9.7);
		emi_calculator_func( dp_placeholder, 240, 9.7);
	});

/* -----
	{ E15 }
 ----- */
	/* EMI calculator */
	$("#down_payment , #interest_pa , #tenure").on("input", function ( event ) {

		console.log( "on input" );

		var dp_obj = $("#down_payment");

		// Fetching New down payment Value
		var dp_parameter = uncommafy(dp_obj.val());

		var tenure_parameter = $("#tenure").val();
		var interest_pa_parameter = $("#interest_pa").val();

		emi_calculator_func( dp_parameter, tenure_parameter, interest_pa_parameter);
	});


/* -----
	{ E16 }
 ----- */
	// display a live-preview of the value of the input field formatted in a certain way
	// in this case, formatted as Indian currency
	$( ".js_format_currency" )
		.on( "focus", function ( event ) {
			event.target.value = removeNonDigitCharacters( event.target.value );
			$( event.target ).nextAll( ".js_view_formatted" ).first()
				.text( formatNumberToCurrency( event.target.value ) );
		} )
		.on( "input", function ( event ) {
			$( event.target ).nextAll( ".js_view_formatted" ).first()
				.text( formatNumberToCurrency( event.target.value ) );
			$( event.target ).val(
				removeNonDigitCharacters(
					formatNumberToCurrency( event.target.value )
				)
			);
		} )
		.on( "blur", function ( event ) {
			event.target.value = formatNumberToCurrency( event.target.value );
		} )

/* -----
	{ F24 }
 ----- */
	function emi_calculator_func( dp, tenure, interest_pa) {
		var your_price = parseInt($(".js_calculate_emi").data('priceInt'), 10);
		var loan_amount = your_price - dp;
		var interest_pm = interest_pa / 1200;
		var your_emi = (loan_amount * interest_pm * Math.pow((1+interest_pm),tenure)) / (Math.pow((1+interest_pm),tenure) - 1);
		var total_price = parseInt(dp) + your_emi * tenure;

		if ($.isNumeric(loan_amount) && (dp)) {
			$("#loan_amount").text("₹ "+commafy(Math.round(loan_amount)));
		} else {
			$("#loan_amount").text("-");
		}

		if ($.isNumeric((total_price - dp) - loan_amount)) {
			$("#interest_amount").text("₹ "+commafy(Math.round((total_price - dp) - loan_amount)));
		} else {
			$("#interest_amount").text("-");
		}

		if ($.isNumeric(total_price)) {
			$("#total_price").text("₹ "+commafy(Math.round(total_price)));
		} else {
			$("#total_price").text("-");
		}

		if ($.isNumeric(your_emi) && (dp)) {
			$("#your_emi").text("₹ "+commafy(Math.round(your_emi)));
		} else {
			$("#your_emi").text("-");
		}
	}

/* -----
	{ E17 }
 ----- */
/* Pricing Contact Form */
	$('#contact_form_pricing').submit(function(e) {
      // Stop the form actually posting
      e.preventDefault();

      $(".form-error").removeClass("form-error");

      // Stringify the fav_array and the parking options
      // var fav_array_ref = Array.prototype.map.call( $(".wish .js_view_details") , function ( el ) { return $( el ).data("viewDetails") } );
      // var fav_array_string = fav_array_ref.join( ", " );
      var fav_array_string = "", parking_string = "";
      if ( fav_array.length ) {
      	for (var i = 0; i < fav_array.length; i++) {
      			fav_array_string = fav_array_string + "," + fav_array[i]['apt_number'] + "_" + fav_array[i]['parking_dropdown'];
      			parking_string = parking_string + "," + fav_array[i]['apt_number'] + "_" + fav_array[i]['parking_dropdown'] + ".pdf";
      	}
      }
      // Removing ',' from the first position of the string
      fav_array_string = fav_array_string.substr(1);
      parking_string = parking_string.substr(1);
      selected_apt_string = selected_apt_string.substr(1);

      var email_pattern = /((([a-zA-Z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-zA-Z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?/;
      // var phone_pattern = /([\+][0-9]{1,3}([ \.\-])?)?([\(][0-9]{1,6}[\)])?([0-9A-Za-z \.\-]{1,32})(([A-Za-z \:]{1,11})?[0-9]{1,4}?)/;

      var mail_check = 0;

      	if (!($("#finding_us").val())) {
      		$("#finding_us").addClass("form-error");
      		$("#finding_us").focus();
      		mail_check = 1;
      	}
      	if (!($("#email").val())) {
      		$("#email").addClass("form-error");
      		$("#email").focus();
      		mail_check = 1;
      	} else if (!(email_pattern.test($("#email").val()))) {
      		alert("Invalid Email");
      		$("#email").addClass("form-error");
      		$("#email").focus();
      		mail_check = 1;
      	}
      	if (!($("#mobile").val())) {
      		$("#mobile").addClass("form-error");
      		$("#mobile").focus();
      		mail_check = 1;
      	}
      	if (!($("#name").val().trim())) {
      		$("#name").addClass("form-error");
      		$("#name").focus();
      		mail_check = 1;
      	}

      // Send the request
      	if (mail_check) {
      		return;
	    } else {
	    	// Showing 'sending' gif
	    	$(e.target).find("input[type='submit']").attr("value", "Sending...").addClass('loading');

	      // Customer Email
	      $.post('server/pricing_contact_smtp_customer.php', {
			  name: $("#name").val(),
	          email: $("#email").val(),
	          parking_string: parking_string,
	          fav_array_string: fav_array_string,
	      }, function(d){
	      		// Hiding 'sending' gif
      			$(e.target).find("input[type='submit']").attr("value", "Thank You!").removeClass('loading').addClass('done');
	      		console.log(d);
	      });

		// mail to builder about general
	      $.post('server/pricing_contact_smtp_builder.php', {
	          name: $("#name").val(),
	          mobile: $("#mobile").val(),
	          email: $("#email").val(),
	          finding_us: $("#finding_us").find(":selected").val(),
	          selected_apts: selected_apt_string,
	          fav_apts: fav_array_string,
	          // my_budget: $("#interested_in").find(":selected").val(),
	          // source: "Pricing Page",
	      }, function(d){
	          console.log(d);
	      });

		/*
		 * Push Lead to Paramantra
		 */
		var names = $( "#name" ).val().trim().split( /\s+/ );
		var first_name;
		var last_name;
		if ( names.length == 1 ) {
			first_name = names[ 0 ];
			last_name = "";
		}
		else {
			last_name = names.pop();
			first_name = names.join( " " );
		}
		// var discoverySource = $( "#finding_us" ).val();
		// discoverySource = discoverySource.slice( "Web-P - ".length );
		var discoverySource = $( "#finding_us :selected" ).text();
		$.ajax( {
			url: "server/create-lead.php",
			method: "POST",
			data: {
				lead_source: "Pricing",
				first_name: first_name,
				last_name: last_name,
				contact_number: $( "#mobile" ).val(),
				email_address: $( "#email" ).val(),
				discovery_source: discoverySource,
				apartments_viewed: selected_apt_string,
				apartments_liked: fav_array_string
			}
		} )
		.done( function ( responseJSON ) {
			var response;
			try {
				response = JSON.parse( responseJSON );
				if ( response.status ) {
					dataLayer.push( {
						event: "form-pricing-enquiry-submit"
					} );
				}
			} catch ( e ) {}
		} )

        	// Spreadsheet WebApp API
			// $.ajax( "https://docs.google.com/forms/d/1aqHIlIa1y16-TJTN2SpWa0T512GG6UF4wWxRuq23ujQ/formResponse?ifq&entry.2124903516="+$('#name').val()+"&entry.2025669934="+$('#mobile').val()+"&entry.1591536953="+$('#email').val()+"&entry.1551099819="+selected_apt_string+" ~ "+fav_array_string+"&entry.91881905="+$('#finding_us').find(':selected').val()+"&submit=Submit");

		    // Triggering event for ga tracking of form submit
		    $(this).trigger("pricing_contact_form_validated");

		    // Trigger iframe for apartment-pricing-form-submit-thank-you.php
		    // $("#iframe_for_a").attr("src","apartment-pricing-form-submit-thank-you");

		} // mail_check else statement
  });


/* -----
	{ E17 }
 ----- */
/*
 * When the wishlist changes
 *
 * Change the text on the submit button contextually
 */
$( document ).on( "wishlist::change", function ( event ) {

	var $submitButton = $( ".js_submit_button_section input" );
	var buttonText;

	if ( fav_array.length ) {
		buttonText = "Email PDFs & Get in touch";
	}
	else {
		buttonText = "Submit";
	}

	$submitButton.val( buttonText );

} );



}); // End of file
