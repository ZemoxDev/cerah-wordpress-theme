<?php
    function cerah_customizer($wp_customize){

        //Theme Customizer
        $wp_customize -> add_panel('theme_panel', array(
            'title' => 'Rima',
            'priority' => 10,
            'capability' => 'edit_theme_options',
        ));

        //General Customizer
        $wp_customize -> add_section( 'diwp_color_section', array(
            'title' => __('General Settings', 'cerah'),
            'description' => __('Set General Settings', 'cerah'),
            'panel' => 'theme_panel',
            'priority' => '40'
        ));

        //Link Color
        $wp_customize -> add_setting( 'diwp_link_color', array(
            'default' => '#E5890A',
        ));
        
        $wp_customize -> add_control( new WP_Customize_Color_Control( $wp_customize, 'diwp_link_color', array(
            'label' => __('Choose Link Color', 'cerah'),
            'section' => 'diwp_color_section',
            'settings' => 'diwp_link_color'
        )));

        //Link Hover Color
        $wp_customize -> add_setting( 'diwp_link_hover_color', array(
            'default' => '#E5890A',
        ));
        
        $wp_customize -> add_control( new WP_Customize_Color_Control( $wp_customize, 'diwp_link_hover_color', array(
            'label' => __('Choose Link Hover Color', 'cerah'),
            'section' => 'diwp_color_section',
            'settings' => 'diwp_link_hover_color'
        )));

        //Header Customizer
        $wp_customize -> add_section('header_section', array(
            'title' => __('Header', 'cerah'),
            'description' => __('Header Customizer', 'cerah'),
            'panel' => 'theme_panel',
        ));

        $wp_customize -> add_setting('header_title_section', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => __('Edit Header Title', 'cerah'),
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_attr'
        ));

        $wp_customize -> add_control('header_title_section', array(
            'label' => __('Show/Hide Header Title', 'cerah'),
            'type' => 'radio',
            'section' => 'header_section',
            'choices' => array(
                'yes' => __('Show', 'cerah'),
                'no' => __('Hide', 'cerah')
            )
        ));

        $wp_customize -> add_setting('header_image_section', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => __('Edit Header Image', 'cerah'),
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_attr'
        ));

        $wp_customize -> add_control('header_image_section', array(
            'label' => ('Show/Hide Header Image'),
            'type' => 'radio',
            'section' => 'header_section',
            'choices' => array(
                'yes' => __('Show', 'cerah'),
                'no' => __('Hide', 'cerah')
            )
        ));

        //Header Text Color
        $wp_customize -> add_setting( 'diwp_header_active_color', array(
            'default' => '#E5890A',
        ));
        
        $wp_customize -> add_control( new WP_Customize_Color_Control( $wp_customize, 'diwp_header_active_color', array(
            'label' => __('Choose Active Header Text Color', 'cerah'),
            'section' => 'header_section',
            'settings' => 'diwp_header_active_color'
        )));

        //Header Background Color
        $wp_customize -> add_setting( 'diwp_header_active_background', array(
            'default' => '#fafafa',
        ));

        $wp_customize -> add_control( new WP_Customize_Color_Control( $wp_customize, 'diwp_header_active_background', array(
            'label' => __('Choose Active Header Background Color', 'cerah'),
            'section' => 'header_section',
            'settings' => 'diwp_header_active_background'
        )));

        //Footer Customizer
        $wp_customize -> add_section('footer_section', array(
            'title' => 'Footer',
            'description' => ('Footer Customizer'),
            'panel' => 'theme_panel',
        ));

        $wp_customize -> add_setting('about_small_section', array(
            'default' => ('About Us'),
        ));

        $wp_customize -> add_control('about_small_section', array(
            'label' => __('About Us Section', 'cerah'),
            'section' => 'footer_section',
            'priority' => 1,
        ));

        //Blog Post Customizer
        $wp_customize -> add_section('blog_post_section', array(
            'title' => __('Blog Post', 'cerah'),
            'description' => __('Blog Posts Customizer', 'cerah'),
            'panel' => 'theme_panel',
        ));

        $wp_customize -> add_setting('blog_tags_section', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => __('Edit Blog Post Tags', 'cerah'),
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_attr'
        ));

        $wp_customize -> add_control('blog_tags_section', array(
            'label' => __('Show/Hide Blog Post Tags', 'cerah'),
            'type' => 'radio',
            'section' => 'blog_post_section',
            'choices' => array(
                'yes' => __('Show', 'cerah'),
                'no' => __('Hide', 'cerah')
            )
        ));

        $wp_customize -> add_setting('blog_categories_section', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => __('Edit Blog Post Categories', 'cerah'),
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_attr'
        ));

        $wp_customize -> add_control('blog_categories_section', array(
            'label' => __('Show/Hide Blog Post Categories', 'cerah'),
            'type' => 'radio',
            'section' => 'blog_post_section',
            'choices' => array(
                'yes' => __('Show', 'cerah'),
                'no' => __('Hide', 'cerah')
            )
        ));

        //Blog Page Customizer
        $wp_customize -> add_section('blog_page_section', array(
            'title' => __('Blog Page', 'cerah'),
            'description' => __('Blog Posts Customizer', 'cerah'),
            'panel' => 'theme_panel',
        ));

        $wp_customize -> add_setting('blog_date_section', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => __('Edit Blog Page Date and Comments', 'cerah'),
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_attr'
        ));

        $wp_customize -> add_control('blog_date_section', array(
            'label' => __('Show/Hide Date and Comments', 'cerah'),
            'type' => 'radio',
            'section' => 'blog_page_section',
            'choices' => array(
                'yes' => __('Show', 'cerah'),
                'no' => __('Hide', 'cerah')
            )
        ));

        $wp_customize -> add_setting('blog_image_section', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => __('Edit Blog Page Images', 'cerah'),
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_attr'
        ));

        $wp_customize -> add_control('blog_image_section', array(
            'label' => ('Show/Hide Images'),
            'type' => 'radio',
            'section' => 'blog_page_section',
            'choices' => array(
                'yes' => __('Show', 'cerah'),
                'no' => __('Hide', 'cerah')
            )
        ));
    }
    
    add_action('customize_register', 'cerah_customizer');

    function cerah_customizer_css() {
        ?>

        <style type="text/css">

            a{
                color: <?php echo esc_attr(get_theme_mod( 'diwp_link_color' )); ?>;
            }

            .navbar a {
                color: <?php echo esc_attr(get_theme_mod( 'diwp_header_active_color' )); ?> !important;
            }

            .navbar.active {
                background: <?php echo esc_attr(get_theme_mod( 'diwp_header_active_background' )); ?> !important;
            }

            .navbar-nav ul{
                background: <?php echo esc_attr(get_theme_mod( 'diwp_header_active_background' )); ?> !important;
            }

            .social-right{
                text-align: right;
            }

            .social-right i{
                color: <?php echo esc_attr(get_theme_mod( 'diwp_link_color' )); ?>;
                padding-top: 0.75rem;
            }

            .woocommerce-info{
                border-top-color: <?php echo esc_attr(get_theme_mod( 'diwp_link_color' )); ?>;
            }

            .woocommerce div.product p.price{
                color: <?php echo esc_attr(get_theme_mod( 'diwp_link_color' )); ?>;
            }

            .woocommerce div.product .stock{
                color: <?php echo esc_attr(get_theme_mod( 'diwp_link_color' )); ?>;
            }

            .woocommerce button.button.alt{
                background-color: <?php echo esc_attr(get_theme_mod( 'diwp_link_color' )); ?>;
            }

            .woocommerce button.button.alt:hover{
                background-color: <?php echo esc_attr(get_theme_mod( 'diwp_link_hover_color' )); ?>;
            }

            .woocommerce ul.products li.product .price{
                color: <?php echo esc_attr(get_theme_mod( 'diwp_link_color' )); ?>;
            }

            .woocommerce span.onsale{
                background-color: <?php echo esc_attr(get_theme_mod( 'diwp_link_color' )); ?>;
                padding: 0.7rem;
                top: -2em;
                left: -2em;
            }

            .woocommerce-message{
                border-top-color: <?php echo esc_attr(get_theme_mod( 'diwp_link_color' )); ?>;
            }

            .woocommerce a.button.alt{
                background-color: <?php echo esc_attr(get_theme_mod( 'diwp_header_active_background' )); ?>;
            }

            .woocommerce a.button.alt:hover{
                background-color: <?php echo esc_attr(get_theme_mod( 'diwp_header_active_background' )); ?>;
            }

        </style>

        <?php

    }

    add_action('wp_head', 'cerah_customizer_css');
?>