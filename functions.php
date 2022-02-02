<?php

    function sleware_theme_support() {
        //Dynamic Title Tags
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
    }

    add_action('after_setup_theme', 'sleware_theme_support');

    function sleware_menus() {

        $locations = array(
            'primary' => "Desktop Primary Header",
            'footer-links' => "Footer Link Items",
            'footer-legal' => "Footer Legal Items",
        );

        register_nav_menus($locations);
    }

    add_action('init', 'sleware_menus');


    function sleware_register_styles(){

        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('sleware-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
        wp_enqueue_style('sleware-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", array(), '4.3.1', 'all');
        wp_enqueue_style('sleware-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0', 'all');

    }

    add_action('wp_enqueue_scripts', 'sleware_register_styles');



    function sleware_register_scripts(){

        wp_enqueue_script('sleware-jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true);
        wp_enqueue_script('sleware-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '1.14.7', true);
        wp_enqueue_script('sleware-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '4.3.1', true);
        wp_enqueue_script('sleware-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);

    }

    add_action('wp_enqueue_scripts', 'sleware_register_scripts');

    
    require get_template_directory() . '/inc/customizer.php';

?>