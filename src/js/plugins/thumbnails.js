// Sourced from http://mattbango.com/notebook/code/hover-zoom-effect-with-jquery-and-css/

$('.thumbnail--caption').each(function (){
	var height = $(this).parent('.thumbnail--link').innerHeight();
	$(this).css('height', height);
	// console.log(height);
});

$('.thumbnail--wrapper').mouseenter(function(e) {
  $(this).children('a').children('img').animate({ height: '100%', marginLeft: '0', marginTop: '0', width: '100%'}, 200);
  $(this).children('a').children('figcaption').animate({opacity:1}, 300);
}).mouseleave(function(e) {
  $(this).children('a').children('img').animate({ height: '110%', marginLeft: '-5%', marginTop: '-5%', width: '110%'}, 200);
  $(this).children('a').children('figcaption').animate({opacity:0}, 300);
});
