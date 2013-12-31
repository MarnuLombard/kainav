<?php
	require 'config.php';
	$title = 'Our Sponsors | KaiNav Conservation Foundation';
	include_once 'static/head.php';
?>

<body>
<?php include_once 'static/noscript.php'; ?>

	<?php include_once 'static/header.php'; ?>


	<section class="main" role="main">
		<span class="maxWidth">
      <h1>Our sponsors</h1>

      <p class="lead">
        We have been helped very much by some kind companies and individauls, see below for their info:
      </p>

      <?php
        include_once 'arrays/sponsors.array.php';

        echo '<div class="grid sponsors_grid">';
          echo $sponsorIMGHTML;
        echo  '</div><div class="grid mt20">';
          echo $sponsorHTML;
        echo '</div>';
      ?>

      <h3>Acknowledgements:</h3>

		</span>
	</section><!-- //main -->


	<?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>

</body>
</html>
<?php ob_flush(); ?>
