<?php $theme->display('header'); ?>
<?php echo $theme->area('head'); ?>
<h1>
	Tagged &#8220;<?php echo htmlspecialchars( Tags::get_by_slug($tag)->term_display ); ?>&#8221;
	<?php if ($page > 1) : ?><small>&ndash;&nbsp;Page&nbsp;<?php echo htmlspecialchars($page); ?></small><?php endif; ?>
</h1>

<?php echo $theme->content($posts, 'list'); ?>
<?php echo $theme->paged_nav(); ?>
<?php echo $theme->area('split'); ?>

<p class="meta" style="margin-top:4em;">
	Find additional Posts by browsing through all the tags used on this site:<br>
	<?php echo $tags; ?>
</p>

<?php echo $theme->area('foot'); ?>
<?php $theme->display('footer'); ?>

