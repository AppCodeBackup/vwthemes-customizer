<?php
	$wp_customize->add_section('vw_startup_pro_topbar_header',array(
		'title'	=> __('Top Bar','vw-startup-pro'),
		'description'	=> __('Top Bar Settings','vw-startup-pro'),
		'priority'	=> null,
		'panel' => 'vw_startup_pro_panel_id',
	));

	$wp_customize->add_setting('vw_startup_pro_topbar_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_startup_pro_topbar_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_startup_pro_topbar_header',
        'choices' => array(
            'Enable' => __('Enable', 'vw-startup-pro'),
            'Disable' => __('Disable', 'vw-startup-pro')
        ),
    ));

	$wp_customize->add_setting( 'vw_startup_pro_topbar_searchbox',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vw_startup_pro_switch_sanitization'
	));	 
	$wp_customize->add_control( new VW_Themes_Toggle_Switch_Custom_control( $wp_customize, 'vw_startup_pro_topbar_searchbox',
	   array(
	      'label' => esc_html__( 'Show / Hide search box', 'vw-startup-pro' ),
	      'section' => 'vw_startup_pro_topbar_header'
	)));

    // Headline Text
    $wp_customize->selective_refresh->add_partial( 'vw_startup_pro_top_headlines', array(
        'selector' => '.top-headline',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_top_headlines',
    ) );
	$wp_customize->add_setting('vw_startup_pro_top_headlines',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_startup_pro_top_headlines',array(
		'label'	=> __('Top Headline Text','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_topbar_header',
		'setting'	=> 'vw_startup_pro_top_headlines',
		'type'	=> 'text'
	));
	// Contact details
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_header_address', array(
        'selector' => '.hi_normal',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_header_address',
    ) );
	$wp_customize->add_setting('vw_startup_pro_header_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_startup_pro_header_address',array(
		'label'	=> __('Add Address Here','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_topbar_header',
		'setting'	=> 'vw_startup_pro_header_address',
		'type'	=> 'text'
	));
	
	//Cell Number
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_header_callnumber', array(
        'selector' => '.cell_number',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_header_callnumber',
    ) );
	$wp_customize->add_setting('vw_startup_pro_header_callnumber',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_startup_pro_header_callnumber',array(
		'label'	=> __('Add Cell Number here','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_topbar_header',
		'setting'	=> 'vw_startup_pro_header_callnumber',
		'type'	=> 'text'
	));
	// Emails
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_header_email_address', array(
        'selector' => '.email_wrap',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_header_email_address',
    ) );
	$wp_customize->add_setting('vw_startup_pro_header_email_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_startup_pro_header_email_address',array(
		'label'	=> __('Add Email address Here','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_topbar_header',
		'setting'	=> 'vw_startup_pro_header_email_address',
		'type'	=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_header_btntext', array(
        'selector' => '.top_bar_btn a.theme_button',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_header_btntext',
    ) );
	$wp_customize->add_setting('vw_startup_pro_header_btntext',array(
		'default'	=> __('Donate Now','vw-startup-pro'),
		'sanitize_callback'	=> 'sanitize_textarea_field',
	));
	$wp_customize->add_control('vw_startup_pro_header_btntext',array(
		'label' => __('Slider Button Text','vw-startup-pro'),
		'section' => 'vw_startup_pro_headerr_section',
		'setting'	=> 'vw_startup_pro_header_btntext',
		'type'	=> 'text'
	));
	$wp_customize->add_setting('vw_startup_pro_header_btnurl',array(
		'default'	=> __('#','vw-startup-pro'),
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control('vw_startup_pro_header_btnurl',array(
		'label' => __('Button URL','vw-startup-pro'),
		'section' => 'vw_startup_pro_headerr_section',
		'setting'	=> 'vw_startup_pro_header_btnurl',
		'type'	=> 'text'
	));
	//contact details color setting
	$wp_customize->add_setting( 'vw_startup_pro_topbar_color_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_topbar_color_options',
		array(
		  'label' => __('Color Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_topbar_header'
		)
	) );

	$wp_customize->add_setting( 'vw_startup_pro_header_contact_details_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_header_contact_details_color', array(
		'label' => __('Top Bar Contact Details Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_topbar_header',
		'settings' => 'vw_startup_pro_header_contact_details_color',
	)));

	$wp_customize->add_setting('vw_startup_pro_header_contact_details_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_header_contact_details_font_family', array(
	    'section'  => 'vw_startup_pro_topbar_header',
	    'label'    => __('Top Bar contact details Font family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_header_contact_details_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_header_contact_details_font_size', array(
			'label'   => __('font size in px', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_topbar_header',
			'setting' => 'vw_startup_pro_header_contact_details_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_top_headlines_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_top_headlines_color', array(
		'label' => __('Top Bar Headlines Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_topbar_header',
		'settings' => 'vw_startup_pro_top_headlines_color',
	)));
	$wp_customize->add_setting('vw_startup_pro_top_headlines_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_top_headlines_font_family', array(
	    'section'  => 'vw_startup_pro_topbar_header',
	    'label'    => __('Top Bar Headlines Font family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_top_headlines_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_top_headlines_font_size', array(
			'label'   => __('font size in px', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_topbar_header',
			'setting' => 'vw_startup_pro_top_headlines_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_header_contact_detailsicon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_header_contact_detailsicon_color', array(
		'label' => __('Top Bar contact icon Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_topbar_header',
		'settings' => 'vw_startup_pro_header_contact_detailsicon_color',
	)));

	$wp_customize->add_setting( 'vw_startup_pro_topbar_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	//Contact details Background Option
	$wp_customize->add_setting( 'vw_startup_pro_topbar_background_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_topbar_background_options',
		array(
		  'label' => __('Background Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_topbar_header'
		)
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_topbar_bgcolor', array(
		'label' => __('Top Bar Background Color', 'vw-startup-pro'),
		'description'	=> __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
		'section' => 'vw_startup_pro_topbar_header',
		'settings' => 'vw_startup_pro_topbar_bgcolor',
	)));

	$wp_customize->add_setting('vw_startup_pro_topbar_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_startup_pro_topbar_bgimage',
            array(
                'label' => __('Top Bar Background image','vw-startup-pro'),
                'description'	=> __('Recommended size 1520px * 50px','vw-startup-pro'),
                'section' => 'vw_startup_pro_topbar_header',
                'settings' => 'vw_startup_pro_topbar_bgimage'
            )
        )
    );

    $wp_customize->add_setting( 'vw_startup_pro_topbar_text_radio_button',
		array(
			'default' => 'left',
			'transport' => 'refresh',
			'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Startup_Pro_Text_Radio_Button_Custom_Control( $wp_customize, 'vw_startup_pro_topbar_text_radio_button',
		array(
			'label' => __( 'Top Bar text Alignment','vw-startup-pro'),
			'section' => 'vw_startup_pro_topbar_header',
			'choices' => array(
				'left' => __( 'Left','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'centered' => __( 'Centered','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'right' => __( 'Right','vw-startup-pro' ) // Required. Setting for this particular radio button choice and the text to display
			)
		)
	) );

	// Header Section

	$wp_customize->add_section('vw_startup_pro_header_section',array(
		'title'	=> __('Header','vw-startup-pro'),
		'description'	=> __('Header Settings','vw-startup-pro'),
		'priority'	=> null,
		'panel' => 'vw_startup_pro_panel_id',
	));

	$wp_customize->add_setting('vw_startup_pro_choose_header_style',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_choose_header_style', array(
	    'section'  => 'vw_startup_pro_header_section',
	    'label'    => __( 'Choose a header style','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( 'Header Style1', 'vw-startup-pro' ),
		    '2' => __( 'Header Style 2', 'vw-startup-pro' ),
		    '3' => __( 'Header Style 3', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting( 'vw_startup_pro_header_button_text_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_header_button_text_option',
		array(
		  'label' => '',
		  'description'	=> __('Button Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_header_section'
		)
	) );

	$wp_customize->add_setting('vw_startup_pro_header_btntext',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_startup_pro_header_btntext',array(
		'label'	=> __('Add Button Text','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_header_section',
		'setting'	=> 'vw_startup_pro_header_btntext',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_startup_pro_header_btnurl',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('vw_startup_pro_header_btnurl',array(
		'label'	=> __('Add Button URL','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_header_section',
		'setting'	=> 'vw_startup_pro_header_btnurl',
		'type'	=> 'url'
	));
	$wp_customize->add_setting( 'vw_startup_pro_header_section',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_header_main_title_option',
		array(
		  'label' => '',
		  'description'	=> __('Header Main Title Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_header_section'
		)
	) );

	$wp_customize->add_setting( 'vw_startup_pro_header_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_header_title_color', array(
		'label' => __('Header Main title Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_header_section',
		'settings' => 'vw_startup_pro_header_title_color',
	)));
	$wp_customize->add_setting('vw_startup_pro_header_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_header_title_font_family', array(
	    'section'  => 'vw_startup_pro_header_section',
	    'label'    => __('Header Main title Font family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_header_title_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_header_title_font_size', array(
			'label'   => __('font size in px', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_header_section',
			'setting' => 'vw_startup_pro_header_title_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_header_background_color_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_header_background_color_option',
		array(
		  'label' => '',
		  'description'	=> __('Header Background Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_header_section'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_headerhomebg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_headerhomebg_color', array(
		'label' => __('Header Background Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_header_section',
		'settings' => 'vw_startup_pro_headerhomebg_color',
	)));
	// This is Header Menu Color picker setting
	$wp_customize->add_setting( 'vw_startup_pro_header_menu_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_header_menu_option',
		array(
		  'label' => '',
		  'description'	=> __('Header Menu Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_header_section'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_headermenu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_headermenu_color', array(
		'label' => __('Menu Item Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_header_section',
		'settings' => 'vw_startup_pro_headermenu_color',
	)));
	//This is Header Menu FontFamily picker setting
	$wp_customize->add_setting('vw_startup_pro_headermenu_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_startup_pro_headermenu_font_family', array(
	    'section'  => 'vw_startup_pro_header_section',
	    'label'    => __( 'Menu Item Fonts','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_headermenu_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_headermenu_font_size', array(
			'label'   => __('font size in px', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_header_section',
			'setting' => 'vw_startup_pro_headermenu_font_size',
			'type'    => 'text',
		)
	);
	//Menu Hover color options
	$wp_customize->add_setting( 'vw_startup_pro_header_menu_color_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_header_menu_color_option',
		array(
		  'label' => '',
		  'description'	=> __('Menu Item Color Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_header_section'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_header_menuhovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_header_menuhovercolor', array(
		'label' => __('Menu Item Hover Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_header_section',
		'settings' => 'vw_startup_pro_header_menuhovercolor',
	)));
	
	// This is Nav Dropdown Background Color picker setting
	$wp_customize->add_setting( 'vw_startup_pro_dropdownbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_dropdownbg_color', array(
		'label' => __('Menu DropDown Background Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_header_section',
		'settings' => 'vw_startup_pro_dropdownbg_color',
	)));

	$wp_customize->add_setting( 'vw_startup_pro_dropdownbg_itemcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_dropdownbg_itemcolor', array(
		'label' => __('Menu DropDown Item Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_header_section',
		'settings' => 'vw_startup_pro_dropdownbg_itemcolor',
	)));

	$wp_customize->add_setting( 'vw_startup_pro_dropdownbg_item_hovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_dropdownbg_item_hovercolor', array(
		'label' => __('Menu DropDown Item Hover Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_header_section',
		'settings' => 'vw_startup_pro_dropdownbg_item_hovercolor',
	)));
	
	//In Responsive
	$wp_customize->add_setting( 'vw_startup_pro_dropdownbg_responsivecolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_dropdownbg_responsivecolor', array(
		'label' => __('Responsive Menu Background Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_header_section',
		'settings' => 'vw_startup_pro_dropdownbg_responsivecolor',
	)));
	$wp_customize->add_setting( 'vw_startup_pro_headermenu_responsive_item_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_headermenu_responsive_item_color', array(
		'label' => __('Responsive Menu item Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_header_section',
		'settings' => 'vw_startup_pro_headermenu_responsive_item_color',
	)));

?>