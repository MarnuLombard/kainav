<article id="post-<?php echo $post->id; ?>" class="post" itemscope itemtype="http://schema.org/BlogPosting">
	<header>
		<h1 itemprop="name"><?php echo $post->title_out; ?></h1>
	</header>
	<div class="content" itemprop="articleBody">
	<?php echo $post->content_out; ?>
	</div>
	<footer>
		<hr>
		<div class="pubdata">
			<time datetime="<?php echo $post->updated->format('Y-m-d\TH:i:s\Z'); ?>" itemprop="dateModified">
				<?php echo $post->updated->format('j F'); ?><?php if ($post->updated->format('U') < strtotime('1 year ago')) { echo $post->updated->format(' Y'); } ?>
			</time>
			&mdash;
			<span itemprop="author" rel="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $post->author->displayname; ?></span></span>
			&mdash;
			<a href="<?php echo $post->permalink; ?>" itemprop="url">Permalink</a>
		</div>
	</footer>
</article>