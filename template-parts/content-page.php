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

<div id="post-<?php the_ID(); ?>" <?php post_class('page-entry'); ?>>
	<header>
		<h2 class="text-center"><?php the_title(); ?></h2>
		<?php //idealabstarter_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</div>
