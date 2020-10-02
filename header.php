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
                    <h2>The Header</h2>
                    <p class="site-title">
                        <a href="
                            <?php echo esc_url( home_url( '/' ) )?>" rel="home">
                            <?php esc_html_e( 'The Website Name: ' ); ?>
                            <?php bloginfo( ' name' ); ?>
                        </a>
                    </p>
                    <p class="site-description">
                        <?php esc_html_e( 'The Website Description: ' ); ?>
                        <?php bloginfo( 'description' ); ?>
                    </p>
                </div>

                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <h2>The Header Menu</h2>
                    <?php
                        $args = [
                            'theme_location'    => 'header-menu',
                        ];
                        wp_nav_menu( $args );
                    ?>
                </nav>

            </header>

            <div id="content" class="site-content">

