String.prototype.htmlSpecialChars = function() {
	return this.replace(/\</g,'<').replace(/\>/g,'>');
}

var adminKeys = new Array('g','o','i','n');
var adminCurrent = 0;

$(window).keydown(function(e){
	var key = String.fromCharCode(e.keyCode).toLowerCase();
	if (adminKeys[adminCurrent].toLowerCase() == key) {
		adminCurrent++;
		if (adminCurrent >= adminKeys.length) {
			document.location = HABARI_URL + '/admin';
			adminCurrent = 0;
		}
	}
	else {
		adminCurrent = 0;
	}
});

$(window).bind('load', function(){
	$("img").baselineAlign({container:'.card'});
});

$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() > 300) {
			$('#totop').fadeIn();
		} else {
			$('#totop').fadeOut();
		}
	});

	$('#totop').click(function() {
		$('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});
	$('#totop').html("<small><i class=\"icon-arrow-up\"></i></small> Back to top");
});

$(document).ready(function() {
	$('a[href=#top]').click(function(){
		$('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});

	$('details').details();

	if ( CONQUISTADOR_USE_FANCYBOX ) {
		$('a.fancybox').fancybox({hideOnContentClick:true});
		$('.fancybox-iframe').fancybox({
			'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'type'          : 'iframe',
			'width'         : '75%',
			'height'        : '70%'
		});
	}

	$(function() {
		var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com'], object, embed"),
		$fluidEl = $("div");
		$allVideos.each(function() {
			$(this)
				// jQuery .data does not work on object/embed elements
				.attr('data-aspectRatio', this.height / this.width)
				.removeAttr('height')
				.removeAttr('width');
		});

		$(window).resize(function() {
			var newWidth = $fluidEl.width();
			$allVideos.each(function() {
				var $el = $(this);
				$el
					.width(newWidth)
					.height(newWidth * $el.attr('data-aspectRatio'));
			});
		}).resize();
	});
});

