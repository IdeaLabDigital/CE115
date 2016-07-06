<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

get_header(); ?>

<div class="page-wrap">

	<div class="row">
		<div class="large-12 columns">
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php _e( 'File Not Found', 'idealabstarter' ); ?></h1>
			</header>
			<div class="entry-content">
				<div class="error">
					<p class="bottom"><?php _e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'idealabstarter' ); ?></p>
				</div>
				<p><?php _e( 'Please try the following:', 'idealabstarter' ); ?></p>
				<ul>
					<li><?php _e( 'Check your spelling', 'idealabstarter' ); ?></li>
					<li><?php printf( __( 'Return to the <a href="%s">home page</a>', 'idealabstarter' ), home_url() ); ?></li>
					<li><?php _e( 'Click the <a href="javascript:history.back()">Back</a> button', 'idealabstarter' ); ?></li>
				</ul>
			</div>
		</article>
		</div>
	</div>

</div>

<?php get_footer();