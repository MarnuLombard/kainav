$(document).ready(function() {

// Swap out pngs if svg is not supported
	if (Modernizr.inlinesvg) {
		$('img').each(function() {
			var $this = $(this);
			var src = $this.attr("src").replace(".png", ".svg");
			if (!$this.hasClass("no-svg")) {
				$this.attr("src", src);
		}
		});
	}
//-->

}); //docReady