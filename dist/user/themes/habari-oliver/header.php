<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php if($request->display_entry && isset($post)) { echo $post->title_title . ' - '; } ?><?php echo Options::get('title'); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="Shortcut Icon" href="<?php echo $theme->get_url('/favicon.png'); ?>">
	<?php echo $theme->header(); ?>
</head>
<body class="<?php echo $theme->body_class(); ?>" itemscope itemtype="http://schema.org/Blog">
	
	<header>
		<a href="<?php Site::out_url( 'habari' ); ?>/" itemprop="url">
			<hgroup>
				<h1 itemprop="name"><?php echo Options::get('title'); ?></h1>
				<h2 itemprop="description"><?php echo Options::get('tagline'); ?></h2>
			</hgroup>
		</a>
		
	</header>
	
	<nav role="main">
		<?php echo $theme->area('nav'); ?>
	</nav>
	
	<?php // Session::messages_out(); ?>
