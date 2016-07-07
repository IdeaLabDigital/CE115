<?php
/**
 * Allow users to select Topbar or Offcanvas menu. Adds body class of offcanvas or topbar based on which they choose.
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

if ( ! function_exists( 'wpt_register_theme_customizer' ) ) :
	function wpt_register_theme_customizer( $wp_customize ) {

		// Create custom panels
		$wp_customize->add_panel( 'mobile_menu_settings', array(
		  'priority' => 1000,
		  'theme_supports' => '',
		  'title' => __( 'Mobile Menu Settings', 'idealabstarter' ),
		  'description' => __( 'Controls the mobile menu', 'idealabstarter' ),
		) );

		// Create custom field for mobile navigation layout
		$wp_customize->add_section( 'mobile_menu_layout' , array(
			'title'	=> __('Mobile navigation layout','idealabstarter'),
			'panel' => 'mobile_menu_settings',
			'priority' => 1000,
		));

		// Set default navigation layout
		$wp_customize->add_setting(
			'wpt_mobile_menu_layout',
			array(
				'default'	=> __( 'topbar', 'idealabstarter' ),
			)
		);

		// Add options for navigation layout
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'mobile_menu_layout',
				array(
					'type'		=> 'radio',
					'section' 	=> 'mobile_menu_layout',
					'settings' 	=> 'wpt_mobile_menu_layout',
			        'choices' => array(
									'topbar' => 'Topbar',
			            'offcanvas' => 'Offcanvas',
			        ),
				)
			)
		);

	}

	add_action( 'customize_register', 'wpt_register_theme_customizer' );

	// Add class to body to help w/ CSS
	add_filter( 'body_class', 'mobile_nav_class' );
	function mobile_nav_class( $classes ) {
		if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) :
			$classes[] = 'offcanvas';
		elseif ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) :
			$classes[] = 'topbar';
		endif;
		return $classes;
	}
endif;

class WP_Page_Menu_Walker extends Walker_Page {

	function start_el( &$output, $page, $depth = 0, $args = array(), $current_page = 0 ) {
		if ( $depth )
			$indent = str_repeat("\t", $depth);
		else
			$indent = '';

		extract($args, EXTR_SKIP);
		$css_class = array('page_item', 'page-item-'.$page->ID);
		
		global $post;
		$current_page = $post->ID;
		
		if ( !empty($current_page) ) {
			$_current_page = get_page( $current_page );
			if ( in_array( $page->ID, $_current_page->ancestors ) )
				$css_class[] = 'current_page_ancestor';
			if ( $page->ID == $current_page )
				$css_class[] = 'current_page_item';
			elseif ( $_current_page && $page->ID == $_current_page->post_parent )
				$css_class[] = 'current_page_parent';
		} elseif ( $page->ID == get_option('page_for_posts') ) {
			$css_class[] = 'current_page_parent';
		}

		$css_class = implode( ' ', apply_filters( 'page_css_class', $css_class, $page, $depth, $args, $current_page ) );

			
		$output .= $indent . '<li class="' . $css_class . '"><a href="' . get_permalink($page->ID) . '" class="button tiny">' . $link_before . apply_filters( 'the_title', ($page->post_type == "testimonial" ? "Testimonials" : $page->post_title), $page->ID ) . $link_after . '</a>';
	}
	
}
