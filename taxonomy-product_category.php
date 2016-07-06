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
			<article class="main-content">
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/product', get_post_format() ); ?>
					<?php endwhile; ?>

					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; // End have_posts() check. ?>

			</article>
		</div>
	</div>

</div>

<?php get_footer();
