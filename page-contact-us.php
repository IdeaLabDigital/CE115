<?php
/**
 * The Events Page Template
 * Page must have slug of "contact-us"!!
 *
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
					<h2 class="text-center"><?php the_title(); ?></h2>
					<h5 class="text-center">General Contact Info for Cementex</h5>
				</header>

				<hr>

				<div class="row">
					<div class="medium-4 columns">
						<?php dynamic_sidebar( 'contact-widgets-left' ); ?>
					</div>
					<div class="medium-4 columns">
						<?php dynamic_sidebar( 'contact-widgets-center' ); ?>
					</div>
					<div class="medium-4 columns">
						<?php dynamic_sidebar( 'contact-widgets-right' ); ?>
					</div>
				</div>

				<hr>

				<div class="row">
					<div class="medium-12 columns">

						<?php if ( have_posts() ) : ?>

		          <?php /* Start the Loop */ ?>
		          <?php while ( have_posts() ) : the_post(); ?>
		            <?php the_content(); ?>
		          <?php endwhile; ?>

		        <?php else : ?>
		          <?php get_template_part( 'template-parts/content', 'none' ); ?>

		        <?php endif; // End have_posts() check. ?>

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
