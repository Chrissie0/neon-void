<?php

    function newtheme_setup() {
        add_theme_support('custom-background');
        add_theme_support('custom-header');
        add_theme_support('post-thumbnails');

        register_nav_menus(array('menu'=>'Primary Menu'));
    }
    add_action('after_setup_theme', 'newtheme_setup');

    function newtheme_styles_and_scripts() {

        // Links style.css
        wp_enqueue_style('main-stylesheet', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);

        // Loads jQuery
        wp_enqueue_script('jquery');

        // Loads a script called script.js
        wp_enqueue_script('our-scripts', get_template_directory_uri() . '/script.js');
    }
    add_action('wp_enqueue_scripts', 'newtheme_styles_and_scripts');
?>