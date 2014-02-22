<?php //namespace Habari; ?>
<?php echo $theme->area('head'); ?>
<div itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
<header id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>">
	<h1 itemprop="name"><?php echo $content->title_out; ?></h1>
	<meta content="<?php echo $content->permalink; ?>" itemprop="url">
	<meta itemprop="interactionCount" content="UserComments:<?php echo $content->comments->moderated->count; ?>">
	<p>
		<span class="meta">By
			<span itemprop="author" itemscope itemtype="http://schema.org/Person">
				<span itemprop="name">
				<?php if ( $content->author->permalink ) : ?>
					<a href="<?php echo $content->author->permalink; ?>"><?php echo $content->author->displayname; ?></a>,
				<?php else : ?>
					<?php echo $content->author->displayname; ?>,
				<?php endif; ?>
				</span>
				<!--<img itemprop="image" src="http://www.gravatar.com/avatar/<?php echo md5(strtolower($content->author->email)); ?>?d=mm&s=60&r=g" class="gravatar author">-->
				<a href="http://plus.google.com/108587268856593448663?rel=author" rel="author" style="display:none">Google+</a>
			</span>
		</span>
		<?php echo $theme->content($content, 'pubdate'); ?>
	</p><p>&#x2766;</p>
</header>
<div itemprop="articleBody">
<?php echo $content->content_out; ?>
</div>
<?php echo $theme->area('split'); ?>
<?php echo $theme->content($content, 'comments'); ?>
</div>
<?php echo $theme->area('foot'); ?>

