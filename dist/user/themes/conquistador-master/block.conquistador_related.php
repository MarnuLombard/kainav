<?php //namespace Habari; ?>
<?php if (count($content->posts)) : ?>
<section>
	<h2>Related Posts</h2>
	<?php echo $theme->content($content->posts, 'list'); ?>
</section>
<?php endif; ?>
