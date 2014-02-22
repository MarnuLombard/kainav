<?php $filter = ( $theme->has_context('list') ) ? 'short' : 'out'; ?>
<meta itemprop="dateModified" content="<?php echo $content->modified_iso; ?>">
<time itemprop="datePublished" datetime="<?php echo $content->pubdate_iso; ?>">
	<?php echo $content->{"pubdate_$filter"}; ?>
</time>

