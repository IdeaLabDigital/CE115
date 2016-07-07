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
					<div class="large-8 medium-10 medium-centered columns">

						<?php
						$args = array(
							'post_type'  => 'cx_events',
							'order'      => 'ASC',
						);
						$events_loop = new WP_Query( $args );
						if ( $events_loop->have_posts() ) : ?>
							<table><thead><tr><th>Show Dates</th><th>Show Name</th><th>Location</th></tr></thead><tbody>
						  	<?php while ( $events_loop->have_posts() ) : $events_loop->the_post(); ?>
						    	
									<tr>
										<td>
											<?php
											$event_dates = get_field('cx_events_date');
											if( $event_dates ): ?>
												<?php echo $event_dates; ?>
											<?php else : ?>
												<?php echo 'No Date Available'; ?>
											<?php endif; ?>
										</td>
										<td>
											<?php the_title(); ?>
										</td>
										<td>
											<?php
											$event_loc = get_field('cx_events_location');
											if( $event_loc ): ?>
												<?php echo $event_loc; ?>
											<?php else : ?>
												<?php echo 'No Location Available'; ?>
											<?php endif; ?>
										</td>
									</tr>

						  	<?php endwhile; wp_reset_postdata(); ?>
						  </tbody></table>
						<?php endif; ?>

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
