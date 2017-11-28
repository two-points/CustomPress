<?php

CustomPress_Kirki::add_section( 'custom_typography', array(
    'title'          => __( 'Typography Settings', 'custompress' ),
    'description'    => __( 'Customize your website\'s typography here.', 'custompress' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 22,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'body_typography',
	'label'    => __( 'Body Typography', 'custompress' ),
	'section'  => 'custom_typography',
	'type'     => 'typography',
	'priority' => 1,
    'default'     => array(
		'font-family'    => "-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif",
		'variant'        => 'regular',
		'color'          => '#606c76',
	),
	'output'      => array(
		array(
			'element' => array( 'body', 'button', 'input', 'optgroup', 'select', 'textarea' ),
		),
	),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'heading_typography',
	'label'    => __( 'Heading Typography', 'custompress' ),
	'section'  => 'custom_typography',
	'type'     => 'typography',
    'default'     => array(
		'font-family'    => "-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif",
		'variant'        => '700',
		'color'          => '#343434',
	),
	'output'      => array(
		array(
			'element' => array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' ),
		),
	),
) );
