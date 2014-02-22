<?php //namespace Habari; ?>
<?php if ( isset($post) && $post->content_type == Post::type('entry') &&  count((array)$post->tags) ) : ?>
<nav>
	<p class="meta tags">
		Tags: <span itemprop="keywords"><?php echo $post->tags_out; ?></span>
	</p>
</nav>
<?php endif; ?>
