<?php
/*
 *
 * This page is dedicated for capturing all URLs that start with "trac".
 * 	It simply loads all the tracking and analytics code.
 *
 */

?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-M356D67');</script>
		<!-- End Google Tag Manager -->

	</head>

	<body>

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M356D67" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<script type="text/javascript">

			/*
			 * This function returns a version of the function that you provide
			 * 	that runs only for the first time, regardless of how many times
			 * 	it is called.
			 */
			function runFunctionOnlyOnce ( fn ) {
				var calledAtleastOnce = false;
				return function ( event ) {
					if ( calledAtleastOnce )
						return;
					calledAtleastOnce = true;
					fn( event );
				}
			}

			/*
			 * Report a status of "ready" back to the parent page
			 */
			var reportStatusOfReady = runFunctionOnlyOnce( function ( event ) {
				console.log( "ready." );
				setTimeout( function () {
					window.parent.postMessage( {
						status: "ready"
					}, location.origin );
				}, 1000 );
			} );

			/*
			 * Attach the `reportStatusOfReady` to a bunch of DOM-ready related
			 * 	events.
			 */
			document.onreadystatechange = function () {
				if ( document.readyState == "interactive" )
					reportStatusOfReady();
			};
			window.DOMContentLoaded = reportStatusOfReady;
			window.onload = reportStatusOfReady;

		</script>

	</body>

</html>
