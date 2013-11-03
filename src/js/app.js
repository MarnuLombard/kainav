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
// Init the magnifid popup modal plugin
$('#popup-trigger__contact').magnificPopup({
  removalDelay: 500, //delay removal by X to allow out-animation
  callbacks: {
    beforeOpen: function() {
       this.st.mainClass = 'mfp-move-from-top';
    }
  },
  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
});

//--> magnific.js
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