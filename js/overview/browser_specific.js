// if firefox, determine viewport width
(function () {
	if ( !!window.sidebar ) {
		var $images = document.querySelectorAll( "[ srcset ]" );
		var viewportIsWide = ( window.innerWidth || ( document.documentElement && document.documentElement.clientWidth ) ) > 640;
		var _i, _len = $images.length, srcURL, $image;
		for (
			_i = 0;
			_i < _len;
			_i += 1
		) {
			$image = $images[ _i ];
			$image.removeAttribute( "srcset" );
			$image.removeAttribute( "sizes" );
			srcURL = $image.getAttribute( "src" );
			$image.removeAttribute( "src" );
			if ( viewportIsWide ) {
				$images[ _i ].setAttribute( "src" , srcURL );
			} else {
				$images[ _i ].setAttribute( "src" , srcURL.replace( /images/ , "images_mobile" ) );
			}
		}
	}
}());
