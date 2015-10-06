<?php get_header(); ?>

<!-- SEARCH RESULTS PAGE -->

<div id="content-search" class="main-content">

  <a href="<?php echo bloginfo('home'); ?>/archive" class="big-orange-button back-button">&laquo; Back to Archive</a>

  <div id="search-content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="post">
        <h2><?php the_date(); ?> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>

      <div class="separator"></div>

      <?php endwhile; else: ?>

      <div class="error">
        <h1>This page does not exist</h1>
        <p>
          The requested URL may have been entered incorrectly or removed.
        </p>
      </div>

    <?php endif; ?>

    <div id="pagination">
      <div class="alignleft">
        <?php previous_posts_link('&laquo; Newer Posts') ?>
      </div>
      <div class="alignright">
        <?php next_posts_link('Older Posts &raquo;') ?>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
