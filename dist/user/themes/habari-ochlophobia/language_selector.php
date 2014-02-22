<?php if ( count( $languages ) > 0 ): ?>
<li class="language-selector">
	<h4>Languages</h4>
	<ul>
<?php foreach ( $languages as $lang ): ?>
		<li class="<?php echo $lang['code']; if ( $current_language === $lang['code'] ) echo ' current' ?>"><a href="<?php echo $lang['url']; ?>"><img src="<?php echo $lang['flag']; ?>" alt="<?php echo $lang['name']; ?>" /></a></li>
<?php endforeach; ?>
	</ul>
</li>
<?php endif; ?>