<?php

// Widget Register
function my_theme_07_widgets_register(){
    register_sidebar( array(
        'name' => __('Blog Sidebar', 'my_theme_07'),
        'id'   => 'blog_sidebar_1',
        'description' => __('You can change the sidebar area from here'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="sidebar_title">',
        'after_title' => '</h4>',
    ));
    
}
add_action('widgets_init', 'my_theme_07_widgets_register');


