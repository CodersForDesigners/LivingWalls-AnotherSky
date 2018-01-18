
<html>

<head>

	<meta charset="utf-8">

	<!-- <link rel="stylesheet" type="text/css" href="pdf_template/stylesheets/normalize.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="pdf_template/stylesheets/apartment_info.css"> -->
	<link rel="stylesheet" type="text/css" href="../server/pdf_template/stylesheets/normalize.css">
	<link rel="stylesheet" type="text/css" href="../server/pdf_template/stylesheets/apartment_info.css">

</head>





<body>

	<script type="text/php">

		if ( isset( $pdf ) ) {

			$font = $fontMetrics->get_font( "verdana" , "bold" );
			$page_width = $pdf->get_width();
			$page_height = $pdf->get_height();
			$ts = ( new DateTime() )->format( "dS M, Y" );
			$pdf->page_text( 19 , $page_height - 27 , "Generated for ".$GLOBALS[ "name" ]." on " . $ts , $font , 9 , array( 0 , 0 , 0 ) );
			$pdf->page_text( $page_width - 69 , $page_height - 27 , "Page {PAGE_NUM} of {PAGE_COUNT}" , $font , 9 , array( 0 , 0 , 0 ) );

		}

	</script>

	<?php

	require "I.php";

	?>

	<?php

	require "II.php";

	?>

	<?php

	require "III.php";

	?>

	<?php

	require "disclaimer.php";

	?>

</body>

</html>
