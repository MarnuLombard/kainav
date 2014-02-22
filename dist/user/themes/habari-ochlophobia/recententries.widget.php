			<li id="widget-entries" class="widget section">
				<h4><?php _e('Recent Posts', 'ochlophobia'); ?></h4>
				<ul>
<?php
	if ($recent_entries) {
		foreach ($recent_entries as $entry) {
?>
					<li><a href="<?php echo $entry->permalink; ?>" title="<?php echo strip_tags($entry->title); ?>" rel="bookmark"><?php echo $entry->title_out; ?></a></li>
<?php
		}
	}
	else {
?>
					<li><?php _e('There are currently no posts in this blog.', 'ochlophobia'); ?></li>
<?php
	}
?>
				</ul>
			</li>
