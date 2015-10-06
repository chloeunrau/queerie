<?php get_header(); ?>

<div id="content-post" class="main-content">

  <div id="post-content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="post">
        <h2 class="title"><?php the_date(); ?></h2>
        <h1 class="title"><?php the_title(); ?></h1>
        <?php the_content() ?>
      </div>

      <div id="post-comments">
        <?php
        if ( comments_open() || get_comments_number() ) :
  				comments_template();
  			endif;
        ?>
      </div>

      <?php endwhile; else: ?>

      <div class="error">
        <h1>This page does not exist</h1>
        <p>
          The requested URL may have been entered incorrectly or removed.
        </p>
      </div>

    <?php endif; ?>

  </div>

  <a href="<?php echo bloginfo('home'); ?>/archive" class="big-orange-button back-button">&laquo; Back to Archive</a>

  <div id="post-about">
    <?php dynamic_sidebar( 'Archive Post About' ); ?>
  </div>

</div>

<?php get_footer(); ?>
