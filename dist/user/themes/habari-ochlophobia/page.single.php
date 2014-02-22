<?php $theme->display('header'); ?>
	<div id="content">
		<div id="articles" class="hfeed">
			<div id="entry-<?php echo $post->slug; ?>" class="hentry entry <?php echo $post->statusname , ' ' , $post->tags_class; ?>">
				<div class="entry-head">
					<h1 class="entry-title"><a href="<?php echo $post->permalink; ?>" title="<?php echo strip_tags($post->title); ?>" rel="bookmark"><?php echo $post->title_out; ?></a></h1>
					<ul class="entry-meta">
<?php if ($loggedin) { ?>
						<li class="entry-edit-link">
							<a href="<?php echo $post->editlink; ?>" title="<?php _e('Edit post', 'ochlophobia') ?>"><?php _e('Edit', 'ochlophobia') ?></a>
						</li>
<?php } ?>
					</ul>
				</div>
				<div class="entry-content">
					<?php echo $post->content_out; ?>
				</div>
			</div>
		</div>
<?php $theme->display('comments'); ?>
	</div>
<?php $theme->display('footer'); ?>
