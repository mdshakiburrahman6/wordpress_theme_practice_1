<?php

// ====================================
//  Blog Post Excerpt
// ====================================
function theme_07_excerpt_more($more){
    return '<div class="excerpt-more"> <a href="' . get_permalink() . '">Read More</a> </div>' ;
}
add_filter('excerpt_more', 'theme_07_excerpt_more');

function theme_07_excerpt_length($legth){
    return 21;
}
add_filter('excerpt_length', 'theme_07_excerpt_length');

// =================================
// Pagination
// =================================
function blog_post_pagination(){

    $args = array(
                'prev_text' => "Prev",
                'next_text' => 'Next',
                'type'      => 'array'
            );
    $pages = paginate_links($args);

    if(is_array($pages)){
       echo '<nav>';
       echo '<ul class="pagination justify-content-center">';

       foreach($pages as $page){

            if(strpos($page, 'current') !== false){
                echo '<li class="page-item active">' . str_replace('page-numbers', 'page-link', $page) . '</li>';
            }
            elseif(strpos($page, 'dots') !== false){
                echo '<li class="page-item disabled"><span class="page-link">…</span></li>';
            }
            else{
                echo '<li class="page-item">' . str_replace('page-numbers', 'page-link', $page) . '</li>';
            }

       }

       echo '  </ul> </nav>';

    }
}





