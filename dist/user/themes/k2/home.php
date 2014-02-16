<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php $theme->display( 'header'); ?>
<!-- home -->
	<div class="content">
	<div id="primary">
		<div id="primarycontent" class="hfeed">
<?php foreach ( $posts as $post ) { ?>
		<div id="post-<?php echo $post->id; ?>" class="<?php echo $post->statusname; ?>">

			<div class="entry-head">
			<h3 class="entry-title"><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h3>
			<small class="entry-meta">
				<span class="chronodata"><abbr class="published"><?php echo $post->pubdate->text_format('<span>{M}</span> <span>{d}</span>, <span>{Y}</span>'); ?></abbr></span> <?php if ( $show_author ) { _e( 'by %s', array( $post->author->displayname ), 'k2' ); } ?>
			<?php echo $theme->comments_link($post); ?>
<?php if ( $loggedin ) { ?>
				<span class="entry-edit"><a href="<?php echo $post->editlink; ?>" title="<?php _e('Edit post'); ?>"><?php _e('Edit'); ?></a></span>
<?php } ?>
<?php if ( count( $post->tags ) > 0 ) { ?>
				<span class="entry-tags"><?php echo $post->tags_out; ?></span>
<?php } ?>
			</small>
			</div>

			<div class="entry-content">
			<?php echo $post->content_out; ?>

			</div>

		</div>
<?php } ?>
		</div>

		<div id="page-selector">

		<?php echo $theme->prev_page_link(); ?> <?php echo $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php echo $theme->next_page_link(); ?>

		</div>

	</div>

	<hr>

	<div class="secondary">

<?php $theme->display ( 'sidebar' ); ?>

	</div>

	<div class="clear"></div>
	</div>
<!-- /home -->
<?php $theme->display ('footer'); ?>