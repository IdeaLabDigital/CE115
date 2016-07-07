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
        <?php endwhile; ?>

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
