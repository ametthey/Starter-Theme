<?php
    // setup Widget Areas in Sidebar
    function _themename_widgets_init() {
        register_sidebar([
            'name'          => esc_html__( 'my main sidebar', '_themename' ),
            'id'            => 'my-main-sidebar',
            'description'   => esc_html__( 'Add widgets for the main sidebar here', '_themename' ),
            'class'         => 'my-main-sidebar',
            'before_widget' => '<section class="widget">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]);
        // setup Widget Areas in Footer
        register_sidebar([
            'name'          => esc_html__( 'my footer sidebar', '_themename' ),
            'id'            => 'my-footer-sidebar',
            'description'   => esc_html__( 'Add widgets for the footer sidebar here', '_themename' ),
            'class'         => 'my-footer-sidebar',
            'before_widget' => '<section class="footer-widget">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="footer-widget-title">',
            'after_title'   => '</h2>',
        ]);
    }
    add_action( 'widgets_init', '_themename_widgets_init' );

?>
