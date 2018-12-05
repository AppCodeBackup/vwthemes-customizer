<?php
function vw_stratup_pro_inline_style() {
// Boxed or full width layout
    $vw_startup_pro_radio_boxed_full_layout = get_theme_mod('vw_startup_pro_radio_boxed_full_layout');
    $vw_startup_pro_radio_boxed_full_layout_value = get_theme_mod('vw_startup_pro_radio_boxed_full_layout_value');

//General Button Color Pallete option
    $vw_startup_pro_body_font_family = get_theme_mod('vw_startup_pro_body_font_family');
    $vw_startup_pro_body_font_size = get_theme_mod('vw_startup_pro_body_font_size');
    $vw_startup_pro_body_color = get_theme_mod('vw_startup_pro_body_color');
    $vw_startup_pro_h1_font_family = get_theme_mod('vw_startup_pro_h1_font_family');
    $vw_startup_pro_h1_font_size = get_theme_mod('vw_startup_pro_h1_font_size');
    $vw_startup_pro_h1_color = get_theme_mod('vw_startup_pro_h1_color');
    $vw_startup_pro_h2_font_family = get_theme_mod('vw_startup_pro_h2_font_family');
    $vw_startup_pro_h2_font_size = get_theme_mod('vw_startup_pro_h2_font_size');
    $vw_startup_pro_h2_color = get_theme_mod('vw_startup_pro_h2_color');
    $vw_startup_pro_h3_font_family = get_theme_mod('vw_startup_pro_h3_font_family');
    $vw_startup_pro_h3_font_size = get_theme_mod('vw_startup_pro_h3_font_size');
    $vw_startup_pro_h3_color = get_theme_mod('vw_startup_pro_h3_color');
    $vw_startup_pro_h4_font_family = get_theme_mod('vw_startup_pro_h4_font_family');
    $vw_startup_pro_h4_font_size = get_theme_mod('vw_startup_pro_h4_font_size');
    $vw_startup_pro_h4_color = get_theme_mod('vw_startup_pro_h4_color');
    $vw_startup_pro_h5_font_family = get_theme_mod('vw_startup_pro_h5_font_family');
    $vw_startup_pro_h5_font_size = get_theme_mod('vw_startup_pro_h5_font_size');
    $vw_startup_pro_h5_color = get_theme_mod('vw_startup_pro_h5_color');
    $vw_startup_pro_h6_font_family = get_theme_mod('vw_startup_pro_h6_font_family');
    $vw_startup_pro_h6_font_size = get_theme_mod('vw_startup_pro_h6_font_size');
    $vw_startup_pro_h6_color = get_theme_mod('vw_startup_pro_h6_color');
    $vw_startup_pro_paragarpah_font_family = get_theme_mod('vw_startup_pro_paragarpah_font_family');
    $vw_startup_pro_para_font_size = get_theme_mod('vw_startup_pro_para_font_size');
    $vw_startup_pro_para_color = get_theme_mod('vw_startup_pro_para_color');
    $vw_startup_pro_primary_color = get_theme_mod('vw_startup_pro_primary_color');

// Top bar / Header
    $vw_startup_pro_topbaricon_color = get_theme_mod('vw_startup_pro_topbaricon_color');
    $vw_startup_pro_header_title_color = get_theme_mod('vw_startup_pro_header_title_color');
    $vw_startup_pro_header_title_font_family = get_theme_mod('vw_startup_pro_header_title_font_family');
    $vw_startup_pro_header_title_font_size = get_theme_mod('vw_startup_pro_header_title_font_size');
    $vw_startup_pro_header_contact_details_color = get_theme_mod('vw_startup_pro_header_contact_details_color');
    $vw_startup_pro_header_contact_details_font_family = get_theme_mod('vw_startup_pro_header_contact_details_font_family');
    $vw_startup_pro_header_contact_details_font_size = get_theme_mod('vw_startup_pro_header_contact_details_font_size');
    $vw_startup_pro_top_headlines_color = get_theme_mod('vw_startup_pro_top_headlines_color');
    $vw_startup_pro_top_headlines_font_family = get_theme_mod('vw_startup_pro_top_headlines_font_family');
    $vw_startup_pro_top_headlines_font_size = get_theme_mod('vw_startup_pro_top_headlines_font_size');
    $vw_startup_pro_header_contact_detailsicon_color = get_theme_mod('vw_startup_pro_header_contact_detailsicon_color');
    $vw_startup_pro_headerhomebg_color = get_theme_mod('vw_startup_pro_headerhomebg_color');
    $vw_startup_pro_headermenu_color = get_theme_mod('vw_startup_pro_headermenu_color');
    $vw_startup_pro_headermenu_font_family = get_theme_mod('vw_startup_pro_headermenu_font_family');
    $vw_startup_pro_headermenu_font_size = get_theme_mod('vw_startup_pro_headermenu_font_size');
    $vw_startup_pro_header_menuhovercolor = get_theme_mod('vw_startup_pro_header_menuhovercolor');
    $vw_startup_pro_dropdownbg_color = get_theme_mod('vw_startup_pro_dropdownbg_color');
    $vw_startup_pro_dropdownbg_itemcolor = get_theme_mod('vw_startup_pro_dropdownbg_itemcolor');
    $vw_startup_pro_dropdownbg_item_hovercolor = get_theme_mod('vw_startup_pro_dropdownbg_item_hovercolor');
    $vw_startup_pro_dropdownbg_responsivecolor = get_theme_mod('vw_startup_pro_dropdownbg_responsivecolor');
    $vw_startup_pro_headermenu_responsive_item_color = get_theme_mod('vw_startup_pro_headermenu_responsive_item_color');
    $vw_startup_pro_topbar_text_radio_button = get_theme_mod('vw_startup_pro_topbar_text_radio_button');
// Slider
    
    $vw_startup_pro_slide_font_size = get_theme_mod('vw_startup_pro_slide_font_size');
    $vw_startup_pro_sliderHeading_color = get_theme_mod('vw_startup_pro_sliderHeading_color');
    $vw_startup_pro_sliderHeading_font_family = get_theme_mod('vw_startup_pro_sliderHeading_font_family');
    $vw_startup_pro_sliderHeading_font_size = get_theme_mod('vw_startup_pro_sliderHeading_font_size');
    $vw_startup_pro_slidertext_color = get_theme_mod('vw_startup_pro_slidertext_color');
    $vw_startup_pro_slidertext_font_family = get_theme_mod('vw_startup_pro_slidertext_font_family');
    $vw_startup_pro_slidertext_font_size = get_theme_mod('vw_startup_pro_slidertext_font_size');
    $vw_startup_pro_slide_buttoncolor = get_theme_mod('vw_startup_pro_slide_buttoncolor');
    $vw_startup_pro_slide_buttonbgcolor = get_theme_mod('vw_startup_pro_slide_buttonbgcolor');
    $vw_startup_pro_button_fontfamily = get_theme_mod('vw_startup_pro_button_fontfamily');
    $vw_startup_pro_button_font_size = get_theme_mod('vw_startup_pro_button_font_size');

// Slider Additional Settings
    $vw_startup_pro_slide_text_radio_button = get_theme_mod('vw_startup_pro_slide_text_radio_button');

//About
    $vw_startup_pro_about_title_color = get_theme_mod('vw_startup_pro_about_title_color');
    $vw_startup_pro_about_title_color_font_family = get_theme_mod('vw_startup_pro_about_title_color_font_family');
    $vw_startup_pro_about_title_font_size = get_theme_mod('vw_startup_pro_about_title_font_size');
    $vw_startup_pro_about_subtitle_color = get_theme_mod('vw_startup_pro_about_subtitle_color');
    $vw_startup_pro_about_subtitle_color_font_family = get_theme_mod('vw_startup_pro_about_subtitle_color_font_family');
    $vw_startup_pro_about_subtitle_font_size = get_theme_mod('vw_startup_pro_about_subtitle_font_size');
    $vw_startup_pro_about_para_color = get_theme_mod('vw_startup_pro_about_para_color');
    $vw_startup_pro_about_para_color_font_family = get_theme_mod('vw_startup_pro_about_para_color_font_family');
    $vw_startup_pro_about_para_font_size = get_theme_mod('vw_startup_pro_about_para_font_size');
    $vw_startup_pro_about_font_family = get_theme_mod('vw_startup_pro_about_font_family');
    $vw_startup_pro_about_list_color = get_theme_mod('vw_startup_pro_about_list_color');
    $vw_startup_pro_about_list_font_family = get_theme_mod('vw_startup_pro_about_list_font_family');
    $vw_startup_pro_about_list_font_size = get_theme_mod('vw_startup_pro_about_list_font_size');
    $vw_startup_pro_about_icon_color = get_theme_mod('vw_startup_pro_about_icon_color');
// About Additional Settings
    $vw_startup_pro_about_text_radio_button = get_theme_mod('vw_startup_pro_about_text_radio_button');
//Portfolio
    $vw_startup_pro_portfolio_title_color = get_theme_mod('vw_startup_pro_portfolio_title_color');
    $vw_startup_pro_portfolio_title_font_family = get_theme_mod('vw_startup_pro_portfolio_title_font_family');
    $vw_startup_pro_portfolio_title_font_size = get_theme_mod('vw_startup_pro_portfolio_title_font_size');
    $vw_startup_pro_portfolio_text_color = get_theme_mod('vw_startup_pro_portfolio_text_color');
    $vw_startup_pro_portfolio_text_font_family = get_theme_mod('vw_startup_pro_portfolio_text_font_family');
    $vw_startup_pro_portfolio_text_font_size = get_theme_mod('vw_startup_pro_portfolio_text_font_size');
    $vw_startup_pro_portfolio_font_size = get_theme_mod('vw_startup_pro_portfolio_font_size');
    $vw_startup_pro_portfolio_alphacolor = get_theme_mod('vw_startup_pro_portfolio_alphacolor');
    $vw_startup_pro_portfolio_color = get_theme_mod('vw_startup_pro_portfolio_color');
    $vw_startup_pro_portfolio_font_family = get_theme_mod('vw_startup_pro_portfolio_font_family');
    $vw_startup_pro_portfolio_text_radio_button = get_theme_mod('vw_startup_pro_portfolio_text_radio_button');
//services
    $vw_startup_pro_services_title_color = get_theme_mod('vw_startup_pro_services_title_color');
    $vw_startup_pro_services_title_font_family = get_theme_mod('vw_startup_pro_services_title_font_family');
    $vw_startup_pro_services_title_font_size = get_theme_mod('vw_startup_pro_services_title_font_size');
    $vw_startup_pro_services_text_color = get_theme_mod('vw_startup_pro_services_text_color');
    $vw_startup_pro_services_text_font_family = get_theme_mod('vw_startup_pro_services_text_font_family');
    $vw_startup_pro_services_text_font_size = get_theme_mod('vw_startup_pro_services_text_font_size');
    $vw_startup_pro_service_alphacolor = get_theme_mod('vw_startup_pro_service_alphacolor');
    $vw_startup_pro_services_text_radio_button = get_theme_mod('vw_startup_pro_services_text_radio_button');

//Team
    $vw_startup_pro_team_title_color = get_theme_mod('vw_startup_pro_team_title_color');
    $vw_startup_pro_team_title_font_family = get_theme_mod('vw_startup_pro_team_title_font_family');
    $vw_startup_pro_team_title_font_size = get_theme_mod('vw_startup_pro_team_title_font_size');
    $vw_startup_pro_team_text_color = get_theme_mod('vw_startup_pro_team_text_color');
    $vw_startup_pro_team_text_font_family = get_theme_mod('vw_startup_pro_team_text_font_family');
    $vw_startup_pro_team_text_font_size = get_theme_mod('vw_startup_pro_team_text_font_size');
    $vw_startup_pro_team_color = get_theme_mod('vw_startup_pro_team_color');
    $vw_startup_pro_team_font_family = get_theme_mod('vw_startup_pro_team_font_family');
    $vw_startup_pro_team_font_size = get_theme_mod('vw_startup_pro_team_font_size');
    $vw_startup_pro_team_alphacolor = get_theme_mod('vw_startup_pro_team_alphacolor');
    $vw_startup_pro_team_radio_button = get_theme_mod('vw_startup_pro_team_radio_button');

//Expert
    $vw_startup_pro_skills_title_color = get_theme_mod('vw_startup_pro_skills_title_color');
    $vw_startup_pro_skills_title_font_family = get_theme_mod('vw_startup_pro_skills_title_font_family');
    $vw_startup_pro_skills_title_font_size = get_theme_mod('vw_startup_pro_skills_title_font_size');
    $vw_startup_pro_skills_text_color = get_theme_mod('vw_startup_pro_skills_text_color');
    $vw_startup_pro_skills_text_font_family = get_theme_mod('vw_startup_pro_skills_text_font_family');
    $vw_startup_pro_skills_text_font_size = get_theme_mod('vw_startup_pro_skills_text_font_size');
    $vw_startup_pro_skills_radio_button = get_theme_mod('vw_startup_pro_skills_radio_button');

//How we work
    $vw_startup_pro_how_we_work_title_color = get_theme_mod('vw_startup_pro_how_we_work_title_color');
    $vw_startup_pro_how_we_work_title_font_family = get_theme_mod('vw_startup_pro_how_we_work_title_font_family');
    $vw_startup_pro_how_we_work_title_font_size = get_theme_mod('vw_startup_pro_how_we_work_title_font_size');
    $vw_startup_pro_how_we_work_text_color = get_theme_mod('vw_startup_pro_how_we_work_text_color');
    $vw_startup_pro_how_we_work_text_font_family = get_theme_mod('vw_startup_pro_how_we_work_text_font_family');
    $vw_startup_pro_how_we_work_text_font_size = get_theme_mod('vw_startup_pro_how_we_work_text_font_size');
    $vw_startup_pro_how_we_work_icon_color = get_theme_mod('vw_startup_pro_how_we_work_icon_color');
    $vw_startup_pro_how_we_work_icon_font_family = get_theme_mod('vw_startup_pro_how_we_work_icon_font_family');
    $vw_startup_pro_how_we_work_icon_font_size = get_theme_mod('vw_startup_pro_how_we_work_icon_font_size');
    $vw_startup_pro_how_we_work_icon_box_bgcolor = get_theme_mod('vw_startup_pro_how_we_work_icon_box_bgcolor');
    $vw_startup_pro_how_we_work_icon_box_hvcolor = get_theme_mod('vw_startup_pro_how_we_work_icon_box_hvcolor');
    $vw_startup_pro_how_we_work_radio_button = get_theme_mod('vw_startup_pro_how_we_work_radio_button');

//Records
    $vw_startup_pro_records_text_color = get_theme_mod('vw_startup_pro_records_text_color');
    $vw_startup_pro_records_text_font_family = get_theme_mod('vw_startup_pro_records_text_font_family');
    $vw_startup_pro_records_text_font_size = get_theme_mod('vw_startup_pro_records_text_font_size');

//Testimonials
    $vw_startup_pro_testimonial_title_color = get_theme_mod('vw_startup_pro_testimonial_title_color');
    $vw_startup_pro_testimonial_title_font_family = get_theme_mod('vw_startup_pro_testimonial_title_font_family');
    $vw_startup_pro_testimonial_title_font_size = get_theme_mod('vw_startup_pro_testimonial_title_font_size');
    $vw_startup_pro_testimonial_name_color = get_theme_mod('vw_startup_pro_testimonial_name_color');
    $vw_startup_pro_testimonial_name_font_family = get_theme_mod('vw_startup_pro_testimonial_name_font_family');
    $vw_startup_pro_testimonial_name_font_size = get_theme_mod('vw_startup_pro_testimonial_name_font_size');
    $vw_startup_pro_testimonial_box_bgcolor = get_theme_mod('vw_startup_pro_testimonial_box_bgcolor');
    $vw_startup_pro_testimonial_radio_button = get_theme_mod('vw_startup_pro_testimonial_radio_button');

//Partner
    $vw_startup_pro_our_partners_title_color = get_theme_mod('vw_startup_pro_our_partners_title_color');
    $vw_startup_pro_our_partners_subtitle_color = get_theme_mod('vw_startup_pro_our_partners_subtitle_color');
    $vw_startup_pro_our_partners_title_font_family = get_theme_mod('vw_startup_pro_our_partners_title_font_family');

//Latest Post
    $vw_startup_pro_latest_post_title_color = get_theme_mod('vw_startup_pro_latest_post_title_color');
    $vw_startup_pro_latest_post_title_font_family = get_theme_mod('vw_startup_pro_latest_post_title_font_family');
    $vw_startup_pro_latest_post_title_font_size = get_theme_mod('vw_startup_pro_latest_post_title_font_size');

    $vw_startup_pro_latestpost_color = get_theme_mod('vw_startup_pro_latestpost_color');
    $vw_startup_pro_latestpost_font_family = get_theme_mod('vw_startup_pro_latestpost_font_family');
    $vw_startup_pro_latestpost_font_size = get_theme_mod('vw_startup_pro_latestpost_font_size');

    $vw_startup_pro_latestpost_box_bgcolor = get_theme_mod('vw_startup_pro_latestpost_box_bgcolor');
    $vw_startup_pro_latestpost_box_hvcolor = get_theme_mod('vw_startup_pro_latestpost_box_hvcolor');
    $vw_startup_pro_post_alphacolor = get_theme_mod('vw_startup_pro_post_alphacolor');
    $vw_startup_pro_latestpost_radio_button = get_theme_mod('vw_startup_pro_latestpost_radio_button');


// About
    $vw_startup_pro_homepageheading_color = get_theme_mod('vw_startup_pro_homepageheading_color');
    $vw_startup_pro_homepageheading_font_family = get_theme_mod('vw_startup_pro_homepageheading_font_family');
    $vw_startup_pro_homepagetext_color = get_theme_mod('vw_startup_pro_homepagetext_color');
    $vw_startup_pro_homepagetext_font_family = get_theme_mod('vw_startup_pro_homepagetext_font_family');

//Footer
    $vw_startup_pro_footerheading_color = get_theme_mod('vw_startup_pro_footerheading_color');
    $vw_startup_pro_footerheading_font_family = get_theme_mod('vw_startup_pro_footerheading_font_family');
    $vw_startup_pro_footerheading_font_size = get_theme_mod('vw_startup_pro_footerheading_font_size');
    $vw_startup_pro_footercontent_color = get_theme_mod('vw_startup_pro_footercontent_color');
    $vw_startup_pro_footercontent_font_family = get_theme_mod('vw_startup_pro_footercontent_font_family');
    $vw_startup_pro_footercontent_font_size = get_theme_mod('vw_startup_pro_footercontent_font_size');
    $vw_startup_pro_footerborder_color = get_theme_mod('vw_startup_pro_footerborder_color');
    
//custom footer
    $vw_startup_pro_custom_footer_section_bgcolor = get_theme_mod('vw_startup_pro_custom_footer_section_bgcolor');
    $vw_startup_pro_footercontent_text_radio_button = get_theme_mod('vw_startup_pro_footercontent_text_radio_button');
//Contact
    $vw_startup_pro_contact_page_heading_color = get_theme_mod('vw_startup_pro_contact_page_heading_color');
    $vw_startup_pro_contact_page_heading_font_family = get_theme_mod('vw_startup_pro_contact_page_heading_font_family');
    $vw_startup_pro_contact_page_heading_font_size = get_theme_mod('vw_startup_pro_contact_page_heading_font_size');
    $vw_startup_pro_contact_page_content_color = get_theme_mod('vw_startup_pro_contact_page_content_color');
    $vw_startup_pro_contact_page_contact_font_family = get_theme_mod('vw_startup_pro_contact_page_contact_font_family');
    $vw_startup_pro_contact_page_contact_font_size = get_theme_mod('vw_startup_pro_contact_page_contact_font_size');
    $vw_startup_pro_contact_page_icon_color = get_theme_mod('vw_startup_pro_contact_page_icon_color');



    $custom_css ='html body{
    ';
        if($vw_startup_pro_body_font_family != false)
            $custom_css .='font-family: '.esc_html($vw_startup_pro_body_font_family).';';
        if($vw_startup_pro_body_color != false)
            $custom_css .='color: '.esc_html($vw_startup_pro_body_color).';';
        if($vw_startup_pro_body_font_size != false)
            $custom_css .='font-size: '.esc_html($vw_startup_pro_body_font_size).';';
    $custom_css .='}';

    if($vw_startup_pro_h1_font_family != false || $vw_startup_pro_h1_color != false || $vw_startup_pro_h1_font_size != false){
        $custom_css .='h1, #header .logo h1, #header .logo h1 a, #posttype_single .posttype-box h1, #project_single .posttype-box h1, h1.staf-testimonial_title, .title-box h1{';
            if($vw_startup_pro_h1_font_family != false)
                $custom_css .='font-family: '.esc_html($vw_startup_pro_h1_font_family).';';
            if($vw_startup_pro_h1_color != false)
                $custom_css .='color: '.esc_html($vw_startup_pro_h1_color).';';
            if($vw_startup_pro_h1_font_size != false)
                $custom_css .='font-size: '.esc_html($vw_startup_pro_h1_font_size).';';
        $custom_css .='}';
    }

    $define_layout = get_theme_mod( 'vw_startup_pro_radio_boxed_full_layout' );
    if('boxed' == $define_layout ){
        $custom_css .='body{';
                $custom_css .='max-width: '.esc_html($vw_startup_pro_radio_boxed_full_layout_value).';';
                $custom_css .='margin: 0 auto !important ;';
                $custom_css .='width: 100% ;';
        $custom_css .='}';
    }

    
    if($vw_startup_pro_h2_font_family != false || $vw_startup_pro_h2_color != false || $vw_startup_pro_h2_font_size != false){
        $custom_css .='h2, section h2, .about-heading h2, .newsletter-heading h2, .postbox h2, #comments h2.comments-title, #comments h2#reply-title, #slider h2{';
            if($vw_startup_pro_h2_font_family != false)
                $custom_css .='font-family: '.esc_html($vw_startup_pro_h2_font_family).';';
            if($vw_startup_pro_h2_color != false)
                $custom_css .='color: '.esc_html($vw_startup_pro_h2_color).';';
            if($vw_startup_pro_h2_font_size != false)
                $custom_css .='font-size: '.esc_html($vw_startup_pro_h2_font_size).';';
        $custom_css .='}';
    }
    if($vw_startup_pro_h3_font_family != false || $vw_startup_pro_h3_color != false || $vw_startup_pro_h3_font_size != false){
            $custom_css .='h3, section h3, #services_tab .tab-content h3, .project-title h3, #properties h3, #propertiessc h3, h3.latest_post_name, h3.contact-page, .footer-top-col h3, .container #blog-right-sidebar h3, #footer_box h3, #full-width-blog .postbox h3, .postbox h3, #comments h3.comment-reply-title, #sidebar h3,.head_title,#footer h3.widget-title,#sidebar h3.widget-title{';
                if($vw_startup_pro_h3_font_family != false)
                    $custom_css .='font-family: '.esc_html($vw_startup_pro_h3_font_family).';';
                if($vw_startup_pro_h3_color != false)
                    $custom_css .='color: '.esc_html($vw_startup_pro_h3_color).';';
                if($vw_startup_pro_h3_font_size != false)
                    $custom_css .='font-size: '.esc_html($vw_startup_pro_h3_font_size).';';
            $custom_css .='}';
    }
    if($vw_startup_pro_h4_font_family != false || $vw_startup_pro_h4_color != false || $vw_startup_pro_h4_font_size != false){
            $custom_css .='h4, section h4, .category-page h4,h4.subheading,.service-box h4 a, .services_inner h4, #our_records h4, #expert .expert-box:hover h4, .choose-box-content h4, #testimonials h4.testimonial_name, .property_desc h4,.service-box:hover h4 a,#how-we-work .work-box h4 a,#plans_pricing .price-heading-box h4,#plans_pricing .select-plans h4 a,.teambox h4.teamtitle a,#testimonials h4.testimonial_name a,h4.latest_post_name a{';
                if($vw_startup_pro_h4_font_family != false)
                    $custom_css .='font-family: '.esc_html($vw_startup_pro_h4_font_family).';';
                if($vw_startup_pro_h4_color != false)
                    $custom_css .='color: '.esc_html($vw_startup_pro_h4_color).';';
                if($vw_startup_pro_h4_font_size != false)
                    $custom_css .='font-size: '.esc_html($vw_startup_pro_h4_font_size).';';
            $custom_css .='}';
    }
    if($vw_startup_pro_h5_font_family != false || $vw_startup_pro_h5_color != false || $vw_startup_pro_h5_font_size != false){
            $custom_css .='h5, section h5, .blog-post h5, #slider h5{';
                if($vw_startup_pro_h5_font_family != false)
                    $custom_css .='font-family: '.esc_html($vw_startup_pro_h5_font_family).';';
                if($vw_startup_pro_h5_color != false)
                    $custom_css .='color: '.esc_html($vw_startup_pro_h5_color).';';
                if($vw_startup_pro_h5_font_size != false)
                    $custom_css .='font-size: '.esc_html($vw_startup_pro_h5_font_size).';';
            $custom_css .='}';
    }
    if($vw_startup_pro_h6_font_family != false || $vw_startup_pro_h6_color != false || $vw_startup_pro_h6_font_size != false){
            $custom_css .='h6, .consult_wrapper h6, .postbox h6{';
                if($vw_startup_pro_h6_font_family != false)
                    $custom_css .='font-family: '.esc_html($vw_startup_pro_h6_font_family).';';
                if($vw_startup_pro_h6_color != false)
                    $custom_css .='color: '.esc_html($vw_startup_pro_h6_color).';';
                if($vw_startup_pro_h6_font_size != false)
                    $custom_css .='font-size: '.esc_html($vw_startup_pro_h6_font_size).';';
            $custom_css .='}';
    }
    if($vw_startup_pro_paragarpah_font_family != false || $vw_startup_pro_para_color != false || $vw_startup_pro_para_font_size != false){
            $custom_css .='p,#slider p,.contact_details p,p.hi_bold,p.hi_normal,.logo p,.section-heading p,.about-content p,.bar_box p,#plans_pricing .price-heading-box p,#gallery p,#testimonials p,#our_records p,#project_single .about-socialbox p,.prop_more_details p.property_price,.c_content p,.footer_form .section-heading p,#footer p.post-date,.copyright p,#footer .copyright p,#footer p,.about_me p.message,#slider p.price,.woocommerce div.product p.price,short_text pb-3 {';
                if($vw_startup_pro_paragarpah_font_family != false)
                    $custom_css .='font-family: '.esc_html($vw_startup_pro_paragarpah_font_family).';';
                if($vw_startup_pro_para_color != false)
                    $custom_css .='color: '.esc_html($vw_startup_pro_para_color).';';
                if($vw_startup_pro_para_font_size != false)
                    $custom_css .='font-size: '.esc_html($vw_startup_pro_para_font_size).';';
            $custom_css .='}';
    }
    if($vw_startup_pro_primary_color != false){
            $custom_css .='input[type="submit"], a.button, a.theme_button, .top-headline, .top_addres, .top_social a:hover, .search-box span, .header2-top-bar, .top_social a:first-child, .vw-header2, .top_social a:hover, .search-box span, .main-navigation .menu>ul>li.highlight, #slider a i:focus, #slider a i:active, #slider a i:hover, .carousel-indicators .active, .sread_more i, .progress-bar, .ps_video i, #how-we-work .work-box-outer:hover .work_head, #plans_pricing .price-heading-box, .date_div, .postbox:hover .postbox-content, .counter_inner:hover .record_img_box, .copyright, #footer input[type="submit"], #footer h3:after, .style2_post:hover .post_date, .style2_post:hover a.theme_second_button, .social_widget a, a.page-numbers, span.page-numbers.current, .bradcrumbs a:hover, #sidebar h3:after, .tagcloud a:hover, .bradcrumbs a:hover, .main_title h1:after, h1:after, button.owl-prev, button.owl-next, .owl-dot, .woocommerce button.button.alt, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce span.onsale{
                background-color: '.esc_html($vw_startup_pro_primary_color).';
            }';
    }
    if($vw_startup_pro_primary_color != false){
        $custom_css .=' a.button, a.theme_second_button:hover, .serach_inner form.search-form, .main-navigation ul ul li, .vw_sticky_header.scrolled .main-navigation ul ul li, .main-navigation ul.sub-menu, .carousel-indicators .active, #how-we-work .work-box-outer:hover .work_head:before, .discover-btn, .footer-top-col, .metabox, a.page-numbers, span.page-numbers.current, .navigation span.page-numbers.current, #comments input[type="submit"].submit, .owl-dot, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover {
                border-color: '.esc_html($vw_startup_pro_primary_color).';
        }';
    }
    if($vw_startup_pro_primary_color != false){
        $custom_css .='body a, .header1-top-bar .top_details i, .header3-top-bar .top_details i, .header3-top-bar .top_addres i, .serach_outer i, .left-side-content i, .main-navigation a:hover, .main-navigation .current_page_item>a, .main-navigation .current-menu-item>a, .main-navigation .current_page_ancestor>a, #team .socialbox a:hover i, #testimonials blockquote:before, #testimonials blockquote:after, .latest_post_text i, .discover-btn a:hover, .counter_inner:hover h4, .counter_inner:hover p, .contact-email i, .contact-address i, .contact-phone i, .footer-menu ul li a:hover, .container #blog-right-sidebar h3, #footer h3, .woocommerce .product p.price, .woocommerce .product span.price, .woocommerce ul.products li.product .price {
                color: '.esc_html($vw_startup_pro_primary_color).';
        }';
    }

    if($vw_startup_pro_header_title_color != false || $vw_startup_pro_header_title_font_family != false || $vw_startup_pro_header_title_font_size != false){
        $custom_css .='#header .logo h1 a, #header .logo p, p.site-description{';
        
        if($vw_startup_pro_header_title_color != false)
            $custom_css .= 'color: '.esc_html($vw_startup_pro_header_title_color).';';
        if($vw_startup_pro_header_title_font_family != false)
            $custom_css .= 'font-family: '.esc_html($vw_startup_pro_header_title_font_family).';';
        if($vw_startup_pro_header_title_font_size != false)
            $custom_css .= 'font-size: '.esc_html($vw_startup_pro_header_title_font_size).';';

        $custom_css .='}';
    }
    if($vw_startup_pro_header_contact_details_color != false || $vw_startup_pro_header_contact_details_font_family != false || $vw_startup_pro_header_contact_details_font_size != false){
        $custom_css .='.contact_details ul li span{';
            if($vw_startup_pro_header_contact_details_color != false)
                $custom_css .= 'color: '.esc_html($vw_startup_pro_header_contact_details_color).';';
            if($vw_startup_pro_header_contact_details_font_family != false)
                $custom_css .= 'font-family: '.esc_html($vw_startup_pro_header_contact_details_font_family).';';

            if($vw_startup_pro_header_contact_details_font_size != false)

                $custom_css .= 'font-size: '.esc_html($vw_startup_pro_header_contact_details_font_size).';';
        $custom_css .='}';
    }
    /*Top Bar Text Alignment Additional Settings */
    $topbar_text_alignment = get_theme_mod( 'vw_startup_pro_topbar_text_radio_button' );
    if('centered' == $topbar_text_alignment ){
        $custom_css .='.top-headline,.contact_details ul li span{';
                $custom_css .='margin: 0 auto !important ;';
                $custom_css .='text-align: center;';
        $custom_css .='}';
    } else if('right' == $topbar_text_alignment ){
        $custom_css .='.top-headline,.contact_details ul li span{';
                $custom_css .='float: right;';
        $custom_css .='}';
    }

    if($vw_startup_pro_top_headlines_color != false || $vw_startup_pro_top_headlines_font_family != false || $vw_startup_pro_top_headlines_font_size != false){
        $custom_css .='.top-headline{';
            if($vw_startup_pro_top_headlines_color != false)
                $custom_css .= 'color: '.esc_html($vw_startup_pro_top_headlines_color).';';
            if($vw_startup_pro_top_headlines_font_family != false)
                $custom_css .= 'font-family: '.esc_html($vw_startup_pro_top_headlines_font_family).';';

            if($vw_startup_pro_top_headlines_font_size != false)

                $custom_css .= 'font-size: '.esc_html($vw_startup_pro_top_headlines_font_size).';';
        $custom_css .='}';
    }
    if($vw_startup_pro_header_contact_detailsicon_color != false){
        $custom_css .='.contact_details ul li span i{';
                $custom_css .='color: '.esc_html($vw_startup_pro_header_contact_detailsicon_color).';
        }';
    }
    if($vw_startup_pro_headerhomebg_color != false){
        $custom_css .='div#header{';
                $custom_css .='background-color: '.esc_html($vw_startup_pro_headerhomebg_color).';';
        $custom_css .='}';
    }
    
    $custom_css .='@media screen and (min-width:720px) {';
        if($vw_startup_pro_headermenu_color != false || $vw_startup_pro_headermenu_font_family != false || $vw_startup_pro_headermenu_font_size != false){
            $custom_css .='.menubar .nav ul li a{';
                if($vw_startup_pro_headermenu_color != false)
                    $custom_css .='color: '.esc_html($vw_startup_pro_headermenu_color).';';
                if($vw_startup_pro_headermenu_font_family != false)
                    $custom_css .='font-family:'.esc_html($vw_startup_pro_headermenu_font_family).';';
                if($vw_startup_pro_headermenu_font_size != false)
                    $custom_css .='font-size:'.esc_html($vw_startup_pro_headermenu_font_size).';';
            $custom_css .='}';
        }
        if($vw_startup_pro_header_menuhovercolor != false){
            $custom_css .='.menubar .nav ul li a:hover{
                color: '.esc_html($vw_startup_pro_header_menuhovercolor).';
            }';
        }
        if($vw_startup_pro_dropdownbg_color != false){
            $custom_css .='.menubar .nav ul li:hover > ul{
                background: '.esc_html($vw_startup_pro_dropdownbg_color).';
            }';
        }
        if($vw_startup_pro_dropdownbg_itemcolor != false){
            $custom_css .='.menubar .nav ul li > ul > li a{
                color: '.esc_html($vw_startup_pro_dropdownbg_itemcolor).';
            }';
        }
        if($vw_startup_pro_dropdownbg_item_hovercolor != false){
            $custom_css .='.menubar .nav ul.sub-menu li:hover a{
                color: '.esc_html($vw_startup_pro_dropdownbg_item_hovercolor).';
            }';
        }
    $custom_css .='}';

    $custom_css .='@media screen and (max-width:1024px) {';
        if($vw_startup_pro_dropdownbg_responsivecolor != false){
            $custom_css .='.sidenav{
                background-color:'.esc_html($vw_startup_pro_dropdownbg_responsivecolor).';
            }';
        }
        if($vw_startup_pro_headermenu_responsive_item_color != false){
            $custom_css .='.menubar .nav ul li a, .menubar .nav ul li ul li a{
                color: '.esc_html($vw_startup_pro_headermenu_responsive_item_color).';
            }';
        }
    $custom_css .='}';


    if($vw_startup_pro_sliderHeading_color != false || $vw_startup_pro_sliderHeading_font_family != false || $vw_startup_pro_sliderHeading_font_size != false){
        $custom_css .='#slider h2{';
            if($vw_startup_pro_sliderHeading_color != false)
                $custom_css .='color: '.esc_html($vw_startup_pro_sliderHeading_color).';';
            if($vw_startup_pro_sliderHeading_font_family != false)
                $custom_css .='font-family:'.esc_html($vw_startup_pro_sliderHeading_font_family).';';
            if($vw_startup_pro_sliderHeading_font_size != false)
                $custom_css .='font-size:'.esc_html($vw_startup_pro_sliderHeading_font_size).';';
        $custom_css .='}';
    }
    if($vw_startup_pro_slidertext_color != false || $vw_startup_pro_slidertext_font_family != false || $vw_startup_pro_slidertext_font_size != false){
        $custom_css .='#slider p{';
            if($vw_startup_pro_slidertext_color != false)
                $custom_css .='color: '.esc_html($vw_startup_pro_slidertext_color).';';
            if($vw_startup_pro_slidertext_font_family != false)
                $custom_css .='font-family:'.esc_html($vw_startup_pro_slidertext_font_family).';';
            if($vw_startup_pro_slidertext_font_size != false)
                $custom_css .='font-size:'.esc_html($vw_startup_pro_slidertext_font_size).';';
        $custom_css .='}';
    }
    if($vw_startup_pro_slide_buttoncolor != false || $vw_startup_pro_slide_buttonbgcolor != false || $vw_startup_pro_button_fontfamily != false || $vw_startup_pro_button_font_size != false){
        $custom_css .='#slider .btn-primary{';
            if($vw_startup_pro_slide_buttoncolor != false)
                $custom_css .='color: '.esc_html($vw_startup_pro_slide_buttoncolor).';';
            if($vw_startup_pro_slide_buttonbgcolor != false)
                $custom_css .='background-color: '.esc_html($vw_startup_pro_slide_buttonbgcolor).';';
            if($vw_startup_pro_button_fontfamily != false)
                $custom_css .='font-family:'.esc_html($vw_startup_pro_button_fontfamily).';';
            if($vw_startup_pro_button_font_size != false)
                $custom_css .='font-size:'.esc_html($vw_startup_pro_button_font_size).';';
        $custom_css .='}';
    }
    if($vw_startup_pro_slidertext_color != false || $vw_startup_pro_slidertext_font_family != false){
        $custom_css .='#slider .btn-primary{';
            if($vw_startup_pro_slide_buttoncolor != false)
                $custom_css .='color: '.esc_html($vw_startup_pro_slide_buttoncolor).';';
            if($vw_startup_pro_slide_buttonbgcolor != false)
                $custom_css .='background-color: '.esc_html($vw_startup_pro_slide_buttonbgcolor).';';
            if($vw_startup_pro_button_fontfamily != false)
                $custom_css .='font-family:'.esc_html($vw_startup_pro_button_fontfamily).';';
        $custom_css .='}';
    }
    if($vw_startup_pro_homepageheading_color != false || $vw_startup_pro_homepageheading_font_family != false){
        $custom_css .='section#about h2{';
            if($vw_startup_pro_homepageheading_color != false)
                $custom_css .='color: '.esc_html($vw_startup_pro_homepageheading_color).';';
            if($vw_startup_pro_homepageheading_font_family != false)
                $custom_css .='font-family:'.esc_html($vw_startup_pro_homepageheading_font_family).';';
        $custom_css .='}';
    }
    if($vw_startup_pro_homepageheading_color != false){
        $custom_css .='section#about h2:before, section#about h2:after{
            color: '.esc_html($vw_startup_pro_homepageheading_color).';
        }';
    }
    if($vw_startup_pro_homepagetext_color != false || $vw_startup_pro_homepagetext_font_family != false){
        $custom_css .='.about-editor{';
            if($vw_startup_pro_homepagetext_color != false)
                $custom_css .='color: '.esc_html($vw_startup_pro_homepagetext_color).';';
            if($vw_startup_pro_homepagetext_font_family != false)
                $custom_css .='font-family:'.esc_html($vw_startup_pro_homepagetext_font_family).';';
        $custom_css .='}';
    }

    /*Slider Additional Settings */
    $slide_text_alignment = get_theme_mod( 'vw_startup_pro_slide_text_radio_button' );
    if('centered' == $slide_text_alignment ){
        $custom_css .='.slider-box{';
                $custom_css .='margin: 0 auto !important ;';
                $custom_css .='text-align: center;';
        $custom_css .='}';
    } else if('right' == $slide_text_alignment ){
        $custom_css .='.slider-box{';
                $custom_css .='float: right;';
        $custom_css .='}';
    }



    /*------------------------------ About ----------------------------------------*/
    if($vw_startup_pro_about_title_color != false){
        $custom_css .='.about-heading h3{
            color: '.esc_html($vw_startup_pro_about_title_color).';
        }';
    }
    if($vw_startup_pro_about_title_color_font_family != false){
        $custom_css .='.about-heading h3{
            font-family: '.esc_html($vw_startup_pro_about_title_color_font_family).';
        }';
    }
    if($vw_startup_pro_about_title_font_size != false){
        $custom_css .='.about-heading h3{
            font-size: '.esc_html($vw_startup_pro_about_title_font_size).';
        }';
    }
    if($vw_startup_pro_about_subtitle_color != false){
        $custom_css .='section h4{
            color: '.esc_html($vw_startup_pro_about_subtitle_color).';
        }';
    }
    if($vw_startup_pro_about_subtitle_color_font_family != false){
        $custom_css .='section h4{
            font-family: '.esc_html($vw_startup_pro_about_subtitle_color_font_family).';
        }';
    }
    if($vw_startup_pro_about_subtitle_font_size != false){
        $custom_css .='section h4{
            font-size: '.esc_html($vw_startup_pro_about_subtitle_font_size).';
        }';
    }
    if($vw_startup_pro_about_para_color != false){
        $custom_css .='.about-content p{
            color: '.esc_html($vw_startup_pro_about_para_color).';
        }';
    }
    if($vw_startup_pro_about_para_color_font_family != false){
        $custom_css .='.about-content p{
            font-family: '.esc_html($vw_startup_pro_about_para_color_font_family).';
        }';
    }
    if($vw_startup_pro_about_para_font_size != false){
        $custom_css .='.about-content p{
            font-size: '.esc_html($vw_startup_pro_about_para_font_size).';
        }';
    }
    if($vw_startup_pro_about_list_color != false){
        $custom_css .='.li_content p{
            color: '.esc_html($vw_startup_pro_about_list_color).';
        }';
    }
    if($vw_startup_pro_about_list_font_family != false){
        $custom_css .='.li_content p{
            font-family:'.esc_html($vw_startup_pro_about_list_font_family).';
        }';
    }
    if($vw_startup_pro_about_list_font_size != false){
        $custom_css .='.li_content p{
            font-size:'.esc_html($vw_startup_pro_about_list_font_size).';
        }';
    }
    if($vw_startup_pro_about_icon_color != false){
        $custom_css .='#about .li_content i{
            color: '.esc_html($vw_startup_pro_about_icon_color).';
        }';
    }

    /*About Additional Settings */
    $about_text_alignment = get_theme_mod( 'vw_startup_pro_about_text_radio_button' );
    if('centered' == $about_text_alignment ){
        $custom_css .='section h4,.about-content p,.about-heading h3{';
                $custom_css .='margin: 0 auto !important ;';
                $custom_css .='text-align: center;';
        $custom_css .='}';
    } else if('right' == $about_text_alignment ){
        $custom_css .='section h4,.about-content p,.about-heading h3{';
                $custom_css .='text-align: right;';
        $custom_css .='}';
    }
    /*------------------------------ Portfolio ----------------------------------------*/
    if($vw_startup_pro_portfolio_title_color != false){
        $custom_css .='#portfolio h3{
            color: '.esc_html($vw_startup_pro_portfolio_title_color).';
        }';
    }
    if($vw_startup_pro_portfolio_title_font_family != false){
        $custom_css .='#portfolio h3{
            font-family:'.esc_html($vw_startup_pro_portfolio_title_font_family).';
        }';
    }
    if($vw_startup_pro_portfolio_title_font_size != false){
        $custom_css .='#portfolio h3{
            font-size:'.esc_html($vw_startup_pro_portfolio_title_font_size).';
        }';
    }
    if($vw_startup_pro_portfolio_text_color != false){
        $custom_css .='#portfolio p{
            color: '.esc_html($vw_startup_pro_portfolio_text_color).';
        }';
    }
    if($vw_startup_pro_portfolio_text_font_family != false){
        $custom_css .='#portfolio p{
            font-family:'.esc_html($vw_startup_pro_portfolio_text_font_family).';
        }';
    }
    if($vw_startup_pro_portfolio_text_font_size != false){
        $custom_css .='#portfolio p{
            font-size:'.esc_html($vw_startup_pro_portfolio_text_font_size).';
        }';
    }
    if($vw_startup_pro_portfolio_color != false){
        $custom_css .='#portfolio .box .post, #portfolio .box .title a{
            color: '.esc_html($vw_startup_pro_portfolio_color).';
        }';
    }
    if($vw_startup_pro_portfolio_font_family != false){
        $custom_css .='#portfolio .box .post, #portfolio .box .title a{
            font-family:'.esc_html($vw_startup_pro_portfolio_font_family).';
        }';
    }
    if($vw_startup_pro_portfolio_font_size != false){
        $custom_css .='#portfolio .box .post, #portfolio .box .title a{
            font-size:'.esc_html($vw_startup_pro_portfolio_font_size).';
        }';
    }
    if($vw_startup_pro_portfolio_alphacolor != false){
        $custom_css .='#portfolio .box:before{
            background:'.esc_html($vw_startup_pro_portfolio_alphacolor).';
        }';
    }
    /*portfolio Additional Settings */
    $portfolio_text_alignment = get_theme_mod( 'vw_startup_pro_portfolio_text_radio_button' );
    if('left' == $portfolio_text_alignment ){
        $custom_css .='#portfolio h3,#portfolio p{';
                $custom_css .='text-align: left;';
        $custom_css .='}';
    } else if('right' == $portfolio_text_alignment ){
        $custom_css .='#portfolio h3,#portfolio p{';
                $custom_css .='text-align: right;';
        $custom_css .='}';
    }
    /*------------------------------ Services ----------------------------------------*/
    if($vw_startup_pro_services_title_color != false){
        $custom_css .='#services h3{
            color: '.esc_html($vw_startup_pro_services_title_color).';
        }';
    }
    if($vw_startup_pro_services_title_font_family != false){
        $custom_css .='#services h3{
            font-family:'.esc_html($vw_startup_pro_services_title_font_family).';
        }';
    }
    if($vw_startup_pro_services_title_font_size != false){
        $custom_css .='#services h3{
            font-size:'.esc_html($vw_startup_pro_services_title_font_size).';
        }';
    }
    if($vw_startup_pro_services_text_color != false){
        $custom_css .='#services p{
            color: '.esc_html($vw_startup_pro_services_text_color).';
        }';
    }
    if($vw_startup_pro_services_text_font_family != false){
        $custom_css .='#services p{
            font-family:'.esc_html($vw_startup_pro_services_text_font_family).';
        }';
    }
    if($vw_startup_pro_services_text_font_size != false){
        $custom_css .='#services p{
            font-size:'.esc_html($vw_startup_pro_services_text_font_size).';
        }';
    }
    if($vw_startup_pro_service_alphacolor != false){
        $custom_css .='.service-box:hover .service-box-content{
            background-color:'.esc_html($vw_startup_pro_service_alphacolor).';
        }';
    }

    /*Service Additional Settings */
    $service_text_alignment = get_theme_mod( 'vw_startup_pro_services_text_radio_button' );
    if('left' == $service_text_alignment ){
        $custom_css .='#services h3,#services p{';
                $custom_css .='text-align: left;';
        $custom_css .='}';
    } else if('right' == $service_text_alignment ){
        $custom_css .='#services h3,#services p{';
                $custom_css .='text-align: right;';
        $custom_css .='}';
    }
    /*-------------------------------Team-----------------------------------*/
    if($vw_startup_pro_team_title_color != false){
        $custom_css .='#team h3{
            color: '.esc_html($vw_startup_pro_team_title_color).';
        }';
    }
    if($vw_startup_pro_team_title_font_family != false){
        $custom_css .='#team h3{
            font-family:'.esc_html($vw_startup_pro_team_title_font_family).';
        }';
    }
    if($vw_startup_pro_team_title_font_size != false){
        $custom_css .='#team h3{
            font-size:'.esc_html($vw_startup_pro_team_title_font_size).';
        }';
    }
    if($vw_startup_pro_team_text_color != false){
        $custom_css .='#team p{
            color: '.esc_html($vw_startup_pro_team_text_color).';
        }';
    }
    if($vw_startup_pro_team_text_font_family != false){
        $custom_css .='#team p{
            font-family:'.esc_html($vw_startup_pro_team_text_font_family).';
        }';
    }
    if($vw_startup_pro_team_text_font_size != false){
        $custom_css .='#team p{
            font-size:'.esc_html($vw_startup_pro_team_text_font_size).';
        }';
    }
    if($vw_startup_pro_team_color != false){
        $custom_css .='.teambox h4.teamtitle a, #team .image-title span, .teambox .teampost{
            color: '.esc_html($vw_startup_pro_team_color).';
        }';
    }
    if($vw_startup_pro_team_font_family != false){
        $custom_css .='.teambox h4.teamtitle a, #team .image-title span, .teambox .teampost{
            font-family:'.esc_html($vw_startup_pro_team_font_family).';
        }';
    }
    if($vw_startup_pro_team_font_size != false){
        $custom_css .='.teambox h4.teamtitle a, #team .image-title span, .teambox .teampost{
            font-size:'.esc_html($vw_startup_pro_team_font_size).';
        }';
    }
    if($vw_startup_pro_team_alphacolor != false){
        $custom_css .='.teambox .teambox-content:after, #team .image-title {
            background-color:'.esc_html($vw_startup_pro_team_alphacolor).';
        }';
    }
    /*Team Additional Settings */
    $team_text_alignment = get_theme_mod( 'vw_startup_pro_team_radio_button' );
    if('left' == $team_text_alignment ){
        $custom_css .='#team h3,#team p,.teambox h4.teamtitle a, #team .image-title span{';
                $custom_css .='text-align: left;';
        $custom_css .='}';
    } else if('right' == $team_text_alignment ){
        $custom_css .='#team h3,#team p,.teambox h4.teamtitle a, #team .image-title span{';
                $custom_css .='text-align: right;';
        $custom_css .='}';
    }
    /*-------------------------------Skill-----------------------------------*/
    if($vw_startup_pro_skills_title_color != false){
        $custom_css .='#skills h3{
            color: '.esc_html($vw_startup_pro_skills_title_color).';
        }';
    }
    if($vw_startup_pro_skills_title_font_family != false){
        $custom_css .='#skills h3{
            font-family:'.esc_html($vw_startup_pro_skills_title_font_family).';
        }';
    }
    if($vw_startup_pro_skills_title_font_size != false){
        $custom_css .='#skills h3{
            font-size:'.esc_html($vw_startup_pro_skills_title_font_size).';
        }';
    }
    if($vw_startup_pro_skills_text_color != false){
        $custom_css .='#skills p{
            color: '.esc_html($vw_startup_pro_skills_text_color).';
        }';
    }
    if($vw_startup_pro_skills_text_font_family != false){
        $custom_css .='#skills p{
            font-family:'.esc_html($vw_startup_pro_skills_text_font_family).';
        }';
    }
    if($vw_startup_pro_skills_text_font_size != false){
        $custom_css .='#skills p{
            font-size:'.esc_html($vw_startup_pro_skills_text_font_size).';
        }';
    }
    /*Skills Additional Settings */
    $skills_text_alignment = get_theme_mod( 'vw_startup_pro_skills_radio_button' );
    if('centered' == $skills_text_alignment ){
        $custom_css .='h3.white_head_title,#skills p{';
                $custom_css .='margin: 0 auto !important ;';
                $custom_css .='text-align: center;';
        $custom_css .='}';
    } else if('right' == $skills_text_alignment ){
        $custom_css .='h3.white_head_title,#skills p{';
                $custom_css .='float: right;';
        $custom_css .='}';
    }

    /*------------------------------ How we work ----------------------------------------*/
    if($vw_startup_pro_how_we_work_title_color != false){
        $custom_css .='#how-we-work h3{
            color: '.esc_html($vw_startup_pro_how_we_work_title_color).';
        }';
    }
    if($vw_startup_pro_how_we_work_title_font_family != false){
        $custom_css .='#how-we-work h3{
            font-family: '.esc_html($vw_startup_pro_how_we_work_title_font_family).';
        }';
    }
    if($vw_startup_pro_how_we_work_title_font_size != false){
        $custom_css .='#how-we-work h3{
            font-size: '.esc_html($vw_startup_pro_how_we_work_title_font_size).';
        }';
    }
    if($vw_startup_pro_how_we_work_text_color != false){
        $custom_css .='#how-we-work p{
            color: '.esc_html($vw_startup_pro_how_we_work_text_color).';
        }';
    }
    if($vw_startup_pro_how_we_work_text_font_family != false){
        $custom_css .='#how-we-work p{
            font-family: '.esc_html($vw_startup_pro_how_we_work_text_font_family).';
        }';
    }
    if($vw_startup_pro_how_we_work_text_font_size != false){
        $custom_css .='#how-we-work p{
            font-size: '.esc_html($vw_startup_pro_how_we_work_text_font_size).';
        }';
    }
    if($vw_startup_pro_how_we_work_icon_color != false){
        $custom_css .='#how-we-work .work-box h4 a{
            color: '.esc_html($vw_startup_pro_how_we_work_icon_color).';
        }';
    }
    if($vw_startup_pro_how_we_work_icon_font_family != false){
        $custom_css .='#how-we-work .work-box h4 a{
            font-family: '.esc_html($vw_startup_pro_how_we_work_icon_font_family).';
        }';
    }
    if($vw_startup_pro_how_we_work_icon_font_size != false){
        $custom_css .='#how-we-work .work-box h4 a{
            font-size: '.esc_html($vw_startup_pro_how_we_work_icon_font_size).';
        }';
    }
    if($vw_startup_pro_how_we_work_icon_box_bgcolor != false){
        $custom_css .='#how-we-work .work-box{
            background-color: '.esc_html($vw_startup_pro_how_we_work_icon_box_bgcolor).';
        }';
    }
    if($vw_startup_pro_how_we_work_icon_box_bgcolor != false){
        $custom_css .='#how-we-work .work-box:before{
            border-left-color: '.esc_html($vw_startup_pro_how_we_work_icon_box_bgcolor).';
        }';
    }
    if($vw_startup_pro_how_we_work_icon_box_hvcolor != false){
        $custom_css .='#how-we-work .work-box-outer:hover .work-box{
            background-color: '.esc_html($vw_startup_pro_how_we_work_icon_box_hvcolor).';
        }';
    }
    if($vw_startup_pro_how_we_work_icon_box_hvcolor != false){
        $custom_css .='#how-we-work .work-box-outer:hover .work-box:before{
            border-left-color: '.esc_html($vw_startup_pro_how_we_work_icon_box_hvcolor).';
        }';
    }
    /*work Additional Settings */
    $work_text_alignment = get_theme_mod( 'vw_startup_pro_how_we_work_radio_button' );
    if('left' == $work_text_alignment ){
        $custom_css .='#how-we-work h3,#how-we-work p{';
                $custom_css .='text-align: left;';
        $custom_css .='}';
    } else if('right' == $work_text_alignment ){
        $custom_css .='#how-we-work h3,#how-we-work p{';
                $custom_css .='text-align: right;';
        $custom_css .='}';
    }
    /*------------------------------ Testimonials ----------------------------------------*/
    if($vw_startup_pro_testimonial_title_color != false){
        $custom_css .='#testimonials h3{
            color: '.esc_html($vw_startup_pro_testimonial_title_color).';
        }';
    }
    if($vw_startup_pro_testimonial_title_font_family != false){
        $custom_css .='#testimonials h3{
            font-family: '.esc_html($vw_startup_pro_testimonial_title_font_family).';
        }';
    }
    if($vw_startup_pro_testimonial_title_font_size != false){
        $custom_css .='#testimonials h3{
            font-size: '.esc_html($vw_startup_pro_testimonial_title_font_size).';
        }';
    }

    if($vw_startup_pro_testimonial_name_color != false){
        $custom_css .='#testimonials h4.testimonial_name a, #testimonials blockquote, #testimonials h4{
            color: '.esc_html($vw_startup_pro_testimonial_name_color).';
        }';
    }
    if($vw_startup_pro_testimonial_name_font_family != false){
        $custom_css .='#testimonials h4.testimonial_name a, #testimonials blockquote, #testimonials h4{
            font-family: '.esc_html($vw_startup_pro_testimonial_name_font_family).';
        }';
    }
    if($vw_startup_pro_testimonial_name_font_size != false){
        $custom_css .='#testimonials h4.testimonial_name a, #testimonials blockquote, #testimonials h4{
            font-size: '.esc_html($vw_startup_pro_testimonial_name_font_size).';
        }';
    }
    if($vw_startup_pro_testimonial_box_bgcolor != false){
        $custom_css .='#testimonials .testimonial_box{
            background-color: '.esc_html($vw_startup_pro_testimonial_box_bgcolor).';
        }';
    }
    if($vw_startup_pro_testimonial_box_bgcolor != false){
        $custom_css .='#testimonials .testimonial_box:after{
            border-bottom-color: '.esc_html($vw_startup_pro_testimonial_box_bgcolor).';
        }';
    }
    /*testimonial Additional Settings */
    $testimonial_text_alignment = get_theme_mod( 'vw_startup_pro_testimonial_radio_button' );
    if('left' == $testimonial_text_alignment ){
        $custom_css .='#testimonials h3{';
                $custom_css .='text-align: left;';
        $custom_css .='}';
    } else if('right' == $testimonial_text_alignment ){
        $custom_css .='#testimonials h3{';
                $custom_css .='text-align: right;';
        $custom_css .='}';
    }
    /*------------------------Record---------------------------------*/
    if($vw_startup_pro_records_text_color != false){
        $custom_css .='#our_records h4,#our_records p{
            color: '.esc_html($vw_startup_pro_records_text_color).';
        }';
    }
    if($vw_startup_pro_records_text_font_family != false){
        $custom_css .='#our_records h4,#our_records p{
            font-family: '.esc_html($vw_startup_pro_records_text_font_family).';
        }';
    }
    if($vw_startup_pro_records_text_font_size != false){
        $custom_css .='#our_records h4,#our_records p{
            font-size: '.esc_html($vw_startup_pro_records_text_font_size).';
        }';
    }
    /*------------------------------ Latest Post ----------------------------------------*/
    if($vw_startup_pro_latest_post_title_color != false){
        $custom_css .='#latest_post h3{
            color: '.esc_html($vw_startup_pro_latest_post_title_color).';
        }';
    }   
    if($vw_startup_pro_latest_post_title_font_family != false){
        $custom_css .='#latest_post h3{
            font-family: '.esc_html($vw_startup_pro_latest_post_title_font_family).';
        }';
    }
    if($vw_startup_pro_latest_post_title_font_size != false){
        $custom_css .='#latest_post h3{
            font-size: '.esc_html($vw_startup_pro_latest_post_title_font_size).';
        }';
    }

    if($vw_startup_pro_latestpost_color != false){
        $custom_css .='.postbox h3.posttitle a, .postbox .posttext{
            color: '.esc_html($vw_startup_pro_latestpost_color).';
        }';
    }   
    if($vw_startup_pro_latestpost_font_family != false){
        $custom_css .='.postbox h3.posttitle a, .postbox .posttext{
            font-family: '.esc_html($vw_startup_pro_latestpost_font_family).';
        }';
    }
    if($vw_startup_pro_latestpost_font_size != false){
        $custom_css .='.postbox h3.posttitle a, .postbox .posttext{
            font-size: '.esc_html($vw_startup_pro_latestpost_font_size).';
        }';
    }

    if($vw_startup_pro_latestpost_box_bgcolor != false){
        $custom_css .='.postbox .postbox-content{
            background-color: '.esc_html($vw_startup_pro_latestpost_box_bgcolor).';
        }';
    }   
    if($vw_startup_pro_latestpost_box_hvcolor != false){
        $custom_css .='.postbox:hover .postbox-content{
            background-color: '.esc_html($vw_startup_pro_latestpost_box_hvcolor).';
        }';
    }

    if($vw_startup_pro_post_alphacolor != false){
        $custom_css .='.postbox .postpic:after{
            background-color: '.esc_html($vw_startup_pro_post_alphacolor).';
        }';
    }
    /*Latest Post Additional Settings */
    $post_text_alignment = get_theme_mod( 'vw_startup_pro_latestpost_radio_button' );
    if('left' == $post_text_alignment ){
        $custom_css .='#latest_post h3{';
                $custom_css .='text-align: left;';
        $custom_css .='}';
    } else if('right' == $post_text_alignment ){
        $custom_css .='#latest_post h3{';
                $custom_css .='text-align: right;';
        $custom_css .='}';
    }
    /*------------------------------ Partners----------------------------------------*/
    if($vw_startup_pro_our_partners_subtitle_color != false){
        $custom_css .='#our_partners .about-heading h2 small{
            color: '.esc_html($vw_startup_pro_our_partners_subtitle_color).';
        }';
    }
    if($vw_startup_pro_our_partners_subtitle_color != false){
        $custom_css .='#our_partners .about-heading h2, #our_partners .about-heading{
            border-color: '.esc_html($vw_startup_pro_our_partners_subtitle_color).';
        }';
    }
    if($vw_startup_pro_our_partners_title_font_family != false){
        $custom_css .='#our_partners .about-heading h2, #our_partners .about-heading h2 small{
            font-family: '.esc_html($vw_startup_pro_our_partners_title_font_family).';
        }';
    }
    
    /*--------------------custom footer------------------------------*/
    if($vw_startup_pro_custom_footer_section_bgcolor != false){
        $custom_css .='.footer-contactmap{
            background-color: '.esc_html($vw_startup_pro_custom_footer_section_bgcolor).';
        }';
    }
    /*Footer Additional Settings */
    $footer_text_alignment = get_theme_mod( 'vw_startup_pro_footercontent_text_radio_button' );
    if('centered' == $footer_text_alignment ){
        $custom_css .='.footer_form .section-heading h3,.footer_form .section-heading p,.footer-contactmap{';
                $custom_css .='margin: 0 auto !important ;';
                $custom_css .='text-align: center;';
        $custom_css .='}';
    } else if('right' == $footer_text_alignment ){
        $custom_css .='.footer_form .section-heading h3,.footer_form .section-heading p,.footer-contactmap{';
                $custom_css .='text-align: right;';
        $custom_css .='}';
    }
    /*------------------------------ Footer----------------------------------------*/
    if($vw_startup_pro_footerheading_color != false || $vw_startup_pro_footerheading_font_family != false || $vw_startup_pro_footerheading_font_size != false){
        $custom_css .='#footer h3{';
            if($vw_startup_pro_footerheading_color != false)
                $custom_css .='color:'.esc_html($vw_startup_pro_footerheading_color).';';
            if($vw_startup_pro_footerheading_font_family != false)
                $custom_css .='font-family:'.esc_html($vw_startup_pro_footerheading_font_family).';';
            if($vw_startup_pro_footerheading_font_size != false)
                $custom_css .='font-size:'.esc_html($vw_startup_pro_footerheading_font_size).';';
        $custom_css .='}';
    }
    if($vw_startup_pro_footerborder_color != false){
        $custom_css .='.copyright{
            border-color: '.esc_html($vw_startup_pro_footerborder_color).';
        }';
    }
    /*----------------------Contact Section----------------------------------------*/
    if($vw_startup_pro_contact_page_heading_color != false || $vw_startup_pro_contact_page_heading_font_family != false || $vw_startup_pro_contact_page_heading_font_size != false){
        $custom_css .='.contact-info span{';
            if($vw_startup_pro_contact_page_heading_color != false)
                $custom_css .='color: '.esc_html($vw_startup_pro_contact_page_heading_color).';';
            if($vw_startup_pro_contact_page_heading_font_family != false)
                $custom_css .='font-family:'.esc_html($vw_startup_pro_contact_page_heading_font_family).';';
            if($vw_startup_pro_contact_page_heading_font_size != false)
                $custom_css .='font-size:'.esc_html($vw_startup_pro_contact_page_heading_font_size).';';
        $custom_css .='}';
    }
    if($vw_startup_pro_contact_page_content_color != false || $vw_startup_pro_contact_page_contact_font_family != false || $vw_startup_pro_contact_page_contact_font_size != false){
        $custom_css .='.contact-info p{';
            if($vw_startup_pro_contact_page_content_color != false)
                $custom_css .='color: '.esc_html($vw_startup_pro_contact_page_content_color).';';
            if($vw_startup_pro_contact_page_contact_font_family != false)
                $custom_css .='font-family:'.esc_html($vw_startup_pro_contact_page_contact_font_family).';';
            if($vw_startup_pro_contact_page_contact_font_size != false)
                $custom_css .='font-size:'.esc_html($vw_startup_pro_contact_page_contact_font_size).';';
        $custom_css .='}';
    }
    if($vw_startup_pro_contact_page_icon_color != false){
        $custom_css .='.contact-email i, .contact-address i, .contact-phone i{
            color: '.esc_html($vw_startup_pro_contact_page_icon_color).';
        }';
    }
    if($vw_startup_pro_footercontent_color != false || $vw_startup_pro_footercontent_font_family != false || $vw_startup_pro_footercontent_font_size != false){
        $custom_css .='#footer p, #footer ul li, #footer ul li a, #footer a, #footer span, #footer tr, #footer td, #footer th, .copyright p,#footer p.post-date{';
            if($vw_startup_pro_footercontent_color != false)
                $custom_css .='color:'.esc_html($vw_startup_pro_footercontent_color).';';
            if($vw_startup_pro_footercontent_font_family != false)
                $custom_css .='font-family:'.esc_html($vw_startup_pro_footercontent_font_family).';';
            if($vw_startup_pro_footercontent_font_size != false)
                $custom_css .='font-size:'.esc_html($vw_startup_pro_footercontent_font_size).';';
        $custom_css .='}';
    }
    if($vw_startup_pro_footercontent_color != false || $vw_startup_pro_footercontent_font_family != false){
        $custom_css .='#footer p, #footer ul li, #footer ul li a, #footer a, #footer span, #footer tr, #footer td, #footer th, .copyright p,#footer p.post-date{';
            if($vw_startup_pro_footercontent_color != false)
                $custom_css .='color:'.esc_html($vw_startup_pro_footercontent_color).';';
            if($vw_startup_pro_footercontent_font_family != false)
                $custom_css .='font-family:'.esc_html($vw_startup_pro_footercontent_font_family).';';
        $custom_css .='}';
    }
wp_add_inline_style( 'vw-startup-pro-basic-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'vw_stratup_pro_inline_style' );
?>