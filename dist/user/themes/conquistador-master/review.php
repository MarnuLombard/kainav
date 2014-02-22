<?php //namespace Habari; ?>
<?php echo $theme->area('head'); ?>
<div itemscope itemtype="http://schema.org/Review"> 
<header id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>">
	<h1 itemprop="itemreviewed"><?php echo $content->title_out; ?></h1>
	<meta content="<?php echo $content->permalink; ?>" itemprop="url">
	<meta itemprop="interactionCount" content="UserComments:<?php echo $content->comments->moderated->count; ?>">
	<p>
		<span class="meta">By
			<span itemprop="author" itemscope itemtype="http://schema.org/Person">
				<span itemprop="name"><?php echo $content->author->displayname; ?></span>,
				<!-- <img itemprop="image" src="http://www.gravatar.com/avatar/<?php echo md5(strtolower($content->author->email)); ?>?d=mm&s=60&r=g" class="gravatar author"> -->
			</span>
		</span>
		<meta itemprop="dateModified" content="<?php echo $content->modified_iso; ?>">
		<time itemprop="datePublished" datetime="<?php echo $content->pubdate_iso; ?>">
			<?php echo $content->pubdate_out; ?>
		</time>
	</p>
	<p itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="rating">
		<meta itemprop="worstRating" content = "1">
		<meta itemprop="bestRating" content="5">
		<meta itemprop="ratingValue" content="<?php echo $content->rating; ?>">
		<?php echo str_repeat( '<i class="icon-star-3"></i>', $content->rating ); echo str_repeat( '<i class="icon-star-3 blank"></i>', 5 - $content->rating ); ?>
	</p>
</header>

<?php if ( false && $content->asin ) : ?>
<div class="asin meta">
    <a href="http://www.amazon.ca/dp/<?php echo $content->asin; ?>">
        <abbr title="Amazon Standard Identification Number">ASIN</abbr> <?php echo $content->asin; ?>
    </a>
</div>
<?php endif; ?>

<div itemprop="reviewBody">
<?php echo $content->content_out; ?>
</div>

</div>
<?php echo $theme->area('split'); ?>
<?php echo $theme->content($content, 'comments'); ?>
<?php echo $theme->area('foot'); ?>

