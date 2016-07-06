<?php

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bac_flush_rewrite_rules' );

// Flush your rewrite rules
function bac_flush_rewrite_rules() {
  flush_rewrite_rules();
}

function register_cpt_cx_products() {

    $labels = array(
        'name' => _x( 'Products', 'cx_products' ),
        'singular_name' => _x( 'Products', 'cx_products' ),
        'add_new' => _x( 'Add New', 'cx_products' ),
        'add_new_item' => _x( 'Add New', 'cx_products' ),
        'edit_item' => _x( 'Edit', 'cx_products' ),
        'new_item' => _x( 'New', 'cx_products' ),
        'view_item' => _x( 'View', 'cx_products' ),
        'search_items' => _x( 'Search', 'cx_products' ),
        'not_found' => _x( 'None found', 'cx_products' ),
        'not_found_in_trash' => _x( 'None found in Trash', 'cx_products' ),
        'parent_item_colon' => _x( 'Parent Product:', 'cx_products' ),
        'menu_name' => _x( 'Products', 'cx_products' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'floor custom post type',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'revisions' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'menu_icon'   => 'dashicons-hammer',
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array("slug" => "product"),
        'capability_type' => 'post'
    );

    register_post_type( 'cx_products', $args );
}

// adding the function to the Wordpress init
add_action( 'init', 'register_cpt_cx_products' );

function register_cpt_cx_events() {

    $labels = array(
        'name' => _x( 'Events', 'cx_events' ),
        'singular_name' => _x( 'Events', 'cx_events' ),
        'add_new' => _x( 'Add New', 'cx_events' ),
        'add_new_item' => _x( 'Add New', 'cx_events' ),
        'edit_item' => _x( 'Edit', 'cx_events' ),
        'new_item' => _x( 'New', 'cx_events' ),
        'view_item' => _x( 'View', 'cx_events' ),
        'search_items' => _x( 'Search', 'cx_events' ),
        'not_found' => _x( 'None found', 'cx_events' ),
        'not_found_in_trash' => _x( 'None found in Trash', 'cx_events' ),
        'parent_item_colon' => _x( 'Parent Event:', 'cx_events' ),
        'menu_name' => _x( 'Events', 'cx_events' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'floor custom post type',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'revisions' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'menu_icon'   => 'dashicons-tickets-alt',
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array("slug" => "event"),
        'capability_type' => 'post'
    );

    register_post_type( 'cx_events', $args );
}

// adding the function to the Wordpress init
add_action( 'init', 'register_cpt_cx_events' );

// adding the Taxonomy, like Categories for custom post type
add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
    register_taxonomy(
        'product_category',
        'cx_products',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => 'Product Category',
            'query_var' => true,
            'rewrite' => array("slug" => "categories")
        )
    );
}

function add_menu_icons_styles(){ ?>

    <style>
    #adminmenu .menu-icon-events div.wp-menu-image:before {
      content: "\f111";
    }
    </style>

<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );

?>