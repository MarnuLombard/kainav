<?php //namespace Habari; ?>
<?php $theme->set_title('Page Not Found'); echo $theme->display('header'); ?>

<article>
    <header>
	<h1>Page Not Found</h1>
    </header>
	<p style="text-align:center">
		<q cite="http://en.wikipedia.org/wiki/Marvin_the_Paranoid_Android">Funny, how just when you think life can't possibly get any worse it suddenly does.</q>
		<img class="center" style="border:none; box-shadow:none; background:none;" src="<?php Site::out_url('theme') ?>/images/marvin.png">
	</p>
</article>

<?php echo $theme->display('footer'); ?>
