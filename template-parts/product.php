<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry column shim-bot-med'); ?>>
	<a href="<?php the_permalink(); ?>">
		<div class="thumb">
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>
		</div>
		<p>
			<?php the_title();
		  $product_id = get_field('cx_products_id');
			if( $product_id ): ?>
				&nbsp;&#40;<?php echo $product_id; ?>&#41;
			<?php endif; ?>
		</p>
	</a>
</div>
