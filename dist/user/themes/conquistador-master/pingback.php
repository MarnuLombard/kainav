<?php //namespace Habari; ?>
		<article id="comment-<?php echo $content->id; ?>" class="comment type-<?php echo $content->typename; ?> status-<?php echo $content->statusname; ?>">
			<?php echo $theme->content($content, 'admin'); ?>
            <p>
				<a href="<?php echo $content->url; ?>" rel="external">
                    <?php echo $content->name != NULL ? trim($content->name, "\t\n\r\0\x0B\x160") : trim($content->url); ?>
                </a><br>
                <time class="meta" datetime="<?php echo $content->date->format('c'); ?>"><?php echo $content->date_out; ?></time>
            </p>
        </article>


