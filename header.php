<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo mst_get_icon('apple-touch-icon.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo mst_get_icon('favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo mst_get_icon('favicon-16x16.png'); ?>">
  <link rel="manifest" href="<?php echo mst_get_icon('site.webmanifest'); ?>">
  <link rel="mask-icon" href="<?php echo mst_get_icon('safari-pinned-tab.svg'); ?>" color="<?php echo mst_get_color('mask-icon'); ?>">
  <link rel="shortcut icon" href="<?php echo mst_get_icon('favicon.ico'); ?>">
  <meta name="msapplication-TileColor" content="<?php echo mst_get_color('msapplication-TileColor'); ?>">
  <meta name="msapplication-config" content="<?php echo mst_get_icon('browserconfig.xml'); ?>">
  <meta name="theme-color" content="<?php echo mst_get_color('theme-color'); ?>">

  <?php wp_head(); ?>

</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <div class="loading-container">
		<div class="loading-line"></div>
	</div>

  <div class="page-container">

    <header class="top-header">
      <div class="container table">
        <div class="header-logo td vm">
          <a href="/" title="Go back to the home page">
            <?php echo ms_get_svg("logo.svg", "masterslice"); ?>
          </a>
        </div>
        <div class="desk-menu td">
          <?php wp_nav_menu(array('menu' => 'Main Menu', 'container' => false)); ?>
        </div>
        <div class="mobile-menu-buttons td vm">
          <div class="menu-btn">
            <a href="tel:<?php echo do_shortcode('[phone link="true"]'); ?>"><i class="i-phone"></i></a>
          </div>
          <div class="menu-btn">
            <a href="<?php echo do_shortcode('[email link="true"]'); ?>"><i class="i-speech-bubble"></i></a>
          </div>
          <div class="menu-btn mob-toggle">
            <i class="i-menu"></i>
          </div>
        </div>
      </div>
      <?php include 'inc/svg-fixed-menu-curve.php'; ?>
      <div class="mega-menu">
        <div class="container">
          <?php wp_nav_menu(array('menu' => 'Mega Menu', 'container' => false)); ?>
        </div>
        <?php include 'inc/svg-menu-curve.php'; ?>
      </div>
      <div class="mobile-menu">
        <?php wp_nav_menu(array('menu' => 'Mobile Menu', 'container' => false)); ?>
      </div>
    </header>
