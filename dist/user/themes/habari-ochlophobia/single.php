<?php $theme->display('header'); ?>
	<div id="content">
		<div id="articles" class="hfeed">
			<div id="entry-<?php echo $post->slug; ?>" class="hentry entry <?php echo $post->statusname , ' ' , $post->tags_class; ?>">
				<div class="entry-head">
					<h1 class="entry-title"><a href="<?php echo $post->permalink; ?>" title="<?php echo strip_tags($post->title); ?>" rel="bookmark"><?php echo $post->title_out; ?></a></h1>
					<ul class="entry-meta">
						<li class="entry-pubdate">
							<h4 class="pubdate">Date</h4>
							<abbr class="published" title="<?php echo $post->pubdate->out(HabariDateTime::ISO8601); ?>"><?php echo $post->pubdate->out('F j, Y'); ?></abbr>
						</li>
						<li class="entry-pubtime">
							<h4 class="pubtime">Time</h4>
							<abbr class="published" title="<?php echo $post->pubdate->out(HabariDateTime::ISO8601); ?>"><?php echo $post->pubdate->out('g:i a'); ?></abbr>
						</li>
<?php if (count($post->tags)) { ?>
						<li class="entry-tags">
							<h4 class="tags">Tags</h4>
							<?php echo $post->tags_out; ?>
						</li>
<?php } ?>
<?php $theme->language_selector( $post ); ?>
						<li class="entry-comments-link">
							<a href="<?php echo $post->permalink; ?>#comment" title="<?php _e('Comments to this post', 'ochlophobia') ?>"><?php printf(_n('%1$d Comment', '%1$d Comments', $post->comments->approved->count, 'ochlophobia'), $post->comments->approved->count); ?></a>
						</li>
<?php if ($loggedin) { ?>
						<li class="entry-edit-link">
							<a href="<?php echo $post->editlink; ?>" title="<?php _e('Edit post', 'ochlophobia') ?>"><?php _e('Edit', 'ochlophobia') ?></a>
						</li>
<?php } ?>
					</ul>
				</div>
				<div class="entry-content">
					<?php echo $post->content_out; ?>
					<?php $theme->yourmood( $post ); ?>
				</div>
			</div>
		</div>
		<div id="pager">
			<ul>
<?php if ($previous = $post->descend()) { ?>
				<li class="prev-entry"><a href="<?php echo $previous->permalink ?>" title="<?php echo $previous->title; ?>">&larr; <?php echo $previous->title; ?></a></li>
<?php } else { ?>
				<li class="prev-entry"><span>&larr;</span></li>
<?php } ?>
<?php if ($next = $post->ascend()) { ?>
				<li class="next-entry"><a href="<?php echo $next->permalink ?>" title="<?php echo $next->title; ?>"><?php echo $next->title; ?> &rarr;</a></li>
<?php } else { ?>
				<li class="next-entry"><span>&rarr;</span></li>
<?php } ?>
			</ul>
		</div>
<?php $theme->display('comments'); ?>
	</div>
<?php $theme->display('footer'); ?>
