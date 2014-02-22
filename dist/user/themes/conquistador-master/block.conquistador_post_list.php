<?php if ($content->_show_title) : ?>
<h1>
	<?php echo $content->title ?>
</h1>
<?php endif; ?>
<?php $context = $content->display_context ? $content->display_context : 'list'; ?>
<?php echo $theme->content($posts, $context); ?>
<?php echo $theme->paged_nav(); ?>
