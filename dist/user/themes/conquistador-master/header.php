<?php // namespace Habari; ?>
<!DOCTYPE html>
<html lang="en-ca">

<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<meta name="generator" content="Habari <?php echo Version::get_habariversion() ?>">
	<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">

	<script>
		var HABARI_URL = "<?php Site::out_url('habari') ?>";
		var CONQUISTADOR_URL = "<?php Site::out_url('theme') ?>";
		var CONQUISTADOR_USE_FANCYBOX = <?php echo Options::get('conquistador__use_fancybox', 'true'); ?>;
	</script>
	<?php echo $theme->header(); ?>
</head>
<body class="<?php echo $theme->body_class(); ?>" itemscope itemtype="http://schema.org/Blog">
<meta itemprop="name" content="<?php echo Options::get('title'); ?>">
<meta itemprop="url" content="<?php Site::out_url('site'); ?>">
<meta itemprop="description" content="<?php echo Options::get('tagline'); ?>">

<nav class="site" id="top" style="position:relative">
	<?php echo $theme->area('site_navigation'); ?>
</nav>
<div class="tentacles">
<div class="wrap">

<?php echo $theme->display('adminbar'); ?>
