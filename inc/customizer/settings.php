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


CustomPress_Kirki::add_section( 'custom_pro_bar', array(
    'title'          => __( 'Upgrade to Premimum', 'custompress' ),
    'description'    => __( 'Let\'s make your website better.', 'custompress' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 0,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );
CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'custompress_pro_features',
	'section'  => 'custom_pro_bar',
	'type'     => 'custom',
	'default'  => __( '
			<ul>
				<li><strong>Better Search Engine Optimization</strong> - Drive more traffic to your website organically with better on-page SEO and <a href="http://schema.org/" target="_blank">schema.org</a> metadata.</li>
				<li><strong>Better Performance Optimization</strong> - Reduce your bounce rate with the optimized website. Reduce your overall page load time with our premium them and optimization tips.</li>
				<li><strong>Premium Support</strong> - Anything related to our theme or your WordPress requirements, just reach out to us quickly using our ticketing system.</li>
				<li><strong>More Customization Options</strong> - CustomPress\' free version is already one of the most customizable WordPress themes ever on wordpress.org library. Premium version takes it to the next level of customization.</li>
				<li><strong>Remove Footer Credit Link</strong></li>
				<li><strong>Premium Page Templates for Elementor Page Builder</strong></li>
			</ul>
			<p>and much more...</p>
		', 'custompress' ),
) );
CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'custompress_join_button',
	'section'  => 'custom_pro_bar',
	'type'     => 'custom',
	'default'  => __( '<div style="text-align: center;"><a href="https://wp-custompress.com/premium-wordpress-theme-custompress-pro/" target="_blank" class="button button-primary button-hero">Join Now</a></div>', 'custompress' ),
) );
