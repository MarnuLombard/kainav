
<div class="multiple">
	<ol>
		<?php foreach ($content->archive_all_posts as $post): ?>
		<?php echo $theme->content($post, 'multiple'); ?>
		<?php endforeach; ?>
	</ol>
</div>