<?php
/**
 * Register widget areas
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

if ( ! function_exists( 'idealabstarter_sidebar_widgets' ) ) :
function idealabstarter_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'idealabstarter' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'idealabstarter' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'home-widgets-img-large',
	  'name' => __( 'Homepage Image Text widget', 'idealabstarter' ),
	  'description' => __( 'Drag widgets to this container', 'idealabstarter' ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s"><h2>',
	  'after_widget' => '</h2></div>',
	  'before_title' => '',
	  'after_title' => '',
	));

	register_sidebar(array(
	  'id' => 'home-widgets-img-small',
	  'name' => __( 'Homepage Image Text widget', 'idealabstarter' ),
	  'description' => __( 'Drag widgets to this container', 'idealabstarter' ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s"><h4>',
	  'after_widget' => '</h4></div>',
	  'before_title' => '',
	  'after_title' => '',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets-left',
	  'name' => __( 'Footer widgets Left', 'idealabstarter' ),
	  'description' => __( 'Drag widgets to this footer container', 'idealabstarter' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<p><b>',
	  'after_title' => '</b></p>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets-center',
	  'name' => __( 'Footer widgets Center', 'idealabstarter' ),
	  'description' => __( 'Drag widgets to this footer container', 'idealabstarter' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<p><b>',
	  'after_title' => '</b></p>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets-right',
	  'name' => __( 'Footer widgets Right', 'idealabstarter' ),
	  'description' => __( 'Drag widgets to this footer container', 'idealabstarter' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<p><b>',
	  'after_title' => '</b></p>',
	));
}

add_action( 'widgets_init', 'idealabstarter_sidebar_widgets' );
endif;
