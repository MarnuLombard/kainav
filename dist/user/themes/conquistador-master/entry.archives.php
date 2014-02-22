<?php //namespace Habari; ?>
<?php $theme->display('header'); ?>
<?php echo $theme->area('head'); ?>

<header>
	<h1>The Archives</h1>
    <p><time>Posts made from <?php echo $min_year; ?> to <?php echo $max_year; ?></time></p>
	<p>&#x2766;</p>
</header>

<?php foreach ( $collections as $collection ) : ?>
	<section>
		<h2>The <?php echo $collection->name; ?> Collection</h2>
		<p class="meta"><?php echo $collection->description; ?></p>
		<?php echo $theme->content( $collection->posts, 'list' ); ?>
	</section>
<?php endforeach; ?>

<footer class="meta">
	inspired by the archives at <a href="http://www.mezzoblue.com/" title="mezzoblue: the home of Dave Shea.">mezzoblue</a>
</footer>

<?php echo $theme->area('split'); ?>
<?php echo $theme->area('foot'); ?>
<?php $theme->display('footer'); ?>
