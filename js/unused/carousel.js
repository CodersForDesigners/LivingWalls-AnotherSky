// <div class="carousel-section clearfix">
// 	<div class="image block">
// 		<img src="../images/carousel/interior/carousel_1.jpg">
// 	</div>
// 	<span class="prev">Prev</span>
// 	<span class="next">Next</span>
// </div>

$(document).ready(function(){

	/* Interior Carousel */

	var currentImgVal_1  = 1;
	var currentImgPath_1 = "../images/carousel/interior/carousel_v2_" ;

	var imgFirst_1 = 1;
	var imgLast_1 = 20;

	// Carousel Controls
	var carControls_1 = $( "#interior_carousel" );

	carControls_1.on( "click" , "span" , function ( e ) {

		var theImg_1 = carControls_1.find( "img" );
		var newSrc_1 ;

		if ( $( e.currentTarget ).hasClass("next") && currentImgVal_1 != imgLast_1 ) {

			currentImgVal_1 = currentImgVal_1 + 1;

		} else if ( $( e.currentTarget ).hasClass("prev") && currentImgVal_1 != imgFirst_1 ) {

			currentImgVal_1 = currentImgVal_1 - 1;

		}

		newSrc_1 = currentImgPath_1 + currentImgVal_1 + ".jpg";

		theImg_1.attr("src", newSrc_1);

	} );



	/* Exterior Carousel */

	var currentImgVal_2  = 1;
	var currentImgPath_2 = "../images/carousel/exterior/carousel_" ;

	var imgFirst_2 = 1;
	var imgLast_2 = 7;

	// Carousel Controls
	var carControls_2 = $( "#exterior_carousel" );

	carControls_2.on( "click" , "span" , function ( e ) {

		var theImg_2 = carControls_2.find( "img" );
		var newSrc_2 ;

		if ( $( e.currentTarget ).hasClass("next") && currentImgVal_2 != imgLast_2 ) {

			currentImgVal_2 = currentImgVal_2 + 1;

		} else if ( $( e.currentTarget ).hasClass("prev") && currentImgVal_2 != imgFirst_2 ) {

			currentImgVal_2 = currentImgVal_2 - 1;

		}

		newSrc_2 = currentImgPath_2 + currentImgVal_2 + ".jpg";

		theImg_2.attr("src", newSrc_2);

	} );



	/* Construction Carousel */

	var currentImgVal_3  = 1;
	var currentImgPath_3 = "../images/carousel/construction/carousel_" ;

	var imgFirst_3 = 1;
	var imgLast_3 = 10;

	// Carousel Controls
	var carControls_3 = $( "#construction_carousel" );

	carControls_3.on( "click" , "span" , function ( e ) {

		var theImg_3 = carControls_3.find( "img" );
		var newSrc_3 ;

		if ( $( e.currentTarget ).hasClass("next") && currentImgVal_3 != imgLast_3 ) {

			currentImgVal_3 = currentImgVal_3 + 1;

		} else if ( $( e.currentTarget ).hasClass("prev") && currentImgVal_3 != imgFirst_3 ) {

			currentImgVal_3 = currentImgVal_3 - 1;

		}

		newSrc_3 = currentImgPath_3 + currentImgVal_3 + ".jpg";

		theImg_3.attr("src", newSrc_3);

	} );

});