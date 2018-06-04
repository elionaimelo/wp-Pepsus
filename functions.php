<?php


/**
 * Enqueue scripts and styles.
 */
function pepsus_scripts() {
	wp_enqueue_style( 'pepsus-style', get_stylesheet_uri() );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/styles/main.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.0.13/css/all.css', array(), '1.0', 'all' );

	wp_enqueue_script( 'vendor', get_template_directory_uri() . '/scripts/vendor.js', array(), '', true );
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/scripts/plugins.js', array(), '', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/scripts/main.js', array(), '1.0', true );
	wp_enqueue_script( 'moderniz', get_template_directory_uri() . '/scripts/vendor/modernizr.js', array());

}
add_action( 'wp_enqueue_scripts', 'pepsus_scripts' );

add_shortcode( 'template_dir', function( $atts ){
    return get_template_directory_uri() . '/images/' . $atts['image'];
});

// register_nav_menus( array(
// 	'menu-1' => esc_html__( 'Primary', 'pepsus' ),
// ) );

require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

register_nav_menus( array(
    'primary' => __( 'Menu topo', 'pepsus' ),
) );

register_nav_menus( array(
    'menu-footer' => __( 'Menu footer', 'pepsus' ),
) );


/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );
