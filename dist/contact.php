<?php
	require 'config.php';
	$title = 'Contact Us | KaiNav Conservation Foundation';
	include_once 'static/head.php';
?>

<body>
<?php include_once 'static/noscript.php'; ?>

	<?php include_once 'static/header.php'; ?>


	<section>
		<span class="maxWidth">

			<?php include_once 'static/contact-form.php'; ?>
		</span>
	</section>

	<section>
		<span class="maxWidth">
			<h2>Find Us</h2>

			<div id="map"></div>

		</span>
	</section>


	<?php include_once 'static/footer.php'; ?>

<?php	include_once 'static/scripts.php'; ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvXdgLNR4YlKB2FMVu3kdFbrWFreDdMCo&sensor=false"></script>
<script src="js/map.min.js"></script>

</body>
</html>
<?php ob_flush(); ?>
