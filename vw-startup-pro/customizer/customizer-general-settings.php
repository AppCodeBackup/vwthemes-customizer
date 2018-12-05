<?php
  //General Color Pallete
  $wp_customize->add_section('vw_startup_pro_section_ordering_settings',array(
      'title' => __('Section Ordering','vw-startup-pro'),
      'description'=> __('Section Ordering.','vw-startup-pro'),
      'panel' => 'vw_startup_pro_panel_id',
  ));

  $wp_customize->add_setting( 'vw_startup_pro_section_ordering_settings_repeater',
    array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_startup_pro_text_sanitization'
    )
  );
  $wp_customize->add_control( new VW_Startup_Pro_Repeater_Custom_Control( $wp_customize, 'vw_startup_pro_section_ordering_settings_repeater',
    array(
      'label' => __( 'Section Reordering' ),
      'section' => 'vw_startup_pro_section_ordering_settings',
      'button_labels' => array(
        'add' => __( 'Add Row' ), // Optional. Button label for Add button. Default: Add
      )
    )
  ) );

  $wp_customize->add_section('vw_startup_pro_general_settings',array(
      'title' => __('General settings','vw-startup-pro'),
      'description'=> __('This is the global setting. Will apply to the whole site. This section includes settings for the Boxed Layout and Full width layout, primary color and secondry color.','vw-startup-pro'),
      'panel' => 'vw_startup_pro_panel_id',
  ));

  $wp_customize->add_setting( 'vw_startup_pro_general_settings_theme_layout',
      array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
      )
  );
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_general_settings_theme_layout',
      array(
          'label' => __('Theme Layout','vw-startup-pro'),
          'section' => 'vw_startup_pro_general_settings'
      )
  ) );

  $wp_customize->add_setting('vw_startup_pro_radio_boxed_full_layout',
      array(
        'default' => 'full-Width',
        'sanitize_callback' => 'vw_startup_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_startup_pro_radio_boxed_full_layout',
      array(
        'type' => 'radio',
        'label' => __('Choose Boxed or Full Width Layout', 'vw-startup-pro'),
        'section' => 'vw_startup_pro_general_settings',
        'choices' => array(
        'full-Width' => __('Full Width', 'vw-startup-pro'),
        'boxed' => __('Boxed', 'vw-startup-pro')
      ),
  ));

  $wp_customize->add_setting('vw_startup_pro_radio_boxed_full_layout_value',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_startup_pro_radio_boxed_full_layout_value',array(
      'label' => __('Add boxed layout width here','vw-startup-pro'),
      'description'=> __('The width should not be greater than 1140px','vw-startup-pro'),
      'section' => 'vw_startup_pro_general_settings',
      'setting' => 'vw_startup_pro_radio_boxed_full_layout_value',
      'type'    => 'text'
    )
  );

  $wp_customize->add_setting( 'vw_startup_pro_general_settings_theme_color',
      array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'vw_startup_pro_text_sanitization'
      )
  );
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_startup_pro_general_settings_theme_color',
      array(
          'label' => __('Theme Color','vw-startup-pro'),
          'section' => 'vw_startup_pro_general_settings'
      )
  ) );

  $wp_customize->add_setting( 'vw_startup_pro_primary_color', array(
    'default' => '#64c5aa',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_startup_pro_primary_color', array(
    'label' => __('Primary Color', 'vw-startup-pro'),
    'section' => 'vw_startup_pro_general_settings',
    'settings' => 'vw_startup_pro_primary_color',
  )));
?>