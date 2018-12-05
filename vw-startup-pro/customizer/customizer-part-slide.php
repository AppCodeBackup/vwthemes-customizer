<?php
	$wp_customize->add_section('vw_startup_pro_slider_section',array(
		'title'	=> __('Slider Settings','vw-startup-pro'),
		'description'	=> __('Slider Related settings are defind here.','vw-startup-pro'),
		'priority'	=> null,
		'panel' => 'vw_startup_pro_panel_id',
	));
	$wp_customize->add_setting('vw_startup_pro_slider_enabledisable',array(
        'default'=> 'Enable',
        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
    ));
	$wp_customize->add_control('vw_startup_pro_slider_enabledisable', array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_startup_pro_slider_section',
        'choices' => array(
            'Enable' => 'Enable',
            'Disable' => 'Disable'
        ),
    ));

	$wp_customize->add_setting( 'vw_startup_pro_slider_slide_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_slider_slide_options',
		array(
		  'label' => __('Slide Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_slider_section'
		)
	) );


	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_slide_number', array(
	    'selector' => '.slider-box',
	    'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_slide_number',
	) );


	$wp_customize->add_setting('vw_startup_pro_slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_slide_number',array(
		'label'	=> __('Number of slides to show','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_slider_section',
		'type'		=> 'number'
	));
	$count =  get_theme_mod('vw_startup_pro_slide_number');
		
	for($i=1; $i<=$count; $i++) {

		// Seperator
		$wp_customize->add_setting( 'vw_startup_pro_slider_slide_number_box'.$i,
			array(
			  'default' => '',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
			)
		);
		$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_slider_slide_number_box'.$i,
			array(
			  'label' => '',
			  'description'	=> __('Slide ','vw-startup-pro').$i,
			  'section' => 'vw_startup_pro_slider_section'
			)
		) );

		// Slide Options started
		$wp_customize->add_setting('vw_startup_pro_slide_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_startup_pro_slide_image'.$i,
	        array(
	            'label' => __('Slider Image ','vw-startup-pro'),
	            'description'	=> __('Recommended Size 1600px x 562px ','vw-startup-pro'),
	            'section' => 'vw_startup_pro_slider_section',
	            'settings' => 'vw_startup_pro_slide_image'.$i
		)));

		$wp_customize->add_setting('vw_startup_pro_slide_heading'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_startup_pro_slide_heading'.$i,array(
			'label' => __('Slide Heading Title','vw-startup-pro'),
			'section' => 'vw_startup_pro_slider_section',
			'setting'	=> 'vw_startup_pro_slide_heading'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_startup_pro_slide_text'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('vw_startup_pro_slide_text'.$i,array(
			'label' => __('Slide Text','vw-startup-pro'),
			'section' => 'vw_startup_pro_slider_section',
			'setting'	=> 'vw_startup_pro_slide_text'.$i,
			'type'	=> 'textarea'
		));
		$wp_customize->add_setting('vw_startup_pro_slide_btntext'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('vw_startup_pro_slide_btntext'.$i,array(
			'label' => __('Slider Button Text','vw-startup-pro'),
			'section' => 'vw_startup_pro_slider_section',
			'setting'	=> 'vw_startup_pro_slide_btntext'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_startup_pro_slide_btnurl'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control('vw_startup_pro_slide_btnurl'.$i,array(
			'label' => __('Button URL','vw-startup-pro'),
			'section' => 'vw_startup_pro_slider_section',
			'setting'	=> 'vw_startup_pro_slide_btnurl'.$i,
			'type'	=> 'text'
		));
	}

	// Seperator
	$wp_customize->add_setting( 'vw_startup_pro_slider_slide_color_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_slider_slide_color_options',
		array(
		  'label' => __('Color Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_slider_section'
		)
	) );

	// This is Slider Heading Color picker setting
	$wp_customize->add_setting( 'vw_startup_pro_sliderHeading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_sliderHeading_color', array(
		'label' => __('Slider Heading Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_slider_section',
		'settings' => 'vw_startup_pro_sliderHeading_color',
	)));

	$wp_customize->add_setting('vw_startup_pro_sliderHeading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_sliderHeading_font_family', array(
	    'section'  => 'vw_startup_pro_slider_section',
	    'label'    => __( 'Slider Heading Fonts','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_sliderHeading_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_sliderHeading_font_size', array(
			'label'   => __('Heading font size in px', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_slider_section',
			'setting' => 'vw_startup_pro_sliderHeading_font_size',
			'type'    => 'text',
		)
	);

	// This is Slider Text Color picker setting
	$wp_customize->add_setting( 'vw_startup_pro_slidertext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_slidertext_color', array(
		'label' => __('Slider Text Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_slider_section',
		'settings' => 'vw_startup_pro_slidertext_color',
	)));
	//This is Slider Text FontFamily picker setting
	$wp_customize->add_setting('vw_startup_pro_slidertext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_slidertext_font_family', array(
	    'section'  => 'vw_startup_pro_slider_section',
	    'label'    => __( 'Slider Text Fonts','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_slidertext_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_slidertext_font_size', array(
			'label'   => __('Text Font Size in PX', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_slider_section',
			'setting' => 'vw_startup_pro_slidertext_font_size',
			'type'    => 'text',
		)
	);

	// Button color settings
	$wp_customize->add_setting( 'vw_startup_pro_slider_button_text_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_slider_button_text_option',
		array(
		  'label' => '',
		  'description'	=> __('Button Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_slider_section'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_slide_buttoncolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_slide_buttoncolor', array(
		'label' => 'Button Text Color',
		'section' => 'vw_startup_pro_slider_section',
		'settings' => 'vw_startup_pro_slide_buttoncolor',
	)));
	$wp_customize->add_setting( 'vw_startup_pro_slide_buttonbgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_slide_buttonbgcolor', array(
		'label' => 'Button Background Color',
		'section' => 'vw_startup_pro_slider_section',
		'settings' => 'vw_startup_pro_slide_buttonbgcolor',
	)));
	$wp_customize->add_setting('vw_startup_pro_button_fontfamily',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_startup_pro_button_fontfamily', array(
	    'section'  => 'vw_startup_pro_slider_section',
	    'label'    => __( 'Button Text Fonts','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
 	));
 	$wp_customize->add_setting('vw_startup_pro_button_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_button_font_size', array(
			'label'   => __('Button Text Font Size in PX', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_slider_section',
			'setting' => 'vw_startup_pro_slider_section',
			'type'    => 'text',
		)
	);

 	$wp_customize->add_setting( 'vw_startup_pro_slider_slide_other_settings',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_slider_slide_other_settings',
		array(
		  'label' => __('Other Settings','vw-startup-pro'),
		  'section' => 'vw_startup_pro_slider_section'
		)
	) );

 	$wp_customize->add_setting( 'vw_startup_pro_slider_arrows',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vw_startup_pro_switch_sanitization'
	));	 
	$wp_customize->add_control( new VW_Themes_Toggle_Switch_Custom_control( $wp_customize, 'vw_startup_pro_slider_arrows',
	   array(
	      'label' => esc_html__( 'Show / Hide Next & Previous Arrows', 'vw-startup-pro' ),
	      'section' => 'vw_startup_pro_slider_section'
	)));

	$wp_customize->add_setting( 'vw_startup_pro_slider_dots',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vw_startup_pro_switch_sanitization'
	));	 
	$wp_customize->add_control( new VW_Themes_Toggle_Switch_Custom_control( $wp_customize, 'vw_startup_pro_slider_dots',
	   array(
	      'label' => esc_html__( 'Show / Hide dots', 'vw-startup-pro' ),
	      'section' => 'vw_startup_pro_slider_section'
	)));

	// Other Settings
	$wp_customize->add_setting('vw_startup_pro_slide_delay',array(
		'default'	=> '10000',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_slide_delay',array(
		'label'	=> __('Slide Delay','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_slider_section',
		'description' => __('interval is in milliseconds. 1000 = 1 second -> so 1000 * 10 = 10 seconds', 'vw-startup-pro'),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'vw_startup_pro_slide_remove_fade',
	   array(
	      'default' => 0,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vw_startup_pro_switch_sanitization'
	));	 
	$wp_customize->add_control( new VW_Themes_Toggle_Switch_Custom_control( $wp_customize, 'vw_startup_pro_slide_remove_fade',
	   array(
	      'label' => esc_html__( 'Remove Fade Slider', 'vw-startup-pro' ),
	      'section' => 'vw_startup_pro_slider_section'
	)));

	$wp_customize->add_setting( 'vw_startup_pro_slide_text_radio_button',
		array(
			'default' => 'left',
			'transport' => 'refresh',
			'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Startup_Pro_Text_Radio_Button_Custom_Control( $wp_customize, 'vw_startup_pro_slide_text_radio_button',
		array(
			'label' => __( 'Slider text Alignment','vw-startup-pro'),
			'section' => 'vw_startup_pro_slider_section',
			'choices' => array(
				'left' => __( 'Left','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'centered' => __( 'Centered','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'right' => __( 'Right','vw-startup-pro' ) // Required. Setting for this particular radio button choice and the text to display
			)
		)
	) );
?>