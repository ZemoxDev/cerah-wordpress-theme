<?php

    $header_template = get_theme_mod('header_template_options');

    function cerah_theme_support() {
        //Dynamic Title Tags
        add_theme_support('title-tag');
        add_theme_support('custom-header', $args );
        add_theme_support('custom-background', $args );
        add_theme_support('custom-logo');
        add_theme_support('html5', $args );
        add_theme_support('responsive-embeds');
        add_theme_support('align-wide');
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        add_theme_support('widgets');
        add_theme_support('widgets-block-editor');
    }

    add_action('after_setup_theme', 'cerah_theme_support');

    function cerah_menus() {

        $locations = array(
            'primary' => "Desktop Primary Header",
            'footer-links' => "Footer Link Items",
            'footer-legal' => "Footer Legal Items",
        );

        register_nav_menus($locations);
    }

    add_action('init', 'cerah_menus');

    function cerah_register_styles(){

        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('cerah-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
        wp_enqueue_style('cerah-bootstrap', get_template_directory_uri() . "/bootstrap/bootstrap.min.css", array(), '5.1.3', 'all');

    }

    add_action('wp_enqueue_scripts', 'cerah_register_styles');


    function cerah_register_scripts(){

        wp_enqueue_script('cerah-jquery', get_template_directory_uri() . '/bootstrap/jquery-3.6.0.min.js', array(), '3.6.0', true);
        wp_enqueue_script('cerah-bootstrap-script', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array(), '4.3', true);
        wp_enqueue_script('cerah-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
    }   

    add_action('wp_enqueue_scripts', 'cerah_register_scripts');

    
    require get_template_directory() . '/inc/customizer.php';   

    function cerah_sidebar(){

        register_sidebar(
            array(
                'name' => __('Blog Sidebar', 'cerah'),
                'id' => 'blog_sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
        );

        register_sidebar(
            array(
                'name' => __('Footer First Section', 'cerah'),
                'id' => 'footer_first_section',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
        );

        register_sidebar(
            array(
                'name' => __('Footer Second Section', 'cerah'),
                'id' => 'footer_second_section',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
        );

        register_sidebar(
            array(
                'name' => __('Footer Third Section', 'cerah'),
                'id' => 'footer_third_section',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
        );

    }

    add_action('widgets_init', 'cerah_sidebar');
?>