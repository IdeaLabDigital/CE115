<?php
/**
 * The template part for displaying search content
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */
?>

<li class="shim-bot-med">
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		</header>
		<div class="row">
			<div class="large-12 columns">
				<?php $search_content = get_the_content();
					$text = substr($search_content, 0, 500);
				  echo '<p>' . strip_tags( $text ) . '...</p>';
				?>
				<a href="<?php the_permalink(); ?>" class="button tiny">Read more</a>

			</div>
		</div>
	</article>
</li>
