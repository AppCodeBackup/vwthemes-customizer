<?php
    /* Custom Footer */
    $wp_customize->add_section('vw_startup_pro_custom_footer_section',array(
        'title' => __('Custom Footer','vw-startup-pro'),
        'description'   => __('Edit custom footer sections','vw-startup-pro'),
        'panel' => 'vw_startup_pro_panel_id',
    ));
    $wp_customize->add_setting( 'vw_startup_pro_custom_footer_section_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_setting( 'vw_startup_pro_custom_footer_section_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_custom_footer_section_options',
        array(
          'label' => __('Background Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_custom_footer_section'
        )
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_custom_footer_section_bgcolor', array(
        'label' => __('Background Color', 'vw-startup-pro'),
        'description'   => __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
        'section' => 'vw_startup_pro_custom_footer_section',
        'settings' => 'vw_startup_pro_custom_footer_section_bgcolor',
    )));
    $wp_customize->add_setting('vw_startup_pro_custom_footer_section_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_startup_pro_custom_footer_section_bgimage',
            array(
                'label' => __('Background image','vw-startup-pro'),
                'section' => 'vw_startup_pro_custom_footer_section',
                'settings' => 'vw_startup_pro_custom_footer_section_bgimage'
    )));
    $wp_customize->add_setting( 'vw_startup_pro_custom_footer_icon_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_custom_footer_icon_options',
        array(
          'label' => __('Show/Hide Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_custom_footer_section'
        )
    ) );
    $wp_customize->add_setting('vw_startup_pro_custom_footer_contactmap',array(
        'default' => 'true',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_startup_pro_custom_footer_contactmap',array(
        'type' => 'checkbox',
        'label' => __('Map Contact Form Show / Hide','vw-startup-pro'),
        'section' => 'vw_startup_pro_custom_footer_section',
    ));
    $wp_customize->add_setting('vw_startup_pro_custom_footer_menu',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_startup_pro_custom_footer_menu',array(
        'type' => 'checkbox',
        'label' => __('Logo / Footer Menu Show / Hide','vw-startup-pro'),
        'section' => 'vw_startup_pro_custom_footer_section',
    ));
    $wp_customize->add_setting( 'vw_startup_pro_custom_footer_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_custom_footer_options',
        array(
          'label' => __('Footer Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_custom_footer_section'
        )
    ) );
    $wp_customize->selective_refresh->add_partial( 'vw_startup_pro_footer_form_title', array(
        'selector' => '.footer_form h3',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_footer_form_title',
    ) );
    $wp_customize->add_setting('vw_startup_pro_footer_form_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_startup_pro_footer_form_title',array(
        'label' => __('Footer Form Title','vw-startup-pro'),
        'section' => 'vw_startup_pro_custom_footer_section',
        'setting'   => 'vw_startup_pro_footer_form_title',
        'type'  => 'text'
    ));
    $wp_customize->selective_refresh->add_partial( 'vw_startup_pro_footer_form_desc', array(
        'selector' => '.footer_form p',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_footer_form_desc',
    ) );
    $wp_customize->add_setting('vw_startup_pro_footer_form_desc',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_startup_pro_footer_form_desc',array(
        'label' => __('Footer Form Description','vw-startup-pro'),
        'section' => 'vw_startup_pro_custom_footer_section',
        'setting'   => 'vw_startup_pro_footer_form_desc',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_custom_footer_form_shortcode',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_startup_pro_custom_footer_form_shortcode',array(
        'label' => __('Footer Form Shortcode','vw-startup-pro'),
        'section' => 'vw_startup_pro_custom_footer_section',
        'setting'   => 'vw_startup_pro_custom_footer_form_shortcode',
        'type'  => 'text'
    ));
    $wp_customize->add_setting( 'vw_startup_pro_custom_footer_logo_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_custom_footer_logo_options',
        array(
          'label' => __('Footer Logo Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_custom_footer_section'
        )
    ) );

    $wp_customize->selective_refresh->add_partial( 'vw_startup_pro_footer_logo', array(
        'selector' => '.footer-logo',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_footer_logo',
    ) );

    $wp_customize->add_setting('vw_startup_pro_footer_logo',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_startup_pro_footer_logo',
            array(
                'label' => __('Logo Image','vw-startup-pro'),
                'description'   => __('Recommended size 266px * 81px','vw-startup-pro'),
                'section' => 'vw_startup_pro_custom_footer_section',
                'settings' => 'vw_startup_pro_footer_logo'
    )));

    //Footer Section Additional Setting

    $wp_customize->add_setting( 'vw_startup_pro_footercontent_text_radio_button',
        array(
            'default' => 'left',
            'transport' => 'refresh',
            'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Startup_Pro_Text_Radio_Button_Custom_Control( $wp_customize, 'vw_startup_pro_footercontent_text_radio_button',
        array(
            'label' => __( 'Footer text Alignment','vw-startup-pro'),
            'section' => 'vw_startup_pro_custom_footer_section',
            'choices' => array(
                'left' => __( 'Left','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
                'centered' => __( 'Centered','vw-startup-pro' ), // Required. Setting for this particular radio button choice and the text to display
                'right' => __( 'Right','vw-startup-pro' ) // Required. Setting for this particular radio button choice and the text to display
            )
        )
    ) );
    /* Footer Sections */
    $wp_customize->add_section('vw_startup_pro_footer_section_first',array(
        'title' => __('Footer','vw-startup-pro'),
        'description'   => __('Footer related settings defined here','vw-startup-pro'),
        'panel' => 'vw_startup_pro_panel_id',
    ));
    $wp_customize->add_setting('vw_startup_pro_radiolast_enable',
    array(
        'default' => 'Disable',
        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_startup_pro_radiolast_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_startup_pro_footer_section_first',
        'choices' => array(
            'Enable' => __('Enable', 'vw-startup-pro'),
            'Disable' => __('Disable', 'vw-startup-pro')
        ),
    ));
    $wp_customize->add_setting( 'vw_startup_pro_section_footer_bgcolor_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_section_footer_bgcolor_options',
        array(
          'label' => __('Background Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_footer_section_first'
        )
    ) );
    // add color picker setting
    $wp_customize->add_setting( 'vw_startup_pro_section_footer_bgcolor', array(
        'default' => '#2b3546',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_section_footer_bgcolor', array(
        'label' => __('Background Color', 'vw-startup-pro'),
        'description'   => __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
        'section' => 'vw_startup_pro_footer_section_first',
        'settings' => 'vw_startup_pro_section_footer_bgcolor',
    )));
    $wp_customize->add_setting('vw_startup_pro_footer_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_startup_pro_footer_bgimage',
            array(
                'label' => __('Background image','vw-startup-pro'),
                'description'   => __('Recommended size 1600px * 577px','vw-startup-pro'),
                'section' => 'vw_startup_pro_footer_section_first',
                'settings' => 'vw_startup_pro_footer_bgimage'
    )));
    $wp_customize->add_setting( 'vw_startup_pro_custom_footer_widget_section_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );

    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_footerheading_section_options',
        array(
          'label' => __('Footer Heading Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_footer_section_first'
        )
    ) );
    $wp_customize->add_setting( 'vw_startup_pro_footerheading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_footerheading_color', array(
        'label' => __('Footer Heading Color', 'vw-startup-pro'),
        'section' => 'vw_startup_pro_footer_section_first',
        'settings' => 'vw_startup_pro_footerheading_color',
    )));
    $wp_customize->add_setting('vw_startup_pro_footerheading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_startup_pro_footerheading_font_family', array(
        'section'  => 'vw_startup_pro_footer_section_first',
        'label'    => __( 'Footer Heading Font Family','vw-startup-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting('vw_startup_pro_footerheading_font_size', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control('vw_startup_pro_footerheading_font_size', array(
            'label'   => __('Heading font size in px', 'vw-startup-pro'),
            'section' => 'vw_startup_pro_footer_section_first',
            'setting' => 'vw_startup_pro_footerheading_font_size',
            'type'    => 'text',
        )
    );

    $wp_customize->add_setting( 'vw_startup_pro_footercontent_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_footercontent_options',
        array(
          'label' => __('Footer Content Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_footer_section_first'
        )
    ) );
    $wp_customize->add_setting( 'vw_startup_pro_footercontent_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_footercontent_color', array(
        'label' => __('Footer Text Color', 'vw-startup-pro'),
        'section' => 'vw_startup_pro_footer_section_first',
        'settings' => 'vw_startup_pro_footercontent_color',
    )));
    $wp_customize->add_setting('vw_startup_pro_footercontent_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_startup_pro_footercontent_font_family', array(
        'section'  => 'vw_startup_pro_footer_section_first',
        'label'    => __( 'Footer Text Font Family','vw-startup-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting('vw_startup_pro_footercontent_font_size', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control('vw_startup_pro_footercontent_font_size', array(
            'label'   => __('font size in px', 'vw-startup-pro'),
            'section' => 'vw_startup_pro_footer_section_first',
            'setting' => 'vw_startup_pro_footercontent_font_size',
            'type'    => 'text',
        )
    );

    //Contact Page section
    $wp_customize->add_section('vw_startup_pro_contact_page_section',array(
        'title' => __('Contact','vw-startup-pro'),
        'description'   => __('Add contact page settings here.','vw-startup-pro'),
        'priority'  => null,
        'panel' => 'vw_startup_pro_panel_id',
    ));
    $wp_customize->add_setting( 'vw_startup_pro_contact_page_section_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_contact_page_section_options',
        array(
          'label' => __('Footer Map Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_contact_page_section'
        )
    ) );

    $wp_customize->selective_refresh->add_partial( 'vw_startup_pro_address_longitude', array(
        'selector' => '.footer-contactmap',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_address_longitude',
    ) );

    $wp_customize->add_setting('vw_startup_pro_address_longitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_startup_pro_address_longitude',array(
        'label' => __('Longitude','vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'setting'   => 'vw_startup_pro_address_longitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_address_latitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_startup_pro_address_latitude',array(
        'label' => __('Latitude','vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'setting'   => 'vw_startup_pro_address_latitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting( 'vw_startup_pro_contactpage_email_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_contactpage_email_options',
        array(
          'label' => __('Contact Email Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_contact_page_section'
        )
    ) );
    $wp_customize->add_setting('vw_startup_pro_contactpage_email_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_startup_pro_contactpage_email_title',array(
        'label' => __('Email Title','vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'setting'   => 'vw_startup_pro_contactpage_email_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_contactpage_email',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_startup_pro_contactpage_email',array(
        'label' => __('Email ','vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'setting'   => 'vw_startup_pro_contactpage_email',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'vw_startup_pro_address_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_address_options',
        array(
          'label' => __('Contact Address Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_contact_page_section'
        )
    ) );
    
    $wp_customize->add_setting('vw_startup_pro_address_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_startup_pro_address_title',array(
        'label' => __('Address Title','vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'setting'   => 'vw_startup_pro_address_title',
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting('vw_startup_pro_address',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_startup_pro_address',array(
        'label' => __('Address ','vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'setting'   => 'vw_startup_pro_address',
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting( 'vw_startup_pro_contactpage_phone_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_contactpage_phone_options',
        array(
          'label' => __('Contact Phone Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_contact_page_section'
        )
    ) );
    $wp_customize->add_setting('vw_startup_pro_contactpage_phone_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_startup_pro_contactpage_phone_title',array(
        'label' => __('Phone Title','vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'setting'   => 'vw_startup_pro_contactpage_phone_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_contactpage_phone',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_startup_pro_contactpage_phone',array(
        'label' => __('Phone ','vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'setting'   => 'vw_startup_pro_contactpage_phone',
        'type'  => 'text'
    ));
    $wp_customize->add_setting( 'vw_startup_pro_contactpage_working_hours_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_contactpage_working_hours_options',
        array(
          'label' => __('Working Hours Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting('vw_startup_pro_contactpage_working_hours_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_startup_pro_contactpage_working_hours_title',array(
        'label' => __('Working Hours','vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'setting'   => 'vw_startup_pro_contactpage_working_hours_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_contactpage_working_hours',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_startup_pro_contactpage_working_hours',array(
        'label' => __('Add Working Hours','vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'setting'   => 'vw_startup_pro_contactpage_working_hours',
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting( 'vw_startup_pro_contactpage_form_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_contactpage_form_options',
        array(
          'label' => __('Contact Form Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting('vw_startup_pro_contactpage_form_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_startup_pro_contactpage_form_title',array(
        'label' => __('Add Form Title','vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'setting'   => 'vw_startup_pro_contactpage_form_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting( 'vw_startup_pro_contactpage_form_subtitle_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_contactpage_form_subtitle_options',
        array(
          'label' => __('Contact Form Subtitle Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_contact_page_section'
        )
    ) );
    $wp_customize->add_setting('vw_startup_pro_contactpage_form_subtitle',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_startup_pro_contactpage_form_subtitle',array(
        'label' => __('Add Form Sub Title','vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'setting'   => 'vw_startup_pro_contactpage_form_subtitle',
        'type'  => 'textarea'
    ));

    $wp_customize->add_setting( 'vw_startup_pro_contact_page_heading_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_contact_page_heading_options',
        array(
          'label' => __('Contact Page Heading Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_contact_page_section'
        )
    ) );
    $wp_customize->add_setting( 'vw_startup_pro_contact_page_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_contact_page_heading_color', array(
        'label' => __('Contact Heading Color', 'vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'settings' => 'vw_startup_pro_contact_page_heading_color',
    )));
    //This is Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_startup_pro_contact_page_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_startup_pro_contact_page_heading_font_family', array(
        'section'  => 'vw_startup_pro_contact_page_section',
        'label'    => __( 'Contact Heading Fonts','vw-startup-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting('vw_startup_pro_contact_page_heading_font_size', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control('vw_startup_pro_contact_page_heading_font_size', array(
            'label'   => __('Heading font size in px', 'vw-startup-pro'),
            'section' => 'vw_startup_pro_contact_page_section',
            'setting' => 'vw_startup_pro_contact_page_heading_font_size',
            'type'    => 'text',
        )
    );
    $wp_customize->add_setting( 'vw_startup_pro_contact_page_content_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_contact_page_content_options',
        array(
          'label' => __('Contact Page Content Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_contact_page_section'
        )
    ) );
    $wp_customize->add_setting( 'vw_startup_pro_contact_page_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_contact_page_content_color', array(
        'label' => __('Contact Content Color', 'vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'settings' => 'vw_startup_pro_contact_page_content_color',
    )));
    //This is Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_startup_pro_contact_page_contact_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_startup_pro_contact_page_contact_font_family', array(
        'section'  => 'vw_startup_pro_contact_page_section',
        'label'    => __( 'Contact Content Fonts','vw-startup-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting('vw_startup_pro_contact_page_contact_font_size', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control('vw_startup_pro_contact_page_contact_font_size', array(
            'label'   => __('Content font size in px', 'vw-startup-pro'),
            'section' => 'vw_startup_pro_contact_page_section',
            'setting' => 'vw_startup_pro_contact_page_contact_font_size',
            'type'    => 'text',
        )
    );

    $wp_customize->add_setting( 'vw_startup_pro_contact_page_icon_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_contact_page_icon_options',
        array(
          'label' => __('Contact Page Icon Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_contact_page_section'
        )
    ) );
    $wp_customize->add_setting( 'vw_startup_pro_contact_page_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_contact_page_icon_color', array(
        'label' => __('Icon Color', 'vw-startup-pro'),
        'section' => 'vw_startup_pro_contact_page_section',
        'settings' => 'vw_startup_pro_contact_page_icon_color',
    )));
    $wp_customize->add_section('vw_startup_pro_footer_section',array(
        'title' => __('Footer Text','vw-startup-pro'),
        'description'   => __('Add some text for footer like copyright etc.','vw-startup-pro'),
        'priority'  => null,
        'panel' => 'vw_startup_pro_panel_id',
    ));

    $wp_customize->add_setting( 'vw_startup_pro_footer_text_background_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_footer_text_background_options',
        array(
          'label' => __('Background Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_footer_section'
        )
    ) );

    $wp_customize->add_setting( 'vw_startup_pro_section_footer_copy_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_section_footer_copy_bgcolor', array(
        'label' => __('Background Color', 'vw-startup-pro'),
        'description'   => __('Either add background color or background image, if you add both background color will be top most priority)','vw-startup-pro'),
        'section' => 'vw_startup_pro_footer_section',
        'settings' => 'vw_startup_pro_section_footer_copy_bgcolor',
    )));
    $wp_customize->add_setting('vw_startup_pro_footer_copy_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_startup_pro_footer_copy_bgimage',
            array(
                'label' => __('Background image','vw-startup-pro'),
                'section' => 'vw_startup_pro_footer_section',
                'settings' => 'vw_startup_pro_footer_copy_bgimage'
    )));

    $wp_customize->add_setting( 'vw_startup_pro_footer_copy_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_footer_copy_options',
        array(
          'label' => __('Copyright Text Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_footer_section'
        )
    ) );

     $wp_customize->selective_refresh->add_partial( 'vw_startup_pro_footer_copy', array(
        'selector' => '.copyright p',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_footer_copy',
    ) );

    $wp_customize->add_setting('vw_startup_pro_footer_copy',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_startup_pro_footer_copy',array(
        'label' => __('Copyright Text','vw-startup-pro'),
        'section'   => 'vw_startup_pro_footer_section',
        'type'      => 'textarea'
    ));
    //Shortcode Section
    $wp_customize->add_section('vw_startup_pro_shortcode_section',array(
        'title' => __('Shortcode Settings','vw-startup-pro'),
        'priority'  => null,
        'panel' => 'vw_startup_pro_panel_id',
    ));

    $wp_customize->add_setting( 'vw_startup_pro_shortcode_options',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_shortcode_options',
        array(
          'label' => __('Shortcode Options','vw-startup-pro'),
          'section' => 'vw_startup_pro_shortcode_section'
        )
    ) );
    $wp_customize->add_setting( 'vw_startup_pro_shortcode',
        array(
            'default' => '',
            'transport' => 'postMessage',
            'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Simple_Notice_Custom_Control( $wp_customize, 'vw_startup_pro_shortcode',
        array(
            'label' => __( 'Shortcodes', 'vw-startup-pro'),
            'description' => __('Below  shortcodes are present in the theme. Simply copy and paste into any page or post and get their listing <br><br> <ul><li><strong>[vw-startup-pro-testimonials]</strong></li><br><li><strong>[vw-startup-pro-team]</li></strong></ul>','vw-startup-pro' ),
            'section' => 'vw_startup_pro_shortcode_section'
        )
    ) );
?>