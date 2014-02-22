<?php //namespace Habari; ?>
<?php $pagename = $theme->multiple_pagename(); ?>
<?php $theme->display('header'); ?>
<?php echo $theme->area('head'); ?>

<h1>
	<?php echo $pagename; ?>
	<?php if ($page > 1) : ?><small>&ndash;&nbsp;Page&nbsp;<?php echo htmlspecialchars($page); ?></small><?php endif; ?>
</h1>

<?php echo $theme->content($posts, 'list'); ?>
<?php echo $theme->paged_nav(); ?>
<?php echo $theme->area('split'); ?>
<?php echo $theme->area('foot'); ?>
<?php $theme->display('footer'); ?>

