<?php namespace Habari; ?>
<li id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>" itemscope itemtype="http://schema.org/WebPage">
<?php echo $theme->content( $content, 'pubdate' ); ?>
<?php if ( $content->info->ownername ) : ?>
<span itemprop="author" itemscope itemtype="http://schema.org/Person">
	<meta itemprop="name" content="<?php echo $content->info->ownername; ?>">
</span>
<?php endif; ?>
<meta itemprop="url" content="<?php echo $content->info->url; ?>">
<meta itemprop="description" content="<?php echo \htmlspecialchars(\strip_tags($content->content_out)); ?>">
<a href="<?php echo $content->info->url; ?>" rel="<?php echo $content->xfn_relationships; ?>" title="Link: <?php echo $content->title_out; ?>"><span itemprop="name"><?php echo $content->title_out; ?></span></a>
<?php echo $theme->content( $content, 'icon' ); ?>
<?php if ( $content->xfn_relationships ) : ?>
	<br><span class="meta"><abbr title="XHTML Friend Network">xfn</abbr>: <?php echo implode(', ', preg_split("/[\s,]+/", $content->xfn_relationships)); ?></span>
<?php endif; ?>
</li>
