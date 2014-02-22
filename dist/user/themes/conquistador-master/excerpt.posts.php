<?php //namespace Habari; ?>
<?php if ( count($content) > 0 ) : ?>
	<?php
	foreach ($content as $post) {
		echo $theme->content($post, 'excerpt');
	}
	?>

<?php else : ?>
<p>Your request - <b><?php echo htmlentities(Controller::get_stub()); ?></b> - did not match any documents.
<p>Suggestions:</p>
<ul>
	<li>Try looking at the <a href="<?php Site::out_url('habari'); ?>">Home Page</a>.</li>
	<li>Try looking at the <a href="<?php URL::out('conquistador_archives'); ?>">Archives</a>.</li>
</ul>
<?php endif; ?>
