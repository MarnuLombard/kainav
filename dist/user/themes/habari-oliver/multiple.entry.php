<li id="post-<?php echo $content->id; ?>" class="post" itemscope itemtype="http://schema.org/BlogPosting">
	<time datetime="<?php echo $content->pubdate->format('Y-m-d\TH:i:s\Z'); ?>" itemprop="datePublished"><?php echo $content->pubdate->format('d F'); ?><?php if ($content->pubdate->format('U') < strtotime('1 year ago')) { echo $content->pubdate->format(' Y'); } ?></time>
	<span itemprop="name"><a href="<?php echo $content->permalink; ?>" itemprop="url"><?php echo $content->title_out; ?></a></span>
</li>