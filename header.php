<!DOCTYPE html>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title>
    <?php bloginfo('name'); ?>
  </title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>

<body> <!--ends in footer.php -->
<div id="wrapper"> <!-- ends in footer.php -->

<div id="header">
  <img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" class="main-logo" />
</div>

<div id="content"> <!-- endsn in footer.php -->

<div id="nav">

  <div id="top-menu">
    <div id="sm-horizontal-left" class="menu-content">
      <img src="<?php echo bloginfo('template_url'); ?>/images/sm-horizontal-logo.png" />
    </div>
    <div id="top-menu-content" class="menu-content">
      <a href="http://www.coopradio.org/listen/cfro-mid.mp3.pls" target="_blank">
        <img src="<?php echo bloginfo('template_url'); ?>/images/menu-listen.png" />
      </a>
      <a href="http://weblink.donorperfect.com/coop_membership" target="_blank">
        <img src="<?php echo bloginfo('template_url'); ?>/images/menu-donate.png" />
      </a>
    </div>
    <div id="sm-horizontal-right" class="menu-content">
      <img src="<?php echo bloginfo('template_url'); ?>/images/sm-horizontal-coop.png" />
    </div>
  </div>

  <div id="bottom-menu">
    <div id="bottom-menu-content" class="menu-content">
      <a href="#">
        <img src="<?php echo bloginfo('template_url'); ?>/images/menu-home.png" />
      </a>
      <a href="#">
        <img src="<?php echo bloginfo('template_url'); ?>/images/menu-about.png" />
      </a>
      <a href="#">
        <img src="<?php echo bloginfo('template_url'); ?>/images/menu-archive.png" />
      </a>
      <a href="#">
        <img src="<?php echo bloginfo('template_url'); ?>/images/menu-contact.png" />
      </a>
      <a href="#">
        <img src="<?php echo bloginfo('template_url'); ?>/images/menu-facebook.png" />
      </a>
      <a href="#">
        <img src="<?php echo bloginfo('template_url'); ?>/images/menu-twitter.png" />
      </a>
      <a href="http://coopradio.org/" target="_blank">
        <img src="<?php echo bloginfo('template_url'); ?>/images/menu-coop.png" />
      </a>
    </div>
  </div>

</div>
