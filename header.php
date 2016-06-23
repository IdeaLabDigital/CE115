<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'idealabstarter_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'idealabstarter_layout_start' ); ?>

	<header id="masthead" class="inner-wrap" role="banner">
		<nav class="tab-bar blackBG hide-for-large">
      <ul class="inline-list">
        <li class="hide-for-medium"><a href=""><i class="fa fa-mobile fa-2x"></i></a></li>
        <li class="hide-for-medium"><a href=""><i class="fa fa-envelope-o fa-2x"></i></a></a></li>
        <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
        <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
        <li><a href=""><i class="fa fa-instagram fa-2x"></i></a></li>
        <li style="width: 265px;" class="show-for-medium-only">        
          <?php get_search_form(); ?>
        </li>
      </ul>

      <section class="right-small">
        <a class="right-off-canvas-toggle" href="#"><span>Menu</span></a>
      </section>
    </nav>

    <div class="soc-nav-lg show-for-large">
    	<div class="row">
    		<div class="large-12 columns">
	        <ul class="inline-list">
	          <li><a href=""><i class="fa fa-facebook"></i></a></li>
	          <li><a href=""><i class="fa fa-twitter"></i></a></li>
	          <li><a href=""><i class="fa fa-instagram"></i></a></li>
	          <li>        
	            <?php get_search_form(); ?>
	          </li>
	        </ul>
	      </div>
      </div>
  	</div>

  	<div class="headBG">
	    <div class="row">
	      <div class="small-8 small-centered medium-4 medium-uncentered large-3 columns logo">
	        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cementex-logo-CS.svg" alt="cementex logo"></a>
	      </div>
	      <div class="medium-8 large-9 columns show-for-medium">
	        <div class="contact-nav-wrap">
	          <p>Toll Free: 800-654-1292</p>
	          <p><a href="mailto:cs@cementexusa.com"><i class="fa fa-envelope-o"></i> Customer Service</a></p>
	        </div>
	      </div>
	    </div>
	  </div>

	  <div class="nav">
	    <div class="nav-BG">
	      <div class="row show-for-large">
	        <div class="large-12 columns">
	          <div class="pure-menu pure-menu-horizontal">
							<?php idealabstarter_top_bar_r(); ?>
	          </div>
	        </div>
	      </div>
	    </div>
	  	<div class="row mobile-search show-for-small-only">
      	<div class="small-12 columns">
        	<?php get_search_form(); ?>
      	</div>
    	</div>
    </div>

	</header>

	<section class="pagewrap">
		<?php do_action( 'idealabstarter_after_header' );
