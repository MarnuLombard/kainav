<?php $theme->display('header'); ?>
<?php echo $theme->area('head'); ?>
<h1>
	Search &ndash; <small>&#8220;<?php echo htmlentities($criteria, ENT_COMPAT, 'UTF-8', false); ?>&#8221;</small>
	<?php if ($page > 1) : ?><small>&ndash;&nbsp;Page&nbsp;<?php echo htmlspecialchars($page); ?></small><?php endif; ?>
</h1>

<form method="get" id="searchform" action="<?php URL::out('display_search'); ?>">
	<p>
		<input type="text" id="s" name="criteria" value="<?php echo htmlentities($criteria, ENT_COMPAT, 'UTF-8', false); ?>"><input type="submit" id="searchsubmit" value="Search">
	</p>
</form>

<?php if ( count($posts) ) : ?>
	<?php echo $theme->content($posts, 'list'); ?>
	<?php echo $theme->paged_nav(); ?>
<?php else : ?>
	<p>Your search - <b><?php echo htmlentities($criteria, ENT_COMPAT, 'UTF-8', false); ?></b> - did not match any documents.
	<p>Suggestions:</p>
	<ul>
		<li>Make sure all words are spelled correctly.</li>
		<li>Try different keywords.</li>
		<li>Try more general keywords.</li>
	</ul>
<?php endif; ?>

<?php echo $theme->area('split'); ?>
<?php echo $theme->area('foot'); ?>
<?php $theme->display('footer'); ?>

