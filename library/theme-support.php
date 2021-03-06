<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

if ( ! function_exists( 'idealabstarter_theme_support' ) ) :
function idealabstarter_theme_support() {
	// Add language support
	load_theme_textdomain( 'idealabstarter', get_template_directory() . '/languages' );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add menu support
	add_theme_support( 'menus' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'post-thumbnails' );

	// RSS thingy
	add_theme_support( 'automatic-feed-links' );

	// Add post formats support: http://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

	// Declare WooCommerce support per http://docs.woothemes.com/document/third-party-custom-theme-compatibility/
	add_theme_support( 'woocommerce' );

	// Add foundation.css as editor style https://codex.wordpress.org/Editor_Style
	add_editor_style( 'assets/stylesheets/foundation.css' );
}

add_action( 'after_setup_theme', 'idealabstarter_theme_support' );
endif;

// Add support for svg featured images
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function short_mail( $input ){
	// in case scheme relative URI is passed, e.g., //www.crunchify.com/
	$input = trim($input, '/');
 
	// If scheme not included, prepend it
	if (!preg_match('#^http(s)?://#', $input)) {
		$input = 'http://' . $input;
	}
 
	$urlParts = parse_url($input);
 
	// Get Domain. i.e. crunchify.com
	$domain = preg_replace('/^www\./', '', $urlParts['host']);
 
	// Get Path. i.e. /path
	$path = preg_replace('/^www\./', '', $urlParts['path']);
 
	// Merge to generate complete URL
	$link = $domain. $path;

	return $link;
}

/**
 * Halt the main query in the case of an empty search 
 */
add_filter( 'posts_search', function( $search, \WP_Query $q )
{
  if( ! is_admin() && empty( $search ) && $q->is_search() && $q->is_main_query() )
    $search .=" AND 0=1 ";

  return $search;
}, 10, 2 );
