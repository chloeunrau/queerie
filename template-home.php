<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div class="main-content content-home">

  <div id="about-box">
    <div id="about-left">
      <?php dynamic_sidebar( 'Home About Left' ); ?>
    </div>
    <div id="about-divider"></div>
    <div id="about-right">
      <?php dynamic_sidebar( 'Home About Right' ); ?>
    </div>
  </div>

  <div id="next-on-gq" class="home-box">
    <?php dynamic_sidebar( 'Home Next Time' ); ?>
    <div class="clearfix"></div>
  </div>

  <div id="previously-on-gq" class="home-box">
    <?php dynamic_sidebar( 'Home Last Time' ); ?>
    <div class="clearfix"></div>
  </div>

  <div id="other">
    <?php dynamic_sidebar( 'Home Other' ); ?>
    <div class="clearfix"></div>
  </div>

</div>

<?php get_footer(); ?>
