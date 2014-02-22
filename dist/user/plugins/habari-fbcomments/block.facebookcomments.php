<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
	FB.init({appId: '<?php echo $content->app_id; ?>', status: true, cookie: true, xfbml: true});
};
(function() {
	var e = document.createElement('script');
	e.type = 'text/javascript';
	e.src = document.location.protocol + '//connect.facebook.net/<?php echo $content->locale; ?>/all.js';
	e.async = true;
	document.getElementById('fb-root').appendChild(e);
}());
</script>
<fb:comments href="<?php echo $post->permalink; ?>" num_posts="<?php echo $content->num_posts; ?>" width="<?php echo $content->width; ?>"></fb:comments>