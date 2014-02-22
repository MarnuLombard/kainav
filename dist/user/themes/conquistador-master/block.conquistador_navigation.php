<?php //namespace Habari; ?>
<?php if ( isset($content->next) || isset($content->previous) || isset($content->comments_disabled) ) : ?>
<nav>
	<p class="meta">
		<?php if ( isset($content->next) && $content->next ) : ?>
		<a href="<?php echo $content->next->permalink; ?>" title="<?php echo htmlentities($content->next->title); ?>">&larr; Next Post</a> &nbsp;|&nbsp;
		<?php endif; ?>
		<?php if ( isset($content->comments_disabled) && ! $content->comments_disabled ) : ?>
		<a href="#respond" title="Leave a Comment">&darr; Comment</a> &nbsp;|&nbsp;
		<?php endif; ?>
		<?php if ( isset($content->previous) && $content->previous ) : ?>
		<a href="<?php echo $content->previous->permalink; ?>" title="<?php echo htmlentities($content->previous->title); ?>">Previous Post &rarr;</a>
		<?php endif; ?>
	</p>
</nav>
<?php endif; ?>
