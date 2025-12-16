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
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    ) );
}
add_action('init','custome_services');  




// Custome Post Portfolios
function custome_post_portfolio(){

    register_post_type('portfolio', array(

        'labels' => array(
            'name' => __('Portfolio', 'my_theme_07'),
            'singular_name' => __('All Portfolios', 'my_theme_07'),
            'add_new' => __('Add New Portfolio', 'my_theme_07'),
            'add_new_item' => __('Add New Portfolio', 'my_theme_07'),
            'edit_item' => __('Edit Portfolio', 'my_theme_07'),
            'new_item' => __('New Portfolio', 'my_theme_07'),
            'view_item' => __('View Portfolio', 'my_theme_07'),
            'not_found' => __('No porfolio found! Add new portfolio', 'my_theme_07'),
        ),
        'menu_icon' => 'dashicons-portfolio',
        'menu_position' => 6,
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies' => array('category', 'post_tag'),
        'rewrite' => array('slug' => 'portfolio'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'page-attributes'),
    ));

}
add_action('init', 'custome_post_portfolio');



// Custom Meta box for portfolio
function portfolio_meta_box(){
    add_meta_box( 
        'port_type_id',
        'Portfolio Type',
        'portfolio_meta_box_callback',
        'portfolio',
        'normal',
        'high',
    );
}
add_action('add_meta_boxes', 'portfolio_meta_box');

// Meta box ui
