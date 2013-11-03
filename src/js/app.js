$(document).ready(function() {
// Swap out svg if not supported
	if (!Modernizr.inlinesvg) {
		$('img').each(function() {
			var src = $(this).attr("src").replace(".svg", ".png");
				$(this).attr("src", src);
		});
	}
//--> svg swap
//
// Init  the glide js plugin
	var glide = $('.slider--wrapper').glide({
		/*arrowRightText: '<img src="img/sliders/slider-arrow--right.svg">',
		arrowLeftText: '<img src="img/sliders/slider-arrow--left.svg">'*/
		arrows: false,
		nav: false
	});
//--> glide.js
//
}); //docReady