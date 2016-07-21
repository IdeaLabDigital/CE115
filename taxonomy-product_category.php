<?php
/**
 * The product taxonomy template
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

get_header(); ?>

<div class="page-wrap center-copy">

	<div class="row">
    <div class="large-12 columns">
      <div class="shim-lrg"></div>
    </div>
  </div>

	<div class="row">
		<div class="medium-11 medium-centered columns">

			<article class="main-content">
				
				<header class="shim-bot-xl">
					<h2 class="text-center"><?php single_cat_title(); ?></h2>
					<?php echo category_description(); ?>
				</header>

				<?php if ( have_posts() ) : ?>

					<hr>

					<div class="row small-up-2 medium-up-4 large-up-5 shim-top-xl">

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/content', 'product' ); ?>
						<?php endwhile; ?>

					</div>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; // End have_posts() check. ?>

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
