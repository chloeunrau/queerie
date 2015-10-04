<?php get_header(); ?>

<!-- DEFAULT BLOG PAGE -->
<!-- applied to blog views with no defined template -->

<div class="main-content content-blog">

  <div id="archive-controls">
    <div class="links">
      <ul>
        <li><span class="nolink">&laquo; Back to archive</span></li>
      </ul>
    </div>
    <?php dynamic_sidebar( 'Archive Controls' ); ?>
  </div>

  <div id="archive">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="post">
        <h1>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h1>
        <h2><?php the_date(); ?></h2>
        <?php the_content( $more_link_text, $stripteaser ); ?>
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
