<?php

	// :: ONLY DURING DEVELOPMENT ::
	// debugging
	ini_set( "display_errors", "On" );
	ini_set( "error_reporting", E_ALL );

	// pull in Lazaro disclaimer and footer
	require '../inc/lazaro.php';

?>

<!DOCTYPE html>
<html>
<head>

	<!-- Page Meta -->
	<meta charset="utf-8">

	<title>LivingWalls | Pricing</title>

	<meta name="description"
		content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
			Excepteur sint occaecat cupidatat non proident.">
	<meta name="keywords" content="Keyword_A, Keyword_B, Keyword_C, Keyword_D, Keyword_E">
	<meta name="author" content="Lazaro Advertising">
	<link rel="canonical" href="https://livingwalls.in/another-sky/apartment-pricing">

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

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" type="text/css" href="css/1_standardize.css">
	<link rel="stylesheet" type="text/css" href="css/pages/pricing.css">

	<!-- Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-57124254-5', 'auto');
	  ga('send', 'pageview');
	</script>
	<!-- End of Google Analytics -->

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','//connect.facebook.net/en_US/fbevents.js');

		fbq('init', '1003566166360897');
		fbq('track', "PageView");
	</script>
	<noscript>
		<img height="1" width="1" style="display:none"src="https://www.facebook.com/tr?id=1003566166360897&ev=PageView&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

	<!-- Facebook Conversion Code for Leads - Living Walls Advertising -->
	<script>(function() {
	  var _fbq = window._fbq || (window._fbq = []);
	  if (!_fbq.loaded) {
	    var fbds = document.createElement('script');
	    fbds.async = true;
	    fbds.src = '//connect.facebook.net/en_US/fbds.js';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(fbds, s);
	    _fbq.loaded = true;
	  }
		})();
		window._fbq = window._fbq || [];
	</script>

</head>

<body class="body pricing-page clearfix">

<div class="wrapper">

	<a class="back_to_fade" name="back_to_top"></a>

	<div class="header-nav">
		<div class="section-row">
			<div class="logo-landscape inline-middle">
				<a href="https://livingwalls.in/"><img src="media/images/LW_Logos_2022_lw-AS-large-light.svg?v=2.3"></a>
			</div>
			<div class="phone-number inline-middle">
				<a href="tel:+919663396979" class="call h3-text">+91 96633 96979</a>
			</div>
		</div>
	</div>


	<!-- Apartment Selector -->
	<div class="section-row apartment-selector clearfix">
		<div class="section-content clearfix">
			<!-- Logo -->
			<div class="p-logo block aligncenter">
				<a href="/"><img src="media/images/archive/logo.svg?v=2.1"></a>
			</div>
			<!-- Select Apartment Size -->
			<div class="block apt-sizes-title aligncenter">
				<p class="h3-text">Select an Apartment Size</p>
			</div>


			<!-- Apartment Sizes -->
			<div class="block apt-sizes aligncenter js_apt_type_selector_main">
				<span  class="3BHK inline-top size js_apt_type_selector" data-apt-type="3BHK">
					<div class="title">
						<span class="h3-text block"><strong>3BHK</strong></span>
						<span class="h4-text block">2261 - 2532 sft</span>
					</div>
					<div class="features">
						<div class="pad20"><img width="400" height="300" src="media/images/pricing/sizes/3BHK.jpg?v=2.1"></div>
						<ul>
							<li class="block alignleft clearfix"><span>Wet Kitchen</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Maid's Room</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Vertical Garden</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Home Office</span></li>
							<li class="block alignleft clearfix"><span>Entrance Foyer</span></li>
							<li class="block alignleft clearfix"><span>Garden (G-Floor)</span></li>
							<li class="block alignleft clearfix"><span>Family Area</span></li>
							<li class="block alignleft clearfix"><span>Powder Room</span></li>
						</ul>
						<div class="pad20">
							<span class="block button green-outline">Select</span>
						</div>
					</div>
				</span>

				<span class="3BHKP inline-top size selected js_apt_type_selector" data-apt-type="3BHKP">
					<div class="title">
						<span class="h3-text block"><strong>3BHK+</strong></span>
						<span class="h4-text block">2553 - 3008 sft</span>
					</div>
					<div class="features">
						<div class="pad20"><img width="400" height="300" src="media/images/pricing/sizes/3BHKP.jpg?v=2.1"></div>
						<ul>
							<li class="block alignleft clearfix"><span>Wet Kitchen</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Maid's Room</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Vertical Garden</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Home Office</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Entrance Foyer</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Garden (G-Floor)</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Family Area</span></li>
							<li class="block alignleft clearfix"><span>Powder Room</span></li>
						</ul>
						<div class="pad20">
							<span class="block button green-outline">Select</span>
						</div>
					</div>
				</span>

				<span  class="4BHK inline-top size js_apt_type_selector" data-apt-type="4BHK">
					<div class="title">
						<span class="h3-text block"><strong>4BHK</strong></span>
						<span class="h4-text block">3178 - 3354 sft</span>
					</div>
					<div class="features">
						<div class="pad20"><img width="400" height="300" src="media/images/pricing/sizes/4BHK.jpg?v=2.1"></div>
						<ul>
							<li class="block alignleft clearfix"><span>Wet Kitchen</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Maid's Room</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Vertical Garden</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Home Office</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Entrance Foyer</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Garden (G-Floor)</span></li>
							<li class="block alignleft clearfix"><span>Family Area</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
							<li class="block alignleft clearfix"><span>Powder Room</span><img src="media/images/pricing/greentick.svg?v=2.1"></li>
						</ul>
						<div class="pad20">
							<span class="block button green-outline">Select</span>
						</div>
					</div>
				</span>
			</div>


			<!-- Apartment Sizes Small -->
			<div class="block apt-sizes-small aligncenter js_apt_type_selector_main">
				<span class="features inline-top size">
					<small class="block alignleft clearfix header">&nbsp;</small>
					<small class="block alignleft clearfix">Wet Kitchen</small>
					<small class="block alignleft clearfix">Maid's Room</small>
					<small class="block alignleft clearfix">Vertical Garden</small>
					<small class="block alignleft clearfix">Home Office</small>
					<small class="block alignleft clearfix">Entrance Foyer</small>
					<small class="block alignleft clearfix">Garden *</small>
					<small class="block alignleft clearfix">Family Area</small>
					<small class="block alignleft clearfix">Powder Room</small>
					<small class="block alignleft clearfix footer">&nbsp;</small>
				</span>
				<span class="3BHK inline-top size js_apt_type_selector" data-apt-type="3BHK">
					<small class="block alignleft clearfix header">3BHK</small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix">&nbsp;</small>
					<small class="block alignleft clearfix">&nbsp;</small>
					<small class="block alignleft clearfix">&nbsp;</small>
					<small class="block alignleft clearfix">&nbsp;</small>
					<small class="block alignleft clearfix">&nbsp;</small>
					<small class="block alignleft clearfix footer"><span class="block button green-outline">Pick</span></small>
				</span>
				<span class="3BHKP inline-top size selected js_apt_type_selector" data-apt-type="3BHKP">
					<small class="block alignleft clearfix header">3BHK+</small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix">&nbsp;</small>
					<small class="block alignleft clearfix">&nbsp;</small>
					<small class="block alignleft clearfix footer"><span class="block button green-outline">Pick</span></small>
				</span>
				<span class="4BHK inline-top size js_apt_type_selector" data-apt-type="4BHK">
					<small class="block alignleft clearfix header">4BHK</small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix">&nbsp;</small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix"><img src="media/images/pricing/greentick.svg?v=2.1"></small>
					<small class="block alignleft clearfix footer"><span class="block button green-outline">Pick</span></small>
				</span>
			</div>
			<div class="garden-disclaimer block aligncenter"><br>* Gardens only on the Ground Floor</div>

			<!-- Set Budget -->
			<a class="bud_trigger" href="#bud"></a>
			<a name="bud"></a>
			<div class="block apt-budget-title aligncenter">
				<p class="h3-text">Refine your Budget</p>
			</div>

			<div class="block apt-budget">
				<input type="text" id="range_slider" name="" value="" />
			</div>

			<!-- Find Apartment -->
			<div class="block apt-find aligncenter">
				<a href="#info" id="js_find_apartments" class="button block">Find Apartments</a>
			</div>

			<!-- OR separator before -->
			<div id="call_section_before">
				<div class="or-separator aligncenter" style="padding: 32px 0;"><span><small style="background-color: #303233;">or</small></span></div>
				<div class="phone-number"><p style="color: #999999;" class="h4-text block aligncenter">Call us : <a style="color: #ffffff;" href="tel:+919663396979">+91 96633 96979</a></p></div>
				<div class="pricing-missed-call inline-middle aligncenter">
					<span class="h2-text block">To Schedule a Site visit</span>
					<a href="tel:+919663396979" class="button outline block ga_general_button aligncenter">Call +91 96633 96979</a>
				</div>
			</div>

		</div>
	</div>


	<!-- Breakdance -->
	<span id="breakdance"></span>

	<!-- One More Wrapper -->
	<div class="one-more-wrapper visuallyhidden">
	<a name="info"></a>
		<!-- Availability List -->
		<div class="section-row apartment-list clearfix">
			<div class="section-content clearfix">
				<!-- Sorting -->
				<span class="apt-quant h3-text"><span id="js_apartment_count">5</span> Available <span id="js_apartment_type" class="apt-quant-type">3BHK+</span></span>
				<span class="apt-sort fl-right">
					<span id="price_sort" class="inline button grey-outline grey">Price ↑↓</span>
					<span id="floor_sort" class="inline button grey-outline grey">Floor ↑↓</span>
				</span>
				<!-- List -->
				<div id="listing" class="apt-listing"></div>
				<!-- More Details Modal Window -->
				<dialog id="myDialog"></dialog>
			</div>
		</div>

		<!-- Wishlist -->
		<div class="section-row apartment-wishlist clearfix">
			<div class="section-content clearfix">

				<div class="apt-wishlist">

					<!-- Description -->
					<span class="title h3-text block">My <img src="media/images/pricing/heart-on.svg?v=2.1"> Wishlist</span>
					<p class="description">Add apartments to your wishlist. They will appear below. You can compare, add or remove apartments in this wishlist. Fill the form, we will E-mail you <strong>PDFs with a detailed Cost Breakup &amp; a Floorplan,</strong> only for the apartments in this list. We can then get in touch and assist you with your purchase.</p>
					<!-- Bubbles -->
					<ul id="js_wishlist" class="wishlist">
						<!-- Wish Goes Here -->
					</ul>

				</div>

				<!-- Form -->
				<form id="contact_form_pricing">
					<p class="form-row">
						<input id="name" class="input-field block" type="text" placeholder="Name...">
					</p>
					<p class="form-row">
						<input id="email" class="input-field block" type="text" placeholder="Email...">
					</p>
					<p class="form-row">
						<input id="mobile" class="input-field block" type="text" placeholder="Mobile...">
					</p>
					<p class="form-row">
						<select id="finding_us" class="input-field block">
							<option selected="true" disabled="true">How did you find us?</option>
							<option value="Web-P - YouTube">YouTube</option>
							<option value="Web-P - Radio">Radio</option>
							<option value="Web-P - Cinema">Cinema - PVR / INOX</option>
							<option value="Web-P - Google Search">Google Search</option>
							<option value="Web-P - Facebook">Facebook</option>
							<option value="Web-P - Friend">A friend told me</option>
							<option value="Web-P - Hoarding">Saw a hoarding</option>
							<option value="Web-P - Ad Words">Online Image Ad</option>
							<option value="Web-P - LinkedIn">LinkedIn</option>
							<option value="Web-P - Newspaper Ad">Newspaper Ad</option>
							<option value="Web-P - Site Visit">Site Visit</option>
							<option value="Web-P - Others">Others</option>
						</select>
					</p>
					<p class="form-row js_submit_button_section">
						<!-- <input type="submit" class="block button ga_contact_me_pricing" value="Get in touch"> -->
						<input type="submit" class="block button ga_contact_me_pricing" value="Email PDFs &amp; Get in touch">
					</p>

					<br>
					<a href="media/images/specifications.pdf" target="_blank" class="block button aligncenter outline">Get Specifications PDF</a>
				</form>

				<!-- OR separator before -->
				<div id="call_section_after">
				</div>

				<!-- Thank you iFrame -->
				<iframe id="iframe_for_a" name="iframe_for_a" style="height: 0;"></iframe>
			</div>
		</div>

	</div><!-- End of One More Wrapper -->

	<!-- Sticky Selector -->
	<div class="sticky-selector js_sticky_section_visibility">
		<div class="section-row clearfix">
		<div class="sticky-type inline-middle">
			<span class="button grey">3bhk</span>
			<span class="button green">3bhk+</span>
			<span class="button grey">4bhk</span>
		</div>
		<div class="fl-right">
			<div class="sticky-budget inline-middle">
				<span class="label">Budget :</span>
				<select class="input-field">
					<option selected="true" disabled="true">Select</option>
					<option>₹ 1.9cr</option>
				</select>
				<span class="label">to</span>
				<select class="input-field">
					<option selected="true" disabled="true">Select</option>
					<option>₹ 2.1cr</option>
				</select>
			</div>
			<div class="sticky-find inline-middle">
				<span class="find button">Find</span>
				<span class="help button yellow">?</span>
			</div>
		</div>
		</div>
	</div><!-- End Sticky Selector -->

	<!-- Copyright -->
	<div class="section-row copyright clearfix">
		<small class="block aligncenter">
			&copy; Copyright 2015 - Living Walls - All Rights Reserved
		</small>
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



	<!-- Back to Top -->
	<a id="js_back_to_top" href="#back_to_top" class="back-to-top visuallyhidden">Back to Top</a>

	<!-- Lazaro -->
	<div class="lazaro clearfix">
		<a href="https://lazaro.in" class="block clearfix" target="_blank"><img class="fl-left" src="media/images/lazaro-logo.svg?v=2.1"><strong>www.lazaro.in</strong> - Customer Journey Strategy &amp; Implementation</a>
	</div>

</div><!-- End Wrapper -->

<?php // pricing_modal(); ?>










<!-- ⬇ All Modals below this point ⬇ -->

<div class="modal"><!-- Modal Wrapper -->
	<div id="content-text" class="content">
		<div class="content-text apt-single">
			<div class="header breakup-section block aligncenter">
				<span id="modal_header_apt_number" class="h2-text block">A106</span>
				<span class="block"><strong id="modal_header_apt_size" >3BHK+</strong> on the <strong><span id="modal_header_apt_floor">7th</span> Floor</strong> <span>in Block <strong id="modal_header_apt_block">A</strong></span></span>
				<span class="block">Super Built-up Area - <strong id="modal_header_apt_area">2512 sft</strong></span>
				<!-- <span class="block">Rate per sft - <strong>₹ 7,950</strong></span> -->
			</div>
			<div class="unit-plan block">
				<img src="media/images/pricing/unit-plans/type_10.jpg?v=2.1">
			</div>
			<hr>
			<div class="emi-unwrapper">
				<div class="breakup-section block">
					<div class="breakup block clearfix"><strong>Basic Cost</strong> <strong id="basic_cost" class="fl-right">₹ 00,000,00</strong></div>
					<div class="breakup block clearfix"><span>Exclusive Car Park Rights For :</span></div>
					<div class="breakup block clearfix" style="padding-top: 0;"><span>
						<select id="car_parking_selector" class="input-field inline">
							<option value="1" selected="true">Covered Parking</option>
							<option value="2">Open Surface Parking</option>
							<!-- <option value="3">2 Linked Basement Parking</option> -->
							<option value="4">2 Covered Parking</option>
							<option value="5">1 Covered + 1 Open Surface Parking</option>
							<option value="6">2 Open Surface Parking</option>
						</select>
					</span> <span id="car_parking" class="fl-right">₹ 00,000,00</span></div>
					<div class="breakup block clearfix"><span>Floor Rise</span> <span id="floor_rise" class="fl-right">₹ 00,000,00</span></div>
					<div class="breakup block clearfix"><span>Club Membership</span> <span id="clubhouse" class="fl-right">₹ 00,000,00</span></div>
				</div>
				<!-- <hr>
				<div class="breakup-section block">
					<div class="breakup block clearfix"><span>V.A.T</span> <span id="vat" class="fl-right">₹ 00,000,00</span></div>
					<div class="breakup block clearfix"><span>Service Tax</span> <span id="service_tax" class="fl-right">₹ 00,000,00</span></div>
					<div class="breakup block clearfix"><span>G.S.T</span> <span id="gst" class="fl-right">₹ 00,000,00</span></div>
				</div> -->
				<hr>
				<div class="breakup-section block">
					<div class="breakup block clearfix"><span>Infrastructure Charges</span> <span id="infrastructure" class="fl-right">₹ 00,000,00</span></div>
					<div class="breakup block clearfix"><span>Corpus Deposit</span> <span id="corpus_deposit" class="fl-right">₹ 00,000,00</span></div>
					<!-- <div class="breakup block clearfix"><span>Maintenance Fee (1 Year)</span> <span id="maintenance" class="fl-right">₹ 00,000,00</span></div> -->
					<div class="breakup block clearfix"><span>Legal Charges</span> <span id="legal" class="fl-right">₹ 00,000,00</span></div>
				</div>
				<hr>
			</div>
			<div class="breakup-section">
				<div class="breakup block clearfix"><strong class="h4-text">Total Cost</strong> <strong id="your_price" class="h4-text fl-right">₹ 00,000,00</strong></div>
				<div class="emi-unwrapper breakup block clearfix"><span>Approx. Registration Charges</span> <span id="registration" class="fl-right">₹ 00,000,00</span></div>
			</div>
			<div class="breakup-section block">
				<span class="emi block button blue-outline aligncenter js_calculate_emi" data-price-int="">Calculate Your EMI</span>
			</div>
			<div class="emi-wrapper">
				<div class="breakup-section block">
					<div class="breakup block clearfix"><span class="mobile-center" >Down Payment (In ₹)</span> <span class="mobile-center fl-right"><div class="container-i-field"><input id="down_payment" class="input-field alignright format-currency js_format_currency" type="text"><span class="input-field view-formatted js_view_formatted"></span></div></span></div>
					<div class="breakup block clearfix"><span class="mobile-center" >Tenure (In Months)</span> <span class="mobile-center fl-right"><input id="tenure" class="input-field alignright" type="text"></span></div>
					<div class="breakup block clearfix"><span class="mobile-center" >Interest Rate (% per Annum)</span> <span class="mobile-center fl-right"><input id="interest_pa" class="input-field alignright" type="text"></span></div>
					<br>
					<div class="breakup block clearfix"><span>Loan Amount</span> <span id="loan_amount" class="fl-right">₹ 00,000,00</span></div>
					<div class="breakup block clearfix"><span>Interest Amount</span> <span id="interest_amount" class="fl-right">₹ 00,000,00</span></div>
					<div class="breakup block clearfix"><strong>Total Amount Payable</strong> <strong id="total_price" class="fl-right">₹ 00,000,00</strong></div>
				</div>
				<hr>
				<div class="breakup-section">
					<div class="breakup block clearfix"><strong class="h4-text">Your EMI</strong> <strong id="your_emi" class="h4-text fl-right">₹ 00,000,00</strong></div>
				</div>
			</div><!-- END EMI Wrapper -->
			<div class="breakup-section block clearfix">
				<span class="addwish inline button grey aligncenter js_add_to_fav" data-view-details=""><img src="media/images/pricing/heart-small.svg?v=2.1"><span id="addwish_button_text"> Wishlist</span></span>
				<span class="modal-close inline button black aligncenter fl-right">Close</span>
			</div>
			<div class="close">&times;</div>
		</div>
	</div>
</div><!-- END : Modal Wrapper -->

<!--  ☠  MARKUP ENDS HERE  ☠  -->




<!-- jQuery -->
<script type="text/javascript" src="js/jquery-min.js"></script>

<!-- <script type="text/javascript" src="js/jquery-ui.min.js"></script> -->
<script type="text/javascript" src="js/jquery.visible.min.js"></script>
<script type="text/javascript" src="js/modules/scrollSmooth.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/apartment-pricing/pricing.js"></script>

<!-- Modal Window JS -->
<script type="text/javascript" src="js/modules/modal.js"></script>


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

<!-- <script type="text/javascript">
	$( ".ga_contact_me_pricing" ).on( "pricing_contact_form_validated", function () {

		window._fbq.push(['track', '6034729517419', {'value':'0.00','currency':'INR'}]);

		// Google Conversion Code
		var img = new Image();  //Creates an image using JS to make the request
		img.src = "//www.googleadservices.com/pagead/conversion/941040085/?label=HaJSCIbF32AQ1cPcwAM&script=0";

		// Trigger iframe page load
		// $('#js_form_submission_a_tag').on( "click" , function() {} );
		// $('#js_form_submission_a_tag').trigger("click");
	} );
</script> -->


</body>

</html>
