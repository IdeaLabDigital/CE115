<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

get_header(); ?>

<div class="page-wrap">

  <div class="row">
    <div class="large-12 columns">

			<?php do_action( 'idealabstarter_before_content' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
					<header>
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php idealabstarter_entry_meta(); ?>
					</header>
					<?php do_action( 'idealabstarter_post_before_entry_content' ); ?>
					<div class="entry-content">

					<?php
						if ( has_post_thumbnail() ) :
							the_post_thumbnail();
						endif;
					?>

					<?php the_content(); ?>

					</div>

					<?php the_post_navigation(); ?>
					<?php do_action( 'idealabstarter_post_before_comments' ); ?>
					<?php comments_template(); ?>
					<?php do_action( 'idealabstarter_post_after_comments' ); ?>
				</article>
			<?php endwhile;?>
			<?php do_action( 'idealabstarter_after_content' ); ?>
			
		</div>
	</div>

</div>
<?php get_footer();
