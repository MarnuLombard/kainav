<?php
		if ($post->comments->tweetbacks->approved->count > 0) {
?>
			<h3><?php printf(_n('%1$d Tweetback', '%1$d Tweetbacks', $post->comments->tweetbacks->approved->count, 'ochlophobia'), $post->comments->tweetbacks->approved->count); ?></h3>
			<ol id="tweetbacks" class="hfeed">
<?php
			$i = 1;
			foreach ($post->comments->tweetbacks->approved as $tweet) {
				$class = 'tweetback';
				//Even or Odd
				$class .= ($i % 2 === 0) ? ' even' : ' odd' ;
?>
				<li id="tweetback-<?php echo $tweet->id; ?>" class="<?php echo $class; ?>">
					<ul class="entry-meta">
						<li class="entry-counter">
							<a class="tweetback-permalink" href="<?php echo $post->permalink; ?>#tweetback-<?php echo $tweet->id; ?>" title="<?php _e('Permanent Link to this tweetback', 'ochlophobia'); ?>" rel="bookmark">
								<?php echo $i; ?>
							</a>
						<li>
						<li class="entry-author">
							<h4 class="author">Author</h4>
							<address class="vcard author"><a href="<?php echo $tweet->profile_url; ?>" class="url fn" rel="external"><?php echo $tweet->name_out; ?></a></address>
						</li>
						<li class="entry-pubdate">
							<h4 class="pubdate">Date</h4>
							<a href="<?php echo $tweet->url; ?>" rel="external"><abbr class="tweetback-pubdate published" title="<?php echo $tweet->date->out(HabariDateTime::ISO8601); ?>"><?php echo $tweet->date->out('Y-m-d H:i:s'); ?></abbr></a>
						</li>
					</ul>
					<blockquote class="entry-title entry-content">
						<?php echo $tweet->content; ?>
					</blockquote>
				</li>
<?php
				$i++;
			} ?>
			</ol>
<?php 	} ?>