<?php
/**
 * CustomPress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CustomPress
 */

if ( ! function_exists( 'custompress_setup' ) ) :
	function custompress_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'custompress', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Enable Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'status', 'quote', 'link' ) );

        // Enable support for woocommerce.
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'custompress' ),
		) );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'custompress_custom_background_args', array(
			'default-color' => 'e6e6e6',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'custompress_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function custompress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'custompress_content_width', 640 );
}
add_action( 'after_setup_theme', 'custompress_content_width', 0 );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function custompress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'custompress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'This is primary sidebar. Add widgets like search bar, newsletter subscription, recent posts etc here.', 'custompress' ),
		'before_widget' => '<section id="%1$s" class="widget tp-panel %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header Widget Area', 'custompress' ),
		'id'            => 'sidebar-header',
		'description'   => esc_html__( 'You can use this widget area for a custom menu or a advertisement.', 'custompress' ),
		'before_widget' => '<section id="%1$s" class="custompress-header-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Advertisement Sidebar', 'custompress' ),
		'id'            => 'sidebar-ads',
		'description'   => esc_html__( 'You can use this widget area for a custom menu or a advertisement.', 'custompress' ),
		'before_widget' => '<section id="%1$s" class="widget tp-panel %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Page Sidebar', 'custompress' ),
		'id'            => 'sidebar-page',
		'description'   => esc_html__( 'This is page sidebar.', 'custompress' ),
		'before_widget' => '<section id="%1$s" class="widget tp-panel %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Social Footer', 'custompress' ),
		'id'            => 'social-footer',
		'description'   => esc_html__( 'You can use this widget area for a social widget or a advertisement.', 'custompress' ),
		'before_widget' => '<section id="%1$s" class="widget tp-panel %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
	    'name'          => esc_html__( 'Middle Lower Footer Widget area', 'custompress' ),
	    'id'            => 'middle-lower-footer',
	    'description'   => esc_html__( 'You can use this widget area for a social media or logo etc in the lower footer.', 'custompress' ),
	    'before_widget' => '<section id="%1$s" class="custompress-header-widget %2$s">',
	    'after_widget'  => '</section>',
	    'before_title'  => '<h5 class="widget-title">',
	    'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'custompress_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function custompress_scripts() {
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), 'v1.3.0', 'all' );
	wp_enqueue_style( 'milligram', get_template_directory_uri() . '/css/milligram.css', array(), 'v7.0.0', 'all' );
	wp_enqueue_style( 'slicknavcss', get_template_directory_uri() . '/css/slicknav.css', array(), 'v1.0.10', 'all' );
	wp_enqueue_style( 'custompress-style', get_stylesheet_uri() );

	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), 'v1.0.10', true );
	wp_enqueue_script( 'custompress-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'custompress_scripts' );


/**
 * Filter the except length to 55 words.
 */
function custompress_excerpt_length( $length ) {
	if( get_theme_mod( 'excerpt_length' ) ) {
		return intval( get_theme_mod( 'excerpt_length' ) );
	}
    return 55;
}
add_filter( 'excerpt_length', 'custompress_excerpt_length', 999 );


// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Load WooCommerce compatibility file.
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// Make sure Kirki (and other plugins) is included
require_once get_template_directory() . '/inc/install-plugins.php';
require_once get_template_directory() . '/inc/kirki/include-kirki.php';
require_once get_template_directory() . '/inc/kirki/custompress-kirki.php';

// Customizer settingd
require_once get_template_directory() . '/inc/customizer/settings.php';
require_once get_template_directory() . '/inc/customizer/customizer-style.php';

// Custom comments
require get_template_directory() . '/inc/custom-comments.php';

// custom function woocommerce for this theme
include_once get_template_directory() . '/woocommerce/custompress-woocommerc-hooks.php';
