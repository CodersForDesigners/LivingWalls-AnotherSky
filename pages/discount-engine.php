<?php

	// :: ONLY DURING DEVELOPMENT ::
	// debugging
	ini_set( "display_errors", "On" );
	ini_set( "error_reporting", E_ALL );

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
	prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">

<head>

	<!-- Page Meta -->
	<meta charset="utf-8">
	<title>LivingWalls | Discount Engine</title>
	<meta name="description"
		content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
			Excepteur sint occaecat cupidatat non proident.">
	<meta name="keywords" content="Keyword_A, Keyword_B, Keyword_C, Keyword_D, Keyword_E">
	<meta name="author" content="Lazaro Advertising">
	<link rel="canonical" href="http://livingwalls.in/discount-engine">

	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<!-- Favicon -->
	<link rel="icon" href="media/favicon/favicon.ico" type="image/x-icon" />
	<!-- <link rel="apple-touch-icon" sizes="57x57" href="media/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="media/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="media/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="media/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="media/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="media/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="media/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="media/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="media/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="media/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="media/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="media/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="media/favicon/favicon-16x16.png">
	<link rel="manifest" href="media/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#444444">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#444444"> -->

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

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="/css/1_standardize.css">
	<link rel="stylesheet" type="text/css" href="/css/pages/discount-engine.css">

</head>

<body>

<!--  ★  MARKUP GOES HERE  ★  -->

<div class="browser-compatibility-container" id="browser-compatibility-container">
	<div class="notice">

		<h6>please use either firefox or chrome to view this page</h6>
		<h6>also ensure that javascript is enabled</h6>
		<p><a class="btn-update-browser" id="btnUpdateBrowser" href="http://outdatedbrowser.com/" target="_blank">show me how</a></p>
		<!-- <p class="last"><a href="#" class="btn-close-update-browser" id="btnCloseUpdateBrowser" title="Close">&times;</a></p> -->

	</div>
</div>

<!-- show page if browser criteria are met -->
<script type="text/javascript">

	var isChrome = !!window.chrome && !!window.chrome.webstore;
	var isFirefox = !!window.sidebar;

	if ( isFirefox || isChrome ) {

		console.log( "alright." );

		document.getElementById( "browser-compatibility-container" ).style.display = "none";
		document.body.onload = function () {
			document.getElementById( "js-document" ).style.display = "block";
		};

	} else {

		document.body.classList.add( "bc_" );

	}

</script>

<div class="document" id="js-document" style="display: none">

	<figure class="container--logo">
		<img src="media/images/logo.svg">
	</figure>

	<h1 class="h1 align--center text--uc">Discount Engine</h1>

	<form id="the_form">

		<hr class="space m">

		<fieldset class="fieldset">

			<legend class="h6">BD Executive</legend>

			<div class="fieldset--inside">

				<div class="row">
					<label class="grid-1by2 bc text--uc">Name</label>
					<select class="grid-1by2 input--select" id="sale_email" name="sale_email" required>
						<option selected="true" disabled="true">-</option>
						<option value="vivekp@livingwalls.in">Vivek</option>
						<option value="inamulh@livingwalls.in">Inamul</option>
						<option value="syedm@livingwalls.in">Syed</option>
						<option value="afsar@livingwalls.in">Afsar</option>
					</select>
				</div>

			</div>

		</fieldset>

		<hr class="space m">

		<fieldset class="fieldset">

			<legend class="h6">Customer</legend>

			<div class="fieldset--inside">

				<div class="row">
					<label class="grid-1by2 bc text--uc" for="customer_name">Name</label>
					<input class="grid-1by2 input--text input--m" id="customer_name" type="text" required>
				</div>

				<div class="row">
					<label class="grid-1by2 bc text--uc" for="customer_email">ID</label>
					<input class="grid-1by2 input--text input--m" id="customer_id" type="text" required>
				</div>

			</div>

		</fieldset>

		<hr class="space m">

		<fieldset class="fieldset">

			<legend class="h6">Apartment</legend>

			<div class="fieldset--inside">

				<div class="row">
					<label class="grid-1by2 bc text--uc" for="aptType">Type</label>
					<select class="grid-1by2 input--select" id="aptType" name="aptType">
						<!-- <option value=" ">select an apartment type</option> -->
						<option value="3BHK">3BHK</option>
						<option value="3BHKP">3BHK+</option>
						<option value="4BHK">4BHK</option>
					</select>
				</div>

				<div class="row">
					<label class="grid-1by2 bc text--uc" for="apt_number">Number</label>
					<span class="grid-1by2 js-apt-list-container">
						<p>Data is being fetched.....</p>
					</span>
				</div>

				<div class="row">
					<label class="grid-1by2 bc text--uc" for="car_parking">Car Parking</label>
					<select class="grid-1by2 input--select" id="car_parking_feature" name="aptType">
						<option value="350000" selected="true">Covered Parking</option>
						<option value="250000">Open Surface Parking</option>
						<option value="600000">2 Linked Basement Parking</option>
						<option value="700000">2 Covered Parking</option>
						<option value="600000">1 Covered + 1 Open Surface Parking</option>
						<option value="500000">2 Open Surface Parking</option>
					</select>
				</div>

			</div>

				<fieldset class="fieldset">

					<legend class="h6">Custom Requirements</legend>
					<!-- <legend class="h6">custom requirements ( check to enable )</legend> -->

					<div class="fieldset--inside">

						<div class="row">
							<div class="grid-1by2">
								<input id="rate_sqft_tgl" type="checkbox" name="rate_sqft" data-toggle="rate_sqft">
								<label class="bc text--uc" for="rate_sqft_tgl">Rate / sq ft</label>
							</div>
							<input class="grid-1by2 input--text input--m" id="rate_sqft" type="text" disabled required>
						</div>

						<div class="row">
							<div class="grid-1by2">
								<input id="floor_rise_tgl" type="checkbox" name="floor_rise" data-toggle="floor_rise">
								<label class="bc text--uc" for="floor_rise_tgl">Floor rise</label>
							</div>
							<input class="grid-1by2 input--text input--m" id="floor_rise" type="text" disabled required>
						</div>

						<div class="row">
							<div class="grid-1by2">
								<input id="car_parking_cost_tgl" type="checkbox" name="car_parking" data-toggle="car_parking_cost">
								<label class="bc text--uc" for="car_parking_cost_tgl">Car Parking</label>
							</div>
							<input class="grid-1by2 input--text input--m" id="car_parking_cost" type="text" disabled required>
						</div>

						<div class="row">
							<div class="grid-1by2">
								<input id="club_house" type="checkbox" name="club_house">
								<label class="bc text--uc" for="club_house">Clubhouse Discount</label>
							</div>
						</div>

					</div>

				</fieldset>

		</fieldset>

		<section>
			<input class="h9 text--uc button--action" id="the_red_switch" type="submit">
			<p class="align--center h3 space s" id="form-submission-status"></p>
		</section>

	</form>

</div>

<!-- build:js /scripts/sales_end.v1.1.js -->
<!-- utility functions -->
<!-- <script type="text/javascript" src="/js/modules/util.js"></script> -->
<!-- jQuery -->
<script type="text/javascript" src="/js/jquery-min.js"></script>
<script type="text/javascript" src="/js/discount-engine/sales_end.js"></script>
<!-- endbuild -->

<!-- templates -->
<script id="tmpl-input--select" type="text/template">
	<select class="input--select" id="apt_number" style="width: 100%"></select>
</script>

</body>

</html>
