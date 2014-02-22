<?php $theme->display('header'); ?>
	<header>
		<h1>OOPS! That Looks Like Spam.</h1>
		<p><span class="meta">We need to verify you're human</span></p>
	</header>

	<p>Your comment did not pass our spam filter. Please enter the text you see in the image below to verify you are human and your comment is valid.</p>

	<?php  if ( Session::has_messages() ) { Session::messages_out(); } ?>
	<form method="post" action="<?php URL::out( 'mollom_fallback', array( 'fallback' => 'captcha' ) ); ?>">
		<p>
			<img src="<?php echo $theme->captcha['url']; ?>" alt="Mollom CAPTCHA" class="center">
		<audio controls id="mollom-audio-captcha" style="display:none;">
			<source type="audio/mpeg" src="<?php echo $theme->audio_captcha['url']; ?>">
		</audio>
			<label>Type the characters you see above <span class="meta">(<a href="#" onclick="$('#mollom-audio-captcha').get(0).play(); return true;" title="listen to the characters to type">listen to them</a>)</span>
			<input type="text" name="mollom_captcha" id="mollom_captcha" /></label>
		</p>
		<p><input type="submit" value="Submit" /></p>
	</form>
<?php $theme->display('footer'); ?>
