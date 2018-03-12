
$( ".js_menu_item" ).on( "click", function ( event ) {

	event.preventDefault();

	var linkTo = event.target.getAttribute( "href" );
	$( ".modal .close" ).first().trigger( "click" );

	setTimeout( function () {
		document.querySelector( linkTo ).scrollIntoView( { behavior: 'smooth' } );
	}, 400 );

} );

// Scroll to the section, if specified in the url
// ( function () {
	// var section = location.pathname.match( /[\w-]+/ );

	// approach #1
	// if ( ! section || ! /^[a-zA-Z]/.test( section ) ) return;
	// var domSection = document.querySelector( "#" + section )
	// if ( ! domSection ) return;
	// // domSection.scrollIntoView( { behavior: 'smooth' } );
	// window.scrollTo( 0, domSection.offsetTop )

	// approach #2
	// if ( ! section ) return;
	// var $section = $( "#" + section );
	// if ( ! $section.length ) return;
	// setTimeout( function () {
	// 	document.documentElement.scrollTop = $section.position().top;
	// }, 0 );

// } )()

var currentScrollPosition = 0;
var onScrollNavigation = function () {

	var $landingSection = $( ".js_landing_section" );
	var $menuWidget = $( ".js_nav_menu" );

	return function onScrollNavigation () {

		var scrollTop = window.scrollY || document.body.scrollTop;

		/*
		 * Fix the menu toggle after a certain scroll depth
		 */
		if ( scrollTop >= $landingSection.height() ) {
			$menuWidget.addClass( "sticky" );
		} else {
			$menuWidget.removeClass( "sticky" );
		}

		/*
		 * Show / hide the menu toggle depending on the scroll direction
		 */
		// Scrolling down
		if ( scrollTop > currentScrollPosition ) {
			$menuWidget.addClass( "hide" );
		}
		// Scrolling up
		if ( scrollTop < currentScrollPosition ) {
			$menuWidget.removeClass( "hide" );
		}
		currentScrollPosition = scrollTop;

	};


}();

onViewportScrollThrottle( onScrollNavigation );




/*
 * Change the URL fragment depending on the section currently being viewed
 */
var intervalToCheckForEngagement = 250;
var thresholdTimeForEngagement = 5000;
window.__LW__.TIME_SPENT_ON_SECTION = 0;
var manageHistoryOnScroll = function () {

	// Sections
	// window.__LW__.historyManagement = true;
	var currentSection;
	var previousSection;
	var sectionScrollTop;
	// var timeSpent = 0;
	var $landingSection = $( ".js_landing_section" );
	var $getAQuoteSection = $( "#getaquote" );
	var $getAQuote2Section = $( "#getaquote_2" );
	var $projectMasterplanSection = $( "#masterplan" );
	var $constructionStatusSection = $( "#construction" );
	var $apartmentPricingSection = $( "#apartment-pricing" );
	var $locationSection = $( "#step-1-location" );
	var $partySection = $( "#step-2-party" );
	var $designSection = $( "#step-3-design" );
	var $childrenSection = $( "#step-4-children" );
	var $fitnessSection = $( "#step-5-fitness" );
	var $environmentSection = $( "#step-6-environment" );
	var $maintenanceSection = $( "#step-7-maintenance" );
	var $adFilmsSection = $( "#ad_films" );
	var $aboutSection = $( "#about" );
	var $contactSection = $( "#contact" );
	var $otherProjectsSection = $( "#other_projects" );
	var $timelapseNightDay1Section = $( "#timelapse-1" );
	var $timelapseBalconySection = $( "#timelapse-2" );
	var $carouselInteriorsSection = $( "#carousel-interiors" );
	var $timelapseNightDay2Section = $( "#timelapse-3" );
	var $timelapseAngle11Section = $( "#timelapse-4" );
	var $timelapseAngle12Section = $( "#timelapse-5" );
	var $timelapseAngle9Section = $( "#timelapse-6" );

	return function manageHistoryOnScroll () {

		var viewportHeight = $( window ).height();
		var scrollTop = window.scrollY || document.body.scrollTop;

		if (
			scrollTop >= $contactSection.position().top - viewportHeight / 2
			&& scrollTop <= $contactSection.position().top + $contactSection.height() + viewportHeight / 2
		) {
			currentSection = $contactSection.attr( "id" );
			sectionScrollTop = $contactSection.position().top;
		}
		else if (
			scrollTop >= $otherProjectsSection.position().top - viewportHeight / 2
			&& scrollTop <= $otherProjectsSection.position().top + $otherProjectsSection.height() + viewportHeight / 2
		) {
			currentSection = $otherProjectsSection.attr( "id" );
			sectionScrollTop = $otherProjectsSection.position().top;
		}
		else if (
			scrollTop >= $aboutSection.position().top - viewportHeight / 2
			&& scrollTop <= $aboutSection.position().top + $aboutSection.height() + viewportHeight / 2
		) {
			currentSection = $aboutSection.attr( "id" );
			sectionScrollTop = $aboutSection.position().top;
		}
		else if (
			scrollTop >= $getAQuote2Section.position().top - viewportHeight / 2
			&& scrollTop <= $getAQuote2Section.position().top + $getAQuote2Section.height() + viewportHeight / 2
		) {
			currentSection = $getAQuote2Section.attr( "id" );
			sectionScrollTop = $getAQuote2Section.position().top;
		}
		else if (
			scrollTop >= $adFilmsSection.position().top - viewportHeight / 2
			&& scrollTop <= $adFilmsSection.position().top + $adFilmsSection.height() + viewportHeight / 2
		) {
			currentSection = $adFilmsSection.attr( "id" );
			sectionScrollTop = $adFilmsSection.position().top;
		}
		else if (
			scrollTop >= $maintenanceSection.position().top - viewportHeight / 2
			&& scrollTop <= $maintenanceSection.position().top + $maintenanceSection.height() + viewportHeight / 2
		) {
			currentSection = $maintenanceSection.attr( "id" );
			sectionScrollTop = $maintenanceSection.position().top;
		}
		else if (
			scrollTop >= $timelapseAngle9Section.position().top - viewportHeight / 2
			&& scrollTop <= $timelapseAngle9Section.position().top + $timelapseAngle9Section.height() + viewportHeight / 2
		) {
			currentSection = $timelapseAngle9Section.attr( "id" );
			sectionScrollTop = $timelapseAngle9Section.position().top;
		}
		else if (
			scrollTop >= $environmentSection.position().top - viewportHeight / 2
			&& scrollTop <= $environmentSection.position().top + $environmentSection.height() + viewportHeight / 2
		) {
			currentSection = $environmentSection.attr( "id" );
			sectionScrollTop = $environmentSection.position().top;
		}
		else if (
			scrollTop >= $timelapseAngle12Section.position().top - viewportHeight / 2
			&& scrollTop <= $timelapseAngle12Section.position().top + $timelapseAngle12Section.height() + viewportHeight / 2
		) {
			currentSection = $timelapseAngle12Section.attr( "id" );
			sectionScrollTop = $timelapseAngle12Section.position().top;
		}
		else if (
			scrollTop >= $fitnessSection.position().top - viewportHeight / 2
			&& scrollTop <= $fitnessSection.position().top + $fitnessSection.height() + viewportHeight / 2
		) {
			currentSection = $fitnessSection.attr( "id" );
			sectionScrollTop = $fitnessSection.position().top;
		}
		else if (
			scrollTop >= $timelapseAngle11Section.position().top - viewportHeight / 2
			&& scrollTop <= $timelapseAngle11Section.position().top + $timelapseAngle11Section.height() + viewportHeight / 2
		) {
			currentSection = $timelapseAngle11Section.attr( "id" );
			sectionScrollTop = $timelapseAngle11Section.position().top;
		}
		else if (
			scrollTop >= $apartmentPricingSection.position().top - viewportHeight / 2
			&& scrollTop <= $apartmentPricingSection.position().top + $apartmentPricingSection.height() + viewportHeight / 2
		) {
			currentSection = $apartmentPricingSection.attr( "id" );
			sectionScrollTop = $apartmentPricingSection.position().top;
		}
		else if (
			scrollTop >= $constructionStatusSection.position().top - viewportHeight / 2
			&& scrollTop <= $constructionStatusSection.position().top + $constructionStatusSection.height() + viewportHeight / 2
		) {
			currentSection = $constructionStatusSection.attr( "id" );
			sectionScrollTop = $constructionStatusSection.position().top;
		}
		else if (
			scrollTop >= $timelapseNightDay2Section.position().top - viewportHeight / 2
			&& scrollTop <= $timelapseNightDay2Section.position().top + $timelapseNightDay2Section.height() + viewportHeight / 2
		) {
			currentSection = $timelapseNightDay2Section.attr( "id" );
			sectionScrollTop = $timelapseNightDay2Section.position().top;
		}
		else if (
			scrollTop >= $childrenSection.position().top - viewportHeight / 2
			&& scrollTop <= $childrenSection.position().top + $childrenSection.height() + viewportHeight / 2
		) {
			currentSection = $childrenSection.attr( "id" );
			sectionScrollTop = $childrenSection.position().top;
		}
		else if (
			scrollTop >= $carouselInteriorsSection.position().top - viewportHeight / 2
			&& scrollTop <= $carouselInteriorsSection.position().top + $carouselInteriorsSection.height() + viewportHeight / 2
		) {
			currentSection = $carouselInteriorsSection.attr( "id" );
			sectionScrollTop = $carouselInteriorsSection.position().top;
		}
		else if (
			scrollTop >= $projectMasterplanSection.position().top - viewportHeight / 2
			&& scrollTop <= $projectMasterplanSection.position().top + $projectMasterplanSection.height() + viewportHeight / 2
		) {
			currentSection = $projectMasterplanSection.attr( "id" );
			sectionScrollTop = $projectMasterplanSection.position().top;
		}
		else if (
			scrollTop >= $designSection.position().top - viewportHeight / 2
			&& scrollTop <= $designSection.position().top + $designSection.height() + viewportHeight / 2
		) {
			currentSection = $designSection.attr( "id" );
			sectionScrollTop = $designSection.position().top;
		}
		else if (
			scrollTop >= $timelapseBalconySection.position().top - viewportHeight / 2
			&& scrollTop <= $timelapseBalconySection.position().top + $timelapseBalconySection.height() + viewportHeight / 2
		) {
			currentSection = $timelapseBalconySection.attr( "id" );
			sectionScrollTop = $timelapseBalconySection.position().top;
		}
		else if (
			scrollTop >= $partySection.position().top - viewportHeight / 2
			&& scrollTop <= $partySection.position().top + $partySection.height() + viewportHeight / 2
		) {
			currentSection = $partySection.attr( "id" );
			sectionScrollTop = $partySection.position().top;
		}
		else if (
			scrollTop >= $timelapseNightDay1Section.position().top - viewportHeight / 2
			&& scrollTop <= $timelapseNightDay1Section.position().top + $timelapseNightDay1Section.height() + viewportHeight / 2
		) {
			currentSection = $timelapseNightDay1Section.attr( "id" );
			sectionScrollTop = $timelapseNightDay1Section.position().top;
		}
		else if (
			scrollTop >= $locationSection.position().top - viewportHeight / 2
			&& scrollTop <= $locationSection.position().top + $locationSection.height() + viewportHeight / 2
		) {
			currentSection = $locationSection.attr( "id" );
			sectionScrollTop = $locationSection.position().top;
		}
		else if (
			scrollTop >= $getAQuoteSection.position().top - viewportHeight / 2
			&& scrollTop <= $getAQuoteSection.position().top + $getAQuoteSection.height() + viewportHeight / 2
		) {
			currentSection = $getAQuoteSection.attr( "id" );
			sectionScrollTop = $getAQuoteSection.position().top;
		}
		else {
			currentSection = "/";
			sectionScrollTop = 0;
		}

		if ( currentSection == previousSection ) {
			window.__LW__.TIME_SPENT_ON_SECTION += intervalToCheckForEngagement;
			if ( window.__LW__.TIME_SPENT_ON_SECTION >= thresholdTimeForEngagement ) {
				if ( history.state ) {
					if ( history.state.section != currentSection ) {
						history.pushState( {
							section: currentSection,
							scrollPosition: sectionScrollTop
						}, "", currentSection );
						// $( "title" ).text( "LivingWalls | " + currentSection );
					}
				} else {
					history.pushState( {
						section: currentSection,
						scrollPosition: sectionScrollTop
					}, "", currentSection );
				}
			}
		}
		else {
			window.__LW__.TIME_SPENT_ON_SECTION = 0;
		}
		previousSection = currentSection;

	};

}();

// onViewportScrollDebounce( manageHistoryOnScroll );
setInterval( manageHistoryOnScroll, intervalToCheckForEngagement );


$( window ).on( "popstate", function ( event ) {

	// reset the timeSpent var
	window.__LW__.TIME_SPENT_ON_SECTION = 0;

	event.preventDefault();

	var page = event.originalEvent.state;

	// window.scrollTo( 0, page.scrollPosition );

} );
