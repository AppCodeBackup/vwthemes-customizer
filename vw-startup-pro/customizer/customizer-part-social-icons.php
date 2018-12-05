<?php
    /* Footer Sections */
    $wp_customize->add_section('vw_startup_pro_social_icons',array(
        'title' => __('Social Icons','vw-startup-pro'),
        'description'   => __('Add social Icons details Here','vw-startup-pro'),
        'panel' => 'vw_startup_pro_panel_id',
    ));

    $wp_customize->selective_refresh->add_partial( 'vw_startup_pro_social_icons_option', array(
        'selector' => '.socialbox',
        'render_callback' => 'vw_startup_pro_customize_partial_vw_startup_pro_social_icons_option',
    ) );

    $wp_customize->add_setting( 'vw_startup_pro_social_icons_option',
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
        )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_social_icons_option',
        array(
          'label' => '',
          'description' => __('Social Icons Options ','vw-startup-pro'),
          'section' => 'vw_startup_pro_social_icons'
        )
    ) );

    $wp_customize->add_setting('vw_startup_pro_headertwitter',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_startup_pro_headertwitter',array(
        'label' => __('Add twitter link','vw-startup-pro'),
        'section'   => 'vw_startup_pro_social_icons',
        'setting'   => 'vw_startup_pro_headertwitter',
        'type'      => 'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_headerpinterest',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_startup_pro_headerpinterest',array(
        'label' => __('Add pinterest link','vw-startup-pro'),
        'section'   => 'vw_startup_pro_social_icons',
        'setting'   => 'vw_startup_pro_headerpinterest',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_headerfacebook',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_startup_pro_headerfacebook',array(
        'label' => __('Add facebook link','vw-startup-pro'),
        'section'   => 'vw_startup_pro_social_icons',
        'setting'   => 'vw_startup_pro_headerfacebook',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_headeryoutube',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_startup_pro_headeryoutube',array(
        'label' => __('Add Youtube link','vw-startup-pro'),
        'section'   => 'vw_startup_pro_social_icons',
        'setting'   => 'vw_startup_pro_headeryoutube',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_headerinstagram',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_startup_pro_headerinstagram',array(
        'label' => __('Add Instagram link','vw-startup-pro'),
        'section'   => 'vw_startup_pro_social_icons',
        'setting'   => 'vw_startup_pro_headerinstagram',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_headerlinkedin',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_startup_pro_headerlinkedin',array(
        'label' => __('Add Linkedin link','vw-startup-pro'),
        'section'   => 'vw_startup_pro_social_icons',
        'setting'   => 'vw_startup_pro_headerlinkedin',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_headertumblric',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_startup_pro_headertumblric',array(
        'label' => __('Add Tumblr link','vw-startup-pro'),
        'section'   => 'vw_startup_pro_social_icons',
        'setting'   => 'vw_startup_pro_headertumblric',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_headergoogleplus',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_startup_pro_headergoogleplus',array(
        'label' => __('Add GooglePlus link','vw-startup-pro'),
        'section'   => 'vw_startup_pro_social_icons',
        'setting'   => 'vw_startup_pro_headergoogleplus',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_headerflickr',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_startup_pro_headerflickr',array(
        'label' => __('Add Flickr link','vw-startup-pro'),
        'section'   => 'vw_startup_pro_social_icons',
        'setting'   => 'vw_startup_pro_headerflickr',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_startup_pro_headervk',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_startup_pro_headervk',array(
        'label' => __('Add VK link','vw-startup-pro'),
        'section'   => 'vw_startup_pro_social_icons',
        'setting'   => 'vw_startup_pro_headervk',
        'type'  => 'text'
    ));
   
?>