<?php
/**
 * The template for displaying Homepage
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
    <div class="medium-11 medium-centered columns">
      <?php do_action( 'idealabstarter_before_content' ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class('shim-bot-xl') ?> id="post-<?php the_ID(); ?>">
          <?php do_action( 'idealabstarter_page_before_entry_content' ); ?>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </article>
        <hr>
      <?php endwhile;?>
      <?php do_action( 'idealabstarter_after_content' ); ?>
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
      <div class="shim-lrg"></div>
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns products-wrap large-centered">
      <h2>Products</h2>
      <?php
      $terms = get_terms( array(
        'taxonomy' => 'product_category',
        'orderby'  => 'id',
        'hide_empty' => false,
      ) );
      if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
        echo '<div class="row small-up-2 medium-up-4 large-up-5">';
          foreach ( $terms as $term ) {
            $thumbnail = get_field('tax_img', $term);
            $url = $thumbnail['url'];
            $alt = $image['alt'];
            
            echo '<div class="column shim-top-sml">';
            if($thumbnail)
            {
                echo '<a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'idealabstarter' ), $term->name ) ) . '"><img src="' . esc_url( $url ) . '" alt="' . esc_attr( $alt ) . '"></a>';
            }
            echo '<h6><a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'idealabstarter' ), $term->name ) ) . '">' . $term->name . '</a></h6>';
            echo '</div>';
          }
        echo '</div>';
      } wp_reset_postdata(); ?>

    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
      <div class="shim-lrg"></div>
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns large-centered">
      <?php
      $value = get_field( "hp_content", $post_id );
      echo $value; ?>
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
      <div class="shim-lrg"></div>
    </div>
  </div>

</div>

<?php get_footer();
