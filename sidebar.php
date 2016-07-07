<?php
/**
 * The sidebar containing the main widget area
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

?>
<aside class="panel shim-top-sml">
	<?php do_action( 'idealabstarter_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'idealabstarter_after_sidebar' ); ?>
</aside>
