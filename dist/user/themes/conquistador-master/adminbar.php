<?php if ( $user = User::identify()->loggedin ) : ?>
<ul class="admin">

    <?php if ( Controller::get_action() == 'display_post' && isset($theme->post) && ACL::access_check( $theme->post->get_access($user), 'edit' ) ) : ?>
        <li><a href="<?php echo $post->editlink; ?>" title="Edit this post"><i class="icon-pencil"></i><b>Edit</b></a></li>
    <?php endif; ?>

    <?php if ( isset($user_draft_count) && $user_draft_count ) : ?>
    <li>
        <a href="<?php URL::out('display_posts', 'page=posts&status=1'); ?>" title="<?php echo $user_draft_count; ?> Drafts"><i class="icon-file"></i><b><?php echo $user_draft_count; ?> Drafts</b></a>
    </li>
    <?php endif; ?>

    <?php if ( isset($unapproved_comment_count) && $unapproved_comment_count ) : ?>
    <li>
        <a href="<?php URL::out('display_comments', 'page=comments&status=unapproved'); ?>" title="<?php echo $unapproved_comment_count; ?> comments waiting moderation"><i class="icon-bubble"></i><b>Moderation</b></a>
	</li>
	<?php endif; ?>
    <?php if ( isset($spam_comment_count) && $spam_comment_count ) : ?>
	<li>
		<a href="<?php URL::out('display_comments', 'page=comments&status=spam'); ?>" title="<?php echo $spam_comment_count; ?> spam comments"><i class="icon-spam"></i><b>Spam</b></a>
	</li>
    <?php endif; ?>

	<li>
		<a href="<?php echo URL::get( 'display_dashboard' ); ?>"><i class="icon-console" title="Dashboard"></i><b>Dashboard</b></a>
	</li>

</ul>
<?php endif; ?>
