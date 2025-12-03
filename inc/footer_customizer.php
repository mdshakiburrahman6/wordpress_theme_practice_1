<?php

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


