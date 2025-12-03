<?php

// Custome Post Type (Services)
function custome_services(){
    register_post_type( 'services', array(
        'labels' => array(
            'name' => __('Services', 'my_theme_07'),
            'singular_name' => __('Service', 'my_theme_07'),
            'add_new' => __('Add New Service', 'my_theme_07'),
            'add_new_item' => __('Add New Service', 'my_theme_07'),
            'edit_item' => __('Edit Service', 'my_theme_07'),
            'new_item' => __('New Service', 'my_theme_07'),
            'view_item' => __('View Service','my_theme_07'),
            'not_found' => __('No service found! Please create a service.','my_theme_07'),
        ),
        'menu_icon' => 'dashicons-tagcloud',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchical' => false,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'services'),
        'supports' => array('title', 'thumbnail', 'editor'),
    ) );
}
add_action('init','custome_services');  