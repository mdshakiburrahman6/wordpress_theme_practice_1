<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Wp-herader -->
    <?php wp_head(  ); ?>
</head>
<body <?php body_class( ); ?>>

<div class="hole_area">
    <!-- Header -->
    <header>
        <div id="header_area" class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <img src="<?php echo get_theme_mod( 'my_theme_07_logo' ); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'main_menu',
                            'menu_id' => 'nav',
                            )); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Mian -->
    <main>
        <section class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="content-area">
                            <div class="blogs">

                                <?php 
                                    if(have_posts()) : 
                                        while(have_posts( )) :
                                            the_post( );    
                                ?>

                                    <div class="blog">
                                        <?php the_post_thumbnail();?>
                                        <h3 class="blog-title"> <?php the_title(); ?> </h3>
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
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="copyright-area">
                        <p class="copyright"><?php echo get_theme_mod('theme_07_footer_customizer'); ?></p>
                    </section>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Wp_footer -->
    <?php wp_footer(  ); ?>
</body>
</html>