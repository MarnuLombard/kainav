<?php
	require 'config.php';
	$title = 'Test | Kainav';
	include_once 'static/head.php';
?>
<style>
/* --- Container configuration ---------------------------------------------------------- */
.thumbnail--wrapper {
    padding: 30% 0 0;
    border: 3px solid #eee;
    /*float: left;*/
    max-height: 420px;
    margin: 0 9px 9px 0;
    overflow: hidden;
    position: relative;
    /*width: 450px;*/
}

/* This is so that the 2nd thumbnail in each row fits snugly. You will want to add a similar
   class to the last thumbnail in each row to get rid of the margin-right. */
.thumbnail--wrapper:first-of-type {
    /*margin-right: 9px;*/
}

/* --- Link configuration that contains the image and label ----------------------------- */
.thumbnail--wrapper a {
    display: block;
    position: absolute;
    top: 0;
}

.thumbnail--wrapper a img {
    height: 110%;
    margin-left: -5%;
    /*position: relative;*/
    margin-top: -5%;
    width: 110%;
}

/* --- Label configuration -------------------------------------------------------------- */
.thumbnail--wrapper a figcaption {
    display: none;
    font-size: 3.0em;
    font-weight: bold;
    height: 100%;
    position: absolute;
    text-align: center;
    text-decoration: none;
    width: 100%;
    z-index: 100;
}
    .thumbnail--wrapper a figcaption em {
        display: block;
        font-size: 0.45em;
        font-weight: normal;
    }

/* --- Dark hover background ------------------------------------------------------------ */
.thumbnail--caption {
    background-color: rgba(15, 15, 15, 0.6);
    color: #fff;
    text-shadow: #000 0px 0px 20px;
}
    .thumbnail--caption em {
        color: #ccc;
    }

/**
 * You could create multiple hover background classes for different looks depending on the
 * image type. Use your imagination!
 */
</style>
<body>
<?php include_once 'static/noscript.php'; ?>

	<?php include_once 'static/nav.php'; ?>

	<section class="main" role="main">

		<!--\*<figure class="thumbnail--wrapper clearfix">
	    <a href="http://www.flickr.com/photos/matt_bango/3479048548/">
	      <figcaption class="thumbnail--caption">Northern Saw-whet Owl <em>Photo by Matt Bango</em></figcaption>
	      <img src="img/jpeg.jpg" alt="Northern Saw-Whet Owl" />
	    </a>
		</figure>\*-->
		<figure class="grid__item one-third thumbnail--wrapper clearfix">
			<a class= "clearfix" href="/projects/bufallo.php">
				<figcaption class="thumbnail--caption">
					<strong>
						$project
					</strong>
					<br>
					Lorem ipsum dolor sit amet.
				</figcaption>
				<img src="img/projects/bufallo_thumb.jpg" class="four-fifths center" alt="{$project}">
			</a>
		</figure>
	</section><!-- //main -->

	<section>

	</section>


	<?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>

<script>
// Sourced from http://mattbango.com/notebook/code/hover-zoom-effect-with-jquery-and-css/
$(document).ready(function() {
    $('.thumbnail--wrapper').mouseenter(function(e) {
        $(this).children('a').children('img').animate({ height: '100%', marginLeft: '0', marginTop: '0', width: '100%'}, 200);
        $(this).children('a').children('figcaption').fadeIn(300);
    }).mouseleave(function(e) {
        $(this).children('a').children('img').animate({ height: '110%', marginLeft: '-5%', marginTop: '-5%', width: '110%'}, 200);
        $(this).children('a').children('figcaption').fadeOut(300);
    });
});
</script>

</body>
</html>
<?php ob_flush(); ?>