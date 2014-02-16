<?php
  $theme->display ( 'head' );
  $theme->display ( 'header' );
?>


<div id="main-posts">
  <?php $posts = (array) $posts; ?>
  <?php if ( count( $posts ) ): ?>
    <?php $post =reset($posts); ?>
    <div class="<?php echo $post_class?>">
      <?php if ( count( $post->tags ) ) : ?>
        <div class="post-tags">
          <?php echo $post->tags_out;?>
        </div>
      <?php endif; ?>
      <div class="post-title">
        <h3>
          <a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a>
        </h3>
      </div>
      <div class="post-sup">
        <span class="post-date">
          <?php $post->pubdate->out(); ?>
        </span>
        <span class="post-comments-link">
          <a href="<?php echo $post->permalink.'#comment-form'; ?>" title="<?php _e( "Comments on this post" ); ?>"><?php echo $theme->post_comments_link( $post ); ?></a>
        </span>
        <br class="clear">
      </div>
      <div class="post-entry">
        <?php echo $post->content_out; ?>
      </div>
      <div class="post-footer">
        <?php if ( $loggedin ) : ?>
          <span class="post-edit">
            <a href="<?php echo $post->editlink; ?>" title="<?php _e( "Edit post" ); ?>"><?php _e( "Edit" ); ?></a>
          </span>
        <?php endif; ?>
      </div>
    </div>
  <?php else: ?>
    <p class="noposts prompt"><?php _e( "No posts published, yet." ); ?></p>
  <?php endif; ?>

</div>
