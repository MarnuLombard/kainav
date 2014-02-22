<?php //namespace Habari; ?>
<?php if( $content->comments->moderated->count ) : ?>
<section id="comments">
	<h3 id="comments">Comments</h3>
	<?php if ( $disclaimer = Options::get('Conquistador__comments_disclaimer', false) ) : ?>
		<p class="meta"><?php echo $disclaimer; ?></p>
	<?php endif; ?>

	<?php
	foreach ( $content->comments->moderated as $comment ) {
		echo $theme->content($comment);
	}
	?>
</section>
<?php endif; ?>

<?php if ( !$content->info->comments_disabled ) : ?>

<section id="respond" class="comments-form">
	<h3>Leave a Comment</h3>
	<?php if ( $disclaimer = Options::get('Conquistador__comments_form_disclaimer', false) ) : ?>
		<p class="meta"><?php echo $disclaimer; ?></p>
	<?php endif; ?>

	<?php
		if ( Session::has_messages() ) { Session::messages_out(); }
		$content->comment_form()->out();
	?>
</section>

<?php endif; ?>
