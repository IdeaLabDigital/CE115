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

<div class="page-wrap center-copy">

  <div class="hero">
    <div class="row">
      <div class="container">
        <div class="item-main ">
          <?php dynamic_sidebar( 'home-widgets-img-large' ); ?>
        </div>
        <div class="item-secondary ">    
            <?php dynamic_sidebar( 'home-widgets-img-small' ); ?>
        </div>
      </div>    
    </div>     
    <div class="mobile-hero">
      <div class="row">
        <div class="small-12 columns">
          <div class="mobile-secondary">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mobile-main-image.png">
            <?php dynamic_sidebar( 'home-widgets-img-small' ); ?>
          </div>
        </div>   
      </div>
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
      <div class="shim-lrg"></div>
    </div>
  </div>

  <div class="row">
    <?php do_action( 'idealabstarter_before_content' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class('large-12 columns large-centered') ?> id="post-<?php the_ID(); ?>">
        <?php do_action( 'idealabstarter_page_before_entry_content' ); ?>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile;?>
    <?php do_action( 'idealabstarter_after_content' ); ?>
  </div>

  <div class="row">
    <div class="large-12 columns">
      <div class="shim-lrg"></div>
    </div>
  </div>

</div>

<?php get_footer();
