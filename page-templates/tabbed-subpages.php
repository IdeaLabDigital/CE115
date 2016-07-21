<?php
/*
Template Name: Tabbed Subpages
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

    	<header class="shim-bot-sml">
    		<h2 class="text-center "><?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent ); ?></h2>
    	</header>
			
			<div class="shim-bot-lrg">
	    	<?php wp_page_menu(array(
					"post_type" => $post->post_type,
					"menu_class" => "subnav",
					"sort_column" => "menu_order",
					"walker" => new WP_Page_Menu_Walker
				)); ?>
			</div>
			
			<?php
      if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class('page-entry'); ?>>
						<header>
							<h4 class=""><?php the_title(); ?></h4>
						</header>
						<hr>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</div>
        <?php endwhile; wp_reset_postdata(); ?>

      <?php endif; // End have_posts() check. ?>
      
      <?php 
      if ( is_page( '147' ) ) : ?>

        <?php
        $terms = get_terms( array(
          'taxonomy' => 'product_category',
          'orderby'  => 'id',
          'hide_empty' => false,
        ) );
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ ?>
          <ul class="cutsheet-list">
            <?php
            foreach ( $terms as $term ) : ?>

              <li>
                <h5><?php echo $term->name; ?>:</h5>
                <div class="row small-up-2">

                  <?php
                  $cut_args=array(
                    'post_type' => 'cx_products',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'product_category',
                        'field' => 'slug',
                        'terms' => $term->slug,
                      ),
                    ),
                  );
                  $cut_query = new WP_Query( $cut_args );
                  while ($cut_query->have_posts()) : $cut_query->the_post(); ?>
                    <div class="column">
                      <?php
                      $file = get_field('products_pdf');
                      if( $file ): ?>
                        <div class="cutsheet-item"><a href="<?php echo $file['url']; ?>" target="_blank"><?php the_title(); ?></a></div>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; wp_reset_query(); ?>
                    
                </div>
              </li>

            <?php endforeach; ?>
          </ul>
        <?php
        } wp_reset_postdata(); ?>
        
      <?php endif; // End have_posts() check. ?>

    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
      <div class="shim-lrg"></div>
    </div>
  </div>

</div>

<?php get_footer();
