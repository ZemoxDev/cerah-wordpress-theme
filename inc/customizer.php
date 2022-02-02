<?php
    function theme_customizer_function($wp_customize){

        //Theme Customizer
        $wp_customize -> add_panel('theme_panel', array(
            'title' => 'Rima',
            'priority' => 10,
            'capability' => 'edit_theme_options',
        ));

        //Header Customizer
        $wp_customize -> add_section('header_section', array(
            'title' => 'Header',
            'description' => ('Header Customizer'),
            'panel' => 'theme_panel',
        ));

        $wp_customize -> add_setting('header_title_section', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Edit Header Title',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_attr'
        ));

        $wp_customize -> add_control('header_title_section', array(
            'label' => ('Show/Hide Header Title'),
            'type' => 'radio',
            'section' => 'header_section',
            'choices' => array(
                'yes' => 'Show',
                'no' => 'Hide'
            )
        ));

        $wp_customize -> add_setting('header_image_section', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Edit Header Image',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_attr'
        ));

        $wp_customize -> add_control('header_image_section', array(
            'label' => ('Show/Hide Header Image'),
            'type' => 'radio',
            'section' => 'header_section',
            'choices' => array(
                'yes' => 'Show',
                'no' => 'Hide'
            )
        ));

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
            'label' => 'About Us Section',
            'section' => 'footer_section',
            'priority' => 1,
        ));

        $wp_customize -> add_setting('social_facebook_section', array(
            'default' => ('https://www.facebook.com/'),
        ));

        $wp_customize -> add_control('social_facebook_section', array(
            'label' => 'Facebook',
            'section' => 'footer_section',
            'priority' => 1,
        ));

        $wp_customize -> add_setting('social_twitter_section', array(
            'default' => ('https://www.twitter.com/'),
        ));

        $wp_customize -> add_control('social_twitter_section', array(
            'label' => 'Twitter',
            'section' => 'footer_section',
            'priority' => 1,
        ));

        $wp_customize -> add_setting('social_linkedin_section', array(
            'default' => ('https://www.linkedin.com/'),
        ));

        $wp_customize -> add_control('social_linkedin_section', array(
            'label' => 'LinkedIn',
            'section' => 'footer_section',
            'priority' => 1,
        ));

        //Blog Post Customizer
        $wp_customize -> add_section('blog_post_section', array(
            'title' => 'Blog Post',
            'description' => ('Blog Posts Customizer'),
            'panel' => 'theme_panel',
        ));

        $wp_customize -> add_setting('blog_tags_section', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Edit Blog Post Tags',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_attr'
        ));

        $wp_customize -> add_control('blog_tags_section', array(
            'label' => ('Show/Hide Blog Post Tags'),
            'type' => 'radio',
            'section' => 'blog_post_section',
            'choices' => array(
                'yes' => 'Show',
                'no' => 'Hide'
            )
        ));

        $wp_customize -> add_setting('blog_categories_section', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Edit Blog Post Categories',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_attr'
        ));

        $wp_customize -> add_control('blog_categories_section', array(
            'label' => ('Show/Hide Blog Post Categories'),
            'type' => 'radio',
            'section' => 'blog_post_section',
            'choices' => array(
                'yes' => 'Show',
                'no' => 'Hide'
            )
        ));

        //Blog Page Customizer
        $wp_customize -> add_section('blog_page_section', array(
            'title' => 'Blog Page',
            'description' => ('Blog Posts Customizer'),
            'panel' => 'theme_panel',
        ));

        $wp_customize -> add_setting('blog_date_section', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Edit Blog Page Date and Comments',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_attr'
        ));

        $wp_customize -> add_control('blog_date_section', array(
            'label' => ('Show/Hide Date and Comments'),
            'type' => 'radio',
            'section' => 'blog_page_section',
            'choices' => array(
                'yes' => 'Show',
                'no' => 'Hide'
            )
        ));

        $wp_customize -> add_setting('blog_image_section', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Edit Blog Page Images',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_attr'
        ));

        $wp_customize -> add_control('blog_image_section', array(
            'label' => ('Show/Hide Images'),
            'type' => 'radio',
            'section' => 'blog_page_section',
            'choices' => array(
                'yes' => 'Show',
                'no' => 'Hide'
            )
        ));
    }

    add_action('customize_register', 'theme_customizer_function');

?>