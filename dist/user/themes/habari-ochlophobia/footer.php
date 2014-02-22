	<div id="footer">
		<ul id="sidebar" class="xoxo">
<?php
			$theme->freshcomments();
			$theme->display('recententries.widget');
			$theme->display('feedlink.widget');
?>
			<li class="section">
<?php
				$theme->twitterlitte();
?>
				<ul id="widget-copyright" class="widget">
					<li><h4>Powered by</h4> <a href="http://www.habariproject.org/" title="Habari">Habari</a> and <a href="http://blog.bcse.info/ochlophobia/">Ochlophobia</a>.</li>
					<li><h4><a href="http://creativecommons.org/licenses/by-sa/3.0/deed.zh_TW" rel="license">Copyright &copy;</a></h4> 1985&ndash;<?php echo date('Y'); ?> <a href="<?php Site::out_url('habari'); ?>">Joel Lee</a>.</li>
				</ul>
			</li>
		</ul>
<?php $theme->footer(); ?>
	</div>
</body>
</html>