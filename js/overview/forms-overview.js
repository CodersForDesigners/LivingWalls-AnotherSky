$(document).ready(function(){
	// Enquiry Form Label Animation
	$('.pricing-action input').addClass('empty');
	$('.pricing-action input').keyup(function(){
		if( $(this).val() == ""){
			$(this).addClass("empty");
		}else{
			$(this).removeClass("empty");
		}
	});

	// Hidden Repeat Form Reveal
	$('.repeat-pricing-section .form.is-hide').on('click', function(){
		$('.repeat-pricing-section .form').removeClass('is-hide');
	});

	/* Instant call back form submit */
	$('#instant_call_back_form').on( "submit" , function(e){

	  // Stop the form actually posting
      e.preventDefault();

      $(".form-error").removeClass("form-error");

      if (!($("#instant_mobile").val())) {
	      		$("#instant_mobile").addClass("form-error");
	      		$("#instant_mobile").focus();
	      		return;
    	} else {
    		$("#instant_call_back_form :submit").addClass("green").attr('value','Calling...').attr('disabled','true');
				$.post('../server/exotel_connect_to_flow.php', {
		            instant_mobile: $("#instant_mobile").val(),
		        }, function(d){
		            console.log(d);
		            // Hiding 'sending' gif
		            // $(".sending-form").hide();

		            // $("#toggleContactForm").trigger("click").text("Thank You! We will get in touch").removeClass("inverse").addClass("notbutton");
		            // setTimeout(function(){
		            //   $(".contact-form").remove();
		            // },1000);
		        });

			// Form Submit text Change
			$("#instant_call_back_form .description").text("You will be getting a call from 080-3951-1624").addClass("green");

			}
	});

	// Resetting instant call back button on change
	$("#instant_mobile").on("input", function() {
		$("#instant_call_back_form :submit").removeClass("green").attr('value','Call Now').removeAttr('disabled');
		$("#instant_call_back_form .description").text("Share your number for an Instant Callback").removeClass("green");
	});

	/* Contact form submit - Part One */
	$('.contact_form_overview_part_one').on( "submit" , function(e) {

		// Stop the form actually posting
		e.preventDefault();

		$(".form-error").removeClass("form-error");

		// var phone_pattern = /([\+][0-9]{1,3}([ \.\-])?)?([\(][0-9]{1,6}[\)])?([0-9A-Za-z \.\-]{1,32})(([A-Za-z \:]{1,11})?[0-9]{1,4}?)/;

		var mail_check = 0;

		if (!($(e.target).find(".js_phone").val())) {
	  		$(e.target).find(".js_phone").addClass("form-error").focus();
	  		mail_check = 1;
	  	}
		if (!($(e.target).find(".js_name").val())) {
			$(e.target).find(".js_name").addClass("form-error").focus();
			mail_check = 1;
		}

		// Send the request
		if (mail_check) {
			return;
		} else {
			// Showing 'sending' gif
			$(e.target).find("input[type='submit']").attr("value", "Sending...").addClass('loading');

			// Customer Email
			// $.post('../server1/overview_contact_smtp_customer.php', {
			//     name: $(e.target).find(".js_name").val(),
			//     email: $("#email").val(),
			// }, function(d){
			//     // console.log(d);
			//     // Hiding 'sending' gif
			//     $(e.target).find(".loading").hide();
			//     // close_lightbox();

			//     $(e.target).find(".submit-button-section").html("<span class='block aligncenter'>Thank You! We will get in touch</span>");
			// });

				// Exotel SMS notification
			// $.post('../server/exotel_sms_notification.php', {
			//     name: $("#name").val(),
			//         mobile: $("#mobile").val(),
			//         email: $("#email").val(),
			// }, function(d){
			//     console.log(d);
			// });

			// `cid` nomo being used
			// Get CID resource
			// $.post('../server/get_cid_resource.php', {
			    // name: $(e.target).find(".js_name").val(),
			// } )
				// .always( function(d) { // After obtaining CID, send mail to builder
				    // console.log(d);
				    // $(e.target).attr('data_cid_resource', d);

			        // Builder Email
			        $.post('../server/overview_contact_smtp_builder.php', {
			            name: $(e.target).find(".js_name").val(),
			            mobile: $(e.target).find(".js_phone").val(),
			            // cid_resource: $(e.target).attr('data_cid_resource'),
			            source: 'one',
			        }, function(d){
			            // console.log(d);
			            $(e.target).addClass('visuallyhidden');
			            $(e.target).next(".contact_form_overview_part_two").removeClass('visuallyhidden');
			        });
				// });


			/*
			 * Push Lead to Paramantra
			 */
			var names = $( e.target ).find( ".js_name" ).val().trim().split( /\s+/ );
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
				url: "/server/create-lead.php",
				method: "POST",
				data: {
					lead_source: "Home",
					first_name: first_name,
					last_name: last_name,
					contact_number: $( e.target ).find( ".js_phone" ).val()
				}
			} )
			.done( function ( responseJSON ) {
				var response;
				try {
					response = JSON.parse( responseJSON );
					if ( response.status ) {
						dataLayer.push( {
							event: "form-quote-submit"
						} );
					}
				} catch ( e ) {}
			} )


			// Triggering event for ga tracking of form submit
			$(this).trigger("overview_contact_form_one_validated");

		} // end of mail_check else statement
	});

	$('.contact_form_overview_part_two').on( "submit" , function(e){

	      // Stop the form actually posting
	      e.preventDefault();

	      $(".form-error").removeClass("form-error");

	      var email_pattern = /((([a-zA-Z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-zA-Z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?/;

	      var mail_check = 0;

			if (!($(e.target).find(".js_find_us").val())) {
				$(e.target).find(".js_find_us").addClass("form-error").focus();
				mail_check = 1;
			}
			if (!($(e.target).find(".js_my_budget").val())) {
				$(e.target).find(".js_my_budget").addClass("form-error").focus();
				mail_check = 1;
			}
	      if (! ( $(e.target).find(".js_email").val() ) ) {
	      		$(e.target).find(".js_email").addClass("form-error").focus();
		      	mail_check = 1;
	      } else if ( ! ( email_pattern.test( $(e.target).find(".js_email").val() ) ) ) {
		      	alert("Invalid Email");
	      		$(e.target).find(".js_email").addClass("form-error").focus();
	      		mail_check = 1;
	      }

	      // Send the request
	      if (mail_check) {
	      	return;
	      } else {
			// Showing 'sending' gif
        	$(e.target).find("input[type='submit']").attr("value", "Sending...").addClass('loading');

	        // Customer Email
	        $.post('../server/overview_contact_smtp_customer.php', {
	            name: $(e.target).prev(".contact_form_overview_part_one").find(".js_name").val(),
	            email: $(e.target).find(".js_email").val(),
	        }, function(d){
	            console.log(d);
	        });

	  		// Exotel SMS notification
			// $.post('../server/exotel_sms_notification.php', {
			//     name: $("#name").val(),
			//         mobile: $("#mobile").val(),
			//         email: $("#email").val(),
			// }, function(d){
			//     console.log(d);
			// });

	        // Builder Email
	        $.post('../server/overview_contact_smtp_builder.php', {
	            my_budget: $(e.target).find(".js_my_budget :selected").val(),
	            find_us: $(e.target).find(".js_find_us :selected").val(),
	            name: $(e.target).prev(".contact_form_overview_part_one").find(".js_name").val(),
	            mobile: $(e.target).prev(".contact_form_overview_part_one").find(".js_phone").val(),
	            email: $(e.target).find(".js_email").val(),
	            cid_resource: $(e.target).prev(".contact_form_overview_part_one").attr('data_cid_resource'),
	            source: 'two',
	        }, function(d){
	            // console.log(d);
	            // Hide the loading gif
	            $(e.target).find("input[type='submit']").attr("value", "Thank You!").removeClass('loading').addClass('done');
	        });

	        // Spreadsheet WebApp API
			// $.ajax( "https://docs.google.com/forms/d/1aqHIlIa1y16-TJTN2SpWa0T512GG6UF4wWxRuq23ujQ/formResponse?ifq&entry.2124903516="+$('#name').val()+"&entry.2025669934="+$('#mobile').val()+"&entry.1591536953="+$('#email').val()+"&entry.1551099819="+$('#my_budget').find(':selected').val()+"&entry.91881905="+$('#find_us').find(':selected').val()+"&submit=Submit");

	        // Triggering event for ga tracking of form submit
	        $(this).trigger("overview_contact_form_two_validated");

	    } // end of mail_check else statement
	 });


	$( ".js_get_detailed_specs_trigger" ).on( "click", function ( event ) {
		$( ".js_get_detailed_specs" ).addClass( "interact" );
		setTimeout( function () {
			$( ".js_get_detailed_specs input" ).focus();
		}, 500 );
	} );

	$( ".js_form_get_detailed_specs" ).on( "submit", function ( event ) {

		event.preventDefault();

		var $form = $( event.target );
		var $contactNumber = $form.find( "input" );

		// Validation
		$validationErrors = $( ".js_detailed_specs_form_error" );
		$validationErrors.addClass( 'fade-out' );
		$contactNumber.val( $contactNumber.val().replace( /[^-–+\d\s]/g, "" ) );
		if ( $contactNumber.val().replace( /\D/g, "" ).length != 10 ) {
			$validationErrors.removeClass( 'fade-out' );
			return;
		}

		var data = {
			lead_source: "Detailed Specifications",
			contact_number: $contactNumber.val()
		}

		// Feedback
		$form.find( "input, button" ).prop( "disabled", true );
		$form.find( "input" )
			.attr( "placeholder", "Fetching the spec..." )
			.val( null )

		$.ajax( {
			url: "/server/create-lead.php",
			method: "POST",
			data: data
		} )
		.done( function ( responseJSON ) {
			$( ".js_get_detailed_specs > button" ).addClass( "visuallyhidden" );
			$( ".js_get_detailed_specs a" ).removeClass( "visuallyhidden" );
			$( ".js_get_detailed_specs" ).removeClass( "interact" );
			// $( ".js_get_detailed_specs a" ).get( 0 ).click();
			window.open( $( ".js_get_detailed_specs a" ).attr( "href" ), "_blank" )

			// Analytics
			var response;
			try {
				response = JSON.parse( responseJSON );
				if ( response.status ) {
					dataLayer.push( {
						event: "form-detailed-specs-submit"
					} );
				}
			} catch ( e ) {}

		} );

	} );


}); //End of file
