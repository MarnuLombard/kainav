<?php //namespace Habari; ?>
<?php if ( User::identify()->loggedin ) : ?>
<ul class="admin">
	<li><a class="editlink" href="<?php echo $content->editlink; ?>"><i class="icon-pencil"></i><b>Edit</b></a></li>
</ul>
<?php endif; ?>

