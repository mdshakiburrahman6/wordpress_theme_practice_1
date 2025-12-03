<?php

// For link up Css & JQuerry file
function learn_theme_css_enqueue(){

    // link style.css
    wp_enqueue_style( 'learn_theme_css', get_stylesheet_uri( ));

    // add custom.css
    wp_register_style('custom_css', get_template_directory_uri( ) . '/assets/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'custom_css');

    // Add bootstrap
    wp_register_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap' );

    // Add Main JS
    wp_enqueue_script( 'jquerry' );

    // Add bootstrap js
    wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('bootstrap');

    // Add google font
    wp_enqueue_style( 'theme07_google_fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Orbitron:wght@400..900&display=swap', $ver=false );

}
add_action( 'wp_enqueue_scripts','learn_theme_css_enqueue' );

