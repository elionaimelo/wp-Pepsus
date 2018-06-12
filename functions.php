<?php
/**
 * pepsus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pepsus
 */

if ( ! function_exists( 'pepsus_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pepsus_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pepsus, use a find and replace
		 * to change 'pepsus' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pepsus', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'post-formats', array('video','image'));

		// This theme uses wp_nav_menu() in one location.

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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'pepsus_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'pepsus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pepsus_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'pepsus_content_width', 640 );
}
add_action( 'after_setup_theme', 'pepsus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pepsus_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pepsus' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Barra lateral direita', 'pepsus' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pepsus_widgets_init' );


function pepsus_widgets_init1() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sobre da Página Home', 'pepsus' ),
		'id'            => 'widget-1',
		'description'   => esc_html__( 'Widget sobre da home', 'pepsus' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pepsus_widgets_init1' );

function pepsus_widgets_init2() {
	register_sidebar( array(
		'name'          => esc_html__( 'Rodapé', 'pepsus' ),
		'id'            => 'widget-2',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
	) );
}
add_action( 'widgets_init', 'pepsus_widgets_init2' );

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

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pepsus_scripts' );



/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function your_prefix_get_meta_box( $meta_boxes ) {
	$prefix = 'prefix-';

	$meta_boxes[] = array(
		'id' => 'untitled',
		'title' => esc_html__( 'Informações', 'metabox-online-generator' ),
		'post_types' => array( 'membros_pepsus', 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'profissao',
				'type' => 'text',
				'name' => esc_html__( 'Profissão', 'metabox-online-generator' ),
			),
			array(
				'id' => $prefix . 'url_1',
				'type' => 'url',
				'name' => esc_html__( 'URL do Lattes', 'metabox-online-generator' ),
			),
			array(
				'id' => $prefix . 'url_2',
				'type' => 'url',
				'name' => esc_html__( 'URL do Facebook', 'metabox-online-generator' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'your_prefix_get_meta_box' );






