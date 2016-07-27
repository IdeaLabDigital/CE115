<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
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
				
				<header>
					<?php $our_title = get_the_title( get_option('page_for_posts', true) ); ?>
					<h2 class="text-center"><?php echo $our_title; ?></h2>
				</header>

				<hr>

				<div class="row">
					<div class="medium-8 columns">
						<?php if ( have_posts() ) : ?>

							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'template-parts/content', 'post' ); ?>
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
					</div>

					<div class="medium-4 columns">
						<?php get_sidebar(); ?>
					</div>
				</div>

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
