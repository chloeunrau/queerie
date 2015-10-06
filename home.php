<?php get_header(); ?>

<!-- DEFAULT ARCHIVE ("Blog") PAGE -->
<!-- applied to blog views with no defined template -->

<div id="content-archive" class="main-content">

  <div id="archive-controls">
    <?php dynamic_sidebar( 'Archive Controls' ); ?>
  </div>

  <div id="archive">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="post">
        <div class="post-title">
          <h2 class="title"><?php the_date(); ?></h2>
          <h4 class="title">Posted by <?php the_author(); ?></h4>
        </div>
        <div class="post-content">
          <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
          <?php the_content( $more_link_text, $stripteaser ); ?>
        </div>
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
        <?php previous_posts_link('&laquo; Newer Content') ?>
      </div>
      <div class="alignright">
        <?php next_posts_link('Older Content &raquo;') ?>
      </div>
    </div>

  </div> <!-- #archive -->
</div> <!-- #content -->

<?php get_footer(); ?>
