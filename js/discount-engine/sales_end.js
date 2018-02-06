
$( document ).one( "ready" , function ( ) {
	$( document ).one( "bootstrap" , main );
} );

// retrieve data
$.ajax( {
	url: "server/availability.php",
	dataType: "JSON",
	beforeSend: function () {
		console.log( "initializing data....." );
	},
	success: function( data ) {
		console.log( "app bootstrapped." );
		$( document ).trigger( "bootstrap" , data );
		// lift visual barrier
	},
	error: function() {
		console.error( "srrrrry! something seems to not be working right" );
		console.error( "try refreshing the page a couple of times; if that doesn't solve the problem, then contact the page administrator" );
		console.error( "apologies for any inconvenience caused" );
	}
} );

function initInputFields ( data ) {

	getApartmentListDOM( { data: data } );

}

function getApartmentListDOM ( _$_ ) {

	var data = _$_.data;

	var template = $( $( "#tmpl-input--select" ).html() );
	var aptType = $( "#aptType" ).val();
	var availableApts = data[ aptType ];
	var $aptList = availableApts.reduce( function ( list , apt ) {

		return list.append(
			"<option value=\"" + apt.apt_number + "\">" +
				apt.apt_number +
			"</option>"
		);

	} , $( template ) );

	$( ".js-apt-list-container" ).html( $aptList );

}

function main ( e , DATA_STORE ) {

	initInputFields( DATA_STORE );

	// toggle interactivity of inputs
	$( "[ data-toggle ]" ).on( "change" , function ( e ) {

		var $el = $( e.target );
		var $input = $( "#" + $el.data( "toggle" ) );
		$input.prop( "disabled" , ! $input.prop( "disabled" ) );
		$input.focus();

	} );

	// get list of apartments belonging to the selected apartment type
	$( "#aptType" ).on( "change" , DATA_STORE , getApartmentListDOM );

	// submit all relevant data
	$( "#the_form" ).on( "submit" , function ( e ) {

		e.preventDefault();

		var rate_sqft_holder = $( "#rate_sqft_tgl" ).prop( "checked" ) && $( "#rate_sqft" ).val();
		var floor_rise_holder = $( "#floor_rise_tgl" ).prop( "checked" ) && $( "#floor_rise" ).val();
		var car_parking_cost_holder = $( "#car_parking_cost_tgl" ).prop( "checked" ) && $( "#car_parking_cost" ).val() || $( "#car_parking_feature" ).val();
		var shipment = {

			  salesperson_email: $( "#sale_email" ).val()
			, customer_name: $( "#customer_name" ).val()
			, customer_id: $( "#customer_id" ).val()
			, apartment_number: $( "#apt_number" ).find(":selected").val()
			, rate_sqft: rate_sqft_holder
			, floor_rise: floor_rise_holder
			, car_parking_feature: $( "#car_parking_feature :selected" ).text()
			, car_parking_cost: car_parking_cost_holder
			, club_house: $( "#club_house" ).prop( "checked" )

		};

		$.ajax( {
			url: "server/discounter.php",
			method: "POST",
			data: shipment,
			beforeSend: function () {
				console.log( "sending data....." );
				$( "#the_red_switch" ).addClass( "indicator--loading--trippy" );
			},
			success: function( response ) {
				console.log( "data sent." );
				// console.log( JSON.parse( response ) );
				// console.log( response );
				// lift visual barrier
				$( "#the_red_switch" ).remove();
				$( "#form-submission-status" ).text( "Email Sent Successfully." );
			},
			error: function() {
				console.error( "srrrrry! something seems to not be working right" );
				console.error( "try refreshing the page a couple of times; if that doesn't solve the problem, then contact the page administrator" );
				console.error( "apologies for any inconvenience caused" );
				$( "#form-submission-status" ).text( "something happened; try again or contact ashank" );
			},
			complete: function () {
				$( "#the_red_switch" ).removeClass( "indicator--loading--trippy" );
			}
		} );

    	// Spreadsheet WebApp API
		$.ajax( "https://docs.google.com/forms/d/1m7CDCs7UCGbZbM1leFe-AEe8L271yYq_mRuSkSEluH0/formResponse?ifq&entry.1915512146="+$("#sale_email").find(":selected").text()+"&entry.1112023741="+$("#customer_name").val()+"&entry.332633598="+$("#customer_id").val()+"&entry.2014571098="+$("#apt_number").find(":selected").val()+"&entry.1112785203="+rate_sqft_holder+"&entry.1915537100="+floor_rise_holder+"&entry.1510919087="+$("#car_parking_feature :selected").text()+"&entry.1927744875="+car_parking_cost_holder+"&entry.634908824="+$("#club_house").prop("checked")+"&submit=Submit");

	} );

}
