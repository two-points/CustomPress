<?php

CustomPress_Kirki::add_panel( 'custom_posts_panel', array(
    'priority'    => 24,
    'title'       => __( 'Posts & Pages Settings', 'custompress' ),
) );

CustomPress_Kirki::add_section( 'custom_posts_archive', array(
    'title'          => __( 'Archive Page Settings', 'custompress' ),
    'description'    => __( 'Customize your posts displayed on archive pages.', 'custompress' ),
    'panel'          => 'custom_posts_panel', // Not typically needed.
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'excerpt_length',
	'label'    => __( 'Excerpt Length', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'slider',
	'default'  => '55',
    'description' => __( 'This setting will be ignored if "Display Full Post" setting is selected.', 'custompress' ),
    'tooltip' => __( 'Select number of words to be displayed in except.', 'custompress' ),
    'choices'     => array(
		'min'  => '20',
		'max'  => '200',
		'step' => '1',
	),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'hide_excerpt',
	'label'    => esc_html__( 'Hide Excerpt ', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => esc_html__( 'You can hide excerpt on archive pages by selecting this option.', 'custompress' )
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'archive_post_layout',
	'label'    => esc_html__( 'Archive blog sidebar layout', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'radio-buttonset',
	'default'  => 'sidebar-right',
    'tooltip' => esc_html__( 'Select for archive blog layout', 'custompress' ),
    'choices'     => array(
		'sidebar-left'   => esc_html__( 'Left', 'custompress' ),
		'no-sidebar' =>  esc_html__( 'No Sidebar', 'custompress' ),
        'sidebar-right'  =>  esc_html__( 'Right', 'custompress' ),
	),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'post_display_layout',
	'label'    => esc_html__( 'Post Display layout', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'radio-buttonset',
	'default'  => 'full',
    'tooltip'  => esc_html__( 'Select display post layout.', 'custompress' ),
    'choices'     => array(
		'grid' => esc_html__( 'Grid', 'custompress' ),
		'full' => esc_html__( 'Full', 'custompress' ),
	),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'full_text',
	'label'    => esc_html__( 'Display Full Post', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => esc_html__( 'Select this option to display full posts on home page.', 'custompress' )
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'hide_featured_image',
	'label'    => esc_html__( 'Hide Featured Image', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => esc_html__( 'You can hide featured image on archive pages by selecting this option.', 'custompress' )
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'post_thumb_size',
	'label'    => esc_html__( 'Featured Image Size', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'radio-buttonset',
	'default'  => 'full',
    'tooltip' => esc_html__( 'Select the size for the featured image to be displayed.', 'custompress' ),
    'choices'     => array(
		'thumbnail'   => esc_html__( 'Thumbnail', 'custompress' ),
		'medium' => esc_html__( 'Medium', 'custompress' ),
        'medium_large'  => esc_html__( 'Medium-Large', 'custompress' ),
        'large'  => esc_html__( 'Large', 'custompress' ),
		'full'  => esc_html__( 'Full', 'custompress' ),
	),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'post_thumb_align',
	'label'    => esc_html__( 'Featured Image Alignment', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'radio-buttonset',
	'default'  => 'thumb-center',
    'tooltip' => esc_html__( 'Select the size for the featured image to be displayed.', 'custompress' ),
    'choices'     => array(
		'thumb-left'   => esc_html__( 'Left', 'custompress' ),
		'thumb-center' => esc_html__( 'Center', 'custompress' ),
        'thumb-right'  => esc_html__( 'Right', 'custompress' ),
	),
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'featured_image_above_title_archive',
	'label'    => esc_html__( 'Featured Image Above title', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => esc_html__( 'You can display featured image above post title by selecting this option.', 'custompress' )
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'metadata_icons',
	'label'    => __( 'Display Icons for Metadata', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => __( 'You can display icons instead of text for post metadata.', 'custompress' )
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'read_more_btn',
	'label'    => esc_html__( 'Display Read More Button', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => esc_html__( 'Select this option to display read more button.', 'custompress' )
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'read_more_label',
	'label'    => esc_html__( 'Read More Button Label', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'text',
	'default'  => 'Read More',
    'tooltip' => esc_html__( 'Enter the text', 'custompress' )
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'read_more_btn_align',
	'label'    => esc_html__( 'Read More Button Alignment', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'radio-buttonset',
	'default'  => 'center',
    'tooltip' => esc_html__( 'Select the alignment for the readmore button to be displayed.', 'custompress' ),
    'choices'     => array(
		'left'   => esc_html__( 'Left', 'custompress' ),
		'center' => esc_html__( 'Center', 'custompress' ),
        'right'  => esc_html__( 'Right', 'custompress' ),
	),
	'output' => array(
		array(
			'element'  => '.read-more-btn',
			'property' => 'text-align',
		),
	),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'custompress_default_thumbnail_image',
	'label'    => esc_html__( 'Show Default Thumbnail Image ', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => esc_html__( 'You can show default image on archive pages by selecting this option.', 'custompress' )
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'custompress_change_default_post_thumbnail',
	'label'    => esc_html__( 'Upload Default Thumbnail Image', 'custompress' ),
	'section'  => 'custom_posts_archive',
	'type'     => 'image',
	'default'  => '',
    'tooltip' => esc_html__( 'You can display default thumbnail image.', 'custompress' )
) );



CustomPress_Kirki::add_section( 'custom_posts_single', array(
    'title'          => esc_html__( 'Single Post Settings', 'custompress' ),
    'description'    => esc_html__( 'Customize your posts displayed on single post page.', 'custompress' ),
    'panel'          => 'custom_posts_panel', // Not typically needed.
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'hide_featured_image_single',
	'label'    => esc_html__( 'Hide Featured Image', 'custompress' ),
	'section'  => 'custom_posts_single',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => esc_html__( 'You can hide featured image on single post by selecting this option.', 'custompress' )
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'single_post_layout',
	'label'    => esc_html__( 'Single blog layout', 'custompress' ),
	'section'  => 'custom_posts_single',
	'type'     => 'radio-buttonset',
	'default'  => 'sidebar-right',
    'tooltip' => esc_html__( 'Select for single blog layout', 'custompress' ),
    'choices'     => array(
		'sidebar-left'   => esc_html__( 'Left', 'custompress' ),
		'no-sidebar' => esc_html__( 'No Sidebar', 'custompress' ),
        'sidebar-right'  => esc_html__( 'Right', 'custompress' ),
	),
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'featured_image_above_title_single',
	'label'    => __( 'Featured Image Above title', 'custompress' ),
	'section'  => 'custom_posts_single',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => __( 'You can display featured image above post title by selecting this option on single post page.', 'custompress' )
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'single_title_align',
	'label'    => esc_html__( 'Title Alignment', 'custompress' ),
	'section'  => 'custom_posts_single',
	'type'     => 'radio-buttonset',
	'default'  => 'left',
    'tooltip' => esc_html__( 'Select the alignment for title on single blog post. ( Its not applicable on post banner.)', 'custompress' ),
    'choices'     => array(
		'left'   => esc_html__( 'Left', 'custompress' ),
		'center' => esc_html__( 'Center', 'custompress' ),
        'right'  => esc_html__( 'Right', 'custompress' ),
	),
	'output' => array(
		array(
			'element'  => '.custompress-single-post .entry-header',
			'property' => 'text-align',
		),
	),
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'show_post_banner',
	'label'    => esc_html__( 'Show Post Banner', 'custompress' ),
	'section'  => 'custom_posts_single',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => esc_html__( 'You can show post banner on single post by selecting this option.', 'custompress' )
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'post_banner_background',
	'label'    => esc_html__( 'Post Banner Background', 'custompress' ),
	'section'  => 'custom_posts_single',
	'type'     => 'radio',
	'default'  => 'color',
	'choices'     => array(
		'featured'   => array(
			esc_html__( 'Featured Image', 'custompress' ),
			esc_html__( 'Use featured image as banner background image.', 'custompress' ),
		),
		'default' => array(
			esc_html__( 'Default Image', 'custompress' ),
			esc_html__( 'Use Default image as banner background image.', 'custompress' ),
		),
		'color'  => array(
			esc_html__( 'Background Color', 'custompress' ),
			esc_html__( 'Use Background color as banner background.', 'custompress' ),
		),
    ),
    'tooltip' => esc_html__( 'Select this option for only banner background.', 'custompress' )
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'default_post_banner_img',
	'label'    => esc_html__( 'Upload Default Banner Image', 'custompress' ),
	'section'  => 'custom_posts_single',
	'type'     => 'image',
	'description'     => esc_html__( 'This option are only applicable when you can choose post banner background option as default image Or When you choose as featured image but in post cannot set featured image. ', 'custompress' ),
    'tooltip' => esc_html__( 'You can display default banner image for post banner.', 'custompress' )
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'default_post_banner_color',
	'label'    => esc_html__( 'Default Banner Color', 'custompress' ),
	'section'  => 'custom_posts_single',
	'type'     => 'color',
	'description'     => esc_html__( 'This option are only applicable when you can choose post banner background option as Background color.', 'custompress' ),
    'tooltip' => esc_html__( 'You can display default banner background color for post banner.', 'custompress' )
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'hide_author_meta_box',
	'label'    => __( 'Hide author box', 'custompress' ),
	'section'  => 'custom_posts_single',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => __( 'Select this option to hide author box on single blog page.', 'custompress' )
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'hide_navigation_single',
	'label'    => __( 'Hide Navigation', 'custompress' ),
	'section'  => 'custom_posts_single',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => __( 'Select this option to hide navigation on single blog page.', 'custompress' )
) );


CustomPress_Kirki::add_section( 'custom_page_single', array(
    'title'          => __( 'Single Page Settings', 'custompress' ),
    'description'    => __( 'Customize your pagesettings.', 'custompress' ),
    'panel'          => 'custom_posts_panel', // Not typically needed.
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'hide_featured_image_page',
	'label'    => __( 'Hide Featured Image', 'custompress' ),
	'section'  => 'custom_page_single',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => __( 'You can hide featured image on the page by selecting this option.', 'custompress' )
) );


CustomPress_Kirki::add_field( 'custompress_theme', array(
	'settings' => 'single_page_layout',
	'label'    => esc_html__( 'Single Page layout', 'custompress' ),
	'section'  => 'custom_page_single',
	'type'     => 'radio-buttonset',
	'default'  => 'sidebar-right',
    'tooltip' => esc_html__( 'Select for single page layout', 'custompress' ),
    'choices'     => array(
		'sidebar-left'   => esc_html__( 'Left', 'custompress' ),
		'no-sidebar' => esc_html__( 'No Sidebar', 'custompress' ),
        'sidebar-right'  => esc_html__( 'Right', 'custompress' ),
	),
) );
