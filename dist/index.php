<?php
	require 'config.php';
	$title = 'KaiNav Conservation Foundation | Home';
	include_once 'static/head.php';
?>

<body>
<?php include_once 'static/noscript.php'; ?>

	<?php include_once 'static/header.php'; ?>

	<section class="slider__index slider--wrapper">
		<ul class="slides">
			<li class="slider--item cheetah">
				<h2 class="slider--text">
					KaiNav Conservation Foundation has a unique outlook on environmental conservation in Africa.
					<div class="bkg"></div>
				</h2>
			</li>
			<li class="slider--item dolphin">
				<h2 class="slider--text">
					KaiNav Conservation Foundation was founded twin brothers Kailen and Navelan Padayachee.
					<div class="bkg"></div>
				</h2>
			</li>
			<li class="slider--item turtle">
				<h2 class="slider--text">
					KaiNav Conservation Foundation is dedicated to Africa’s biodiversity and cultural heritage as well as the sustainable development of rural communities.
					<div class="bkg"></div>
				</h2>
			</li>
		</ul>
	</section> <!-- //slider-wrapper -->

	<section class="grey_dark thumbnails">
		<span class="maxWidth grid">
		<h2 class="heading__section">Current Projects</h2>
		<?php

			include_once 'arrays/projects.array.php';


				echo $projectHTML;

		?>
	</span>
	</section>

	<section class="sponsors"><span class="maxWidth">
		<h2>Our Sponsors</h2>
		<?php

			include_once 'arrays/sponsors.array.php';

				echo '<div class="grid sponsors_grid">';
					echo $sponsorIMGHTML;
				echo	'</div><div class="grid mt20">';
					echo $sponsorHTML;
				echo '</div>';
		?>
	</span></section>


	<?php include_once 'static/footer.php'; ?>


<?php include_once 'static/scripts.php'; ?>
<script>
$(document).ready(function() {
	 $('.slider--text').flexVerticalCenter('margin-top');
});

</script>

</body>
</html>
<?php ob_flush(); ?>
