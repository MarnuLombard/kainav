			<li id="widget-feeds" class="widget section">
				<h4><?php _e('Subscribe to Feeds', 'ochlophobia'); ?></h4>
				<ul>
					<li><a href="<?php URL::out('atom_feed', array('index' => '1')); ?>"><?php _e('All posts', 'ochlophobia'); ?></a></li>
					<li><a href="<?php URL::out('atom_feed_comments'); ?>"><?php _e('All comments', 'ochlophobia'); ?></a></li>
				</ul>
			</li>
