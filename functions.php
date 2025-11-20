<?php

// Add theme support
add_theme_support( 'title-tag' );

function learn_theme_css_enqueue(){

    // link style.css
    wp_enqueue_style( 'learn_theme_css', get_stylesheet_uri( ));

    // add custom.css
    wp_register_style('custom_css', get_template_directory_uri( ) . '/assets/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'custom_css');

    // Add bootstrap
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.8', 'all');
    wp_enqueue_style( 'bootstrap' );

    // Add Main JS
    wp_enqueue_script( 'jquerry' );

    wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', 'all');
    wp_enqueue_script('bootstrap');

}
add_action( 'wp_enqueue_scripts','learn_theme_css_enqueue' );

