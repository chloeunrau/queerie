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

  <div class="home-other">
    <?php dynamic_sidebar( 'Home Other Top' ); ?>
  </div>

  <div id="next-on-gq" class="home-box">
    <div class="home-widget-title">
      <p>NEXT TIME</p>
      <p>on Gender Queeries</p>
      <p class="time">8pm - 9pm</p>
    </div>
    <div class="home-widget">
      <?php dynamic_sidebar( 'Home Next Time' ); ?>
    </div>
  </div>

  <div id="previously-on-gq" class="home-box">
    <div class="home-widget-title">
      <p>PREVIOUSLY</p>
      <p>on Gender Queeries
    </div>
    <div class="home-widget">
      <?php dynamic_sidebar( 'Home Last Time' ); ?>
    </div>
  </div>

  <div id="home-archive-link" class="home-box">
    <a href="<?php echo bloginfo('home'); ?>/archive/">See more episode summaries in the Archive</a>
  </div>

  <div class="home-other">
    <?php dynamic_sidebar( 'Home Other Bottom' ); ?>
  </div>

</div>

<?php get_footer(); ?>
