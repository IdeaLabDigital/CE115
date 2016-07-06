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

<li id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<header>
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} ?>
	</header>
	<p>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</p>
</li>
