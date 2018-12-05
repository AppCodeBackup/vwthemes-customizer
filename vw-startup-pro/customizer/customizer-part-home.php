<?php
	/*------------------------------------About section -------------------------------------*/

	$wp_customize->add_section('vw_startup_pro_homeabout_sec',array(
		'title'	=> __('About Section','vw-startup-pro'),
		'description'	=> __('About Us section settings will be updated from here','vw-startup-pro'),
		'panel' => 'vw_startup_pro_panel_id',
	));

	/*Setting for parallax option for all sections*/

	$section_name = array('vw_startup_pro_homeabout_sec','vw_startup_pro_portfolio_sec','vw_startup_pro_services_section','vw_startup_pro_team_sec','vw_startup_pro_skills_section','vw_startup_pro_video_sec','vw_startup_pro_how_we_work_section','vw_startup_pro_our_records','vw_startup_pro_testimonial','vw_startup_pro_latest_post','vw_startup_pro_our_partners_section');

	for($m=1; $m <=10; $m++){

		$wp_customize->add_setting('vw_startup_pro_parallax_scroll'.$m,array(
	        'default' => 'true',
	        'sanitize_callback' => 'sanitize_text_field'
	    ));
	    $wp_customize->add_control('vw_startup_pro_parallax_scroll'.$m,array(
	        'type' => 'checkbox',
	        'label' => __('Parallax Scroll','vw-startup-pro'),
	        'section' => $section_name[$m-1]
	    ));

	}

	$wp_customize->add_setting('vw_startup_pro_custom_footer_contactmap',array(
        'default' => 'true',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_startup_pro_custom_footer_contactmap',array(
        'type' => 'checkbox',
        'label' => __('Map Contact Form Show / Hide','vw-startup-pro'),
        'section' => 'vw_startup_pro_custom_footer_section',
    ));

	$wp_customize->add_setting('vw_startup_pro_radio_about_enable',
	    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_startup_pro_radio_about_enable',
	    array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'vw-startup-pro'),
        'section' => 'vw_startup_pro_homeabout_sec',
        'choices' => array(
        'Enable' => __('Enable', 'vw-startup-pro'),
        'Disable' => __('Disable', 'vw-startup-pro')
	    ),
	));

	$wp_customize->add_setting( 'vw_startup_pro_homeabout_layout',
	array(
		'default' => 'textleft',
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_startup_pro_text_sanitization'
	)
	);
	$wp_customize->add_control( new VW_Themes_Image_Radio_Button_Custom_Control( $wp_customize, 'vw_startup_pro_homeabout_layout',
		array(
			'label' => esc_html__( 'Section Style','vw-startup-pro' ),
			'section' => 'vw_startup_pro_homeabout_sec',
			'choices' => array(
				'textleft' => array(  // Required. Value for this particular radio button choice
					'image' => VWTHEMES_CUSTOMIZER_PLUGIN_URL . 'vw-startup-pro/images/about-left.jpg', // Required. URL for the image
					'style1' => esc_html__( 'Left Sidebar','vw-startup-pro' ) // Required. Title text to display
				),
				'textright' => array(
					'image' => VWTHEMES_CUSTOMIZER_PLUGIN_URL . 'vw-startup-pro/images/about-right.jpg',
					'style2' => esc_html__( 'No Sidebar','vw-startup-pro' )
				)
			)
		)
	) );

	$wp_customize->add_setting( 'vw_startup_pro_about_section_settings',
        array(
            'default' => '',
            'transport' => 'postMessage',
            'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_about_section_settings',
        array(
            'label' => __('Section Settings','vw-startup-pro'),
            'section' => 'vw_startup_pro_homeabout_sec'
        )
    ) );

	$wp_customize->add_setting( 'vw_startup_pro_about_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_about_bgcolor', array(
		'label' => __('Section Background Color', 'vw-startup-pro'),
		'description'	=> __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
		'section' => 'vw_startup_pro_homeabout_sec',
		'settings' => 'vw_startup_pro_about_bgcolor',
	)));
	$wp_customize->add_setting('vw_startup_pro_about_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control( $wp_customize,'vw_startup_pro_about_bgimage',array(
        'label' => __('Section Background Image','vw-startup-pro'),
        'description'	=> __('Recommended size 1600px * 577px','vw-startup-pro'),
        'section' => 'vw_startup_pro_homeabout_sec',
        'settings' => 'vw_startup_pro_about_bgimage'
	)));

	$wp_customize->add_setting( 'vw_startup_pro_about_content_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_about_content_option',
		array(
		  'label' => '',
		  'description'	=> __('Section Content ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_homeabout_sec'
		)
	) );

	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_about_title', array(
        'selector' => '.about-heading',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_about_title',
    ) );
	$wp_customize->add_setting('vw_startup_pro_about_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_about_title',array(
		'label'	=> __('Section Title','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_homeabout_sec',
		'setting'	=> 'vw_startup_pro_about_title',
		'type'		=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_about_sub_heading', array(
        'selector' => '.subheading',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_about_sub_heading',
    ) );
	$wp_customize->add_setting('vw_startup_pro_about_sub_heading',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_about_sub_heading',array(
		'label'	=> __('Section Small Text','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_homeabout_sec',
		'setting'	=> 'vw_startup_pro_about_sub_heading',
		'type'		=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_about_description', array(
        'selector' => '.descr',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_about_description',
    ) );
	$wp_customize->add_setting('vw_startup_pro_about_description',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_textarea_field'
	));
	$wp_customize->add_control('vw_startup_pro_about_description',array(
		'label'	=> __('Section Description','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_homeabout_sec',
		'setting'	=> 'vw_startup_pro_about_description',
		'type'		=> 'textarea'
	));
	$wp_customize->add_setting( 'vw_startup_pro_about_left_image',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_about_section_image', array(
        'selector' => '.about_img',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_about_section_image',
    ) );
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_about_left_image',
		array(
		  'label' => '',
		  'description'	=> __('About Section Image ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_homeabout_sec'
		)
	) );


	$wp_customize->add_setting('vw_startup_pro_about_section_image',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_startup_pro_about_section_image',array(
	       'label' => __('About Left Image','vw-startup-pro'),
	       'description'	=> __('This Image will appear on the right side','vw-startup-pro'),
	       'section' => 'vw_startup_pro_homeabout_sec',
	       'settings' => 'vw_startup_pro_about_section_image',
    )));

	$wp_customize->add_setting( 'vw_startup_pro_about_list_notice',
		array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Simple_Notice_Custom_Control( $wp_customize, 'vw_startup_pro_about_list_notice',
		array(
		'label' => __( 'Note','vw-startup-pro' ),
		'description' => __('Below settings is for the adding the list. Set the number to the below setting (Number of list to show) publish the changes and refresh the page. You will get the fields to enter the values.','vw-startup-pro' ),
		'section' => 'vw_startup_pro_homeabout_sec'
		)
	) );

	$wp_customize->add_setting( 'vw_startup_pro_about_add_boxes',
        array(
            'default' => '',
            'transport' => 'postMessage',
            'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_about_add_boxes',
        array(
            'label' => __('Add Lists','vw-startup-pro'),
            'section' => 'vw_startup_pro_homeabout_sec'
        )
    ) );

	$wp_customize->add_setting('vw_startup_pro_about_icon_box_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_about_icon_box_number',array(
		'label'	=> __('Number of list to show','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_homeabout_sec',
		'type'		=> 'number'
	));
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_about_icon_box_number', array(
        'selector' => '#about ul',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_about_icon_box_number',
    ) );
	$aboutchoose =  get_theme_mod('vw_startup_pro_about_icon_box_number');
	for($i=1; $i<=$aboutchoose; $i++) {

		$wp_customize->add_setting( 'vw_startup_pro_about_icon_box_note'.$i,
	        array(
	            'default' => '',
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'vw_startup_pro_text_sanitization'
	        )
	    );
	    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_about_icon_box_note'.$i,
	        array(
	            'label' => '',
	            'description' => __('<strong>List</strong>','vw-startup-pro' ).$i,
	            'section' => 'vw_startup_pro_homeabout_sec'
	        )
	    ) );
		$wp_customize->add_setting('vw_startup_pro_about_icon'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_startup_pro_about_icon'.$i,array(
			'label'	=> __('List Icon','vw-startup-pro'),
			'description'	=> __('For List icons use Font Awesome (https://fontawesome.com/icons)','vw-startup-pro'),
			'section'	=> 'vw_startup_pro_homeabout_sec',
			'setting'     => 'vw_startup_pro_about_icon'.$i,
			'type'	=> 'text'
		));
		
		$wp_customize->add_setting('vw_startup_pro_about_icon_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_startup_pro_about_icon_image'.$i,array(
	        'label' => __('Icon Image','vw-startup-pro'),
	        'description'	=> __('Recommended size 30px * 25px','vw-startup-pro'),
	        'section' => 'vw_startup_pro_homeabout_sec',
	        'settings' => 'vw_startup_pro_about_icon_image'.$i
		)));
		$wp_customize->add_setting('vw_startup_pro_about_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_startup_pro_about_title'.$i,array(
			'label'	=> __('Title','vw-startup-pro'),
			'section'	=> 'vw_startup_pro_homeabout_sec',
			'setting'	=> 'vw_startup_pro_about_title'.$i,
			'type'		=> 'text'
		));
	}

	$wp_customize->add_setting( 'vw_startup_pro_about_color_options',
        array(
            'default' => '',
            'transport' => 'postMessage',
            'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_about_color_options',
        array(
            'label' => __('Color Options','vw-startup-pro'),
            'section' => 'vw_startup_pro_homeabout_sec'
        )
    ) );
    $wp_customize->add_setting( 'vw_startup_pro_about_title_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_about_title_option',
		array(
		  'label' => '',
		  'description'	=> __('About Title Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_homeabout_sec'
		)
	) );

    $wp_customize->add_setting( 'vw_startup_pro_about_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_about_title_color', array(
		'label' => __('Title Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_homeabout_sec',
		'settings' => 'vw_startup_pro_about_title_color',
	)));
	$wp_customize->add_setting('vw_startup_pro_about_title_color_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_about_title_color_font_family', array(
	    'section'  => 'vw_startup_pro_homeabout_sec',
	    'label'    => __( 'Title Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_about_title_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_about_title_font_size', array(
			'label'   => __('about Title Font Size in PX', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_homeabout_sec',
			'setting' => 'vw_startup_pro_about_title_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_about_subtitle_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_about_subtitle_option',
		array(
		  'label' => '',
		  'description'	=> __('About Sub Title Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_homeabout_sec'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_about_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_about_subtitle_color', array(
		'label' => __('Sub Title Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_homeabout_sec',
		'settings' => 'vw_startup_pro_about_subtitle_color',
	)));
	$wp_customize->add_setting('vw_startup_pro_about_subtitle_color_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_about_subtitle_color_font_family', array(
	    'section'  => 'vw_startup_pro_homeabout_sec',
	    'label'    => __( 'Sub Title Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_about_subtitle_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_about_subtitle_font_size', array(
			'label'   => __('subTitle Font Size in PX', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_homeabout_sec',
			'setting' => 'vw_startup_pro_about_subtitle_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_about_para_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_about_para_option',
		array(
		  'label' => '',
		  'description'	=> __('About Paragraph Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_homeabout_sec'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_about_para_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_about_para_color', array(
		'label' => __('Text Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_homeabout_sec',
		'settings' => 'vw_startup_pro_about_para_color',
	)));
	$wp_customize->add_setting('vw_startup_pro_about_para_color_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_about_para_color_font_family', array(
	    'section'  => 'vw_startup_pro_homeabout_sec',
	    'label'    => __( 'Para Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_about_para_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_about_para_font_size', array(
			'label'   => __('para font size in px', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_homeabout_sec',
			'setting' => 'vw_startup_pro_about_para_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_about_list_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_about_list_option',
		array(
		  'label' => '',
		  'description'	=> __('About Lists Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_homeabout_sec'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_about_list_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_about_list_color', array(
		'label' => __('List Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_homeabout_sec',
		'settings' => 'vw_startup_pro_about_list_color',
	)));
	$wp_customize->add_setting('vw_startup_pro_about_list_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_about_list_font_family', array(
	    'section'  => 'vw_startup_pro_homeabout_sec',
	    'label'    => __( 'List Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_about_list_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_about_list_font_size', array(
			'label'   => __('list font size in px', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_homeabout_sec',
			'setting' => 'vw_startup_pro_about_list_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_about_icon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_about_icon_color', array(
		'label' => __('List Icon Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_homeabout_sec',
		'settings' => 'vw_startup_pro_about_icon_color',
	)));

	//About Section Additional Setting

	$wp_customize->add_setting( 'vw_startup_pro_about_text_radio_button',
		array(
			'default' => 'left',
			'transport' => 'refresh',
			'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Startup_Pro_Text_Radio_Button_Custom_Control( $wp_customize, 'vw_startup_pro_about_text_radio_button',
		array(
			'label' => __( 'About text Alignment','vw-startup-pro'),
			'section' => 'vw_startup_pro_homeabout_sec',
			'choices' => array(
				'left' => __( 'Left','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'centered' => __( 'Centered','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'right' => __( 'Right','vw-startup-pro' ) // Required. Setting for this particular radio button choice and the text to display
			)
		)
	) );
	
	/*------------------------------------Portfolio section -------------------------------------*/

	$wp_customize->add_section('vw_startup_pro_portfolio_sec',array(
		'title'	=> __('Portfolio Section','vw-startup-pro'),
		/* translators: 1: Add portfolio Post link start, 2: Add portfolio Post link end */
		'description' => sprintf( __( 'This section is only for portfolio title and styling. Check the link below to  %1$sAdd Portfolio%2$s.', 'vw-startup-pro' ), '<a href="' . esc_url( admin_url( '/edit.php?post_type=portfolio' ) ) . '" target="_blank">', '</a>' ),
		'panel' => 'vw_startup_pro_panel_id',
	));

	$wp_customize->add_setting('vw_startup_pro_radio_portfolio_enable',
	    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_startup_pro_radio_portfolio_enable',
	    array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'vw-startup-pro'),
        'section' => 'vw_startup_pro_portfolio_sec',
        'choices' => array(
        'Enable' => __('Enable', 'vw-startup-pro'),
        'Disable' => __('Disable', 'vw-startup-pro')
	    ),
	));
	$wp_customize->add_setting( 'vw_startup_pro_portfolio_settings',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_portfolio_settings',
		array(
		  'label' => __('Background Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_portfolio_sec'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_portfolio_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_portfolio_bgcolor', array(
		'label' => __('Section Background Color', 'vw-startup-pro'),
		'description'	=> __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
		'section' => 'vw_startup_pro_portfolio_sec',
		'settings' => 'vw_startup_pro_portfolio_bgcolor',
	)));
	$wp_customize->add_setting('vw_startup_pro_portfolio_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control( $wp_customize,'vw_startup_pro_portfolio_bgimage',array(
        'label' => __('Section Background Image','vw-startup-pro'),
        'description'	=> __('Recommended size 1600px * 577px','vw-startup-pro'),
        'section' => 'vw_startup_pro_portfolio_sec',
        'settings' => 'vw_startup_pro_portfolio_bgimage'
	)));
	$wp_customize->add_setting( 'vw_startup_pro_portfolio_alphacolor_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_portfolio_alphacolor_option',
		array(
		  'label' => '',
		  'description'	=> __('Alphacolor Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_portfolio_sec'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_portfolio_alphacolor',
		array(
			'default' => 'rgba(100, 197, 170, 0.9)',
			'transport' => 'postMessage',
			'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Customize_Alpha_Color_Control( $wp_customize, 'vw_startup_pro_portfolio_alphacolor',
		array(
			'label' => __( 'Box Hover RGB Color Picker','vw-startup-pro' ),
			'description' => esc_html__( 'Below Setting is for changing the RGBA color','vw-startup-pro' ),
			'section' => 'vw_startup_pro_portfolio_sec',
			'show_opacity' => true, // Optional. Show or hide the opacity value on the opacity slider handle. Default: true
			'palette' => array( // Optional. Select the colours for the colour palette . Default: WP color control palette
				'#000',
				'#fff',
				'#df312c',
				'#df9a23',
				'#eef000',
				'#7ed934',
				'#1571c1',
				'#8309e7'
			)
		)
	) );	
	$wp_customize->add_setting( 'vw_startup_pro_portfolio_title_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_portfolio_title_option',
		array(
		  'label' => '',
		  'description'	=> __('Section Content','vw-startup-pro'),
		  'section' => 'vw_startup_pro_portfolio_sec'
		)
	) );
	$wp_customize->add_setting('vw_startup_pro_portfolio_section_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_portfolio_title', array(
        'selector' => '#portfolio .section-heading h3',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_portfolio_title',
    ) );
	$wp_customize->add_setting('vw_startup_pro_portfolio_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_portfolio_title',array(
		'label'	=> __('Section Title','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_portfolio_sec',
		'setting'	=> 'vw_startup_pro_portfolio_title',
		'type'		=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_portfolio_desc', array(
        'selector' => '#portfolio p',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_portfolio_desc',
    ) );
	$wp_customize->add_setting('vw_startup_pro_portfolio_desc',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_portfolio_desc',array(
		'label'	=> __('Section Description','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_portfolio_sec',
		'setting'	=> 'vw_startup_pro_portfolio_desc',
		'type'		=> 'textarea'
	));

	$wp_customize->add_setting('vw_startup_pro_portfolio_boxes_size',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_portfolio_boxes_size', array(
	    'section'  => 'vw_startup_pro_portfolio_sec',
	    'label'    => __( 'Number of Boxes show in a row','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( '3', 'vw-startup-pro' ),
		    '2' => __( '2', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting('vw_startup_pro_portfolio_number',array(
		'default'	=> '6',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_portfolio_number',array(
		'label'	=> __('Number of Portfolio to Show','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_portfolio_sec',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('vw_startup_pro_portfolio_order_by',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_portfolio_order_by', array(
	    'section'  => 'vw_startup_pro_portfolio_sec',
	    'label'    => __( 'Order By','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( 'Date', 'vw-startup-pro' ),
		    '2' => __( 'ID', 'vw-startup-pro' ),
		    '3' => __( 'Menu Order', 'vw-startup-pro' ),
		    '4' => __( 'Popularity', 'vw-startup-pro' ),
		    '5' => __( 'Rand', 'vw-startup-pro' ),
		    '6' => __( 'Title', 'vw-startup-pro' )
		),
	));
	$wp_customize->add_setting('vw_startup_pro_portfolio_order',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_portfolio_order', array(
	    'section'  => 'vw_startup_pro_portfolio_sec',
	    'label'    => __( 'Order','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( 'Ascending', 'vw-startup-pro' ),
		    '2' => __( 'Descending', 'vw-startup-pro' )
		),
	));
	$wp_customize->add_setting( 'vw_startup_pro_portfolio_title_color_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_portfolio_title_color_option',
		array(
		  'label' => '',
		  'description'	=> __('Portfolio Title Color Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_portfolio_sec'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_portfolio_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_portfolio_title_color', array(
		'label' => __('Section Title Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_portfolio_sec',
		'settings' => 'vw_startup_pro_portfolio_title_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_portfolio_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_portfolio_title_font_family', array(
	    'section'  => 'vw_startup_pro_portfolio_sec',
	    'label'    => __( 'Section Title Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_portfolio_title_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_portfolio_title_font_size', array(
			'label'   => __('Title Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_portfolio_sec',
			'setting' => 'vw_startup_pro_portfolio_title_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_portfolio_text_color_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_portfolio_text_color_option',
		array(
		  'label' => '',
		  'description'	=> __('Portfolio Text Color Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_portfolio_sec'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_portfolio_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_portfolio_text_color', array(
		'label' => __('Section Text Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_portfolio_sec',
		'settings' => 'vw_startup_pro_portfolio_text_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_portfolio_text_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_portfolio_text_font_family', array(
	    'section'  => 'vw_startup_pro_portfolio_sec',
	    'label'    => __( 'Section Text Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_portfolio_text_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_portfolio_text_font_size', array(
			'label'   => __('Text Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_portfolio_sec',
			'setting' => 'vw_startup_pro_portfolio_text_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_portfolio_text_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_portfolio_text_option',
		array(
		  'label' => '',
		  'description'	=> __('Portfolio Text Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_portfolio_sec'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_portfolio_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_portfolio_color', array(
		'label' => __('Portfolio Text Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_portfolio_sec',
		'settings' => 'vw_startup_pro_portfolio_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_portfolio_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_portfolio_font_family', array(
	    'section'  => 'vw_startup_pro_portfolio_sec',
	    'label'    => __( 'Portfolio Text Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_portfolio_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_portfolio_font_size', array(
			'label'   => __('Portfolio Text Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_portfolio_sec',
			'setting' => 'vw_startup_pro_portfolio_font_size',
			'type'    => 'text',
		)
	);
	//portfolio Section Additional Setting

	$wp_customize->add_setting( 'vw_startup_pro_portfolio_text_radio_button',
		array(
			'default' => 'centered',
			'transport' => 'refresh',
			'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Startup_Pro_Text_Radio_Button_Custom_Control( $wp_customize, 'vw_startup_pro_portfolio_text_radio_button',
		array(
			'label' => __( 'About text Alignment','vw-startup-pro'),
			'section' => 'vw_startup_pro_portfolio_sec',
			'choices' => array(
				'left' => __( 'Left','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'centered' => __( 'Centered','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'right' => __( 'Right','vw-startup-pro' ) // Required. Setting for this particular radio button choice and the text to display
			)
		)
	) );
	 /*------------------------------------Services Section -------------------------------------*/
	$wp_customize->add_section('vw_startup_pro_services_section',array(
		'title'	=> __('Services Section','vw-startup-pro'),
		/* translators: 1: Add services Post link start, 2: Add services Post link end */
		'description' => sprintf( __( 'This section is only for services title and styling. Check the link below to  %1$sAdd Services%2$s.', 'vw-startup-pro' ), '<a href="' . esc_url( admin_url( '/edit.php?post_type=services' ) ) . '" target="_blank">', '</a>' ),
		'priority'	=> null,
		'panel' => 'vw_startup_pro_panel_id',
	));

	$wp_customize->add_setting('vw_startup_pro_services_enabledisable',array(
        'default'=> 'Enable',
        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
    ));
	$wp_customize->add_control('vw_startup_pro_services_enabledisable', array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_startup_pro_services_section',
        'choices' => array(
            'Enable' => 'Enable',
            'Disable' => 'Disable'
        ),
    ));
    //Seperator
    $wp_customize->add_setting( 'vw_startup_pro_services_background_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_services_background_options',
		array(
		  'label' => __('Background Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_services_section'
		)
	) );

    $wp_customize->add_setting( 'vw_startup_pro_services_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_services_bgcolor', array(
		'label' => __('Section Background Color', 'vw-startup-pro'),
		'description'	=> __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
		'section' => 'vw_startup_pro_services_section',
		'settings' => 'vw_startup_pro_services_bgcolor',
	)));
	$wp_customize->add_setting('vw_startup_pro_services_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control( $wp_customize,'vw_startup_pro_services_bgimage',array(
        'label' => __('Section Background Image','vw-startup-pro'),
        'description'	=> __('Recommended size 1600px * 577px','vw-startup-pro'),
        'section' => 'vw_startup_pro_services_section',
        'settings' => 'vw_startup_pro_services_bgimage'
	)));
	$wp_customize->add_setting( 'vw_startup_pro_services_section_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_services_section_options',
		array(
		  'label' => __('Section Settings','vw-startup-pro'),
		  'section' => 'vw_startup_pro_services_section'
		)
	) );
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_services_title', array(
        'selector' => '#services h3',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_services_title',
    ) );
	$wp_customize->add_setting('vw_startup_pro_services_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_services_title',array(
		'label'	=> __('Section Title','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_services_section',
		'setting'	=> 'vw_startup_pro_services_title',
		'type'		=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_services_desc', array(
        'selector' => '#services p',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_services_desc',
    ) );
	$wp_customize->add_setting('vw_startup_pro_services_desc',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_services_desc',array(
		'label'	=> __('Section Description','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_services_section',
		'setting'	=> 'vw_startup_pro_services_desc',
		'type'		=> 'textarea'
	));

	$wp_customize->add_setting('vw_startup_pro_services_boxes_size',array(
	  'default' => '3',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_services_boxes_size', array(
	    'section'  => 'vw_startup_pro_services_section',
	    'label'    => __( 'Number of Boxes show in a row','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( '2', 'vw-startup-pro' ),
		    '2' => __( '3', 'vw-startup-pro' ),
		    '3' => __( '4', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting('vw_startup_pro_services_order_by',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_services_order_by', array(
	    'section'  => 'vw_startup_pro_services_section',
	    'label'    => __( 'Order By','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( 'Date', 'vw-startup-pro' ),
		    '2' => __( 'ID', 'vw-startup-pro' ),
		    '3' => __( 'Menu Order', 'vw-startup-pro' ),
		    '4' => __( 'Popularity', 'vw-startup-pro' ),
		    '5' => __( 'Rand', 'vw-startup-pro' ),
		    '6' => __( 'Title', 'vw-startup-pro' )
		),
	));
	$wp_customize->add_setting('vw_startup_pro_services_order',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_services_order', array(
	    'section'  => 'vw_startup_pro_services_section',
	    'label'    => __( 'Order','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( 'Ascending', 'vw-startup-pro' ),
		    '2' => __( 'Descending', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting('vw_startup_pro_service_number',array(
		'default'	=> '6',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_service_number',array(
		'label'	=> __('Number of Services to show','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_services_section',
		'type'		=> 'number'
	));
	$wp_customize->add_setting( 'vw_startup_pro_service_rgb_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_service_rgb_option',
		array(
		  'label' => '',
		  'description'	=> __('Alphacolor Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_services_section'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_service_alphacolor',
	array(
		'default' => 'rgba(100, 197, 170, 0.9)',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_startup_pro_text_sanitization'
	)
	);
	$wp_customize->add_control( new VW_Themes_Customize_Alpha_Color_Control( $wp_customize, 'vw_startup_pro_service_alphacolor',
		array(
			'label' => __( 'Box Hover RGB Color Picker','vw-startup-pro'),
			'description' => esc_html__( 'Below Setting is for changing the RGBA color', 'vw-startup-pro' ),
			'section' => 'vw_startup_pro_services_section',
			'show_opacity' => true, // Optional. Show or hide the opacity value on the opacity slider handle. Default: true
			'palette' => array( // Optional. Select the colours for the colour palette . Default: WP color control palette
				'#000',
				'#fff',
				'#df312c',
				'#df9a23',
				'#eef000',
				'#7ed934',
				'#1571c1',
				'#8309e7'
			)
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_services_title_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_services_title_option',
		array(
		  'label' => '',
		  'description'	=> __('Title Color Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_services_section'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_services_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_services_title_color', array(
		'label' => __('Title Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_services_section',
		'settings' => 'vw_startup_pro_services_title_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_services_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_services_title_font_family', array(
	    'section'  => 'vw_startup_pro_services_section',
	    'label'    => __( 'Title Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_services_title_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_services_title_font_size', array(
			'label'   => __('Title Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_services_section',
			'setting' => 'vw_startup_pro_services_title_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_services_text_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_services_text_option',
		array(
		  'label' => '',
		  'description'	=> __('Text Color Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_services_section'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_services_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_services_text_color', array(
		'label' => __('Sub Text Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_services_section',
		'settings' => 'vw_startup_pro_services_text_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_services_text_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_services_text_font_family', array(
	    'section'  => 'vw_startup_pro_services_section',
	    'label'    => __( 'Text Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_services_text_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_services_text_font_size', array(
			'label'   => __('Text Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_services_section',
			'setting' => 'vw_startup_pro_services_text_font_size',
			'type'    => 'text',
		)
	);
	//Service Section Additional Setting

	$wp_customize->add_setting( 'vw_startup_pro_services_text_radio_button',
		array(
			'default' => 'centered',
			'transport' => 'refresh',
			'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Startup_Pro_Text_Radio_Button_Custom_Control( $wp_customize, 'vw_startup_pro_services_text_radio_button',
		array(
			'label' => __( 'Services Text Alignment','vw-startup-pro'),
			'section' => 'vw_startup_pro_services_section',
			'choices' => array(
				'left' => __( 'Left','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'centered' => __( 'Centered','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'right' => __( 'Right','vw-startup-pro' ) // Required. Setting for this particular radio button choice and the text to display
			)
		)
	) );

    /*------------------------------Team Section----------------------------------------*/
	$wp_customize->add_section('vw_startup_pro_team_sec',array(
		'title'	=> __('Team Section','vw-startup-pro'),
		/* translators: 1: Add team Post link start, 2: Add team Post link end */
		'description' => sprintf( __( 'This section is only for team title and styling. Check the link below to  %1$sAdd Team%2$s.', 'vw-startup-pro' ), '<a href="' . esc_url( admin_url( '/wp-admin/edit.php?post_type=team' ) ) . '" target="_blank">', '</a>' ),
		'priority'	=> null,
		'panel' => 'vw_startup_pro_panel_id',
	));
	$wp_customize->add_setting('vw_startup_pro_radio_team_enable',array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_startup_pro_radio_team_enable',
    array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'vw-startup-pro'),
        'section' => 'vw_startup_pro_team_sec',
	    'choices' => array(
        'Enable' => __('Enable', 'vw-startup-pro'),
        'Disable' => __('Disable', 'vw-startup-pro')
	     ),
    ));
    $wp_customize->add_setting( 'vw_startup_pro_team_section_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_team_section_options',
		array(
		  'label' => __('Background Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_team_sec'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_team_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_team_bgcolor', array(
			'label' => __('Background Color', 'vw-startup-pro'),
			'description'	=> __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
			'section' => 'vw_startup_pro_team_sec',
			'settings' => 'vw_startup_pro_team_bgcolor',
	)));
	$wp_customize->add_setting('vw_startup_pro_our_team_bgimage',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'vw_startup_pro_our_team_bgimage',
	        array(
	            'label' => __('Background image','vw-startup-pro'),
	            'description'	=> __('Recommended size 1600px * 577px','vw-startup-pro'),
	            'section' => 'vw_startup_pro_team_sec',
	            'settings' => 'vw_startup_pro_our_team_bgimage'
	)));
	$wp_customize->add_setting( 'vw_startup_pro_team_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_team_options',
		array(
		  'label' => __('Section Content','vw-startup-pro'),
		  'section' => 'vw_startup_pro_team_sec'
		)
	) );
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_team_title', array(
        'selector' => '#team h3',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_team_title',
    ) );
	$wp_customize->add_setting('vw_startup_pro_team_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_team_title',array(
		'label'	=> __('Section Title','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_team_sec',
		'setting'	=> 'vw_startup_pro_team_title',
		'type'		=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_team_desc', array(
        'selector' => '#team .section-heading p',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_team_desc',
    ) );
	$wp_customize->add_setting('vw_startup_pro_team_desc',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_team_desc',array(
		'label'	=> __('Section Description','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_team_sec',
		'setting'	=> 'vw_startup_pro_team_desc',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_startup_pro_team_style',array(
	  'default' => 'style1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_team_style', array(
	    'section'  => 'vw_startup_pro_team_sec',
	    'label'    => __( 'Choose a Style for the Team','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    'style1' => __( 'Team With Carousel', 'vw-startup-pro' ),
		    'style2' => __( 'Team Without Carousel', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting( 'vw_startup_pro_team_style1_settings',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);

	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_team_style1_settings',
		array(
		  'label' => '',
		  'description'	=> __('Settings for Style 1','vw-startup-pro'),
		  'section' => 'vw_startup_pro_team_sec'
		)
	) );

	$wp_customize->add_setting('vw_startup_pro_team_number',array(
		'default'	=> '4',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_team_number',array(
		'label'	=> __('Number of team in first slide','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_team_sec',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'vw_startup_pro_team_style2_settings',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);

	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_team_style2_settings',
		array(
		  'label' => '',
		  'description'	=> __('Settings for Style 2','vw-startup-pro'),
		  'section' => 'vw_startup_pro_team_sec'
		)
	) );

	$wp_customize->add_setting('vw_startup_pro_team_boxes_size',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_team_boxes_size', array(
	    'section'  => 'vw_startup_pro_team_sec',
	    'label'    => __( 'Number of Boxes show in a row','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( '4', 'vw-startup-pro' ),
		    '2' => __( '3', 'vw-startup-pro' ),
		    '3' => __( '2', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting('vw_startup_pro_team_order_by',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_team_order_by', array(
	    'section'  => 'vw_startup_pro_team_sec',
	    'label'    => __( 'Order By','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( 'Date', 'vw-startup-pro' ),
		    '2' => __( 'ID', 'vw-startup-pro' ),
		    '3' => __( 'Menu Order', 'vw-startup-pro' ),
		    '4' => __( 'Popularity', 'vw-startup-pro' ),
		    '5' => __( 'Rand', 'vw-startup-pro' ),
		    '6' => __( 'Title', 'vw-startup-pro' )
		),
	));
	$wp_customize->add_setting('vw_startup_pro_team_order',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_team_order', array(
	    'section'  => 'vw_startup_pro_team_sec',
	    'label'    => __( 'Order','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( 'Ascending', 'vw-startup-pro' ),
		    '2' => __( 'Descending', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting( 'vw_startup_pro_team_rgb_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_team_rgb_option',
		array(
		  'label' => '',
		  'description'	=> __('Alphacolor Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_team_sec'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_team_alphacolor',
	array(
		'default' => 'rgba(100, 197, 170, 0.9)',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_startup_pro_text_sanitization'
	)
	);
	$wp_customize->add_control( new VW_Themes_Customize_Alpha_Color_Control( $wp_customize, 'vw_startup_pro_team_alphacolor',
		array(
			'label' => __( 'Box Hover RGB Color Picker','vw-startup-pro' ),
			'description' => esc_html__( 'Below Setting is for changing the RGBA color' , 'vw-startup-pro'),
			'section' => 'vw_startup_pro_team_sec',
			'show_opacity' => true, // Optional. Show or hide the opacity value on the opacity slider handle. Default: true
			'palette' => array( // Optional. Select the colours for the colour palette . Default: WP color control palette
				'#000',
				'#fff',
				'#df312c',
				'#df9a23',
				'#eef000',
				'#7ed934',
				'#1571c1',
				'#8309e7'
			)
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_team_title_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_team_title_option',
		array(
		  'label' => '',
		  'description'	=> __('Title Color Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_team_sec'
		)
	) );
	$wp_customize->add_setting('vw_startup_pro_team_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_team_title_color', array(
		'label' => __('Title Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_team_sec',
		'settings' => 'vw_startup_pro_team_title_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_team_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_team_title_font_family', array(
	    'section'  => 'vw_startup_pro_team_sec',
	    'label'    => __( 'Title Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_team_title_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_team_title_font_size', array(
			'label'   => __('Title Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_team_sec',
			'setting' => 'vw_startup_pro_team_title_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_team_text_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_team_text_option',
		array(
		  'label' => '',
		  'description'	=> __('Text Color Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_team_sec'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_team_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_team_text_color', array(
		'label' => __('Sub Text Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_team_sec',
		'settings' => 'vw_startup_pro_team_text_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_team_text_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_team_text_font_family', array(
	    'section'  => 'vw_startup_pro_team_sec',
	    'label'    => __( 'Text Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_team_text_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_team_text_font_size', array(
			'label'   => __('Text Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_team_sec',
			'setting' => 'vw_startup_pro_team_text_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_team_font_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_team_font_option',
		array(
		  'label' => '',
		  'description'	=> __('Text Color Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_team_sec'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_team_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_team_color', array(
		'label' => __('Team Text Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_team_sec',
		'settings' => 'vw_startup_pro_team_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_team_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_team_font_family', array(
	    'section'  => 'vw_startup_pro_team_sec',
	    'label'    => __( 'Team Text Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_team_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_team_font_size', array(
			'label'   => __('font size in px', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_team_sec',
			'setting' => 'vw_startup_pro_team_font_size',
			'type'    => 'text',
		)
	);
	//Team Section Additional Setting

	$wp_customize->add_setting( 'vw_startup_pro_team_radio_button',
		array(
			'default' => 'centered',
			'transport' => 'refresh',
			'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Startup_Pro_Text_Radio_Button_Custom_Control( $wp_customize, 'vw_startup_pro_team_radio_button',
		array(
			'label' => __( 'Team text Alignment','vw-startup-pro'),
			'section' => 'vw_startup_pro_team_sec',
			'choices' => array(
				'left' => __( 'Left','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'centered' => __( 'Centered','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'right' => __( 'Right','vw-startup-pro' ) // Required. Setting for this particular radio button choice and the text to display
			)
		)
	) );
    /*------------------------------------Experts -------------------------------------*/
	$wp_customize->add_section('vw_startup_pro_skills_section',array(
		'title'	=> __('Our Skills Section','vw-startup-pro'),
		'description'	=> __('Add We are Expert content here','vw-startup-pro'),
		'priority'	=> null,
		'panel' => 'vw_startup_pro_panel_id',
	));
	$wp_customize->add_setting('vw_startup_pro_skills_enabledisable',array(
        'default'=> 'Enable',
        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
    ));
	$wp_customize->add_control('vw_startup_pro_skills_enabledisable', array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_startup_pro_skills_section',
        'choices' => array(
            'Enable' => 'Enable',
            'Disable' => 'Disable'
        ),
    ));
    $wp_customize->add_setting( 'vw_startup_pro_skills_section_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_skills_section_options',
		array(
		  'label' => __('Background Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_skills_section'
		)
	) );
    $wp_customize->add_setting( 'vw_startup_pro_skills_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_skills_bgcolor', array(
		'label' => __('Section Background Color', 'vw-startup-pro'),
		'description'	=> __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
		'section' => 'vw_startup_pro_skills_section',
		'settings' => 'vw_startup_pro_skills_bgcolor',
	)));
	$wp_customize->add_setting('vw_startup_pro_skills_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control( $wp_customize,'vw_startup_pro_skills_bgimage',array(
        'label' => __('Section Background Image ','vw-startup-pro'),
        'description'	=> __('Recommended size 1600px * 577px','vw-startup-pro'),
        'section' => 'vw_startup_pro_skills_section',
        'settings' => 'vw_startup_pro_skills_bgimage'
	)));
	$wp_customize->add_setting( 'vw_startup_pro_skills_section_title_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_skills_section_title_options',
		array(
		  'label' => __('Section Title Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_skills_section'
		)
	) );
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_skills_section_title', array(
        'selector' => '.head_title',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_skills_section_title',
    ) );
	$wp_customize->add_setting('vw_startup_pro_skills_section_title',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_skills_section_title',array(
		'label'	=> __('Section Title','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_skills_section',
		'type'	=> 'text'
	));
	$wp_customize->add_setting( 'vw_startup_pro_skills_section_leftcontent_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_skills_section_leftcontent_option',
		array(
		  'label' => '',
		  'description'	=> __('Left Side Content ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_skills_section'
		)
	) );
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_skills_section_leftcontent', array(
        'selector' => '.skillp',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_skills_section_leftcontent',
    ) );
	$wp_customize->add_setting('vw_startup_pro_skills_section_leftcontent',array(
			'default'            => '',
			'capability'         => 'edit_theme_options',
			'sanitize_callback'  => 'sanitize_textarea_field'
	));

	$wp_customize->add_control(new vw_startup_pro_Editor_Control($wp_customize,'vw_startup_pro_skills_section_leftcontent',array(
		'label'       => 'Add Left Side Content here',
		'section'     => 'vw_startup_pro_skills_section',
		'setting'     => 'vw_startup_pro_skills_section_leftcontent'
	)));

	$wp_customize->add_setting( 'vw_startup_pro_skills_number_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_setting('vw_startup_pro_skills_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_skills_number',array(
		'label'	=> __('Number of Tabs to show','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_skills_section',
		'type'		=> 'number'
	));
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_skills_number', array(
        'selector' => '.bar_box',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_skills_number',
    ) );
	$count =  get_theme_mod('vw_startup_pro_skills_number', 6);
	for($i=1; $i<=$count; $i++) {
		$wp_customize->add_setting( 'vw_startup_pro_skills_number_box'.$i,
			array(
			  'default' => '',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
			)
		);
		$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_skills_number_box'.$i,
			array(
			  'label' => '',
			  'description'	=> __('Progress Bar Settings','vw-startup-pro').$i,
			  'section' => 'vw_startup_pro_skills_section'
			)
		) );
		
		$wp_customize->add_setting('vw_startup_pro_skills_bar_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_startup_pro_skills_bar_title'.$i,array(
			'label'	=> __('Bar Title','vw-startup-pro'),
			'section'	=> 'vw_startup_pro_skills_section',
			'type'	=> 'text'
		));

		$wp_customize->add_setting('vw_startup_pro_skills_bar_percent'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_startup_pro_skills_bar_percent'.$i,array(
			'label'	=> __('Add bar percentage here','vw-startup-pro'),
			'section'	=> 'vw_startup_pro_skills_section',
			'type'	=> 'text'
		));
	}	
	$wp_customize->add_setting( 'vw_startup_pro_skills_title_color_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_skills_title_color_option',
		array(
		  'label' => '',
		  'description'	=> __('Title Color Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_skills_section'
		)
	) );
	$wp_customize->add_setting('vw_startup_pro_skills_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_skills_title_color', array(
		'label' => __('Title Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_skills_section',
		'settings' => 'vw_startup_pro_skills_title_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_skills_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_skills_title_font_family', array(
	    'section'  => 'vw_startup_pro_skills_section',
	    'label'    => __( 'Title Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_skills_title_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_skills_title_font_size', array(
			'label'   => __('Title Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_skills_section',
			'setting' => 'vw_startup_pro_skills_title_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_skills_text_color_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_skills_text_color_option',
		array(
		  'label' => '',
		  'description'	=> __('Text Color Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_skills_section'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_skills_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_skills_text_color', array(
		'label' => __('Sub Text Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_skills_section',
		'settings' => 'vw_startup_pro_skills_text_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_skills_text_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_skills_text_font_family', array(
	    'section'  => 'vw_startup_pro_skills_section',
	    'label'    => __( 'Text Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_skills_text_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_skills_text_font_size', array(
			'label'   => __('Text Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_skills_section',
			'setting' => 'vw_startup_pro_skills_text_font_size',
			'type'    => 'text',
		)
	);
	//Skills Section Additional Setting

	$wp_customize->add_setting( 'vw_startup_pro_skills_radio_button',
		array(
			'default' => 'left',
			'transport' => 'refresh',
			'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Startup_Pro_Text_Radio_Button_Custom_Control( $wp_customize, 'vw_startup_pro_skills_radio_button',
		array(
			'label' => __( 'Skills text Alignment','vw-startup-pro'),
			'section' => 'vw_startup_pro_skills_section',
			'choices' => array(
				'left' => __( 'Left','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'centered' => __( 'Centered','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'right' => __( 'Right','vw-startup-pro' ) // Required. Setting for this particular radio button choice and the text to display
			)
		)
	) );

	/*-------------------------------------------- Video Section --------------------------------------*/
    $wp_customize->add_section('vw_startup_pro_video_sec',array(
		'title'	=> __('Video Section','vw-startup-pro'),
		'description'	=> __('Video Section Settings are here','vw-startup-pro'),
		'panel' => 'vw_startup_pro_panel_id',
	));
	$wp_customize->add_setting('vw_startup_pro_video_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_startup_pro_video_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-startup-pro'),
	        'section' => 'vw_startup_pro_video_sec',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-startup-pro'),
	            'Disable' => __('Disable', 'vw-startup-pro')
	        ),
	));

    $wp_customize->add_setting( 'vw_startup_pro_video_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_video_bgcolor',array(
		'label' => __('Background Color', 'vw-startup-pro'),
		'description'	=> __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
		'section' => 'vw_startup_pro_video_sec',
		'settings' => 'vw_startup_pro_video_bgcolor',
	)));

    $wp_customize->add_setting('vw_startup_pro_video_image',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_startup_pro_video_image',array(
       'label' => __('Video Image','vw-startup-pro'),
       
       'section' => 'vw_startup_pro_video_sec',
       'settings' => 'vw_startup_pro_video_image',
    )));

    $wp_customize->selective_refresh->add_partial( 'vw_startup_pro_video_text', array(
        'selector' => '.video_overlay p',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_video_text',
    ) );

    $wp_customize->add_setting('vw_startup_pro_video_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_video_text',array(
		'label'	=> __('Add Video Text','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_video_sec',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_startup_pro_video_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control('vw_startup_pro_video_link',array(
		'label'	=> __('Enter Embed Video Link ','vw-startup-pro'),
		'description' => __('Copy the iframe code of the You tube video, then you will need to copy the embed url form the src.','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_video_sec',
		'type'		=> 'url'
	));

	/* ----------------------------How we work --------------------------------*/
	$wp_customize->add_section('vw_startup_pro_how_we_work_section',array(
		'title'	=> __('How we work','vw-startup-pro'),
		'description'	=> __('Add How we work details here','vw-startup-pro'),
		'priority'	=> null,
		'panel' => 'vw_startup_pro_panel_id',
	));
	$wp_customize->add_setting('vw_startup_pro_how_we_work_section_enable',array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_startup_pro_how_we_work_section_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'vw-startup-pro'),
        'section' => 'vw_startup_pro_how_we_work_section',
        'choices' => array(
            'Enable' => __('Enable', 'vw-startup-pro'),
            'Disable' => __('Disable', 'vw-startup-pro')
	)));
	$wp_customize->add_setting( 'vw_startup_pro_how_we_work_section_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_how_we_work_section_options',
		array(
		  'label' => __('Background Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_how_we_work_section'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_how_we_work_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_how_we_work_bgcolor',array(
		'label' => __('Background Color', 'vw-startup-pro'),
		'description'	=> __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
		'section' => 'vw_startup_pro_how_we_work_section',
		'settings' => 'vw_startup_pro_how_we_work_bgcolor',
	)));
	$wp_customize->add_setting('vw_startup_pro_how_we_work_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_startup_pro_how_we_work_bgimage',array(
        'label' => __('Background image','vw-startup-pro'),
        'description'	=> __('Recommended size 1600px * 577px','vw-startup-pro'),
        'section' => 'vw_startup_pro_how_we_work_section',
        'settings' => 'vw_startup_pro_how_we_work_bgimage'
	)));
	$wp_customize->add_setting( 'vw_startup_pro_work_title_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_work_title_options',
		array(
		  'label' => __('Section Content','vw-startup-pro'),
		  'section' => 'vw_startup_pro_how_we_work_section'
		)
	) );
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_work_title', array(
        'selector' => '#how-we-work h3',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_work_title',
    ) );
	$wp_customize->add_setting('vw_startup_pro_work_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_work_title',array(
		'label'	=> __('Section Title','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_how_we_work_section',
		'setting'	=> 'vw_startup_pro_work_title',
		'type'		=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_work_desc', array(
        'selector' => '#how-we-work .section-heading-left p',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_work_desc',
    ) );
	$wp_customize->add_setting('vw_startup_pro_work_desc',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_work_desc',array(
		'label'	=> __('Section Description','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_how_we_work_section',
		'setting'	=> 'vw_startup_pro_work_desc',
		'type'		=> 'textarea'
	));
	$wp_customize->add_setting( 'vw_startup_pro_work_number_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_setting('vw_startup_pro_how_we_work_box_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_how_we_work_box_number',array(
		'label'	=> __('Number of Boxes to Show','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_how_we_work_section',
		'type'		=> 'number'
	));
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_how_we_work_box_number', array(
        'selector' => '.how-we-work',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_how_we_work_box_number',
    ) );
	$countchoose =  get_theme_mod('vw_startup_pro_how_we_work_box_number');
	for($i=1; $i<=$countchoose; $i++) {
		$wp_customize->add_setting( 'vw_startup_pro_how_we_work_box'.$i,
			array(
			  'default' => '',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
			)
		);
		$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_how_we_work_box'.$i,
			array(
			  'label' => '',
			  'description'	=> __('Box Image ','vw-startup-pro').$i,
			  'section' => 'vw_startup_pro_how_we_work_section'
			)
		) );
		
		$wp_customize->add_setting('vw_startup_pro_how_we_work_box_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(
		    new WP_Customize_Image_Control( $wp_customize,'vw_startup_pro_how_we_work_box_image'.$i,array(
			    'label' => __('Title Icon Image','vw-startup-pro'),
			    'section' => 'vw_startup_pro_how_we_work_section',
			    'settings' => 'vw_startup_pro_how_we_work_box_image'.$i
			)
		));
		$wp_customize->add_setting('vw_startup_pro_how_we_work_box_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_startup_pro_how_we_work_box_title'.$i,array(
			'label'	=> __('Title','vw-startup-pro'),
			'section'	=> 'vw_startup_pro_how_we_work_section',
			'setting'	=> 'vw_startup_pro_how_we_work_box_title'.$i,
			'type'		=> 'text'
		));

		$wp_customize->add_setting('vw_startup_pro_how_we_work_box_description'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_textarea_field'
		));
		$wp_customize->add_control('vw_startup_pro_how_we_work_box_description'.$i,array(
			'label'	=> __('Description','vw-startup-pro'),
			'section'	=> 'vw_startup_pro_how_we_work_section',
			'setting'	=> 'vw_startup_pro_how_we_work_box_description'.$i,
			'type'		=> 'textarea'
		));

		$wp_customize->add_setting('vw_startup_pro_how_we_work_box_title_link'.$i,array(
				'default'	=> '',
				'sanitize_callback'	=> 'esc_url_raw'
		));
		$wp_customize->add_control('vw_startup_pro_how_we_work_box_title_link'.$i,array(
				'label'	=> __('Link','vw-startup-pro'),
				'section'	=> 'vw_startup_pro_how_we_work_section',
				'setting'	=> 'vw_startup_pro_how_we_work_box_title_link'.$i,
				'type'		=> 'url'
		));	
	}
	$wp_customize->add_setting( 'vw_startup_pro_how_we_work_title_color_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_how_we_work_title_color_option',
		array(
		  'label' => '',
		  'description'	=> __('Section Content ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_how_we_work_section'
		)
	) );
	$wp_customize->add_setting('vw_startup_pro_how_we_work_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_how_we_work_title_color', array(
		'label' => __('Title Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_how_we_work_section',
		'settings' => 'vw_startup_pro_how_we_work_title_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_how_we_work_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_how_we_work_title_font_family', array(
	    'section'  => 'vw_startup_pro_how_we_work_section',
	    'label'    => __( 'Title Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_how_we_work_title_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_how_we_work_title_font_size', array(
			'label'   => __('Title Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_how_we_work_section',
			'setting' => 'vw_startup_pro_how_we_work_title_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_how_we_work_text_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_how_we_work_text_option',
		array(
		  'label' => '',
		  'description'	=> __('Text Color Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_how_we_work_section'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_how_we_work_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_how_we_work_text_color', array(
		'label' => __('Sub Text Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_how_we_work_section',
		'settings' => 'vw_startup_pro_how_we_work_text_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_how_we_work_text_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_how_we_work_text_font_family', array(
	    'section'  => 'vw_startup_pro_how_we_work_section',
	    'label'    => __( 'Text Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_how_we_work_text_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_how_we_work_text_font_size', array(
			'label'   => __('Text Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_how_we_work_section',
			'setting' => 'vw_startup_pro_how_we_work_text_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_how_we_work_icon_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_how_we_work_icon_option',
		array(
		  'label' => '',
		  'description'	=> __('Icon Color Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_how_we_work_section'
		)
	) );
	$wp_customize->add_setting('vw_startup_pro_how_we_work_icon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_how_we_work_icon_color', array(
		'label' => __('Icon Title Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_how_we_work_section',
		'settings' => 'vw_startup_pro_how_we_work_icon_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_how_we_work_icon_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_how_we_work_icon_font_family', array(
	    'section'  => 'vw_startup_pro_how_we_work_section',
	    'label'    => __('Icon Title Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_how_we_work_icon_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_how_we_work_icon_font_size', array(
			'label'   => __('icon font size in px', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_how_we_work_section',
			'setting' => 'vw_startup_pro_how_we_work_icon_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_icon_hover_color_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_icon_hover_color_option',
		array(
		  'label' => '',
		  'description'	=> __('Box Background Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_how_we_work_section'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_how_we_work_icon_box_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_how_we_work_icon_box_bgcolor', array(
		'label' => 'Box Background Color',
		'section' => 'vw_startup_pro_how_we_work_section',
		'settings' => 'vw_startup_pro_how_we_work_icon_box_bgcolor',
	)));
	$wp_customize->add_setting( 'vw_startup_pro_how_we_work_icon_box_hvcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_how_we_work_icon_box_hvcolor', array(
		'label' => 'Box Background Hover Color',
		'section' => 'vw_startup_pro_how_we_work_section',
		'settings' => 'vw_startup_pro_how_we_work_icon_box_hvcolor',
	)));
	//how we work Section Additional Setting

	$wp_customize->add_setting( 'vw_startup_pro_how_we_work_radio_button',
		array(
			'default' => 'centered',
			'transport' => 'refresh',
			'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Startup_Pro_Text_Radio_Button_Custom_Control( $wp_customize, 'vw_startup_pro_how_we_work_radio_button',
		array(
			'label' => __( 'Work text Alignment','vw-startup-pro'),
			'section' => 'vw_startup_pro_how_we_work_section',
			'choices' => array(
				'left' => __( 'Left','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'centered' => __( 'Centered','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'right' => __( 'Right','vw-startup-pro' ) // Required. Setting for this particular radio button choice and the text to display
			)
		)
	) );

	//Our Records
	$wp_customize->add_section('vw_startup_pro_our_records',array(
		'title'	=> __('Our Records','vw-startup-pro'),
		'description'	=> __('Records related settings will be changed from here.','vw-startup-pro'),
		'panel' => 'vw_startup_pro_panel_id',
	));
	//Our Records enable or disable
	$wp_customize->add_setting('vw_startup_pro_our_records_enable',array(
        'default'=> 'Enable',
        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
    ));
	$wp_customize->add_control('vw_startup_pro_our_records_enable', array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_startup_pro_our_records',
        'choices' => array(
            'Enable' => 'Enable',
            'Disable' => 'Disable'
        ),
    ));
    //Our Records background color picker setting
    $wp_customize->add_setting( 'vw_startup_pro_our_records_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_our_records_options',
		array(
		  'label' => __('Background Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_our_records'
		)
	) );
	
	$wp_customize->add_setting( 'vw_startup_pro_our_records_bg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_our_records_bg_color', array(
		'label' => __('Background Color','vw-startup-pro'),
		'description'	=> __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
		'section' => 'vw_startup_pro_our_records',
		'settings' => 'vw_startup_pro_our_records_bg_color',
	)));
	//Our Records background image picker setting
	$wp_customize->add_setting('vw_startup_pro_our_records_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));		
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_startup_pro_our_records_bg_image',array(
            'label' => __('Background image','vw-startup-pro'),
            'description'	=> __('Recommended size 270px * 460px','vw-startup-pro'),
            'section' => 'vw_startup_pro_our_records',
            'settings' => 'vw_startup_pro_our_records_bg_image'
	)));

	/* Seperator */

	$wp_customize->add_setting( 'vw_startup_pro_record_title_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_record_title_options',
		array(
		  'label' => __('Section Content','vw-startup-pro'),
		  'section' => 'vw_startup_pro_our_records'
		)
	) );
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_record_title', array(
        'selector' => '#our_records .section-heading-left h3',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_record_title',
    ) );
	$wp_customize->add_setting('vw_startup_pro_record_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_record_title',array(
		'label'	=> __('Section Title','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_our_records',
		'setting'	=> 'vw_startup_pro_record_title',
		'type'		=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_record_desc', array(
        'selector' => '#our_records .section-heading-left p',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_record_desc',
    ) );
	$wp_customize->add_setting('vw_startup_pro_record_desc',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_record_desc',array(
		'label'	=> __('Section Description','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_our_records',
		'setting'	=> 'vw_startup_pro_record_desc',
		'type'		=> 'textarea'
	));

	$wp_customize->add_setting( 'vw_startup_pro_records_text_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_records_text_options',
		array(
		  'label' => __('Text Color Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_our_records'
		)
	) );
	//Our Records add color picker control
	$wp_customize->add_setting( 'vw_startup_pro_records_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_records_text_color', array(
		'label' => 'Text Color',
		'section' => 'vw_startup_pro_our_records',
		'settings' => 'vw_startup_pro_records_text_color',

	)));
	//Our Records font family picker setting
	$wp_customize->add_setting('vw_startup_pro_records_text_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_startup_pro_records_text_font_family', array(
	    'section'  => 'vw_startup_pro_our_records',
	    'label'    => __( 'Text Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_records_text_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_records_text_font_size', array(
			'label'   => __('Text Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_our_records',
			'setting' => 'vw_startup_pro_records_text_font_size',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting( 'vw_startup_pro_our_records_number_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	
	$wp_customize->add_setting('vw_startup_pro_our_records_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_our_records_number',array(
		'label'	=> __('Number of records to show','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_our_records',
		'type'		=> 'number'
	));
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_our_records_number', array(
        'selector' => '.counter-box',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_our_records_number',
    	) );
	$records_count =  get_theme_mod('vw_startup_pro_our_records_number');

	for($i=1; $i<=$records_count; $i++) {
		$wp_customize->add_setting( 'vw_startup_pro_our_records_box'.$i,
			array(
			  'default' => '',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
			)
		);
		$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_our_records_box'.$i,
			array(
			  'label' => '',
			  'description'	=> __('Counter Box Image ','vw-startup-pro').$i,
			  'section' => 'vw_startup_pro_our_records'
			)
		) );
		
		$wp_customize->add_setting('vw_startup_pro_our_records_image'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_startup_pro_our_records_image'.$i,array(
            'label' => __('Counter Image','vw-startup-pro'),
            'section' => 'vw_startup_pro_our_records',
            'settings' => 'vw_startup_pro_our_records_image'.$i
		)));
		$wp_customize->add_setting('vw_startup_pro_number_title'.$i,array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));		
		$wp_customize->add_control('vw_startup_pro_number_title'.$i,array(
			'label'	=> __('Number','vw-startup-pro'),
			'section'=> 'vw_startup_pro_our_records',
			'type'=> 'text'
		));
		$wp_customize->add_setting('vw_startup_pro_circle_content'.$i,array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));		
		$wp_customize->add_control('vw_startup_pro_circle_content'.$i,array(
			'label'	=> __('Counter Title','vw-startup-pro'),
			'section'=> 'vw_startup_pro_our_records',
			'type'	=> 'text'
		));
	}
	/* ------------------------------Testimonial Section -----------------------------------*/
	$wp_customize->add_section('vw_startup_pro_testimonial',array(
			'title'	=> __('Testimonial','vw-startup-pro'),
			/* translators: 1: Add testimonials Post link start, 2: Add testimonials Post link end */
			'description' => sprintf( __( 'This section is only for testimonial title and styling. Check the link below to  %1$sAdd Testimonial%2$s.', 'vw-startup-pro' ), '<a href="' . esc_url( admin_url( '/wp-admin/edit.php?post_type=testimonials' ) ) . '" target="_blank">', '</a>' ),
			'priority'	=> null,
			'panel' => 'vw_startup_pro_panel_id',
	));
	$wp_customize->add_setting('vw_startup_pro_radio_testimonial_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_startup_pro_radio_testimonial_enable',
    array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'vw-startup-pro'),
        'section' => 'vw_startup_pro_testimonial',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-startup-pro'),
	            'Disable' => __('Disable', 'vw-startup-pro')
	    ),
    ));
    $wp_customize->add_setting( 'vw_startup_pro_testimonial_bgcolor_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_testimonial_bgcolor_options',
		array(
		  'label' => __('Background Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_testimonial'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_testimonial_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_testimonial_bgcolor', array(
		'label' => __('Background Color', 'vw-startup-pro'),
		'description'	=> __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
		'section' => 'vw_startup_pro_testimonial',
		'settings' => 'vw_startup_pro_testimonial_bgcolor',
	)));
	$wp_customize->add_setting('vw_startup_pro_our_testimonial_bgimage',array(
			'default'	=>'',
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'vw_startup_pro_our_testimonial_bgimage',
	        array(
	            'label' => __('Background image','vw-startup-pro'),
	            'section' => 'vw_startup_pro_testimonial',
	            'settings' => 'vw_startup_pro_our_testimonial_bgimage'
	)));
	$wp_customize->add_setting( 'vw_startup_pro_testimonial_title_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_testimonial_title_options',
		array(
		  'label' => __('Section Content','vw-startup-pro'),
		  'section' => 'vw_startup_pro_testimonial'
		)
	) );
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_testimonial_title', array(
        'selector' => '#testimonials h3',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_testimonial_title',
    ) );
	$wp_customize->add_setting('vw_startup_pro_testimonial_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_testimonial_title',array(
		'label'	=> __('Section Title','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_testimonial',
		'setting'	=> 'vw_startup_pro_testimonial_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_startup_pro_testimonial_style',array(
	  'default' => 'style1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_testimonial_style', array(
	    'section'  => 'vw_startup_pro_testimonial',
	    'label'    => __( 'Choose a Style for the testimonial','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    'style1' => __( 'testimonial With Carousel', 'vw-startup-pro' ),
		    'style2' => __( 'testimonial Without Carousel', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting( 'vw_startup_pro_testimonial_style1_settings',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);

	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_testimonial_style1_settings',
		array(
		  'label' => '',
		  'description'	=> __('Settings for Style 1','vw-startup-pro'),
		  'section' => 'vw_startup_pro_testimonial'
		)
	) );

	$wp_customize->add_setting('vw_startup_pro_testimonial_number',array(
		'default'	=> '3',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_testimonial_number',array(
		'label'	=> __('Number of testimonial in first slide','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_testimonial',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'vw_startup_pro_testimonial_style2_settings',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);

	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_testimonial_style2_settings',
		array(
		  'label' => '',
		  'description'	=> __('Settings for Style 2','vw-startup-pro'),
		  'section' => 'vw_startup_pro_testimonial'
		)
	) );

	$wp_customize->add_setting('vw_startup_pro_testimonial_boxes_size',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_testimonial_boxes_size', array(
	    'section'  => 'vw_startup_pro_testimonial',
	    'label'    => __( 'Number of Boxes show in a row','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( '3', 'vw-startup-pro' ),
		    '2' => __( '2', 'vw-startup-pro' ),
		    '3' => __( '1', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting('vw_startup_pro_testimonial_order_by',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_testimonial_order_by', array(
	    'section'  => 'vw_startup_pro_testimonial',
	    'label'    => __( 'Order By','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( 'Date', 'vw-startup-pro' ),
		    '2' => __( 'ID', 'vw-startup-pro' ),
		    '3' => __( 'Menu Order', 'vw-startup-pro' ),
		    '4' => __( 'Popularity', 'vw-startup-pro' ),
		    '5' => __( 'Rand', 'vw-startup-pro' ),
		    '6' => __( 'Title', 'vw-startup-pro' )
		),
	));
	$wp_customize->add_setting('vw_startup_pro_testimonial_order',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_testimonial_order', array(
	    'section'  => 'vw_startup_pro_testimonial',
	    'label'    => __( 'Order','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( 'Ascending', 'vw-startup-pro' ),
		    '2' => __( 'Descending', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting('vw_startup_pro_testimonial_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_testimonial_title_color', array(
		'label' => __('Title Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_testimonial',
		'settings' => 'vw_startup_pro_testimonial_title_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_testimonial_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_testimonial_title_font_family', array(
	    'section'  => 'vw_startup_pro_testimonial',
	    'label'    => __( 'Title Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_testimonial_title_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_testimonial_title_font_size', array(
			'label'   => __('Title Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_testimonial',
			'setting' => 'vw_startup_pro_testimonial_title_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_testimonial_name_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_testimonial_name_option',
		array(
		  'label' => '',
		  'description'	=> __('Color Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_testimonial'
		)
	) );
	$wp_customize->add_setting('vw_startup_pro_testimonial_name_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_testimonial_name_color', array(
		'label' => __('Testimonial Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_testimonial',
		'settings' => 'vw_startup_pro_testimonial_name_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_testimonial_name_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_testimonial_name_font_family', array(
	    'section'  => 'vw_startup_pro_testimonial',
	    'label'    => __( 'Testimonial Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_testimonial_name_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_testimonial_name_font_size', array(
			'label'   => __('name font size in px', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_testimonial',
			'setting' => 'vw_startup_pro_testimonial_name_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_testimonial_box_bgcolor_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_testimonial_box_bgcolor_option',
		array(
		  'label' => '',
		  'description'	=> __('Box Background Settings ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_testimonial'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_testimonial_box_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_startup_pro_testimonial_box_bgcolor', array(
		'label' => 'Box Background Color',
		'section' => 'vw_startup_pro_testimonial',
		'settings' => 'vw_startup_pro_testimonial_box_bgcolor',
	)));
	//Testimonial Section Additional Setting

	$wp_customize->add_setting( 'vw_startup_pro_testimonial_radio_button',
		array(
			'default' => 'centered',
			'transport' => 'refresh',
			'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Startup_Pro_Text_Radio_Button_Custom_Control( $wp_customize, 'vw_startup_pro_testimonial_radio_button',
		array(
			'label' => __( 'Testimonial text Alignment','vw-startup-pro'),
			'section' => 'vw_startup_pro_testimonial',
			'choices' => array(
				'left' => __( 'Left','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'centered' => __( 'Centered','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'right' => __( 'Right','vw-startup-pro' ) // Required. Setting for this particular radio button choice and the text to display
			)
		)
	) );


	//Latest Post
	$wp_customize->add_section('vw_startup_pro_latest_post',array(
		'title'	=> __('Latest Post','vw-startup-pro'),
		'panel' => 'vw_startup_pro_panel_id',
	));
	$wp_customize->add_setting('vw_startup_pro_radio_post_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
    ));
	$wp_customize->add_control(
    'vw_startup_pro_radio_post_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-startup-pro'),
	        'section' => 'vw_startup_pro_latest_post',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-startup-pro'),
	            'Disable' => __('Disable', 'vw-startup-pro')
	    ),
    ));
	$wp_customize->add_setting( 'vw_startup_pro_latest_post_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_latest_post_options',
		array(
		  'label' => __('Background Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_latest_post'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_latest_post_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'vw_startup_pro_latest_post_color', array(
		'label' => __('Background Color','vw-startup-pro'),
		'section' => 'vw_startup_pro_latest_post',
		'settings' => 'vw_startup_pro_latest_post_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_our_latest_post_bgimage',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'vw_startup_pro_our_latest_post_bgimage',
	        array(
	            'label' => __('Background image','vw-startup-pro'),
	            'description'	=> __('Recommended size 1600px * 577px','vw-startup-pro'),
	            'section' => 'vw_startup_pro_latest_post',
	            'settings' => 'vw_startup_pro_our_latest_post_bgimage'
	))); 
	$wp_customize->add_setting( 'vw_startup_pro_latestpost_title_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_latestpost_title_options',
		array(
		  'label' => __('Section Content','vw-startup-pro'),
		  'section' => 'vw_startup_pro_latest_post'
		)
	) );
	$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_latestpost_title', array(
        'selector' => '#latest_post .section-heading h3',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_latestpost_title',
    ) );
	$wp_customize->add_setting('vw_startup_pro_latestpost_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_startup_pro_latestpost_title',array(
		'label'	=> __('Section Title','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_latest_post',
		'setting'	=> 'vw_startup_pro_latestpost_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_startup_pro_latestpost_style',array(
	  'default' => 'style1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_latestpost_style', array(
	    'section'  => 'vw_startup_pro_latest_post',
	    'label'    => __( 'Choose a Style for the latestpost','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    'style1' => __( 'Latest Post With Carousel', 'vw-startup-pro' ),
		    'style2' => __( 'Latest Post Without Carousel', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting( 'vw_startup_pro_latestpost_style1_settings',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);

	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_latestpost_style1_settings',
		array(
		  'label' => '',
		  'description'	=> __('Settings for Style 1','vw-startup-pro'),
		  'section' => 'vw_startup_pro_latest_post'
		)
	) );

	$wp_customize->add_setting('vw_startup_pro_latestpost_number',array(
		'default'	=> '3',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_latestpost_number',array(
		'label'	=> __('Number of latest post in first slide','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_latest_post',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'vw_startup_pro_latestpost_style2_settings',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);

	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_latestpost_style2_settings',
		array(
		  'label' => '',
		  'description'	=> __('Settings for Style 2','vw-startup-pro'),
		  'section' => 'vw_startup_pro_latest_post'
		)
	) );

	$wp_customize->add_setting('vw_startup_pro_latestpost_boxes_size',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_latestpost_boxes_size', array(
	    'section'  => 'vw_startup_pro_latest_post',
	    'label'    => __( 'Number of Boxes show in a row','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( '3', 'vw-startup-pro' ),
		    '2' => __( '2', 'vw-startup-pro' ),
		    '3' => __( '1', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting('vw_startup_pro_latest_post_order_by',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_latest_post_boxes_size', array(
	    'section'  => 'vw_startup_pro_latest_post',
	    'label'    => __( 'Order By','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( 'Date', 'vw-startup-pro' ),
		    '2' => __( 'ID', 'vw-startup-pro' ),
		    '3' => __( 'Menu Order', 'vw-startup-pro' ),
		    '4' => __( 'Popularity', 'vw-startup-pro' ),
		    '5' => __( 'Rand', 'vw-startup-pro' ),
		    '6' => __( 'Title', 'vw-startup-pro' )
		),
	));
	$wp_customize->add_setting('vw_startup_pro_latest_post_order',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_latest_post_order', array(
	    'section'  => 'vw_startup_pro_latest_post',
	    'label'    => __( 'Order','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( 'Ascending', 'vw-startup-pro' ),
		    '2' => __( 'Descending', 'vw-startup-pro' )
		),
	));


	$wp_customize->add_setting( 'vw_startup_pro_post_alphacolor_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_post_alphacolor_options',
		array(
		  'label' => __('Alphacolor Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_latest_post'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_post_alphacolor',
	array(
		'default' => 'rgba(100, 197, 170, 0.9)',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_startup_pro_text_sanitization'
	)
	);
	$wp_customize->add_control( new VW_Themes_Customize_Alpha_Color_Control( $wp_customize, 'vw_startup_pro_post_alphacolor',
		array(
			'label' => __( 'Image Hover RGB Color Picker','vw-startup-pro' ),
			'description' => esc_html__( 'Below Setting is for changing the RGBA color', 'vw-startup-pro' ),
			'section' => 'vw_startup_pro_latest_post',
			'show_opacity' => true, // Optional. Show or hide the opacity value on the opacity slider handle. Default: true
			'palette' => array( // Optional. Select the colours for the colour palette . Default: WP color control palette
				'#000',
				'#fff',
				'#df312c',
				'#df9a23',
				'#eef000',
				'#7ed934',
				'#1571c1',
				'#8309e7'
			)
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_post_title_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_post_title_options',
		array(
		  'label' => __('Section Title Color Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_latest_post'
		)
	) );
	$wp_customize->add_setting('vw_startup_pro_latest_post_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_latest_post_title_color', array(
		'label' => __('Section Title Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_latest_post',
		'settings' => 'vw_startup_pro_latest_post_title_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_latest_post_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_latest_post_title_font_family', array(
	    'section'  => 'vw_startup_pro_latest_post',
	    'label'    => __( 'Section Title Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_latest_post_title_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_latest_post_title_font_size', array(
			'label'   => __('Title Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_latest_post',
			'setting' => 'vw_startup_pro_latest_post_title_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_latest_post_title_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_latest_post_title_options',
		array(
		  'label' => __('Section Title Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_latest_post'
		)
	) );
	$wp_customize->add_setting('vw_startup_pro_latestpost_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_latestpost_color', array(
		'label' => __('Latest Post Color', 'vw-startup-pro'),
		'section' => 'vw_startup_pro_latest_post',
		'settings' => 'vw_startup_pro_latestpost_color',
	)));
	
	$wp_customize->add_setting('vw_startup_pro_latestpost_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_latestpost_font_family', array(
	    'section'  => 'vw_startup_pro_latest_post',
	    'label'    => __('Latest Post Font Family','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_startup_pro_latestpost_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_latestpost_font_size', array(
			'label'   => __('Text Font Size in PX', 'vw-startup-pro'),
			'description'	=> __('For ex. 14px','vw-startup-pro'),
			'section' => 'vw_startup_pro_latest_post',
			'setting' => 'vw_startup_pro_latestpost_font_size',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting( 'vw_startup_pro_latestpost_box_bgcolor_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_latestpost_box_bgcolor_options',
		array(
		  'label' => __('Box Background Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_latest_post'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_latestpost_box_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_latestpost_box_bgcolor', array(
		'label' => __('Box Background Color','vw-startup-pro'),
		'description'	=> __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
		'section' => 'vw_startup_pro_latest_post',
		'settings' => 'vw_startup_pro_latestpost_box_bgcolor',
	)));
	$wp_customize->add_setting( 'vw_startup_pro_latestpost_box_hvcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_latestpost_box_hvcolor', array(
		'label' => 'Box Background Hover Color',
		'section' => 'vw_startup_pro_latest_post',
		'settings' => 'vw_startup_pro_latestpost_box_hvcolor',
	)));
	//Latest Post Section Additional Setting

	$wp_customize->add_setting( 'vw_startup_pro_latestpost_radio_button',
		array(
			'default' => 'centered',
			'transport' => 'refresh',
			'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Startup_Pro_Text_Radio_Button_Custom_Control( $wp_customize, 'vw_startup_pro_latestpost_radio_button',
		array(
			'label' => __( 'Latest Post text Alignment','vw-startup-pro'),
			'section' => 'vw_startup_pro_latest_post',
			'choices' => array(
				'left' => __( 'Left','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'centered' => __( 'Centered','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
				'right' => __( 'Right','vw-startup-pro' ) // Required. Setting for this particular radio button choice and the text to display
			)
		)
	) );

	//Our Partners
	$wp_customize->add_section('vw_startup_pro_our_partners_section',array(
		'title'	=> __('Our Partners','vw-startup-pro'),
		'description'	=> __('Partner section related settings will be changed from here','vw-startup-pro'),
		'priority'	=> null,
		'panel' => 'vw_startup_pro_panel_id',
	));
	$wp_customize->add_setting('vw_startup_pro_radio_our_partners_enable',array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_startup_pro_radio_our_partners_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'vw-startup-pro'),
        'section' => 'vw_startup_pro_our_partners_section',
        'choices' => array(
            'Enable' => __('Enable', 'vw-startup-pro'),
            'Disable' => __('Disable', 'vw-startup-pro')
	)));
	$wp_customize->add_setting( 'vw_startup_pro_our_partners_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_our_partners_options',
		array(
		  'label' => __('Background Options','vw-startup-pro'),
		  'section' => 'vw_startup_pro_our_partners_section'
		)
	) );
	$wp_customize->add_setting( 'vw_startup_pro_our_partnersbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_our_partnersbg_color',array(
		'label' => __('Background Color', 'vw-startup-pro'),
		'description'	=> __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
		'section' => 'vw_startup_pro_our_partners_section',
		'settings' => 'vw_startup_pro_our_partnersbg_color',
	)));
	$wp_customize->add_setting('vw_startup_pro_our_partnersbg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_startup_pro_our_partnersbg_image',array(
        'label' => __('Background image','vw-startup-pro'),
        'description'	=> __('Recommended size 1600px * 577px','vw-startup-pro'),
        'section' => 'vw_startup_pro_our_partners_section',
        'settings' => 'vw_startup_pro_our_partnersbg_image'
	)));

	$wp_customize->add_setting('vw_startup_pro_partners_style',array(
	  'default' => 'style1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_partners_style', array(
	    'section'  => 'vw_startup_pro_our_partners_section',
	    'label'    => __( 'Choose a Style for the partners','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    'style1' => __( 'Partners With Carousel', 'vw-startup-pro' ),
		    'style2' => __( 'Partners Without Carousel', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting( 'vw_startup_pro_partners_style1_settings',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);

	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_partners_style1_settings',
		array(
		  'label' => '',
		  'description'	=> __('Settings for Style 1','vw-startup-pro'),
		  'section' => 'vw_startup_pro_our_partners_section'
		)
	) );

	$wp_customize->add_setting('vw_startup_pro_partners_number_columns',array(
		'default'	=> '5',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_partners_number_columns',array(
		'label'	=> __('Number of partners in first slide','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_our_partners_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'vw_startup_pro_partners_style2_settings',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);

	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_partners_style2_settings',
		array(
		  'label' => '',
		  'description'	=> __('Settings for Style 2','vw-startup-pro'),
		  'section' => 'vw_startup_pro_our_partners_section'
		)
	) );

	$wp_customize->add_setting('vw_startup_pro_partners_boxes_size',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_partners_boxes_size', array(
	    'section'  => 'vw_startup_pro_our_partners_section',
	    'label'    => __( 'Number of Boxes show in a row','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( '4', 'vw-startup-pro' ),
		    '2' => __( '3', 'vw-startup-pro' ),
		    '3' => __( '2', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_setting( 'vw_startup_pro_our_partners_number_options',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_setting('vw_startup_pro_our_partners_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_our_partners_number',array(
		'label'	=> __('Number of boxes to show','vw-startup-pro'),
		'section'	=> 'vw_startup_pro_our_partners_section',
		'type'		=> 'number'
	));
	$count =  get_theme_mod('vw_startup_pro_our_partners_number');

	for($i=1, $j=1; $i<=$count; $i++, $j++) {
		if($j==4){ $j=1; }
		$wp_customize->add_setting( 'vw_startup_pro_our_partners_image_box'.$i,
			array(
			  'default' => '',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
			)
		);
		$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_our_partners_image_box'.$i,
			array(
			  'label' => '',
			  'description'	=> __('Partners Image ','vw-startup-pro').$i,
			  'section' => 'vw_startup_pro_our_partners_section'
			)
		) );
		$wp_customize->selective_refresh->add_partial( 'vw_startup_pro_our_partners_image'.$i, array(
        'selector' => '.partners_inner',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_our_partners_image'.$i,
    	) );
		$wp_customize->add_setting('vw_startup_pro_our_partners_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_startup_pro_our_partners_image'.$i,
	        array(
	            'label' => __('Partner Image','vw-startup-pro').$i,
	            'description'	=> __('Recommended size 180px * 40px','vw-startup-pro'),
	            'section' => 'vw_startup_pro_our_partners_section',
	            'settings' => 'vw_startup_pro_our_partners_image'.$i
		)));	
	}

	/*Blog page category*/
	$wp_customize->add_section('vw_startup_pro_blog_category',array(
		'title'	=> __('Blog Page','vw-startup-pro'),
		'description'	=> __('Blog Post settings','vw-startup-pro'),
		'priority'	=> null,
		'panel' => 'vw_startup_pro_panel_id',
	));
	$wp_customize->add_setting( 'vw_startup_pro_blog_category_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_blog_category_option',
		array(
		  'label' => '',
		  'description'	=> __('Blog Page Category Options ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_blog_category'
		)
	) );
	$categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
	$wp_customize->add_setting('vw_startup_pro_category_setting',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_startup_pro_category_setting',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Blog page','vw-startup-pro'),
		'description'	=> __('From this settings you can show the post from the specific category on blog pages.','vw-startup-pro'),
		'section' => 'vw_startup_pro_blog_category',
	));	
	$wp_customize->add_setting( 'vw_startup_pro_blog_post_meta_settings_option',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);

	$wp_customize->add_setting('vw_startup_pro_blog_style',array(
	  'default' => '1',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_startup_pro_blog_style', array(
	    'section'  => 'vw_startup_pro_blog_category',
	    'label'    => __( 'Choose Style','vw-startup-pro'),
	    'type'     => 'select',
	    'choices'  => array(
		    '1' => __( 'Box with overlay', 'vw-startup-pro' ),
		    '2' => __( 'Box without overlay', 'vw-startup-pro' )
		),
	));

	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_blog_post_meta_settings_option',
		array(
		  'label' => '',
		  'description'	=> __('Single Post Settings ','vw-startup-pro'),
		  'section' => 'vw_startup_pro_blog_category'
		)
	) );

	$wp_customize->add_setting( 'vw_startup_pro_blog_post_meta_settings',
		array(
			'default' => '',
			'transport' => 'postMessage',
			'sanitize_callback' => 'vw_startup_pro_text_sanitization'
		)
	);
	$wp_customize->add_control( new VW_Themes_Simple_Notice_Custom_Control( $wp_customize, 'vw_startup_pro_blog_post_meta_settings',
		array(
			'label' => __( 'Note', 'vw-startup-pro'),
			'description' => __('Below Settings is to hide the post meta such as comments, date, auther. This settings will work on all the blog page.','vw-startup-pro' ),
			'section' => 'vw_startup_pro_blog_category'
		)
	) );

	$wp_customize->add_setting( 'vw_startup_pro_toggle_auther',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vw_startup_pro_switch_sanitization'
	));	 
	$wp_customize->add_control( new VW_Themes_Toggle_Switch_Custom_control( $wp_customize, 'vw_startup_pro_toggle_auther',
	   array(
	      'label' => esc_html__( 'Author Name', 'vw-startup-pro' ),
	      'section' => 'vw_startup_pro_blog_category'
	)));

	$wp_customize->add_setting( 'vw_startup_pro_toggle_comments',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vw_startup_pro_switch_sanitization'
	));	 
	$wp_customize->add_control( new VW_Themes_Toggle_Switch_Custom_control( $wp_customize, 'vw_startup_pro_toggle_comments',
	   array(
	      'label' => esc_html__( 'Comment' , 'vw-startup-pro'),
	      'section' => 'vw_startup_pro_blog_category'
	)));

	$wp_customize->add_setting( 'vw_startup_pro_toggle_date',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vw_startup_pro_switch_sanitization'
	));	 
	$wp_customize->add_control( new VW_Themes_Toggle_Switch_Custom_control( $wp_customize, 'vw_startup_pro_toggle_date',
	   array(
	      'label' => esc_html__( 'Post Date', 'vw-startup-pro' ),
	      'section' => 'vw_startup_pro_blog_category'
	)));
	
	$wp_customize->add_setting( 'vw_startup_pro_toggle_sharing',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vw_startup_pro_switch_sanitization'
	));	 
	$wp_customize->add_control( new VW_Themes_Toggle_Switch_Custom_control( $wp_customize, 'vw_startup_pro_toggle_sharing',
	   array(
	      'label' => esc_html__( 'Social Sharing', 'vw-startup-pro' ),
	      'section' => 'vw_startup_pro_blog_category'
	)));

	$wp_customize->add_setting('vw_startup_pro_blog_post_read_more_lable', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('vw_startup_pro_blog_post_read_more_lable', array(
			'label'   => __('Read More Label', 'vw-startup-pro'),
			'section' => 'vw_startup_pro_blog_category',
			'setting' => 'vw_startup_pro_blog_post_read_more_lable',
			'type'    => 'text',
		)
	);
    
?>