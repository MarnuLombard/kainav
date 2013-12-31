<?php
	require 'config.php';
	$title = 'Under construction | KaiNav Conservation Foundation';
	include_once 'static/head.php';
?>

<body>
<?php include_once 'static/noscript.php'; ?>

	<?php include_once 'static/header.php'; ?>


	<section class="main" role="main">
		<span class="maxWidth">
      <h1>
        Our site is still under construction...
      </h1>
      <form action="<?= $_SERVER['PHP_SELF']; ?>" class="stylised-form">
        <h3 class="form-title">Why don't we let you know once this page goes live?</h3>
        <label for="name" class="label">
          Your name
        </label>
        <input type="text" name="name" id="name" class="input">
      <br>
        <label for="email" class="label">
          Your email address
        </label>
        <input type="email" name="email" id="email" class="input">
      <br>
        <button class="icon icon_mail submit button button__pill" type="submit">
          Submit
        </button>
      </form>

		</span><!-- //maxWidth -->
	</section><!-- //main -->


	<?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>
</body>
</html>
<?php ob_flush(); ?>
