$(document).ready(function(){

	// Tab Controls

	var tabControls = $( ".tab-controls" );

	tabControls.on( "click" , ".button" , function ( e ) {

		var currentTab = tabControls.find( ".on" );
		var clickedTab = $( e.currentTarget );

		// toggling tabs
		currentTab.removeClass( "on" );
		clickedTab.addClass( "on" );

		// toggling tab content
		$( "." + currentTab.attr("data-tab-index") ).addClass( "visuallyhidden" );
		$( "." + clickedTab.attr("data-tab-index") ).removeClass( "visuallyhidden" );


	} );

	// Tab First & Last

	var tabFirst = $( ".tab-controls .button" ).first().attr("data-tab-index");
	var tabLast  = $( ".tab-controls .button" ).last().attr("data-tab-index");

	// Tab Toggle

	var tabToggle = $( ".tab-toggle" );

	tabToggle.on( "click" , "span" , function ( e ) {

		var currentTab = tabControls.find( ".on" );
		var clickedTab;

		if ( $( e.currentTarget ).hasClass( "next" ) && currentTab.attr("data-tab-index") !== tabLast ) {

			currentTab.removeClass( "on" );
			currentTab.next( ".button" ).addClass( "on" );

			clickedTab = currentTab.next();

			// toggling tab content
			$( "." + currentTab.attr("data-tab-index") ).addClass( "visuallyhidden" );
			$( "." + clickedTab.attr("data-tab-index") ).removeClass( "visuallyhidden" );

		} else if ( $( e.currentTarget ).hasClass( "prev" ) && currentTab.attr("data-tab-index") !== tabFirst ) {

			currentTab.removeClass( "on" );
			currentTab.prev( ".button" ).addClass( "on" );

			clickedTab = currentTab.prev();

			// toggling tab content
			$( "." + currentTab.attr("data-tab-index") ).addClass( "visuallyhidden" );
			$( "." + clickedTab.attr("data-tab-index") ).removeClass( "visuallyhidden" );

		}

		// New tab text meant for GA
		tabToggle.trigger( "current_tab" , [ clickedTab ] );

	} );

});
