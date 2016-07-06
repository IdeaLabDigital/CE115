<?php
/**
 * Entry meta information for posts
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

if ( ! function_exists( 'idealabstarter_entry_meta' ) ) :
	function idealabstarter_entry_meta() {
		echo '<p><time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( 'Posted on: %s.', 'idealabstarter' ), get_the_date() ) . '</time></p>';
	}
endif;
