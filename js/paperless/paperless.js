$(document).ready(function(){

	// submit all relevant data
	$( "#the_form" ).on( "submit" , function ( e ) {
		// Prevent default behavior on form submit
		e.preventDefault();

		// Make the button 'gif'fy
		$( "#the_red_switch" ).addClass( "indicator--loading--trippy" );

		// create lead on Paramantra
		var names = $( "#customer_name" ).val().trim().split( /\s+/ );
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
		$.ajax( {
			url: "server/create-lead.php",
			method: "POST",
			data: {
				lead_source: "Paperless",
				first_name: first_name,
				last_name: last_name,
				contact_number: $( "#customer_number" ).val(),
				email_address: $( "#customer_email" ).val(),
				discovery_source: $( "#customer_source" ).val(),
			}
		} )
		.done( function ( responseJSON ) {
			var response;
			try {
				response = JSON.parse( responseJSON );
			} catch ( e ) {}
			console.log( response );
		} )

		// `cid` nomo being used
		// Get CID resource
		// $.post( "server/get_cid_resource.php", {
		    // name: 'name',
		// } )
			// .always( function(d) {
			    // console.log(d);
			    // $(e.target).attr('data_cid_resource', d);

		        // Builder Email
		        $.post( "server/overview_contact_smtp_builder.php", {
		            name: $("#customer_name").val(),
		            mobile: $("#customer_number").val(),
		            email: $("#customer_email").val(),
		            my_budget: $("#customer_budget").val(),
		            find_us: $("#customer_source").val(),
		            cid_resource: $(e.target).attr('data_cid_resource'),
		            source: "one_manual",
		        })
		        	.always ( function(d) {
			            console.log(d+" - General");

				    	if ( $("#customer_email").val() || $("#customer_budget").val() || $("#customer_source").val() ) {
				    		$.post( "server/overview_contact_smtp_builder.php", {
				    		    name: $("#customer_name").val(),
				    		    mobile: $("#customer_number").val(),
				    		    email: $("#customer_email").val(),
				    		    my_budget: $("#customer_budget").val(),
				    		    find_us: $("#customer_source").val(),
				    		    cid_resource: $(e.target).attr('data_cid_resource'),
				    		    source: "two_manual",
				    		}, function(d) {
						            console.log(d+" - Premium");
						            $( "#the_red_switch" ).removeClass( "indicator--loading--trippy" ).remove();
									$( "#form-submission-status" ).text( "Form Submission Done Successfully." );
					        });
				    	} else {
							$( "#the_red_switch" ).removeClass( "indicator--loading--trippy" ).remove();
							$( "#form-submission-status" ).text( "Form Submission Done Successfully." );
				    	}
		        	});
			// });
	} ); // #the_form submission
});
