<?php

// Add theme support
add_theme_support( 'title-tag' );


// For link up Css & JQuerry file
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

    // Add bootstrap js
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', 'all');
    wp_enqueue_script('bootstrap');

    // Add google font
    wp_enqueue_style( 'theme07_google_fonts', 'https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap', $ver=false );

}
add_action( 'wp_enqueue_scripts','learn_theme_css_enqueue' );


// Add cutimization feature for logo
function my_theme_07_customizer_register($wp_customize){  
    $wp_customize->add_section('theme07_header', array(
        'title' => __('My Theme-07 Header', 'my_theme_07'),  /* Theme dynamc field add */
        'description' => 'You can change the logo here.',
    ));
    
    $wp_customize->add_setting('my_theme_07_logo', array(
        'default' => get_bloginfo('template_directory') . '/assets/img/D W.png',   /* for displaying & set default logo */
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'my_theme_07_logo', array(
        'label' => 'Logo upload',
        'description' => 'You can change the logo here.',
        'section' => 'theme07_header',
        'setting' => 'my_theme_07_logo',
    )));
}
add_action('customize_register', 'my_theme_07_customizer_register');

