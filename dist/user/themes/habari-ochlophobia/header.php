<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php $theme->title(); ?></title>
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php $theme->feed_alternate(); ?>" />
	<link rel="edit" type="application/atom+xml" title="Atom Publishing Protocol" href="<?php URL::out('atompub_servicedocument'); ?>" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out('rsd'); ?>" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php Site::out_url('theme'); ?>/style.css" />
	<?php $theme->header(); ?>

</head>
<body class="<?php $theme->body_class(); ?>">
	<div id="header">
		<h2 id="site-name"><a href="<?php Site::out_url('habari'); ?>"><?php Options::out('title'); ?></a></h2>
		<ul id="nav">
<?php foreach ($pages as $tab) { // Menu tabs ?>
			<li class="<?php echo 'nav-' , $tab->slug; ?>"><a href="<?php echo $tab->permalink; ?>" title="<?php echo $tab->title; ?>"><?php echo $tab->title; ?></a></li>
<?php } ?>
		</ul>
		<form id="search-form" action="<?php URL::out('display_search'); ?>" method="get">
			<fieldset>
				<h4><label for="criteria"><?php _e('Search', 'ochlophobia'); ?></label></h4>
				<input type="search" id="criteria" name="criteria" value="<?php if (isset($criteria)) { echo htmlentities($criteria, ENT_COMPAT, 'UTF-8'); } ?>" tabindex="6" placeholder="Search" required>
				<button type="submit" id="search-submit" tabindex="7"><?php _e('Find', 'ochlophobia'); ?></button>
			</fieldset>
		</form>
	</div>
