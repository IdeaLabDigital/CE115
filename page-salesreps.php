<?php
/**
 * The Sales Representative Locator Page Template
 * Wordpress Page must have slug of "salesreps"!!
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
				
				<?php if ( have_posts() ) : ?>

          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
          <?php endwhile; ?>

        <?php endif; // End have_posts() check. ?>

        <div class="row">
					<div class="large-12 medium-12 columns">
						<div class="subnav shim-bot-lrg">
							<ul class="button-group">

								<?php
								$terms = get_terms( 'reps_location', array(
									'orderby'    => 'title',
									'order'      => 'ASC',
									'hide_empty' => 0,
									'parent' => '68'
								) );
								foreach ( $terms as $term ) : setup_postdata( $post ); ?>
									<li class="cap-copy">
										<a href="#<?php echo $term->slug; ?>" class="button tiny"><?php echo $term->description; ?></a>
									</li>
								<?php endforeach; wp_reset_postdata();

								$terms2 = get_terms( 'reps_location', array(
									'orderby'    => 'title',
									'order'      => 'DESC',
									'hide_empty' => 0,
									'parent' => '69'
								) );
								foreach ( $terms2 as $term ) : setup_postdata( $post ); ?>
									<li class="cap-copy">
										<a href="#<?php echo $term->slug; ?>" class="button tiny"><?php echo $term->description; ?></a>
									</li>
								<?php endforeach; wp_reset_postdata(); ?>

							</ul>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="large-12 medium-12 columns">
						<ul class="rep-list">

							<?php

							// run a query for each US State location
							foreach( $terms as $term ) : ?>

								<li class="rep-location">

									<a name="<?php echo $term->slug; ?>"></a>
									<h4 class=""><?php echo $term->name; ?></h4>
									<div class="row small-up-2 shim-bot-sml">

										<?php
										// Define the query
										$args = array(
										  'post_type' => 'cx_reps',
										  'posts_page'  => -1,
										  'tax_query' => array(
			                	array(
			                  	'taxonomy' => 'reps_location',
			                  	'field' => 'slug',
			                  	'terms' => $term->slug,
			                	),
			                ),
										);
										$reps_loop = new WP_Query( $args );
									  while ( $reps_loop->have_posts() ) : $reps_loop->the_post(); ?>
											<?php get_template_part( 'template-parts/content', 'reps' ); ?>
									  <?php endwhile; ?>

									</div>
								</li>

							<?php endforeach; wp_reset_postdata(); ?> <!--end US States-->

							<?php 
							// run a query for Other locations
							foreach( $terms2 as $term ) : ?>

								<li class="rep-location">

									<a name="<?php echo $term->slug; ?>"></a>
									<h4 class=""><?php echo $term->name; ?></h4>
									<div class="row small-up-2 shim-bot-med">

										<?php
										// Define the query
										$args = array(
										  'post_type' => 'cx_reps',
										  'posts_page'  => -1,
										  'tax_query' => array(
			                	array(
			                  	'taxonomy' => 'reps_location',
			                  	'field' => 'slug',
			                  	'terms' => $term->slug,
			                	),
			                ),
										);
										$reps_loop = new WP_Query( $args );
									  while ( $reps_loop->have_posts() ) : $reps_loop->the_post(); ?>
											<?php get_template_part( 'template-parts/content', 'reps' ); ?>
									  <?php endwhile; ?>

									</div>
								</li>

							<?php endforeach; wp_reset_postdata(); ?> <!--end Other Locations-->

						</ul>
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
