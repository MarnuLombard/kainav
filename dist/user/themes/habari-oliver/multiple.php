<?php $theme->display('header'); ?>
<div class="multiple">
	<ol>
		<?php foreach ($posts as $post): ?>
		<?php echo $theme->content($post, 'multiple'); ?>
		<?php endforeach; ?>
	</ol>
</div>
<hr>
<div class="pagenav">
	<?php echo $theme->prev_page_link( _t( '&laquo;&nbsp;Newer&nbsp;Posts' ) ); ?>
	<?php echo $theme->next_page_link( _t( 'Older&nbsp;Posts&nbsp;&raquo;' ) ); ?>
</div>


<?php $theme->display('footer'); ?>
