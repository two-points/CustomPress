<?php


CustomPress_Kirki::add_panel( 'custom_layout', array(
    'priority'    => 21,
    'title'       => esc_html__( 'Layout Settings', 'custompress' ),
) );

CustomPress_Kirki::add_section( 'header_layout', array(
    'title'          => esc_html__( 'Header Layout', 'custompress' ),
    'description'    => esc_html__( 'Customize your header layout here.', 'custompress' ),
    'panel'          => 'custom_layout', // Not typically needed.
    //'priority'       => 21,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'header_in_container',
	'label'    => esc_html__( 'Header Within Container', 'custompress' ),
	'section'  => 'header_layout',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => esc_html__( 'Select this option to display site header within container.', 'custompress' )
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'header_background_img',
	'label'    => esc_html__( 'Header Background Image', 'custompress' ),
	'section'  => 'header_layout',
	'type'     => 'image',
	'default'  => '',
    'tooltip' => esc_html__( 'Choose header background image.', 'custompress' )
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'header_align',
	'label'    => esc_html__( 'Header Alignment', 'custompress' ),
	'section'  => 'header_layout',
	'type'     => 'radio-buttonset',
	'default'  => 'left',
    'tooltip' => esc_html__( 'Select the header alignment.', 'custompress' ),
    'choices'     => array(
		'left'   => esc_attr__( 'Left', 'custompress' ),
		'center' => esc_attr__( 'Center', 'custompress' ),
	),
	'output'      => array(
		array(
			'element' => '.site-branding',
			'property' => 'text-align',
		),
	),
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'type'        => 'spacing',
	'settings'    => 'header_panel_spacing',
	'label'       => esc_html__( 'Header Panel Spacing', 'custompress' ),
	'section'     => 'header_layout',
    'tooltip' => esc_html__( 'Manage spacing for panels which are displayed in header section.', 'custompress' ),
	'default'     => array(
		'top'    => '0px',
		'bottom' => '0px',
	),
    'output' => array(
		array(
			'element'  => array( '.site-header-pad' ),
			'property' => 'padding'
		),
	),
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'hide_fixed_header',
	'label'    => esc_html__( 'Stick Header', 'custompress' ),
	'section'  => 'header_layout',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => esc_html__( 'Select this option to show stick header.', 'custompress' )
) );


CustomPress_Kirki::add_section( 'container_layout', array(
    'title'          => esc_html__( 'Container Layout', 'custompress' ),
    'description'    => esc_html__( 'Customize your container layout here.', 'custompress' ),
    'panel'          => 'custom_layout', // Not typically needed.
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


// Container width
CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'container_width',
	'label'    => __( 'Container Max. Width (in rem)', 'custompress' ),
	'section'  => 'container_layout',
	'type'     => 'slider',
	'priority' => 1,
    'tooltip' => esc_html__( 'You can increase or decrease container\'s maximum width using this slider.', 'custompress' ),
    'default'     => 130,
	'choices'     => array(
		'min'  => '80',
		'max'  => '220',
		'step' => '1',
	),
    'output' => array(
		array(
			'element'  => '.container',
			'property' => 'max-width',
			'units'    => 'rem',
		),
	),
) );

// Sidebar width
CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'sidebar_width',
	'label'    => esc_html__( 'Sidebar Width (in %)', 'custompress' ),
	'section'  => 'container_layout',
	'type'     => 'slider',
    'tooltip' => esc_html__( 'You can increase or decrease sidebar\'s % width using this slider.', 'custompress' ),
    'default'     => 30,
	'choices'     => array(
		'min'  => '20',
		'max'  => '50',
		'step' => '1',
	),
    'output' => array(
		array(
			'element'  => '.column.sidebar-width',
			'property' => 'max-width',
			'units'    => '%',
		),
        array(
			'element'  => '.column.sidebar-width',
			'property' => 'flex-basis',
			'units'    => '%',
		),
        array(
			'element'  => '.column.content-width',
			'property' => 'max-width',
            'value_pattern' => 'calc(100% - $%)'
		),
        array(
			'element'  => '.column.content-width',
			'property' => 'flex-basis',
            'value_pattern' => 'calc(100% - $%)'
		),
	),
) );

if( class_exists( 'Kirki' ) ) {
    CustomPress_Kirki::add_field( 'custompress_theme', array(
    	'type'        => 'spacing',
    	'settings'    => 'content_panel_spacing',
    	'label'       => esc_html__( 'Content Panel Spacing', 'custompress' ),
    	'section'     => 'container_layout',
        'tooltip' => esc_html__( 'Manage spacing for panels which are displayed in content section.', 'custompress' ),
    	'default'     => array(
    		'top'    => '40px',
    		'bottom' => '40px',
    		'left'   => '40px',
    		'right'  => '40px',
    	),
        'output' => array(
    		array(
    			'element'  => array( '.content-area .tp-panel', '.page-header' ),
    			'property' => 'padding'
    		),
    	),
    ) );
}


CustomPress_Kirki::add_section( 'ads_layout', array(
    'title'          => esc_html__( 'Advertisement Layout', 'custompress' ),
    'description'    => esc_html__( 'Customize your advertisement layout here.', 'custompress' ),
    'panel'          => 'custom_layout',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'ads_sidebar_layout',
	'label'    => esc_html__( 'Advertisement sidebar layout', 'custompress' ),
	'section'  => 'ads_layout',
	'type'     => 'radio-buttonset',
	'default'  => 'none',
    'tooltip' => esc_html__( 'Select position for adv sidebar. You need to add widget in advertisement sidebar first.', 'custompress' ),
    'description' => esc_html__( 'You need to add widget in advertisement sidebar first.', 'custompress' ),
    'choices'     => array(
    	'none' =>  esc_html__( 'No Adv', 'custompress' ),
		'left'   => esc_html__( 'Left', 'custompress' ),
		'right'  =>  esc_html__( 'Right', 'custompress' ),
	),
) );



CustomPress_Kirki::add_section( 'footer_layout', array(
    'title'          => esc_html__( 'Footer Layout', 'custompress' ),
    'description'    => esc_html__( 'Customize your footer layout here.', 'custompress' ),
    'panel'          => 'custom_layout',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'footer_in_container',
	'label'    => esc_html__( 'Footer Within Container', 'custompress' ),
	'section'  => 'footer_layout',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => esc_html__( 'Select this option to display footer within container.', 'custompress' )
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'type'        => 'spacing',
	'settings'    => 'footer_panel_spacing',
	'label'       => esc_html__( 'Footer Panel Spacing', 'custompress' ),
	'section'     => 'footer_layout',
    'tooltip' => esc_html__( 'Manage spacing for panels which are displayed in footer section.', 'custompress' ),
	'default'     => array(
		'top'    => '20px',
		'bottom' => '20px',
	),
    'output' => array(
		array(
			'element'  => array( '.upper-footer' ),
			'property' => 'padding'
		),
	),
) );

// Hide Back up to top button
CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'hide_back_top_button',
	'label'    => esc_html__( 'Hide Back up to top button', 'custompress' ),
	'section'  => 'footer_layout',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => esc_html__( 'Select this option to hide Back up to top button.', 'custompress' )
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'site_footer_align',
	'label'    => esc_html__( 'Site Footer Alignment', 'custompress' ),
	'section'  => 'footer_layout',
	'type'     => 'radio-buttonset',
	'default'  => 'general',
    'tooltip' => esc_html__( 'Select the footer alignment.', 'custompress' ),
    'choices'     => array(
		'general'   => esc_attr__( 'Left-Right', 'custompress' ),
		'center' => esc_attr__( 'Center', 'custompress' ),
	),
) );
