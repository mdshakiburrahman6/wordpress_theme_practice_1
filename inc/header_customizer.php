<?php


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