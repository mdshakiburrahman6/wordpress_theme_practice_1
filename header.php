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