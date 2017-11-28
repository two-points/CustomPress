<?php

CustomPress_Kirki::add_config( 'custompress_theme', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


// Add settings
include( get_template_directory() . '/inc/customizer/layout-settings.php');
include( get_template_directory() . '/inc/customizer/typography-settings.php');
include( get_template_directory() . '/inc/customizer/color-settings.php');
include( get_template_directory() . '/inc/customizer/post-settings.php');
include( get_template_directory() . '/inc/customizer/footer-settings.php');
include( get_template_directory() . '/inc/customizer/general-option.php');



/**
* Styling Customizer
*/
function custompress_customizer_css()
{
	wp_enqueue_style('custompress-customizer-css', get_template_directory_uri() . '/inc/customizer/customizer.css');
}
add_action('customize_controls_print_styles', 'custompress_customizer_css');
