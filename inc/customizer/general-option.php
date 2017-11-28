<?php

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'hide_site_title',
	'label'    => __( 'Hide Site Title', 'custompress' ),
	'section'  => 'title_tagline',
	'type'     => 'toggle',
	'priority' => 10,
	'default'     => '0',
	'tooltip' => __( 'Select this option to hide site title.', 'custompress' ),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'hide_site_description',
	'label'    => __( 'Hide Site Description', 'custompress' ),
	'section'  => 'title_tagline',
	'type'     => 'toggle',
	//'priority' => 4,
	'default'     => '0',
	'tooltip' => __( 'Select this option to hide site description.', 'custompress' ),
) );


// site_logo_width
CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'site_logo_width',
	'label'    => __( 'Logo Width (in px)', 'custompress' ),
	'section'  => 'title_tagline',
	'type'     => 'slider',
	//'priority' => 1,
    'tooltip' => esc_html__( 'You can increase or decrease logo width using this slider.', 'custompress' ),
    'default'     => 241,
	'choices'     => array(
		'min'  => '10',
		'max'  => '300',
		'step' => '1',
	),
    'output' => array(
		array(
			'element'  => '.custom-logo-link img',
			'property' => 'width',
			'units'    => 'px',
		),
	),
) );

// site logo height
CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'site_logo_height',
	'label'    => __( 'Logo Height (in px)', 'custompress' ),
	'section'  => 'title_tagline',
	'type'     => 'slider',
	//'priority' => 1,
    'tooltip' => esc_html__( 'You can increase or decrease logo height using this slider.', 'custompress' ),
    'default'     => 81,
	'choices'     => array(
		'min'  => '10',
		'max'  => '100',
		'step' => '1',
	),
    'output' => array(
		array(
			'element'  => '.custom-logo-link img',
			'property' => 'height',
			'units'    => 'px',
		),
	),
) );
