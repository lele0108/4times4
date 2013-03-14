<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

    <meta name="description" content="<?php echo site_description(); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="<?php echo theme_url('/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" media="screen" href="<?php echo theme_url('/css/bootstrap-responsive.min.css'); ?>">
	<link rel="stylesheet" media="screen" href="<?php echo theme_url('/css/main.css'); ?>">
	<link rel="stylesheet" href="<?php echo theme_url('/css/prettify.css'); ?>">
	<?php if(article_css()): ?>
    <style><?php echo article_css(); ?></style>
	<?php endif; ?>
 
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
	<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

	<script>var base = '<?php echo theme_url(); ?>';</script>
	<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
	<script src="<?php echo theme_url('/js/main.js'); ?>"></script>
 	<script src="<?php echo theme_url('/js/prettify.js'); ?>"></script>
 	<?php if(article_js()): ?>
    <script><?php echo article_js(); ?></script>
	<?php endif; ?>
 	<script>prettyPrint();</script>

	<meta name="viewport" content="width=device-width">
	<meta name="generator" content="Anchor CMS">

	<meta property="og:title" content="<?php echo site_name(); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo current_url(); ?>">
	<meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	<meta property="og:site_name" content="<?php echo site_name(); ?>">
	<meta property="og:description" content="<?php echo site_description(); ?>">
  </head>