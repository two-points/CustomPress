<?php

CustomPress_Kirki::add_section( 'custom_footer', array(
    'title'          => __( 'Footer Settings', 'custompress' ),
    'description'    => __( 'Customize your website\'s footer here.', 'custompress' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'footer_left',
	'label'    => __( 'Footer - Left Text', 'custompress' ),
	'section'  => 'custom_footer',
	'type'     => 'text',
	'priority' => 10,
	'default'  => __( '(c) 2017 - All Rights Reserved.', 'custompress' ),
) );
