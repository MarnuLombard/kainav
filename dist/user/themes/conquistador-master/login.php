<?php //namespace Habari; ?>
<?php $theme->display('header');?>
<?php echo $theme->area('head'); ?>

<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php
if ( $loggedin ) {
?>
<form class="login">
<p><?php _e('You are logged in as %s.', array($user->username)); ?></p>
<p><?php _e('Want to <a href="%s">log out</a>?', array(Site::get_url('habari') . '/auth/logout')); ?></p>
</form>
<?php
}
else {
?>
<?php Plugins::act( 'theme_loginform_before' ); ?>

<?php if ( Session::has_messages() ) Session::messages_out(); ?>
<form method="post" class="login" action="<?php URL::out( 'auth', array( 'page' => 'login' ) ); ?>">
<p id="reset_message" style="display:none;">
	<?php _e('Please enter the username you wish to reset the password for. A unique password reset link will be emailed to that user.'); ?>
</p>
<p>
<label for="habari_username">Username</label>
<input type="text" size="25" name="habari_username" id="habari_username">
</p>
<p>
<label for="habari_password">Password</label>
<input type="password" size="25" name="habari_password" id="habari_password">
</p>
<p>
<?php Plugins::act( 'theme_loginform_controls' ); ?>
</p>
<p class="right">
<input class="submit" type="submit" name="submit_button" value="<?php _e('Login'); ?>">
<span id="password_utils"><input class="submit" type="submit" name="submit_button" value="<?php _e('Reset password'); ?>"></span>
</p>
</form>
<?php Plugins::act( 'theme_loginform_after' ); ?>
<?php
}
?>
<?php echo $theme->area('split'); ?>
<?php echo $theme->area('foot'); ?>
<?php $theme->display('footer'); ?>
<script type="text/javascript">
$(document).ready( function() {
	$("#password_utils input").click(function() {
		$("p:has(input[name=habari_password])").hide();
		$("input[name=submit_button]").first().hide();
		$("p#reset_message").fadeIn();
		$("#password_utils input").unbind('click');
		return false;
	});
});
</script>
