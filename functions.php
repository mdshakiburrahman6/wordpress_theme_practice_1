<?php

// Add theme support
add_theme_support( 'title-tag' );

// Add blog support
add_theme_support('post-thumbnails', array('page', 'post'));

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
    
    // Logo Update & Customize
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

// Menu position Customizer
$wp_customize->add_section('my_theme_07_menu_position', array(
    'title' => 'Customize Header Position',
    'description' => 'You can customize the theme header position here'
));

$wp_customize->add_setting('my_theme_07_header_customize', array(
    'default' => 'right_menu',  /* for displaying & set default logo  {{{{ The value should be the class name }}}} */ 
));

$wp_customize->add_control('my_theme_07_header_customize', array(
    'label' => 'Change Header Position',
    'description' => 'You can change the header logo and menu position.',
    'section' => 'my_theme_07_menu_position',
    'setting' => 'my_theme_07_header_customize',
    'type' => 'radio',
    'choices' => array(
        'left_menu' => 'Left Menu',
        'right_menu' => 'Right Menu',
        'center_menu' => 'Center Menu',
    ),
));

}
add_action('customize_register', 'my_theme_07_customizer_register');

// Add Menu customize feature
 register_nav_menu('main_menu', __('primary_menu','my_theme_07'));


//  Footer customizer
function my_theme_07_footer_customize($wp_customize){
    // Add section
    $wp_customize->add_section('my_theme_07_footer', array(
        'title' => 'Theme 07 Footer',
        'description' => 'You can customize the footer from here.',
    ));
    $wp_customize->add_setting('theme_07_footer_customizer', array(
        'default' => '&copy; 2025 Theme 07 || All Copyright Reserved.',
    ));
    $wp_customize->add_control('theme_07_footer_customizer', array(
        'label' => 'Theme 07 Footer',
        'description' => 'You can change the footer copyright text here.',
        'section' => 'my_theme_07_footer',
        'setting' => 'theme_07_footer_customizer',
    ));
}
add_action('customize_register', 'my_theme_07_footer_customize');



// ====================================
//  
// ====================================