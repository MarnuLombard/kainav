<?php
	if ($post->comments->moderated->count > 0) {
?>
		<div id="comment">
<?php
		//Show Comments
		if ($post->comments->comments->moderated->count > 0) {
?>
			<h3><?php printf(_n('%1$d Comment', '%1$d Comments', $post->comments->comments->moderated->count, 'ochlophobia'), $post->comments->comments->moderated->count); ?></h3>
			<ol id="comments" class="hfeed">
<?php
			$i = 1;
			foreach ($post->comments->comments->moderated as $comment) {
				$class = 'comment';
				if ($comment->status == Comment::STATUS_UNAPPROVED) {
					$class .= ' unapproved';
				}
				//Using email to identify author
				if ($comment->email === $post->author->email) {
					$class .= ' author';
				} else {
					$class .= ' guest';
				}
				//Even or Odd
				$class .= ($i % 2 === 0) ? ' even' : ' odd' ;
?>
				<li id="comment-<?php echo $comment->id; ?>" class="<?php echo $class; ?>">
					<ul class="entry-meta">
						<li class="entry-counter">
							<a class="comment-permalink" href="<?php echo $post->permalink; ?>#comment-<?php echo $comment->id; ?>" title="<?php _e('Permanent Link to this comment', 'ochlophobia'); ?>" rel="bookmark">
								<?php echo $i; ?>
							</a>
						<li>
<?php $theme->gravatar($comment); ?>
						<li class="entry-author">
							<h4 class="author">Author</h4>
<?php 			if ($comment->url) { ?>
							<address class="vcard author"><a href="<?php echo $comment->url_out; ?>" class="url fn" rel="external"><?php echo $comment->name; ?></a></address>
<?php 			} else { ?>
							<address class="vcard author"><span class="fn"><?php echo $comment->name; ?></span></address>
<?php 			} ?>
						</li>
						<li class="entry-pubdate">
							<h4 class="pubdate">Date</h4>
							<abbr class="comment-pubdate published" title="<?php echo $comment->date->out(HabariDateTime::ISO8601); ?>"><?php echo $comment->date->out('F j, Y'); ?></abbr>
						</li>
						<li class="entry-pubtime">
							<h4 class="pubtime">Time</h4>
							<abbr class="comment-pubtime published" title="<?php echo $comment->date->out(HabariDateTime::ISO8601); ?>"><?php echo $comment->date->out('g:i a'); ?></abbr>
						</li>
<?php if ($loggedin) { ?>
						<li class="entry-edit-link">
							<a href="<?php URL::out('admin', array('page' => 'comment', 'id' => $comment->id)); ?>" title="<?php _e('Edit comment', 'mysophobia') ?>"><?php _e('Edit', 'ochlophobia') ?></a>
						</li>
<?php } ?>
					</ul>
					<blockquote class="entry-title entry-content">
<?php if ($comment->status == Comment::STATUS_UNAPPROVED) { ?>
						<p class="comment-moderation-message"><em><?php _e('Your comment is awaiting moderation.', 'ochlophobia') ;?></em></p>
<?php } ?>
						<?php echo $comment->content_out; ?>
					</blockquote>
				</li>
<?php
				$i++;
			} ?>
			</ol>
<?php
		}

		//Show Tweetbacks
		$theme->show_tweetbacks();

		//Show Pingbacks
		if ($post->comments->pingbacks->approved->count > 0) {
?>
			<h3><?php printf(_n('%1$d Pingback', '%1$d Pingbacks', $post->comments->pingbacks->approved->count, 'ochlophobia'), $post->comments->pingbacks->approved->count); ?></h3>
			<ol id="pingbacks" class="hfeed">
<?php
			$i = 1;
			foreach ($post->comments->pingbacks->approved as $pingback) {
				$class = 'pingback';
				//Even or Odd
				$class .= ($i % 2 === 0) ? ' even' : ' odd' ;
?>
				<li id="pingback-<?php echo $pingback->id; ?>" class="<?php echo $class; ?>">
					<blockquote class="entry-title entry-content">
						<address class="entry-author"><a href="<?php echo $pingback->url; ?>" class="url fn" rel="external"><?php echo $pingback->name_out; ?></a></address> <?php _e('on', 'ochlophobia'); ?> <a class="pingback-permalink" href="<?php echo $post->permalink; ?>#pingback-<?php echo $pingback->id; ?>" title="<?php _e('Permanent Link to this pingback', 'ochlophobia'); ?>" rel="bookmark"><abbr class="pingback-pubdate published" title="<?php echo $pingback->date->out(HabariDateTime::ISO8601); ?>"><?php echo $pingback->date->out('M j, Y'); ?></abbr></a>
					</blockquote>
				</li>
<?php
				$i++;
			} ?>
			</ol>
<?php 	} ?>
		</div>
<?php } ?>
<?php $post->comment_form()->out(); ?>
