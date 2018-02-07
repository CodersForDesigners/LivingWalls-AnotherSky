<?php

	// :: ONLY DURING DEVELOPMENT ::
	// debugging
	ini_set( "display_errors", "On" );
	ini_set( "error_reporting", E_ALL );

	// pull in Lazaro disclaimer and footer
	require 'inc/lazaro.php';

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
	prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">

<head>

	<!-- Page Meta -->
	<meta charset="utf-8">
	<title>LivingWalls | Another Sky | Obscenely Awesome Apartments on the Outer Ring Road</title>
	<meta name="description"
		content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
			Excepteur sint occaecat cupidatat non proident.">
	<meta name="keywords" content="Keyword_A, Keyword_B, Keyword_C, Keyword_D, Keyword_E">
	<meta name="author" content="Lazaro Advertising">
	<link rel="canonical" href="http://livingwalls.in/another-sky/">

	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#444444">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#444444">

	<!-- Open Graph Name Space -->
	<!-- <meta property="og:title" content="Your Title Here">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://example.com/product.html">
	<meta property="og:site_name" content="http://example.com/">
	<meta property="og:image" content="http://example.com/download/og-thumbnail-image.png">
	<meta property="og:image:width" content="310">
	<meta property="og:image:height" content="310">
	<meta property="og:image" content="http://example.com/download/og-cover-image.png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:description"
		content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
			Excepteur sint occaecat cupidatat non proident."> -->

	<!-- Facebook APP ID -->
	<!-- <meta property="fb:app_id" content="Your FB_APP_ID"> -->

	<!-- Twitter Card Data -->
	<!-- <meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="Your @publisher_handle">
	<meta name="twitter:title" content="Your Page Title">
	<meta name="twitter:description" content="Your Page description less than 200 characters">
	<meta name="twitter:creator" content="Your @author_handle"> -->

	<!-- Twitter Summary card images must be at least 120x120px -->
	<!-- <meta name="twitter:image" content="https://example.com/image.jpg"> -->

	<!-- Fonts -->
	<script type="text/javascript" src="http://use.typekit.net/mcm1rbb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- Icons -->
	<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

	<!-- Stylesheet -->
	<!-- <link rel="stylesheet" type="text/css" href="/style.css"> -->
	<link rel="stylesheet" type="text/css" href="css/1_standardize.css">
	<link rel="stylesheet" type="text/css" href="css/pages/overview.css">

	<!-- `picture` element polyfill -->
	<script type="text/javascript">
		(function () {
			if ( ! ( 'HTMLPictureElement' in window ) ) {
				var script = document.createElement( "script" );
				script.type = "text/javascript";
				script.src = "js/picturefill.min.js";
				document.head.appendChild( script );
			}
		}())
	</script>

	<!-- Analytics -->
	<!-- redo the Google Analytics, Facebook Pixel, HotJar code -->

</head>

<body id="body" class="body">

<!--  ★  MARKUP GOES HERE  ★  -->

<div id="wrapper"><!-- Page Wrapper -->

	<!-- Landing -->
	<div class="section-row landing-section clearfix">
		<div class="container-video">
			<video class="video-timelapse" autoplay loop="" muted="" playsinline="" data-s-src="media/images_mobile/timelapse/eve_night_01.mp4?v=2.3" data-l-src="media/images/timelapse/eve_night_01.mp4?v=2.3"></video>
			<picture class="timelapse-fallback-image">
				<source srcset="media/images/timelapse/eve_night_01.jpg?v=2.3" media="(min-width: 640px)">
				<img src="media/images_mobile/timelapse/eve_night_01.jpg?v=2.3">
			</picture>
		</div>
		<div class="logo block aligncenter">
			<a href="/"><img src="media/images/logo.svg?v=3"></a>
		</div>
		<div class="header-nav">
			<div class="logo-landscape inline-middle">
				<a href="/"><img src="media/images/logo-landscape.svg?v=3"></a>
			</div>
			<div class="phone-number inline-middle">
				<a href="tel:+918049405726" class="call h3-text">080 4940 5726</a>
			</div>
		</div>
		<div class="landing-content">
			<div class="title">
				<p class="h1-text block">
					<span class="block"><strong>Obscenely</strong></span>
					<span class="block"><strong>Awesome</strong></span>
					<span class="block"><strong>Apartments</strong></span>
				</p>
				<p class="h4-text block"><span>On the <strong>Outer Ring Road</strong>, Bangalore.</span></p>
			</div>
		</div>
	</div>



	<!-- Pricing Section -->
	<div class="section-row pricing-section clearfix">
		<div class="section-content clearfix">
			<div class="inline-middle pricing-title">
				<span class="h2-text block"><strong>3 &amp; 4 Bedroom</strong><br>
				Apartments</span>
				<span class="h4-text block">₹ 1.9cr TO 2.9cr</span>
				<a href="apartment-pricing" target="_blank" class="button block pricing-page ga_general_button aligncenter">Choose Your Apartment</a>
			</div>

			<div class="inline-middle pricing-action">
				<!-- <a class="button black block js_modal_trigger ga_general_button" data-modal-trigger="content-text" data-modal-form="contact">Get a Quote</a> -->
				<div class="form alignleft">
					<form class="contact_form_overview_part_one">
						<p class="h4-text block aligncenter">Get a Quote</p>

						<p class="form-row">
							<input class="input-field block js_name" type="text">
							<label>Name...</label>
						</p>
						<p class="form-row">
							<input class="input-field block js_phone" type="text">
							<label>Mobile...</label>
						</p>
						<p class="form-row submit-button-section">
							<input class="button black block" type="submit" value="Submit">
						</p>
					</form>

					<form class="contact_form_overview_part_two visuallyhidden">
						<p class="h4-text block aligncenter">More About You</p>

						<p class="form-row">
							<input class="input-field block js_email" type="text">
							<label>Email...</label>
						</p>
						<p class="form-row">
							<select class="input-field block js_my_budget">
								<option selected="true" disabled="true">Budget...</option>
								<option>1.9cr to 2.0cr</option>
								<option>2.1cr to 2.4cr</option>
								<option>2.5cr to 2.9cr</option>
							</select>
						</p>
						<p class="form-row">
							<select class="input-field block js_find_us">
								<option selected="true" disabled="true">How did you find us?</option>
								<option value="Web-O - YouTube">YouTube</option>
								<option value="Web-O - Radio">Radio</option>
								<option value="Web-O - Cinema">Cinema - PVR / INOX</option>
								<option value="Web-O - Google Search">Google Search</option>
								<option value="Web-O - Facebook">Facebook</option>
								<option value="Web-O - Friend">A friend told me</option>
								<option value="Web-O - Hoarding">Saw a hoarding</option>
								<option value="Web-O - Ad Words">Online Image Ad</option>
								<option value="Web-O - LinkedIn">LinkedIn</option>
								<option value="Web-O - Newspaper Ad">Newspaper Ad</option>
								<option value="Web-O - Site Visit">Site Visit</option>
								<option value="Web-O - Others">Others</option>
							</select>
						</p>
						<p class="form-row submit-button-section">
							<input class="button black block" type="submit" value="Submit">
						</p>
					</form>

					<ul class="dots">
						<li>dot</li>
						<li>dot</li>
					</ul>
				</div>
			</div>

			<div class="pricing-missed-call inline-middle aligncenter">
<!-- 					<span class="h2-text block">To Schedule a Site visit </br>just give us a missed call</span> -->
				<span class="h2-text block">To Schedule a Site visit</span>
				<a href="tel:+918039511773" class="button block ga_general_button aligncenter">Call 080 3951 1773</a>
			</div>
		</div>
	</div>




	<!-- Tour  -->
	<!-- <div id="js_for_sticky_section_visibility" class="section-row tour-section clearfix">
		<a href="#start-tour" class="h4-text inline aligncenter">Take our <strong>7 Step</strong> Tour</a>
	</div> -->
	<span id="breakdance"></span>



	<!-- Step - 1 -->
	<a name="start-tour"></a>
	<div id="ga_step_0" class="section-row step-1-base figcap before top-left rera-generic clearfix">
		<div id="video_commute" class="video-player">
			<video>
				<source src="media/images/tabletops/commute.mp4?v=2.3" type="video/mp4">
				Your browser does not support HTML5 video.
			</video>
			<div id="video_commute_gradient" class="video-gradient"></div>
		</div>
		<div class="section-content clearfix">
			<div class="section-title clearfix">
				<i class="section-index step-1-highlight">
					<span class="index-title">Step</span>
					<span class="index-number">1</span>
				</i>
				<p class="h2-text">A <strong>Location</strong> that ‘Just Works’</p>
			</div>
			<div class="section-point clearfix">
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-1/car.svg?v=2.3"></i>Sensible commutes to key workspaces in Bangalore <small>For instance, Manyata Tech Park is just a 4.6 km drive away. RMZ Infinity is a 4 km drive. Bagmane Tech Park: only 4.5 km. Kirloskar Tech Park: just 9.4 km and RMZ Ecospace is a 14 km drive on the Outer Ring Road. Wait... why drive when you can just as easily cycle.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-1/pc.svg?v=2.3"></i>Dedicated private Home office <br><small> WFH-ing today? This dedicated room is large enough to have 3 or 4 of your team mates over.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-1/plane.svg?v=2.3"></i>Easy access to the Airport</p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-1/circus.svg?v=2.3"></i>9 km to MG Road <small>...if you even need to go there.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-1/tea.svg?v=2.3"></i>Restaurants, Cafes, Pubs, Shopping... not more than 3km away <small>Again, why head towards MG Road or Indiranagar, when every major restaurant, pub, electronic megastore, apparel brand, supermarket and fast food joint is now in Kammanahalli.</small></p>
			</div>
		</div>
		<div class="block aligncenter">
			<a class="inline button outline" href="https://goo.gl/maps/QRwLsmscnAn" target="_blank">Open in Google Maps</a>
		</div>
	</div>

	<!-- Timelapse Section -->
	<div class="timelapse-section">
		<div class="container-video">
			<video class="video-timelapse" loop="" muted="" playsinline="" data-s-src="media/images_mobile/timelapse/night_day_01.mp4?v=2.3" data-l-src="media/images/timelapse/night_day_01.mp4?v=2.3">Your browser does not support HTML5 video.</video>
			<picture class="timelapse-fallback-image">
				<source srcset="media/images/timelapse/night_day_01.jpg?v=2.3" media="(min-width: 640px)">
				<img src="media/images_mobile/timelapse/night_day_01.jpg?v=2.3">
			</picture>
		</div>
	</div>
	<!-- END : Timelapse Section -->

	<!-- Step - 2 -->
	<div id="ga_step_1" class="section-row step-2-base figcap before top-left rera-generic clearfix">
		<div id="video_party" class="video-player">
			<video>
				<source src="media/images/tabletops/party.mp4?v=2.3" type="video/mp4">
				Your browser does not support HTML5 video.
			</video>
			<div id="video_party_gradient" class="video-gradient"></div>
		</div>
		<div class="section-content clearfix">
			<div class="section-title clearfix">
				<i class="section-index step-2-highlight">
					<span class="index-title">Step</span>
					<span class="index-number">2</span>
				</i>
				<p class="h2-text">‘Just Works’ when you're <strong>Partying, Entertaining</strong> or even <strong>Dining in</strong></p>
			</div>
			<div class="section-point clearfix">
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-2/drink.svg?v=2.3"></i>650 sft of personal party space in your apartment <small>The foyer, living, dining, and balcony work as one large uninterrupted space. So, If you'd like 40 friends over for a party, they won't be packed in like a can of sardines.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-2/breeze.svg?v=2.3"></i>Ginormous Sheltered Balconies <small>Imagine being seated at a table for 6, it's drizzling outside, you're on your balcony with your family, enjoying a delicious breakfast. That's exactly what's possible on a 250 sft sheltered balcony.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-2/vine.svg?v=2.3"></i>Your Own Vertical garden <small>It grows on the side of your balcony. It looks stunning; it frees up space on your balcony and brings you all the joys of gardening, on a different dimension.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-2/moon.svg?v=2.3"></i>A 5000 sft Sky Lounge <small>There's no point living in a 17 storey structure if everyone can't enjoy the views from the rooftop. So we designed an exclusive sky lounge on the 16th and 17th floor, it has its own amphitheater, a bar, a barbecue area for your parties, a huge party deck that's partly open to the sky for your guests to spill over into... it can hold upto 200 people.</small></p>
			</div>
		</div>
	</div>

	<!-- Timelapse Section -->
	<div class="timelapse-section">
		<div class="container-video">
			<video class="video-timelapse" loop="" muted="" playsinline="" data-s-src="media/images_mobile/timelapse/balcony_01.mp4?v=2.3" data-l-src="media/images/timelapse/balcony_01.mp4?v=2.3">Your browser does not support HTML5 video.</video>
			<picture class="timelapse-fallback-image">
				<source srcset="media/images/timelapse/balcony_01.jpg?v=2.3" media="(min-width: 640px)">
				<img src="media/images_mobile/timelapse/balcony_01.jpg?v=2.3">
			</picture>
		</div>
	</div>
	<!-- END : Timelapse Section -->

	<!-- Step - 3 -->
	<div id="ga_step_2" class="section-row step-3-base figcap before top-left rera-generic clearfix">
		<div id="video_design" class="video-player">
			<video>
				<source src="media/images/tabletops/design.mp4?v=2.3" type="video/mp4">
				Your browser does not support HTML5 video.
			</video>
			<div id="video_design_gradient" class="video-gradient"></div>
		</div>
		<div class="section-content clearfix">
			<div class="section-title clearfix">
				<i class="section-index step-3-highlight">
					<span class="index-title">Step</span>
					<span class="index-number">3</span>
				</i>
				<p class="h2-text"><strong>Designed</strong> to ‘Just Work’</p>
			</div>
		</div>

		<div class="tab-controls block ga_design_section_tabs">
			<span data-tab-index="js-tab1" class="button inline ga_general_button">Privacy</span>
			<span data-tab-index="js-tab2" class="button on inline ga_general_button">Comfort</span>
			<span data-tab-index="js-tab3" class="button inline ga_general_button">Thermodynamics</span>
		</div>
		<div class="tab-toggle">
			<span class="prev ga_design_section_arrow">Prev</span>
			<span class="next ga_design_section_arrow">Next</span>
		</div>

		<div class="section-content clearfix">

			<!-- TAB - 1  -->
			<div class="tab js-tab1 visuallyhidden">
				<div class="section-description">
					<p class="h4-text">Designed for <strong>Privacy </strong><br><small>We didn't just take a traditional approach and stack a bunch of apartments one on top of the other... we reoriented the apartment units, rotating them 45° to align with the geographic north-south compass heading. This changed everything.</small></p>
				</div>

				<figure class="diagram">
					<img src="media/images/diagrams/45-rotate-offset.svg?v=2.3">
				</figure>

				<div class="section-point clearfix">
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Privacy/commonwall.svg?v=2.3"></i>Minimised common walls between apartments <small>The reoriented apartments are further offset from each other to dramatically reduce the length of the common wall between adjoining apartments.</small></p>
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Privacy/2apartments.svg?v=2.3"></i>Just 2 apartments per floor <small>Barring Block A, which has 3 apartments per floor, both Block B and C have only 2 apartments per floor. To top that, there are 2 lifts per block.</small></p>
				</div>

				<figure class="diagram">
					<img src="media/images/diagrams/common-wall.svg?v=2.3">
				</figure>

				<div class="section-point clearfix">
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Privacy/3sides.svg?v=2.3"></i>Truly open on 3 sides <small>If not more than 3 sides in some cases, thanks to the 45° orientation and the offset.</small></p>
				</div>
			</div>


			<!-- TAB - 2  -->
			<div class="tab js-tab2">
				<div class="section-description">
					<p class="h4-text">Designed for <strong>Comfort </strong><br><small>We intentionally strayed away from cramming as many apartments into this project as we legally could. That is conventionally how the design process starts, with a focus on maximising saleable area. Instead, we went about designing Another Sky with a focus on the end-user's comfort.</small></p>
				</div>

				<div class="section-point clearfix">
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Comfort/doorheight.svg?v=2.3"></i>8ft Tall Doors <small>Most apartments have doors that are around 7 feet high. The average Indian is 5 feet, 5 inches, but even for a 6 footer, an 8 foot door is very imposing and airy to walk through. To give you an idea of scale, most of us would have to jump to touch the top of it and some of us may not even reach :)</small></p>
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Comfort/slabheight.svg?v=2.3"></i>10ft Floor to Floor Height <small>That’s about 4 inches more than the industry standard. Most apartments have a floor to floor height of 9 feet 8 inches.</small></p>
				</div>

				<figure class="diagram">
					<img src="media/images/diagrams/door-ceiling-height.svg?v=2.3">
				</figure>

				<div class="section-point clearfix">
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Comfort/privatezone.svg?v=2.3"></i>Public - Private Zoning within the apartment <small>The apartment has been planned with two distinct zones that run alongside each other, the Private and the Public Zone. So even if there are guests in the living room or the dining area, you can use your bedroom and toilet without the fear of any awkward moments.</small></p>
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Comfort/maid.svg?v=2.3"></i>Maid's quarters. <small>We all know the value of good help at home. Which is why we’ve designed a dedicated bedroom for your maid, with a toilet attached to give them privacy when they need it.</small></p>
				</div>

				<figure class="diagram">
					<img src="media/images/diagrams/public-private-zoning-v1.svg?v=2.3">
				</figure>

				<div class="section-point clearfix">
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Comfort/sound.svg?v=2.3"></i>Superior Heat &amp; Sound insulation <small>The Porotherm bricks we've used have positive acoustic properties. They can block out more sound than regular concrete blocks and bricks. They also exhibit superior heat insulation properties, this keeps the apartment cool.</small></p>
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Comfort/3towers.svg?v=2.3"></i>Only 117 Apartments across 3 towers <small>The ratio of the number of apartments to the size of the property is extremely ideal for residents. By designing large, expansive apartments and providing additional ceiling height, we have effectively ended up reducing the number of apartments that can be built as per the law. This is a direct benefit to a resident. Lesser people using more space</small></p>
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Comfort/space.svg?v=2.3"></i>70% Open Space <small>The high rise structure occupies just 30% of the land, freeing up 70% of space across the property.</small></p>
				</div>

			</div>


			<!-- TAB - 3  -->
			<div class="tab js-tab3 visuallyhidden">
				<div class="section-description">
					<p class="h4-text">Designed for better <strong>Thermodynamics </strong><br><small>Again, that non traditional approach of reorienting the apartments; rotating them 45° to align with the geographic north-south compass heading and some clever play with relief on the surface of the building along with the right choice of materials work together in keeping your home cool and reducing your Air Conditioning bill.</small></p>
				</div>

				<div class="section-point clearfix">
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Thermodynamics/wind.svg?v=2.3"></i>Oriented along the natural wind direction <small>Thanks to the true orientation along the North-South Axis, the apartments line up perfectly with the natural wind direction in Bangalore which is generally from the South / South West towards North/North East. We’ve planned the windows and balconies to make use of this draft and cross ventilate the apartment, allowing winds to permeate through the apartment.</small></p>
				</div>

				<figure class="diagram">
					<img src="media/images/diagrams/wind-direction.svg?v=2.3">
					<figcaption>The 45 degree tilt has taken into account the natural S/SW to N/NW direction of wind in Bangalore city. This allows optimum ventilation &amp; wind flow throughout the house</figcaption>
				</figure>

				<div class="section-point clearfix">
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Thermodynamics/shadow.svg?v=2.3"></i>Self-Shadowed Building Structure reduces heat absorption. <small>The 45º orientation of the apartments yields an unconventional structure with several extruded surfaces that cast shadows on the building across the day. This self-shadowing dramatically reduces the heat absorption of the structure during sunlit hours. Staggering the balconies between floors increases this effect even further.</small></p>
				</div>

				<figure class="diagram">
					<img src="media/images/diagrams/mutual-shading.svg?v=2.3">
					<figcaption>Every 3rd floor has an extended balcony that casts shadows back on the lower floors</figcaption>
				</figure>

				<div class="section-point clearfix">
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Thermodynamics/garden.svg?v=2.3"></i>Gardens on the Terrace. <small>Heat absorption is reduced further by terrace level gardens on the penthouses and the green cover in the double height sky lounge.</small></p>
					<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-3/Thermodynamics/bricks.svg?v=2.3"></i>Heat Insulating Porotherm Bricks </p>
				</div>
			</div>


		</div>
	</div>



	<!-- Masterplan -->
	<div class="masterplan-section clearfix">
		<div class="image block">
			<img src="media/images/masterplan.svg?v=2.3" srcset="media/images_mobile/masterplan.svg?v=2.3 640w, media/images/masterplan.svg?v=2.3 1380w" sizes="100%">
		</div>
	</div>



	<!-- Image Carousel : Interiors -->
	<div class="carousel-section js-carousel" data-carousel-map="something-unique">
		<!-- El Picturs-o -->
		<div class="strip js-strip" data-bridge="js-pictur--active">
			<div class="pictur js-pictur js-pictur--active">
				<img src="media/images/carousel/interior/carousel_1.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_1.jpg?v=270717 640w, media/images/carousel/interior/carousel_1.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur">
				<img src="media/images/carousel/interior/carousel_2.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_2.jpg?v=270717 640w, media/images/carousel/interior/carousel_2.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur">
				<img src="media/images/carousel/interior/carousel_3.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_3.jpg?v=270717 640w, media/images/carousel/interior/carousel_3.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur figcap before bottom-right rera-generic">
				<img src="media/images/carousel/interior/carousel_4.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_4.jpg?v=270717 640w, media/images/carousel/interior/carousel_4.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur">
				<img src="media/images/carousel/interior/carousel_5.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_5.jpg?v=270717 640w, media/images/carousel/interior/carousel_5.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur">
				<img src="media/images/carousel/interior/carousel_6.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_6.jpg?v=270717 640w, media/images/carousel/interior/carousel_6.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur">
				<img src="media/images/carousel/interior/carousel_7.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_7.jpg?v=270717 640w, media/images/carousel/interior/carousel_7.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur">
				<img src="media/images/carousel/interior/carousel_8.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_8.jpg?v=270717 640w, media/images/carousel/interior/carousel_8.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur">
				<img src="media/images/carousel/interior/carousel_9.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_9.jpg?v=270717 640w, media/images/carousel/interior/carousel_9.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur figcap before bottom-right rera-generic">
				<img src="media/images/carousel/interior/carousel_10.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_10.jpg?v=270717 640w, media/images/carousel/interior/carousel_10.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur">
				<img src="media/images/carousel/interior/carousel_11.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_11.jpg?v=270717 640w, media/images/carousel/interior/carousel_11.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur">
				<img src="media/images/carousel/interior/carousel_12.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_12.jpg?v=270717 640w, media/images/carousel/interior/carousel_12.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur">
				<img src="media/images/carousel/interior/carousel_13.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_13.jpg?v=270717 640w, media/images/carousel/interior/carousel_13.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur">
				<img src="media/images/carousel/interior/carousel_14.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_14.jpg?v=270717 640w, media/images/carousel/interior/carousel_14.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur">
				<img src="media/images/carousel/interior/carousel_15.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_15.jpg?v=270717 640w, media/images/carousel/interior/carousel_15.jpg?v=270717 1380w" sizes="100%">
			</div>
			<div class="pictur js-pictur">
				<img src="media/images/carousel/interior/carousel_16.jpg?v=270717" srcset="media/images_mobile/carousel/interior/carousel_16.jpg?v=270717 640w, media/images/carousel/interior/carousel_16.jpg?v=270717 1380w" sizes="100%">
			</div>
		</div>
		<!-- El Dots-o -->
		<div class="controls js-controls">
			<ul class="dot-list js-dot-list" data-bridge="js-control--active">
				<li class="dot js-dot js-control js-control--active" data-slide="1"></li>
				<li class="dot js-dot js-control" data-slide="2"></li>
				<li class="dot js-dot js-control" data-slide="3"></li>
				<li class="dot js-dot js-control" data-slide="4"></li>
				<li class="dot js-dot js-control" data-slide="5"></li>
				<li class="dot js-dot js-control" data-slide="6"></li>
				<li class="dot js-dot js-control" data-slide="7"></li>
				<li class="dot js-dot js-control" data-slide="8"></li>
				<li class="dot js-dot js-control" data-slide="9"></li>
				<li class="dot js-dot js-control" data-slide="10"></li>
				<li class="dot js-dot js-control" data-slide="11"></li>
				<li class="dot js-dot js-control" data-slide="12"></li>
				<li class="dot js-dot js-control" data-slide="13"></li>
				<li class="dot js-dot js-control" data-slide="14"></li>
				<li class="dot js-dot js-control" data-slide="15"></li>
				<li class="dot js-dot js-control" data-slide="16"></li>
				<span class="control prev js-control" data-slide="-"></span>
				<span class="control next js-control" data-slide="+"></span>
			</ul>
		</div>
	</div>




	<!-- Step - 4 -->
	<div id="ga_step_3" class="section-row step-4-base figcap before top-left rera-generic clearfix">
		<div id="video_kids" class="video-player">
			<video>
				<source src="media/images/tabletops/kids.mp4?v=2.3" type="video/mp4">
				Your browser does not support HTML5 video.
			</video>
			<div id="video_kids_gradient" class="video-gradient"></div>
		</div>
		<div class="section-content clearfix">
			<div class="section-title clearfix">
				<i class="section-index step-4-highlight">
					<span class="index-title">Step</span>
					<span class="index-number">4</span>
				</i>
				<p class="h2-text"><strong>Safety</strong> &amp; your <strong>Kid's needs</strong> have been taken care of</p>
			</div>
			<div class="section-point clearfix">
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-4/cap.svg?v=2.3"></i>Schools in the Vicinity <small>As far as play schools go, Euro-Kids is half a kilometer away, that's about a 6 minute walk away. KLAY Prep School is 3 kms away, that's about a 10 minute drive and Little Elly is just 750 mts away, that's about a 10 minute walk. For the older kids, VIBGYOR High is 1.8 kms away. Maxwell High: 3.2 kms. Bangalore International School: 5.7 kms and Royal Concorde International School is just 2.7 km drive from here.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-4/ball.svg?v=2.3"></i>Fun and Games <small>There's a ton of indoor games, a library, a dedicated play area for the smaller ones and of course a swimming pool.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-4/video.svg?v=2.3"></i>CCTV Cameras <small></small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-4/selfie.svg?v=2.3"></i>Video doorbell <small>There are those rare occasions when we need to leave the kids home alone. A Video Doorbell will ensure that they needn't open the door to verify who's knocking.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-4/fire.svg?v=2.3"></i>Fire Suppression Sprinkler System in every room <small>All of us have a childhood story that involved us playing with matches. So whether a little one sets off a match out of pure mischief, or even if an electrical mishap starts a fire, there are sprinklers in every room of the house. These sprinklers start up when a local fire is detected. So if a fire erupts in the kitchen, a sprinkler in the kitchen will ideally suppress the fire before it spreads to other rooms. This localised form of fire suppression, prevents large scale incidents from occurring.</small></p>
			</div>
		</div>
	</div>


	<!-- Timelapse Section -->
	<div class="timelapse-section">
		<div class="container-video">
			<video class="video-timelapse" loop="" muted="" playsinline="" data-s-src="media/images_mobile/timelapse/night_day_02.mp4?v=2.3" data-l-src="media/images/timelapse/night_day_02.mp4?v=2.3">Your browser does not support HTML5 video.</video>
			<picture class="timelapse-fallback-image">
				<source srcset="media/images/timelapse/night_day_02.jpg?v=2.3" media="(min-width: 640px)">
				<img src="media/images_mobile/timelapse/night_day_02.jpg?v=2.3">
			</picture>
		</div>
	</div>
	<!-- END : Timelapse Section -->


	<!-- Construction Report -->
	<div class="section-row construction-section clearfix">
		<!-- Image Carousel : Construction -->
		<div class="carousel-section js-carousel" data-carousel-map="something-unique">
			<!-- El Picturs-o -->
			<div class="strip js-strip" data-bridge="js-pictur--active">
				<div class="pictur js-pictur js-pictur--active">
					<img src="media/images/carousel/construction/carousel_1.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_1.jpg?v=270717 640w, media/images/carousel/construction/carousel_1.jpg?v=270717 1380w" sizes="100%">
				</div>
				<div class="pictur js-pictur">
					<img src="media/images/carousel/construction/carousel_2.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_2.jpg?v=270717 640w, media/images/carousel/construction/carousel_2.jpg?v=270717 1380w" sizes="100%">
				</div>
				<div class="pictur js-pictur">
					<img src="media/images/carousel/construction/carousel_3.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_3.jpg?v=270717 640w, media/images/carousel/construction/carousel_3.jpg?v=270717 1380w" sizes="100%">
				</div>
				<div class="pictur js-pictur">
					<img src="media/images/carousel/construction/carousel_4.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_4.jpg?v=270717 640w, media/images/carousel/construction/carousel_4.jpg?v=270717 1380w" sizes="100%">
				</div>
				<div class="pictur js-pictur">
					<img src="media/images/carousel/construction/carousel_5.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_5.jpg?v=270717 640w, media/images/carousel/construction/carousel_5.jpg?v=270717 1380w" sizes="100%">
				</div>
				<div class="pictur js-pictur">
					<img src="media/images/carousel/construction/carousel_6.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_6.jpg?v=270717 640w, media/images/carousel/construction/carousel_6.jpg?v=270717 1380w" sizes="100%">
				</div>
				<div class="pictur js-pictur">
					<img src="media/images/carousel/construction/carousel_7.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_7.jpg?v=270717 640w, media/images/carousel/construction/carousel_7.jpg?v=270717 1380w" sizes="100%">
				</div>
				<div class="pictur js-pictur">
					<img src="media/images/carousel/construction/carousel_8.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_8.jpg?v=270717 640w, media/images/carousel/construction/carousel_8.jpg?v=270717 1380w" sizes="100%">
				</div>
				<div class="pictur js-pictur">
					<img src="media/images/carousel/construction/carousel_9.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_9.jpg?v=270717 640w, media/images/carousel/construction/carousel_9.jpg?v=270717 1380w" sizes="100%">
				</div>
				<div class="pictur js-pictur">
					<img src="media/images/carousel/construction/carousel_10.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_10.jpg?v=270717 640w, media/images/carousel/construction/carousel_10.jpg?v=270717 1380w" sizes="100%">
				</div>
				<div class="pictur js-pictur">
					<img src="media/images/carousel/construction/carousel_11.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_11.jpg?v=270717 640w, media/images/carousel/construction/carousel_11.jpg?v=270717 1380w" sizes="100%">
				</div>
				<div class="pictur js-pictur">
					<img src="media/images/carousel/construction/carousel_12.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_12.jpg?v=270717 640w, media/images/carousel/construction/carousel_12.jpg?v=270717 1380w" sizes="100%">
				</div>
				<div class="pictur js-pictur">
					<img src="media/images/carousel/construction/carousel_13.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_13.jpg?v=270717 640w, media/images/carousel/construction/carousel_13.jpg?v=270717 1380w" sizes="100%">
				</div>
				<div class="pictur js-pictur">
					<img src="media/images/carousel/construction/carousel_14.jpg?v=270717" srcset="media/images_mobile/carousel/construction/carousel_14.jpg?v=270717 640w, media/images/carousel/construction/carousel_14.jpg?v=270717 1380w" sizes="100%">
				</div>
			</div>
			<!-- El Dots-o -->
			<div class="controls js-controls">
				<ul class="dot-list js-dot-list" data-bridge="js-control--active">
					<li class="dot js-dot js-control js-control--active" data-slide="1"></li>
					<li class="dot js-dot js-control" data-slide="2"></li>
					<li class="dot js-dot js-control" data-slide="3"></li>
					<li class="dot js-dot js-control" data-slide="4"></li>
					<li class="dot js-dot js-control" data-slide="5"></li>
					<li class="dot js-dot js-control" data-slide="6"></li>
					<li class="dot js-dot js-control" data-slide="7"></li>
					<li class="dot js-dot js-control" data-slide="8"></li>
					<li class="dot js-dot js-control" data-slide="9"></li>
					<li class="dot js-dot js-control" data-slide="10"></li>
					<li class="dot js-dot js-control" data-slide="11"></li>
					<li class="dot js-dot js-control" data-slide="12"></li>
					<li class="dot js-dot js-control" data-slide="13"></li>
					<li class="dot js-dot js-control" data-slide="14"></li>
					<span class="control prev js-control" data-slide="-"></span>
					<span class="control next js-control" data-slide="+"></span>
				</ul>
			</div>
		</div>
		<div class="construction-content clearfix">
			<a name="construction"></a>
			<div class="message">
				<p class="h1-text">Ready to <strong style="color: #FF5640;">Occupy</strong></p>
			</div>
		</div>

		<!-- Call For Action -->
		<!-- <div class="call-for-action">
			<div class="call-action">
				<span class="h3-text block">Schedule A Site Visit</span>
				<a class="call-button clearfix" href="tel:08039511624">
					<span class="call-icon fl-left"></span>
					<span class="h2-text">080 3951 1624</span>
				</a>
			</div>
			<div class="vertical-or-separator"><span>Or</span></div>
			<div class="chat-action">
				<div class="inline">
					<div class="h4-text block"><small>Chat with us on Facebook</small></div>
					<div class="container-iframe">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLiving-Walls-1636151606643873&tabs=messages&width=280&height=360&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="280" height="360" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
				</div>
			</div>
		</div> -->
	</div>


	<!-- Timelapse Section -->
	<div class="timelapse-section">
		<div class="container-video">
			<video class="video-timelapse" loop="" muted="" playsinline="" data-s-src="media/images_mobile/timelapse/angle_11.mp4?v=2.3" data-l-src="media/images/timelapse/angle_11.mp4?v=2.3">Your browser does not support HTML5 video.</video>
			<picture class="timelapse-fallback-image">
				<source srcset="media/images/timelapse/angle_11.jpg?v=2.3" media="(min-width: 640px)">
				<img src="media/images_mobile/timelapse/angle_11.jpg?v=2.3">
			</picture>
		</div>
	</div>
	<!-- END : Timelapse Section -->


	<!-- Step - 5 -->
	<div id="ga_step_4" class="section-row step-5-base figcap before top-left rera-generic clearfix">
		<div id="video_fitness" class="video-player">
			<video>
				<source src="media/images/tabletops/fitness.mp4?v=2.3" type="video/mp4">
				Your browser does not support HTML5 video.
			</video>
			<div id="video_fitness_gradient" class="video-gradient"></div>
		</div>
		<div class="section-content clearfix">
			<div class="section-title clearfix">
				<i class="section-index step-5-highlight">
					<span class="index-title">Step</span>
					<span class="index-number">5</span>
				</i>
				<p class="h2-text"><strong>Fitness &amp; Health</strong> Facilities that 'Just Work'</p>
			</div>
			<div class="section-point clearfix">
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-5/clubhouse.svg?v=2.3"></i>A 10,000 sft Clubhouse <small>It's not just eye candy by the way, the clubhouse is spread over 3 floors measuring around 10000 sft in area. It possesses a curated set of daily activities to keep you fit and looking good.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-5/gym.svg?v=2.3"></i>Gymnasium <small></small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-5/squash.svg?v=2.3"></i>Squash Court</p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-5/spa.svg?v=2.3"></i>Two Spas <small></small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-5/pool.svg?v=2.3"></i>Swimming Pool</p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-5/hospital.svg?v=2.3"></i>Hospitals Nearby <small>Columbia Asia is a 9 km drive away. Sri Sai Eye Hospital is 1.7 kms away. Specialist Hospital: 1.9 kms and Chris Super Specialty Hospital is 2.8 kms away.</small></p>
			</div>
		</div>
	</div>


	<!-- Timelapse Section -->
	<div class="timelapse-section">
		<div class="container-video">
			<video class="video-timelapse" loop="" muted="" playsinline="" data-s-src="media/images_mobile/timelapse/angle_12.mp4?v=2.3" data-l-src="media/images/timelapse/angle_12.mp4?v=2.3">Your browser does not support HTML5 video.</video>
			<picture class="timelapse-fallback-image">
				<source srcset="media/images/timelapse/angle_12.jpg?v=2.3" media="(min-width: 640px)">
				<img src="media/images_mobile/timelapse/angle_12.jpg?v=2.3">
			</picture>
		</div>
	</div>
	<!-- END : Timelapse Section -->


	<!-- Step - 6 -->
	<div id="ga_step_5" class="section-row step-6-base clearfix">
		<div class="section-content clearfix">
			<div class="section-title clearfix">
				<i class="section-index step-6-highlight">
					<span class="index-title">Step</span>
					<span class="index-number">6</span>
				</i>
				<p class="h2-text"><strong>Environmentally</strong> Friendly</p>
			</div>
			<div class="section-point clearfix">
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-6/spade.svg?v=2.3"></i>Fly Ash used in plastering <small>Fly ash is a natural by-product of all blast furnaces. It has a positive effect on the strength of the building because of a chemical reaction with the cement used. The building gets stronger with age. It also increases the workability of the mortar mix which renders better finishes to the plastered surface.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-6/vile.svg?v=2.3"></i>Additional Anaerobic Process added to STP <small>In addition to the conventional Aerobic Process, the STP at Another Sky is also equipped with an Anaerobic Process that not only treats toilet and kitchen water, but also digests solid organic waste (vegetable peels,dried leaves etc.) which can be directly fed to the macerator. This not only eliminates the requirement of composting units but can produce useful bio-gas.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-6/drop.svg?v=2.3"></i>Dry fix used instead of Mortar <small>The Use of Wienerberger DRY FIX instead of mortar for masonry ensures a high degree of quality control and a higher bonding strength. Besides delivering a higher quality, it completely eliminates the use of copious amounts of precious fresh water for mortar mixing and curing. Oh, btw...using DRY FIX also ensures NO air pollution.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-6/sand.svg?v=2.3"></i>M-Sand instead of river sand <small>M-Sand is the perfect substitute to river sand and is manufactured by crushing granite rocks.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-6/sun.svg?v=2.3"></i>Solar powered LED lighting for all common areas <small></small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-6/battery.svg?v=2.3"></i>Charge your Electric Car in the Basement <small></small></p>
			</div>
		</div>
	</div>


	<!-- Timelapse Section -->
	<div class="timelapse-section">
		<div class="container-video">
			<video class="video-timelapse" loop="" muted="" playsinline="" data-s-src="media/images_mobile/timelapse/angle_09.mp4?v=2.3" data-l-src="media/images/timelapse/angle_09.mp4?v=2.3">Your browser does not support HTML5 video.</video>
			<picture class="timelapse-fallback-image">
				<source srcset="media/images/timelapse/angle_09.jpg?v=2.3" media="(min-width: 640px)">
				<img src="media/images_mobile/timelapse/angle_09.jpg?v=2.3">
			</picture>
		</div>
	</div>
	<!-- END : Timelapse Section -->


	<!-- Step - 7 -->
	<div id="ga_step_6" class="section-row step-7-base figcap before top-left rera-generic clearfix">
		<div id="video_maintenance" class="video-player">
			<video>
				<source src="media/images/tabletops/maintenance.mp4?v=2.3" type="video/mp4">
				Your browser does not support HTML5 video.
			</video>
			<div id="video_maintenance_gradient" class="video-gradient"></div>
		</div>
		<div class="section-content clearfix">
			<div class="section-title clearfix">
				<i class="section-index step-7-highlight">
					<span class="index-title">Step</span>
					<span class="index-number">7</span>
				</i>
				<p class="h2-text">Optimized for <strong>Custom Interiors </strong> &amp; <strong>Low Maintenance Bills</strong></p>
			</div>
			<div class="section-point clearfix">
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-7/book.svg?v=2.3"></i>Owner's manual -  Each apartment comes with one <small>It tells you where every electrical and water line runs, when you hammer a nail in, you don't hit a live wire. It gives you dimensions of every pane of glass, if something shatters, you know exactly what to order. It has a ton of detail on your home.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-7/tiles.svg?v=2.3"></i>Spare Tiles <small>Tiles are purchased in batches, a specific number of tiles per batch is kept aside. The owner's manual will indicate which batch of tiles were used for that specific apartment. If a spare is needed, you just need to contact Maintenance with the batch number to access spare tiles that will match your apartment.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-7/cmnd.svg?v=2.3"></i>One seamless slab without beams <small>The Foyer, Living Room and Dining area have a single uninterrupted slab without any beams crossing over. This is very conducive to a false ceiling, opens up your options and doesn't restrict design.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-7/graph.svg?v=2.3"></i>Extra high ceilings <small>The extra slab height that we have provided as compared to industry standards enables you to liberally include false ceilings in your interior plans. Rooms will not feel smaller and you can be as creative as you want with the use of cove lighting.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-7/bulb.svg?v=2.3"></i>LED lighting <small>The common areas are lit with LED fixtures, the reduction in power consumption enables the use of Solar Power to run these lights, this reduces ongoing costs of electricity.</small></p>
				<p class="h4-text"><i class="h4-icon"><img src="media/images/icons/step-7/stp.svg?v=2.3"></i>An STP that runs on 1/5th the power <small>The Sewage Treatment Plant we're installing is a low power consumption unit. It basically runs on 1/5th of the electricity used to run a conventional STP.</small></p>
			</div>
		</div>
	</div>



	<!-- Don't watch these ads -->
	<div class="section-row ads-section clearfix">
		<div class="section-content clearfix">
			<div class="aligncenter">
				<p class="h3-text"><strong>Don't</strong> watch these Ads</p>
			</div>
		</div>
		<div id="video_carousel" class="aligncenter block ads">
			<div class="inner">
				<span class="video inline-middle ad">
					<div class="play-button">
						<img data-video-index="1" class="js_modal_trigger" data-modal-trigger="content-video" data-modal-video="https://www.youtube.com/embed/FXrR1kVwgb8?showinfo=0&rel=0&autoplay=1&theme=dark" src="media/images/video/thumbnail/thumbnail_1.jpg?v=2.6">
					</div>
					<small class="caption">Ginormous Balconies</small>
				</span>
				<span class="video inline-middle ad">
					<div class="play-button">
						<img data-video-index="2" class="js_modal_trigger" data-modal-trigger="content-video" data-modal-video="https://www.youtube.com/embed/Y30Zrx_s97M?showinfo=0&rel=0&autoplay=1&theme=dark" src="media/images/video/thumbnail/thumbnail_8.jpg?v=2.6">
					</div>
					<small class="caption">Outer Ring Road</small>
				</span>
				<span class="video inline-middle ad">
					<div class="play-button">
						<img data-video-index="3" class="js_modal_trigger" data-modal-trigger="content-video" data-modal-video="https://www.youtube.com/embed/BPD-28GjVZc?showinfo=0&rel=0&autoplay=1&theme=dark" src="media/images/video/thumbnail/thumbnail_2.jpg?v=2.6">
					</div>
					<small class="caption">Fire Suppression</small>
				</span>
				<span class="video inline-middle ad">
					<div class="play-button">
						<img data-video-index="4" class="active js_modal_trigger" data-modal-trigger="content-video" data-modal-video="https://www.youtube.com/embed/zcyEX5Q5t9w?showinfo=0&rel=0&autoplay=1&theme=dark" src="media/images/video/thumbnail/thumbnail_4.jpg?v=2.6">
					</div>
					<small class="caption">Living Walls TVC</small>
				</span>
				<span class="video inline-middle ad">
					<div class="play-button">
						<img data-video-index="5" class="js_modal_trigger" data-modal-trigger="content-video" data-modal-video="https://www.youtube.com/embed/Vh7EBSVFl8A?showinfo=0&rel=0&autoplay=1&theme=dark" src="media/images/video/thumbnail/thumbnail_3.jpg?v=2.6">
					</div>
					<small class="caption">Party Space</small>
				</span>
				<span class="video inline-middle ad">
					<div class="play-button">
						<img data-video-index="6" class="js_modal_trigger" data-modal-trigger="content-video" data-modal-video="https://www.youtube.com/embed/Kuk0apPwokw?showinfo=0&rel=0&autoplay=1&theme=dark" src="media/images/video/thumbnail/thumbnail_5.jpg?v=2.6">
					</div>
					<small class="caption">Sheltered Balconies</small>
				</span>
				<span class="video inline-middle ad">
					<div class="play-button">
						<img data-video-index="7" class="js_modal_trigger" data-modal-trigger="content-video" data-modal-video="https://www.youtube.com/embed/o1SxWYyxExY?showinfo=0&rel=0&autoplay=1&theme=dark" src="media/images/video/thumbnail/thumbnail_6.jpg?v=2.6">
					</div>
					<small class="caption">Outer Ring Road</small>
				</span>
				<span class="video inline-middle ad">
					<div class="play-button">
						<img data-video-index="8" class="js_modal_trigger" data-modal-trigger="content-video" data-modal-video="https://www.youtube.com/embed/Ucco_7Z5zLY?showinfo=0&rel=0&autoplay=1&theme=dark" src="media/images/video/thumbnail/thumbnail_7.jpg?v=2.6">
					</div>
					<small class="caption">Vertical Garden</small>
				</span>
				<span class="video inline-middle ad">
					<div class="play-button">
						<img data-video-index="9" class="js_modal_trigger" data-modal-trigger="content-video" data-modal-video="https://www.youtube.com/embed/FAGCdkgD0TI?showinfo=0&rel=0&autoplay=1&theme=dark" src="media/images/video/thumbnail/thumbnail_9.jpg?v=2.6">
					</div>
					<small class="caption">Small Details</small>
				</span>
				<span class="video inline-middle ad">
					<div class="play-button">
						<img data-video-index="10"class="js_modal_trigger" data-modal-trigger="content-video" data-modal-video="https://www.youtube.com/embed/HTSHOAgayRs?showinfo=0&rel=0&autoplay=1&theme=dark"  src="media/images/video/thumbnail/thumbnail_10.jpg?v=2.6">
					</div>
					<small class="caption">Home Office</small>
				</span>
				<span class="video inline-middle ad">
					<div class="play-button">
						<img data-video-index="11"class="js_modal_trigger" data-modal-trigger="content-video" data-modal-video="https://www.youtube.com/embed/8Xnh-Ify4DU?showinfo=0&rel=0&autoplay=1&theme=dark"  src="media/images/video/thumbnail/thumbnail_11.jpg?v=2.6">
					</div>
					<small class="caption">Owner's Manual</small>
				</span>
				<span class="video inline-middle ad">
					<div class="play-button">
						<img data-video-index="12"class="js_modal_trigger" data-modal-trigger="content-video" data-modal-video="https://www.youtube.com/embed/RHuWXq1KH_E?showinfo=0&rel=0&autoplay=1&theme=dark"  src="media/images/video/thumbnail/thumbnail_12.jpg?v=2.6">
					</div>
					<small class="caption">Home Office</small>
				</span>
			</div>
			<div class="dots">
				<span data-dot-index="1" class="dot"></span>
				<span data-dot-index="2" class="dot"></span>
				<span data-dot-index="3" class="dot"></span>
				<span data-dot-index="4" class="dot active"></span>
				<span data-dot-index="5" class="dot"></span>
				<span data-dot-index="6" class="dot"></span>
				<span data-dot-index="7" class="dot"></span>
				<span data-dot-index="8" class="dot"></span>
				<span data-dot-index="9" class="dot"></span>
				<span data-dot-index="10" class="dot"></span>
				<span data-dot-index="11" class="dot"></span>
				<span data-dot-index="12" class="dot"></span>
			</div>
		</div>
	</div>


	<!-- Repeat Pricing Section -->
	<div class="section-row repeat-pricing-section clearfix">
		<div class="section-content clearfix">
			<div class="block aligncenter pricing-title">
				<span class="h2-text block"><strong>3 &amp; 4 Bedroom</strong>
				Apartments</span>
				<span class="h4-text block">Ranging From ₹ 1.9cr To 2.9cr</span>
			</div>

			<div class="inline-top pricing-apartment">
				<a  href="apartment-pricing" target="_blank" class="button block ga_general_button aligncenter">Choose Your Apartment</a>
			</div>

			<div class="inline-top pricing-action">
				<div class="form is-hide alignleft">
					<form class="contact_form_overview_part_one">
						<p class="h4-text block aligncenter">Get a Quote</p>

						<p class="form-row">
							<input class="input-field block js_name" type="text">
							<label>Name...</label>
						</p>
						<p class="form-row">
							<input class="input-field block js_phone" type="text">
							<label>Mobile...</label>
						</p>
						<p class="form-row submit-button-section">
							<input class="button black block" type="submit" value="Submit">
						</p>
					</form>

					<form class="contact_form_overview_part_two visuallyhidden">
						<p class="h4-text block aligncenter">More About You</p>

						<p class="form-row">
							<input class="input-field block js_email" type="text">
							<label>Email...</label>
						</p>
						<p class="form-row">
							<select class="input-field block js_my_budget">
								<option selected="true" disabled="true">Budget...</option>
								<option>1.9cr to 2.0cr</option>
								<option>2.1cr to 2.4cr</option>
								<option>2.5cr to 2.9cr</option>
							</select>
						</p>
						<p class="form-row">
							<select class="input-field block js_find_us">
								<option selected="true" disabled="true">How did you find us?</option>
								<option value="Web-O - YouTube">YouTube</option>
								<option value="Web-O - Radio">Radio</option>
								<option value="Web-O - Cinema">Cinema - PVR / INOX</option>
								<option value="Web-O - Google Search">Google Search</option>
								<option value="Web-O - Facebook">Facebook</option>
								<option value="Web-O - Friend">A friend told me</option>
								<option value="Web-O - Hoarding">Saw a hoarding</option>
								<option value="Web-O - Ad Words">Online Image Ad</option>
								<option value="Web-O - LinkedIn">LinkedIn</option>
								<option value="Web-O - Newspaper Ad">Newspaper Ad</option>
								<option value="Web-O - Site Visit">Site Visit</option>
								<option value="Web-O - Others">Others</option>
							</select>
						</p>
						<p class="form-row submit-button-section">
							<input class="button black block" type="submit" value="Submit">
						</p>
					</form>

					<ul class="dots">
						<li>dot</li>
						<li>dot</li>
					</ul>
				</div>
			</div>
		</div>
	</div>



	<!-- Who is Living Walls -->
	<div class="section-row about-section clearfix">
		<div class="section-content clearfix">
			<div class="aligncenter">
				<p class="h3-text">Who is <strong>Living Walls ?</strong></p>

				<p>Living Walls is the brand name we use for all real estate projects undertaken by VDB Infra &amp; Realty Pvt. Ltd....that's us...a sister concern of our parent company, the infrastructure conglomerate; VDB Projects Pvt. Ltd. has been involved in infrastructure development namely roads & highways, storm water drains across South India since it's inception.</p>
				<br>
				<p>We ventured into Real Estate Development in 2011. By virtue of lineage, we inherently adhere to the same high standards of quality and commitment that VDB has been known for over the years. We're a young company at heart, fueled by an urge to create relevant living experiences, the kind that we see ourselves living in.</p>
			</div>
		</div>
		<div class="bobble-container">
			<ul class="bobble-content">
				<li class="bobble-head bobble-head--1">
					<p>Abhishek Reddy<br><small>Executive Director</small></p>
				</li>
				<li class="bobble-head bobble-head--2">
					<p>Vivek Prakash<br><small>GM Business Development</small></p>
				</li>
				<li class="bobble-head bobble-head--3">
					<p> Inamul Hasan<br><small>GM Business Development</small></p>
				</li>
				<li class="bobble-head bobble-head--4">
					<p>Abhinav Reddy<br><small>Executive Director</small></p>
				</li>
				<li class="bobble-head bobble-head--5">
					<p>Siddhant Sivaraman<br><small>AVP - Projects</small></p>
				</li>
				<li class="bobble-head bobble-head--6">
					<p>Srinivas Ammanabrolu<br><small>VP - Projects</small></p>
				</li>
				<li class="bobble-head bobble-head--7">
					<p>Afsar VS<br><small>Asst. Manager Business Development</small></p>
				</li>
				<li class="bobble-head bobble-head--8">
					<p>Syed Muzaffar Hasan<br><small>Head Business Development</small></p>
				</li>
			</ul>
		</div>
	</div>



	<!-- Other Projects -->
	<div class="section-row other-projects-section clearfix">
		<div class="section-content clearfix">
			<div class="aligncenter">
				<p class="h4-text">Our Other Projects</p>
				<div class="other-project aligncenter inline-top">
					<span class="js_modal_trigger project" data-modal-trigger="content-projects" data-modal-project="athena">
						<img class="block" src="media/images/other-projects/athena.jpg?v=2.6">
						<span class="block">
						<strong>ATHENA</strong>
						HRBR Layout<br>
						Bangalore</span>
					</span>
				</div>
				<div class="other-project aligncenter inline-top">
					<span class="js_modal_trigger project" data-modal-trigger="content-projects" data-modal-project="vdb_house">
						<img class="block" src="media/images/other-projects/vdbhouse.jpg?v=2.6">
						<span class="block">
						<strong>VDB HOUSE</strong>
						100ft, Indiranagar<br>
						Bangalore</span>
					</span>
				</div>
				<div class="other-project aligncenter inline-top">
					<span class="js_modal_trigger project" data-modal-trigger="content-projects" data-modal-project="vizag_project">
						<img class="block" src="media/images/other-projects/vizag.jpg?v=2.6">
						<span class="block">
						<strong>VIZAG PROJECT</strong>
						Seethammadhara<br>
						Vizag</span>
					</span>
				</div>
			</div>
		</div>
	</div>



	<!-- Addresses -->
	<div class="section-row addresses-section clearfix">
		<div class="section-content clearfix">
			<div class="address-logo inline-top">
				<img class="fl-left" src="media/images/logo.svg?v=3">
			</div>

			<div class="address-content inline-top">
				<div class="address-1 inline-top">
					<p class="h4-text">Sales Office</p>
					<p>Another Sky<br>
					Banaswadi-Horamavu Jn<br>
					Outer Ring Road<br>
					Bangalore - 5600 43<br>
					<a class="call" href="tel:+918049405726">080 4940 5726</a></p>
				</div>

				<div class="address-2 inline-top">
					<p class="h4-text">Corporate Office</p>
					<p>VDB Infra &amp; Realty Pvt. Ltd.<br>
					VDB House, 842/A<br>
					100ft Road, Indiranagar<br>
					Bangalore - 5600 38<br>
					<a class="call" href="tel:+918025021500">080 2502 1500</a></p>
				</div>

				<small class="mailus block">
					<a href="mailto:info@livingwalls.in" target="_blank">Mail us at : info@livingwalls.in</a>
				</small>

				<small class="copyright block">
					&copy; Copyrights 2015 - Living Walls - All Rights Reserved
				</small>
			</div>
		</div>
	</div>



	<!-- RERA Disclaimers -->
	<style type="text/css">
		/* -- RERA Disclaimers : CSS -- */
		.rera-disclaimer-section {
			padding-top: 0;
			opacity: 0.75; }
		.rera-disclaimer-section p { margin-bottom: 0.75em; }
		.rera-disclaimer {
			color: #CCCCCC;
			font-size: 10px; }
		/* -- END : RERA Disclaimers : CSS -- */
	</style>
	<div class="section-row rera-disclaimer-section clearfix">
		<div class="section-content clearfix">
			<p>Disclaimer</p>
			<div class="rera-disclaimer">

				<p>By using or accessing the Website you agree with the Disclaimer without any qualification or limitation. The Company reserves the right to terminate, revoke, modify, alter, add and delete any one or more of the terms and conditions of the website. The Company shall be under no obligation to notify the visitor of the amendment to the terms and conditions and the visitor shall be bound by such amended terms and conditions.</p>

				<p>The visuals and information contained herein marked as "artistic impression" are artistic impressions being indicative in nature and are for general information purposes only. The visuals contained marked as "generic image" and other visuals /image /photographs are general images and do not have any correlation with the project.</p>

				<p>The imagery used on the website may not represent actuals or may be indicative of style only. Photographs of interiors, surrounding views and location may not represent actuals or may have been digitally enhanced or altered. These photographs may not represent actuals or may be indicative only. Computer generated images, walkthroughs and render images are the artist's impression and are an indicative of the actual designs.</p>

				<p>No information given on this Website creates a warranty or expand the scope of any warranty that cannot be disclaimed under the applicable laws. The information on this website is presented as general information and no representation or warranty is expressly or impliedly given as to its accuracy. Any interested party should verify all the information including designs, plans, specifications, facilities, features, payment schedules, terms of sales etc independently with the Company prior to concluding any decision for buying in any of the project.</p>

				<p>While enough care is taken by the Company to ensure that information in the website are up to date, accurate and correct, the readers/ users are requested to make an independent enquiry with the Company before relying upon the same. Nothing on the website should be misconstrued as advertising, marketing, booking, selling or an offer for sale or invitation to purchase a unit in any project by the Company. The Company is not responsible for the consequences of any action taken by the viewer relying on such material/ information on this website without independently verifying with the Company.</p>
			</div>
		</div>
	</div>



	<!-- Lazaro -->
	<div class="section-row lazaro clearfix">
		<a href="http://lazaro.in" class="block clearfix" target="_blank"><img class="fl-left" src="media/images/lazaro-logo.svg?v=2.3"><strong>www.lazaro.in</strong> - Customer Journey Strategy &amp; Implementation</a>
	</div>

	<!-- Lazaro Signature -->
	<?php // lazaro(); ?>
	<!-- END : Lazaro Signature -->

</div><!-- END : Page Wrapper -->

<!-- Sticky Footer -->
<?php // sticky_pricing(); ?>

<?php // overview_modal(); ?>










<!-- ⬇ All Modals below this point ⬇ -->

<div class="modal"><!-- Modal Wrapper -->
	<!-- Start : Overview Contact Form -->
	<div id="content-text" class="content form">
		<div class="content-text">
			<div class="former visuallyhidden contact" tabindex="-1">

				<!-- Instant Call Form -->
				<!-- <form id="instant_call_back_form">
					<p class="h4-text block aligncenter">In A Hurry?</p>
					<p class="form-row">
						<small class="block aligncenter allcaps description">Share your number for an Instant Callback</small>
						<div class="input-button-combo">
							<i>+91</i>
							<input id="instant_mobile" class="input-field" type="text" placeholder="India only">
							<input class="button ga_call_now" type="submit" value="Call Now">
						</div>
					</p>
				</form> -->

				<div class="aligncenter">
					<p class="h4-text block aligncenter allcaps">Call us now</p>
					<a class="h2-text block" href="tel:+918049405726">080 4940 5726</a>
				</div>

				<div class="or-separator aligncenter"><span><small>or</small></span></div>

				<!--<span class="line-separator"><i style="background-color:#BDBDBD"></i></span>-->

				<!-- Start : Get in Touch Form : Restored Back -->
				<form id="contact_form_overview" class="ga_contact_form_overview">
					<!-- <p class="h4-text block aligncenter">Get A Quote</p> -->
					<p class="h4-text block aligncenter">Get a Quote</p>
					<p class="form-row">
						<label>Name...</label>
						<input id="name" class="input-field block" type="text">
					</p>
					<p class="form-row">
						<label>Email...</label>
						<input id="email" class="input-field block" type="text">
					</p>
					<p class="form-row">
						<label>Mobile...</label>
						<input id="mobile" class="input-field block" type="text">
					</p>
					<p class="form-row">
						<label>Budget</label>
						<select id="my_budget" class="input-field block">
							<option selected="true" disabled="true">Pick One</option>
							<option>1.9cr to 2.0cr</option>
							<option>2.1cr to 2.4cr</option>
							<option>2.5cr to 2.9cr</option>
						</select>
					</p>
					<p class="form-row">
						<label>How did you find us?</label>
						<select id="find_us" class="input-field block">
							<option selected="true" disabled="true">Pick One</option>
							<option value="Web-O - YouTube">YouTube</option>
							<option value="Web-O - Radio">Radio</option>
							<option value="Web-O - Cinema">Cinema - PVR / INOX</option>
							<option value="Web-O - Google Search">Google Search</option>
							<option value="Web-O - Facebook">Facebook</option>
							<option value="Web-O - Friend">A friend told me</option>
							<option value="Web-O - Hoarding">Saw a hoarding</option>
							<option value="Web-O - Ad Words">Online Image Ad</option>
							<option value="Web-O - LinkedIn">LinkedIn</option>
							<option value="Web-O - Newspaper Ad">Newspaper Ad</option>
							<option value="Web-O - Site Visit">Site Visit</option>
							<option value="Web-O - Others">Others</option>
						</select>
					</p>
					<br>
					<p class="form-row submit-button-section">
						<input class="button block" type="submit" value="Submit">
						<div class="loading block aligncenter"><img src="media/images/loadingbar.gif"></div>
					</p>
				</form>
				<!-- End : Get in Touch Form : Restored Back -->

			</div>

			<!-- Start : Split up Quote Form -->
			<!-- Get in Touch Form -->
			<div class="former visuallyhidden quote">
				<form id="contact_form_overview" class="ga_contact_form_overview">
					<p class="h4-text block aligncenter">Get A Quote</p>
					<p class="form-row">
						<label>Name...</label>
						<input id="name" class="input-field block" type="text">
					</p>
					<p class="form-row">
						<label>Email...</label>
						<input id="email" class="input-field block" type="text">
					</p>
					<p class="form-row">
						<label>Mobile...</label>
						<input id="mobile" class="input-field block" type="text">
					</p>
					<p class="form-row">
						<label>Budget</label>
						<select id="my_budget" class="input-field block">
							<option selected="true" disabled="true">Pick One</option>
							<option>1.9cr to 2.0cr</option>
							<option>2.1cr to 2.4cr</option>
							<option>2.5cr to 2.9cr</option>
						</select>
					</p>
					<p class="form-row">
						<label>How did you find us?</label>
						<select id="find_us" class="input-field block">
							<option selected="true" disabled="true">Pick One</option>
							<option value="Web-O - YouTube">YouTube</option>
							<option value="Web-O - Radio">Radio</option>
							<option value="Web-O - Cinema">Cinema - PVR / INOX</option>
							<option value="Web-O - Google Search">Google Search</option>
							<option value="Web-O - Facebook">Facebook</option>
							<option value="Web-O - Friend">A friend told me</option>
							<option value="Web-O - Hoarding">Saw a hoarding</option>
							<option value="Web-O - Ad Words">Online Image Ad</option>
							<option value="Web-O - LinkedIn">LinkedIn</option>
							<option value="Web-O - Newspaper Ad">Newspaper Ad</option>
							<option value="Web-O - Site Visit">Site Visit</option>
							<option value="Web-O - Others">Others</option>
						</select>
					</p>
					<br>
					<p class="form-row submit-button-section">
						<input class="button block" type="submit" value="Submit">
						<div class="loading block aligncenter"><img src="media/images/loadingbar.gif"></div>
					</p>
				</form>

				<div class="or-separator aligncenter"><span><small>or</small></span></div>

				<a  href="apartment-pricing" target="_blank" class="button block aligncenter outline ga_general_button">Apartment Pricing</a>
				<!-- <div>
					<p class="h4-text block aligncenter">Or Call us : <a href="tel:+918049405726">080 4940 5726</a></p>
				</div> -->
			</div>
			<!-- End : Split up Quote Form -->

			<span class="close">&times;</span>
		</div>
	</div>
	<!-- End : Overview Contact Form -->
	<!-- Start : Overview Other Projects -->
	<div id="content-projects" class="content">
		<div class="content-projects">
			<div class="project visuallyhidden aligncenter athena">
				<div class="title h4-text">Athena</div>
				<div class="description">
					<p>A boutique apartment project, Living Walls Athena has a total saleable area of 13600 sft, consisting of only 4 duplex units in sizes of 2788, 2846, 3253 and 3275 sft. Each spacious 3 BHK unit comes with a home theatre room, and two privileged car parking spaces in the basement. The project has been approved by BBMP and is ready for occupation. </p>
				</div>
				<div><img src="media/images/other-projects/athena.jpg?v=2.1"></div>
				<!-- <div><a class="contact h4-text" href="tel:+919394445333">Contact : +91 939 444 5333</a></div> -->
			</div>
			<div class="project visuallyhidden aligncenter vdb_house">
				<div class="title h4-text">VDB House</div>
				<div class="description">
					<p>VDB House is a Retail/Commercial office space, strategically located on Indiranagar 100ft Road, close to the heart of Bangalore's central business district. It is situated close to CMH Road (Metro Station) and is easily accessible from MG Road, which is just 3 kms away. This development project comes with all the necessary amenities such as ample power, DG set for power backup, elevator and basement parking. </p>
				</div>
				<div><img src="media/images/other-projects/vdbhouse.jpg?v=2.1"></div>
				<!-- <div><a class="contact h4-text" href="tel:+919394445333">Contact : +91 939 444 5333</a></div> -->
			</div>
			<div class="project visuallyhidden aligncenter vizag_project">
				<div class="title h4-text">Vizag Project</div>
				<div class="description">
					<p>Exclusive residences are taking form in the affluent and desirable neighbourhood of Seethammadhara - Vizag. You can choose from a 3 bedroom duplex apartment, a sprawling penthouse or a simplex apartment. The internal courtyard or the open to sky terrace gardens add flavours to meaningful space. Homes here are between 1971 sq ft to 3139 sq ft.</p>
				</div>
				<div><img src="media/images/other-projects/vizag.jpg?v=2.1"></div>
				<div><a class="contact h4-text" href="tel:+919394445333">Contact : +91 939 444 5333</a></div>
			</div>
			<span class="close">&times;</span>
		</div>
	</div>
	<!-- End : Overview Other Projects -->
	<!-- Start : Overview Contact Form -->
	<div id="content-video" class="content">
		<div class="video">
			<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen=""></iframe>
		</div>
		<span class="close">&times;</span>
	</div>
	<!-- End : Overview Contact Form -->
</div><!-- END : Modal Wrapper -->

<!--  ☠  MARKUP ENDS HERE  ☠  -->

<?php // lazaro_disclaimer(); ?>









<!-- JS Modules -->
<!--
<script type="text/javascript" src="/js/modules/pageless.js"></script>
<script type="text/javascript" src="/js/modules/video_embed.js"></script>
<script type="text/javascript" src="/js/modules/modal_box.js"></script>
<script type="text/javascript" src="/js/modules/smoothscroll.js"></script>
<script type="text/javascript" src="/js/modules/form.js"></script>
<script type="text/javascript" src="/js/modules/disclaimer.js"></script>
 -->


<!-- build:js /scripts/overview.v2.7.js -->
<!-- utility functions -->
<script type="text/javascript" src="js/modules/util.js"></script>

<!-- Script for Firefox srcset Fix -->
<script type="text/javascript" src="js/overview/browser_specific.js"></script>

<!-- jQuery -->
<script type="text/javascript" src="js/jquery-min.js"></script>

<!-- jQuery Plugins -->
<script type="text/javascript" src="js/jquery.visible.min.js"></script>
<script type="text/javascript" src="js/modules/scrollSmooth.js"></script>
<script type="text/javascript" src="js/hammer.js"></script>

<!-- Design Tabs JS -->
<script type="text/javascript" src="js/modules/tabs.js"></script>

<!-- Sticky Pricing JS -->
<script type="text/javascript" src="js/modules/sticky-pricing.js"></script>

<!-- Modal Window JS -->
<script type="text/javascript" src="js/modules/modal.js"></script>

<!-- Image Carousel JS -->
<script type="text/javascript" src="js/overview/carousel-image.js"></script>

<!-- Video Carousel JS -->
<script type="text/javascript" src="js/overview/carousel-video.js"></script>

<!-- Overview Forms JS -->
<script type="text/javascript" src="js/overview/forms-overview.js"></script>

<!-- Animation JS -->
<script type="text/javascript" src="js/overview/animation.js"></script>

<!-- TimeLapse JS -->
<script type="text/javascript" src="js/overview/timelapse.js"></script>

<!-- Tracking -->
<!-- <script type="text/javascript" src="js/overview/tracking.js"></script> -->

<!-- Start of Google Remarketing -->
<!-- <script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 941040085;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/941040085/?value=0&amp;guid=ON&amp;script=0"/>
	</div>
</noscript> -->
<!-- End of Google Remarketing -->

</body>

</html>
