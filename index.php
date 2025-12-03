<!-- Include header -->
<?php get_header( ); ?>

    <!-- Mian -->
    <main>
        <section class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-area">
                            <div class="blogs">

                                <?php 
                                    if(have_posts()) : 
                                        while(have_posts( )) :
                                            the_post( );    
                                ?>

                                    <div class="blog secondury-font">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                                        <a href="<?php the_permalink(); ?>"><h5 class="blog-title"><?php the_title();?></h5></a>
                                        <p class="blog-excerpt"> <?php the_excerpt(); ?> </p>
                                    </div>

                                <?php 
                                        endwhile;
                                    else: 'No post found';
                                    endif; 
                                ?>

                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar-area">
                            <h4>Sidebar Area</h4>
                        </div>
                    </div>
                    <div class="pagination-area">
                        <?php blog_post_pagination(); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<!-- Include Footer -->
<?php get_footer(); ?>