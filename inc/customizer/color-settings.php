<?php

CustomPress_Kirki::add_section( 'custom_colors', array(
    'title'          => __( 'Color Settings', 'custompress' ),
    'description'    => __( 'Customize your website\'s colors here.', 'custompress' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 23,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'body_bg_color',
	'label'    => __( 'Body Background', 'custompress' ),
	'section'  => 'custom_colors',
	'type'     => 'color',
	'priority' => 1,
    'default'     => '#efefef',
	'choices'     => array(
		'alpha' => true,
	),
    'output' => array(
		array(
			'element'  => 'body',
			'property' => 'background-color',
		),
	),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'header_bg_color',
	'label'    => __( 'Header Background', 'custompress' ),
	'section'  => 'custom_colors',
	'type'     => 'color',
	'priority' => 2,
    'default'     => '#ffffff',
	'choices'     => array(
		'alpha' => false,
	),
    'output' => array(
		array(
			'element'  => '.site-header',
			'property' => 'background-color',
		),
	),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'nav_bg_color',
	'label'    => __( 'Navigation Background', 'custompress' ),
	'section'  => 'custom_colors',
	'type'     => 'color',
	//'priority' => 2,
    'default'     => '#ffffff',
	'choices'     => array(
		'alpha' => false,
	),
    'output' => array(
		array(
			'element'  => array ( '.site-navigation', '#primary-menu.menu li ul' ),
			'property' => 'background-color',
		),
	),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'nav_link_color',
	'label'    => __( 'Menu text Color', 'custompress' ),
	'section'  => 'custom_colors',
	'type'     => 'color',
	//'priority' => 2,
    'default'     => '#343434',
	'choices'     => array(
		'alpha' => false,
	),
    'output' => array(
		array(
			'element'  => '#site-navigation li a',
			'property' => 'color',
		),
	),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'primary_color',
	'label'    => __( 'Primary Color', 'custompress' ),
	'section'  => 'custom_colors',
	'type'     => 'color',
	'priority' => 3,
    'default'     => '#dd3333',
	'choices'     => array(
		'alpha' => false,
	),
    'output' => array(
		array(
			'element'  => array( '.button', '#colophon .scroll-to-top', "button", "input[type='button']", "input[type='reset']", "input[type='submit']", ".button[disabled]:focus", ".button[disabled]:hover", "button[disabled]:focus", "button[disabled]:hover", "input[type='button'][disabled]:focus", "input[type='button'][disabled]:hover", "input[type='reset'][disabled]:focus", "input[type='reset'][disabled]:hover", "input[type='submit'][disabled]:focus", "input[type='submit'][disabled]:hover" ),
			'property' => 'background-color',
		),
        array(
			'element'  => array( '.button', "button", "input[type='button']", "input[type='reset']", "input[type='submit']", ".button[disabled]:focus", ".button[disabled]:hover", "button[disabled]:focus", "button[disabled]:hover", "input[type='button'][disabled]:focus", "input[type='button'][disabled]:hover", "input[type='reset'][disabled]:focus", "input[type='reset'][disabled]:hover", "input[type='submit'][disabled]:focus", "input[type='submit'][disabled]:hover" ),
			'property' => 'border-color',
		),
        array(
			'element'  => array( "a", ".button.button-outline", "button.button-outline", "input[type='button'].button-outline", "input[type='reset'].button-outline", "input[type='submit'].button-outline", ".button.button-outline[disabled]:focus", ".button.button-outline[disabled]:hover", "button.button-outline[disabled]:focus", "button.button-outline[disabled]:hover", "input[type='button'].button-outline[disabled]:focus", "input[type='button'].button-outline[disabled]:hover", "input[type='reset'].button-outline[disabled]:focus", "input[type='reset'].button-outline[disabled]:hover", "input[type='submit'].button-outline[disabled]:focus", "input[type='submit'].button-outline[disabled]:hover", ".button.button-clear", "button.button-clear", "input[type='button'].button-clear", "input[type='reset'].button-clear", "input[type='submit'].button-clear" ),
			'property' => 'color',
		),
        array(
			'element'  => array( ".button.button-clear[disabled]:focus", ".button.button-clear[disabled]:hover", "button.button-clear[disabled]:focus", "button.button-clear[disabled]:hover", "input[type='button'].button-clear[disabled]:focus", "input[type='button'].button-clear[disabled]:hover", "input[type='reset'].button-clear[disabled]:focus", "input[type='reset'].button-clear[disabled]:hover", "input[type='submit'].button-clear[disabled]:focus", "input[type='submit'].button-clear[disabled]:hover" ),
			'property' => 'color',
		),
        array(
			'element'  => 'pre',
			'property' => 'border-left-color',
		),
        array(
			'element'  => array( "input[type='email']:focus", "input[type='number']:focus", "input[type='password']:focus", "input[type='search']:focus", "input[type='tel']:focus", "input[type='text']:focus", "input[type='url']:focus", "textarea:focus", "select:focus" ),
			'property' => 'border-color',
		),
        array(
			'element'  => array( '.entry-title a:hover', '.menu li a:hover' ),
			'property' => 'color',
		),
	),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'footer_bg_color',
	'label'    => __( 'Footer Background', 'custompress' ),
	'section'  => 'custom_colors',
	'type'     => 'color',
	'priority' => 4,
    'default'     => '#343434',
	'choices'     => array(
		'alpha' => false,
	),
    'output' => array(
		array(
			'element'  => '.site-footer',
			'property' => 'background-color',
		),
	),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'footer_text_color',
	'label'    => __( 'Footer text Color', 'custompress' ),
	'section'  => 'custom_colors',
	'type'     => 'color',
	//'priority' => 2,
    'default'     => '#606c76',
	'choices'     => array(
		'alpha' => false,
	),
    'output' => array(
		array(
			'element'  => '#colophon',
			'property' => 'color',
		),
	),
) );
