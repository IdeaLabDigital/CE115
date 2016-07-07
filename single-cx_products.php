<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

get_header(); ?>

<div class="product-wrap">

	<div class="row">
    <div class="large-12 columns">
      <div class="shim-lrg"></div>
    </div>
  </div>

  <div class="row">
		<div class="medium-11 medium-centered columns">

			<?php do_action( 'idealabstarter_before_content' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
					<div class="row">
						<div class="medium-10 medium-centered columns">
							<header>
								<h2 class="entry-title text-center"><?php the_title(); ?></h2>
							</header>
						</div>
					</div>

					<hr>
					
					<?php do_action( 'idealabstarter_post_before_entry_content' ); ?>
					<div class="entry-content row shim-top-med">
				    <div class="large-5 columns">
				    	<?php
				    	$product_id = get_field('cx_products_id');
							if( $product_id ): ?>
								<h4 class="text-center"><?php echo $product_id; ?></h4>
							<?php endif;

							$file = get_field('products_pdf');
							if( $file ): ?>
								<div class="text-center shim-bot-sml"><a href="<?php echo $file['url']; ?>" class="button tiny" target="_blank">VIEW PDF CUT SHEET</a></div>
							<?php endif;

							if ( has_post_thumbnail() ) :
								the_post_thumbnail();
							endif; ?>
							<div class="show-for-small-only shim-bot-med shim-top-sml"><hr></div>
						</div>
													
						<div class="large-7 columns">
							<?php the_content(); ?>
						</div>
					</div>
				</article>
			<?php endwhile;?>
			<?php do_action( 'idealabstarter_after_content' ); ?>
		
		</div>
	</div>

	<div class="row">
    <div class="large-12 columns">
      <div class="shim-lrg"></div>
    </div>
  </div>

</div>
<?php get_footer();
