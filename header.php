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
        <div id="menu-listen"></div>
      </a>
      <a href="http://weblink.donorperfect.com/coop_membership" target="_blank">
        <div id="menu-donate"></div>
      </a>
    </div>
    <div id="sm-horizontal-right" class="menu-content">
      <img src="<?php echo bloginfo('template_url'); ?>/images/sm-horizontal-coop.png" />
    </div>
  </div>

  <div id="bottom-menu">
    <div id="bottom-menu-content" class="menu-content">
      <a href="<?php echo bloginfo('home'); ?>">
        <div id="menu-home"></div>
      </a>
      <a href="<?php echo bloginfo('home'); ?>/about/">
        <div id="menu-about"></div>
      </a>
      <a href="<?php echo bloginfo('home'); ?>/archive/">
        <div id="menu-archive"></div>
      </a>
      <a href="<?php echo bloginfo('home'); ?>/contact/">
        <div id="menu-contact"></div>
      </a>
      <a href="https://www.facebook.com/Gender-Queeries-1536585859951660/timeline/" target="_blank">
        <div id="menu-facebook"></div>
      </a>
      <a href="https://twitter.com/GenderQueeries" target="_blank">
        <div id="menu-twitter"></div>
      </a>
      <a href="http://coopradio.org/" target="_blank">
        <div id="menu-coop"></div>
      </a>
    </div>
  </div>

</div>
