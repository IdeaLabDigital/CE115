<?php
/**
 * The template for Sales Reps content
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('column shim-sml'); ?>>

	<header>
		<strong><?php echo get_the_title(); ?></strong>
	</header>

	<?php if ( get_field( "reps_name" ) ) {
		the_field('reps_name'); echo '<br />';
	} ?>

	<?php if ( get_field( "reps_address" ) ) {
		the_field('reps_address'); echo '<br />';
	} ?>

	<?php 
	$email = get_field_object( 'reps_email' );
	if ( $email ) { ?>
		<a href="mailto:<?php echo $email['value']; ?>"><?php echo $email['value']; ?></a><br />
	<?php } ?>

	<?php if ( get_field( "reps_office_number" ) ) {
		echo 'Office: '; the_field('reps_office_number'); echo '<br />';
	} ?>

	<?php if ( get_field( "reps_fax_number" ) ) {
		echo 'Fax: '; the_field('reps_fax_number'); echo '<br />';
	} ?>

	<?php 
	$email = get_field_object( 'reps_website' );
	if ( $email ) { ?>
		<a href="<?php echo $email['value']; ?>"><?php echo short_mail( $email['value'] ); ?></a><br />
	<?php } ?>

	<?php if ( get_field( "reps_address" ) ) {
		echo 'Industry: '; the_field('reps_industry');
	} ?>
											
</div>
