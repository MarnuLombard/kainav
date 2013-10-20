<?php
	require 'config.php';
	$title = 'KaiNav Condervation Foundation | Home';
	include_once 'static/head.php';
?>

<body>
<?php include_once 'static/noscript.php'; ?>

<div class="grid-wrapper">

	<?php include_once 'static/nav.php'; ?>

	<section class="slider__index slider--wrapper">
		<ul class="slides">
			<li class="slider--item cheetah">
				<h2 class="slider--text">A tagline or something goes here. Perhaps a slogan.</h2>
			</li>
			<li class="slider--item dolphin">
				<h2 class="slider--text">A tagline or something goes here. Perhaps a slogan.</h2>
			</li>
			<li class="slider--item turtle">
				<h2 class="slider--text">A tagline or something goes here. Perhaps a slogan.</h2>
			</li>
		</ul>
	</section> <!-- //slider-wrapper -->

	<section class="main" role="main">

		<div class="text g">

		</div><!-- //body -->

		<aside class="sidebar g">

		</aside><!-- //sidebar -->

	</section><!-- //main -->


	<?php include_once 'static/footer.php'; ?>

</div><!-- //grid-wrapper -->


<?php include_once 'static.scripts.php'; ?>

</body>
</html>
<?php ob_flush(); ?>