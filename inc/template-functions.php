<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package CustomPress
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function custompress_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'custompress_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function custompress_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'custompress_pingback_header' );


/**
* Add welcome page
*/
function custompress_add_welcome_page() {
    $_name = __( 'CustomPress Help' , 'custompress' );

    $theme_page = add_theme_page(
        $_name,
        $_name,
        'edit_theme_options',
        'about-custompress',
        'custompress_welcome_page'
    );
}
add_action( 'admin_menu', 'custompress_add_welcome_page' );


function custompress_welcome_page() {
	include_once( 'views/about.php' );
}


/**
* Add help button on admin navbar
*/
function custompress_add_help_button() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	global $wp_admin_bar;

	$args = array(
		'id'     => 'custompress-help',
		'parent' => 'top-secondary',
		'title'  => __( 'Theme Help', 'custompress' ),
		'href'   => admin_url( 'themes.php?page=about-custompress' ),
		'meta'   => array(
			'class'    => 'custompress-help-bar',
		),
	);
	$wp_admin_bar->add_menu( $args );

}
add_action( 'wp_before_admin_bar_render', 'custompress_add_help_button' );


/**
* Add admin styles
*/
function custompress_admin_style() {
	wp_enqueue_style( 'custompress-admin', get_template_directory_uri() . '/css/custompress-admin.css' );
}
add_action( 'admin_init' , 'custompress_admin_style' );


/**
* Welcome notice to help user
*/
function custompress_greet_user() {
	$help_url = esc_url( admin_url( 'themes.php?page=about-custompress' ) );
	echo '<div class="notice notice-success is-dismissible">';
	wp_kses_post( _e( '<p>Welcome! Thank you for choosing CustomPress. We are always there to help you. Just click on "Theme Help" link in admin bar if you need anything and reach out to us.</p>', 'custompress' ) );
	echo "<p><a href='$help_url' class='button button-primary'>";
	esc_html_e( 'Get started with CustomPress', 'custompress' );
	echo '</a></p></div>';
}
