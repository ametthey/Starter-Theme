<?php

function _themename_image_configuration() {
    // add_image_size( 'nom', hauteur(chiffre), largeur(chiffre) );
    // add_theme_support( 'post-thumbnails' );

}
add_action( 'after_setup_theme', '_themename_image_configuration' );

