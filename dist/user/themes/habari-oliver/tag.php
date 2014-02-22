<?php $theme->display('header'); ?>
<div class="multiple">
	<ol>
		<?php foreach ($posts as $post): ?>
		<?php echo $theme->content($post, 'multiple'); ?>
		<?php endforeach; ?>
	</ol>
</div>
<hr>

<?php if ( !$theme->prev_page_link('a') && !$theme->next_page_link('a') ): ?>
<div class="pubdata">
	<span>Archive for: <?php echo $tag; ?></span>
</div>
<?php endif; ?>

<div class="pagenav">
	<?php echo $theme->prev_page_link( _t( '&laquo;&nbsp;Newer&nbsp;%s', array($tag) ) ); ?>
	<?php echo $theme->next_page_link( _t( 'Older&nbsp;%s&nbsp;&raquo;', array($tag) ) ); ?>
</div>


<?php $theme->display('footer'); ?>
