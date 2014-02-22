<?php //namespace Habari; ?>
<article itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
<h2 id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>" itemprop="name">
	<a href="<?php echo $content->permalink; ?>"><?php echo $content->title_out; ?></a>
</h2>
	<meta content="<?php echo $content->permalink; ?>" itemprop="url">
	<meta itemprop="interactionCount" content="UserComments:<?php echo $content->comments->moderated->count; ?>">
	<p class="meta">
		By <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $content->author->displayname; ?></span></span>,
		<?php echo $theme->content($content, 'pubdate'); ?>
		<?php echo $theme->content( $content, 'icon' ); ?>
	</p>
</header>
<div itemprop="articleBody">
<?php echo $content->excerpt; ?>
</div>
</article>

