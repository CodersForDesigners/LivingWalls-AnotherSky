<?php
?>
<!--
	for when potential customers walk on-site
	they don't have to go through the web-site and fill stuf
	so this is an alternate (more direct) interface to the back-end Google sheet
 -->

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
	prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">

<head>

	<meta charset="utf-8">
	<title>LivingWalls | Manual Form</title>
	<meta name="description"
		content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
			Excepteur sint occaecat cupidatat non proident.">
	<meta name="keywords" content="Keyword_A, Keyword_B, Keyword_C, Keyword_D, Keyword_E">
	<meta name="author" content="Lazaro Advertising">
	<link rel="canonical" href="http://livingwalls.in/another-sky/paperless">

	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<!-- Favicon -->
	<link rel="icon" href="media/favicon/favicon.ico" type="image/x-icon" />

	<!-- Fonts -->
	<script type="text/javascript" src="http://use.typekit.net/mcm1rbb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/1_standardize.css">
	<link rel="stylesheet" type="text/css" href="css/pages/paperless.css">

</head>

<body>

<!--  ★  MARKUP GOES HERE  ★  -->

<div class="document" id="js-document">

	<figure class="container--logo">
		<img src="media/images/logo.svg">
	</figure>

	<h1 class="h1 align--center text--uc">Paperless Form Entry</h1>

	<form id="the_form">

		<hr class="space m">

		<fieldset class="fieldset">

			<legend class="h6">Basic Information</legend>

			<div class="fieldset--inside">

				<div class="row">
					<label class="grid-1by2 bc text--uc" for="customer_name">Name</label>
					<input class="grid-1by2 input--text input--m" id="customer_name" type="text" required>
				</div>
				<div class="row">
					<label class="grid-1by2 bc text--uc" for="customer_number">Number</label>
					<input class="grid-1by2 input--text input--m" id="customer_number" type="text" required>
				</div>

			</div>

		</fieldset>

		<hr class="space m">

		<fieldset class="fieldset">

			<legend class="h6">More Information</legend>

			<div class="fieldset--inside">


				<div class="row">
					<label class="grid-1by2 bc text--uc" for="customer_email">Email ID</label>
					<input class="grid-1by2 input--text input--m" id="customer_email" type="text">
				</div>

				<div class="row">
					<label class="grid-1by2 bc text--uc" for="customer_email">Budget</label>
					<input class="grid-1by2 input--text input--m" id="customer_budget" type="text">
				</div>

				<div class="row">
					<label class="grid-1by2 bc text--uc" for="customer_email">Source</label>
					<input class="grid-1by2 input--text input--m" id="customer_source" type="text">
				</div>

				<!-- <div class="row">
					<label class="grid-1by2 bc text--uc">Name</label>
					<select class="grid-1by2 input--select" id="sale_email" name="sale_email" required>
						<option selected="true" disabled="true">-</option>
						<option value="vivekp@livingwalls.in">Vivek</option>
						<option value="inamulh@livingwalls.in">Inamul</option>
						<option value="syedm@livingwalls.in">Syed</option>
						<option value="afsar@livingwalls.in">Afsar</option>
					</select>
				</div> -->

			</div>

		</fieldset>

		<hr class="space m">

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
<script type="text/javascript" src="js/jquery-min.js"></script>
<script type="text/javascript" src="js/paperless/paperless.js"></script>
<!-- endbuild -->

</body>
