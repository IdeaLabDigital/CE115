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

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<header>
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<?php idealabstarter_entry_meta(); ?>
	</header>
	<div class="content">
		<?php the_content( __( 'Read More...', 'idealabstarter' ) ); ?>
	</div>
	<hr />
</div>
