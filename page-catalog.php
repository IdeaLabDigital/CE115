<?php
/**
 * The Catalog Page Template
 * Page must have slug of "catalog"!!
 *
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
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
				
				<?php if ( have_posts() ) : ?>

          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
          <?php endwhile; ?>

          <hr>

        <?php endif; // End have_posts() check. ?>

				<div class="row">
					<div class="medium-12 columns">

						<?php
						$args = array(
							'post_type'  => 'cx_catalogs',
							'order'      => 'ASC',
							'orderby'    => 'menu_order',
							'posts_per_page' => -1,
						);
						$catalog_loop = new WP_Query( $args );
						if ( $catalog_loop->have_posts() ) : ?>
							<div class="row small-up-2 medium-up-4 large-up-5 catalog">
						  	<?php while ( $catalog_loop->have_posts() ) : $catalog_loop->the_post(); ?>
						    	
									<div class="column shim-bot-med">
											<?php
											$cat_pdf = get_field('cx_catalogs_pdf');
											$cat_pdf_link = $cat_pdf['url'];
											if( $cat_pdf ): ?>
												<a href="<?php echo $cat_pdf_link; ?>" target="_blank"><?php the_post_thumbnail(); ?><br />
												<p><?php the_title(); ?></p></a>
											<?php endif; ?>
									</div>

						  	<?php endwhile; wp_reset_postdata(); ?>
						  </div>
						<?php endif; ?>

					</div>
				</div>

				<div class="row">
					<div class="medium-12 columns">
						<?php dynamic_sidebar( 'catalog-widgets' ); ?>
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
