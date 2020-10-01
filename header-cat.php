<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="profile" href="https://gmpg.org/xfn/11" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class() ?> >

        <div id="page">
            <a class="skip-link screen-reader-text" href="#content">
                <?php esc_html_e( 'Skip to content' , '_themename' ); ?>
            </a>

            <header id="masthead" class="site-header" role="banner">

                <div class="site-branding">
                    <h2>My Website Title & Info</h2>
                    <p class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) )?>" rel="home">
                            <?php bloginfo( ' name' ); ?>
                        </a>
                    </p>
                    <p class="site-description">
                        <?php bloginfo( 'description' ); ?>
                    </p>
                </div>


            </header>

            <div id="content" class="site-content">

