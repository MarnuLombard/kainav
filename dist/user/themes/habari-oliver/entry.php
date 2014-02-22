<article id="post-<?php echo $post->id; ?>" class="post" itemscope itemtype="http://schema.org/BlogPosting">
	<header>
		<h1 itemprop="name"><?php echo $post->title_out; ?></h1>
	</header>
	<div class="content" itemprop="articleBody">
	<?php echo $post->content_out; ?>
	</div>
	<footer>
		<hr>

		<div itemprop="keywords" class="tags"><?php echo Format::tag_and_list($post->tags, ' ', ' '); ?></div>
		
		<div class="pubdata">
			<time datetime="<?php echo $post->pubdate->format('Y-m-d\TH:i:s\Z'); ?>" itemprop="datePublished">
				<?php echo $post->pubdate->format('j F'); ?><?php if ($post->pubdate->format('U') < strtotime('1 year ago')) { echo $post->pubdate->format(' Y'); } ?>
			</time>
			&mdash;
			<span itemprop="author" rel="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $post->author->displayname; ?></span></span>
			&mdash;
			<a href="<?php echo $post->permalink; ?>" itemprop="url">Permalink</a>
		</div>
	</footer>
</article>