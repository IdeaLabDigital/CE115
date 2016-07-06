<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

get_header(); ?>

<div class="page-wrap">
  
  <div class="row">
    <div class="large-12 columns">
      <div class="shim-lrg"></div>
    </div>
  </div>

  <div class="row">
    <div class="medium-11 medium-centered columns">
      <article class="main-content">

        <?php if ( have_posts() ) : ?>

          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
          <?php endwhile; ?>

          <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; // End have_posts() check. ?>

        <?php /* Display navigation to next/previous pages when applicable */ ?>
        <?php if ( function_exists( 'idealabstarter_pagination' ) ) { idealabstarter_pagination(); } else if ( is_paged() ) { ?>
          <nav id="post-nav">
            <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'idealabstarter' ) ); ?></div>
            <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'idealabstarter' ) ); ?></div>
          </nav>
        <?php } ?>

      </article>
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
      <div class="shim-lrg"></div>
    </div>
  </div>

</div>

<?php get_footer();
