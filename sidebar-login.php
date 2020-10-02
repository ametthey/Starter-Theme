<?php
if ( ! is_active_sidebar( 'my-main-sidebar' ) ) {
    return;
}
?>
<aside id="secondary" class="widget-area" role="complementary">
    <!-- login -->
    <h1>Login</h1>
    <?php if ( !is_user_logged_in() ) : ?>
        <?php wp_login_form(); ?>
    <?php endif; ?>

    <!-- logout -->
    <h1>Logout</h1>
     <?php wp_loginout( get_permalink() ); ?>


    <!-- missing password -->
    <a href="<?php esc_url( wp_lostpassword_url() ); ?>">
        <?php esc_html_e( 'Lost password? ', '_themename' ); ?>
     </a>

     <!-- calendar -->
     <h1>My Calendar</h1>
     <?php get_calendar(); ?>

    <!-- custom archive by month and in descender order-->
    <h1>My custom archive order by month and in descender order</h1>
    <?php
        $args = [
            'type'  => 'monthly',
            'order' => 'DESC'
        ];

        wp_get_archives();
    ?>
</aside>
