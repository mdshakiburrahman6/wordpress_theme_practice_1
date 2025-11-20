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
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <img src="<?php echo get_theme_mod( 'my_theme_07_logo' ); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-bar">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="btn">
                            <a href="#">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Mian -->
    <main>

    </main>

    <!-- footer -->
     <footer>

     </footer>
</div>

<!-- Wp_footer -->
    <?php wp_footer(  ); ?>
</body>
</html>