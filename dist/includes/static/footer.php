<footer class="section footer footer--main">
	<span class="maxWidth" id="inline-popups">
	<a href="#popup__contact" id="popup-trigger__contact" class="icon icon_paperplane button button__pill center">
		Message us
	</a>

	<?php include 'static/nav.php'; ?>

	<div role="contentinfo">
		&copy;<?=date("Y")?> KaiNav Conservation Foundation
		&emsp;|&emsp;
		Design &amp; development sponsored by
		<a href="http://marnulombard.com/index.php?referrer=<?=$_SERVER['SERVER_NAME']?>" target="_blank" class="link__footer link__marnu">Marnu Lombard</a>
	</div>
	</span>
</footer>

<?php include_once 'static/modals.php'; ?>