<?php
  if( !defined( 'HABARI_PATH' ) ) {
    die('No direct access');
  }
?>
<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <title>
  <?php if($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?>
  <?php Options::out('title') ?>
  </title>
  <meta name="title" content="<?php Options::out('title') ?>">
  <meta name="description" content="<?php Options::out('tagline') ?>">
  <meta name="author" content="<?php if($request->display_entry && isset($post)) { echo "{$post->author->displayname} - "; } ?><?php Options::out('title') ?>">
  <meta name="keywords" content="<?php if(Options::out('keywords')){Options::out('keywords');}?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="<?=$theme->assetsDir;?>/css/no-mq.css" rel="stylesheet" />
  <![endif]-->

  <!--[if (gte IE 9) | (IEMobile)]><!-->
    <link rel="stylesheet" href="<?=$theme->assetsDir;?>/css/style.css" rel="stylesheet" />
  <!--<![endif]-->


  <!-- Favicons -->
  <link rel="shortcut icon" href="<?=$theme->assetsDir;?>/img/favicons/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="<?=$theme->assetsDir;?>/img/favicons/apple-touch-icon.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=$theme->assetsDir;?>/img/favicons/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=$theme->assetsDir;?>/img/favicons/apple-touch-icon-114x114.png" />


</head>


