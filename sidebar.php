<?php
if ( ! is_active_sidebar( 'my-main-sidebar' ) ) {
    return;
}
?>
<aside id="secondary" class="widget-area" role="complementary">

    <?php if ( !is_user_logged_in() ) :?>

        <?php wp_login_form(); ?>

    <?php else: ?>

    <a href="<?php echo wp_logout_url( get_the_permalink() ); ?>">
        <?php _e( 'Logout', '_themename' ); ?>
    </a>

    <?php endif; ?>

    <h3><?php _e( 'List Authors', '_themename' ); ?></h3>
    <?php wp_list_authors(); ?>

    <h3><?php _e( 'Dropdown Authors', '_themename' ); ?></h3>
    <form action="<?php bloginfo( 'url' ); ?>" method="get">
        <?php wp_dropdown_users( [ 'name' => 'author' ] ); ?>
        <input type="submit" name="submit" value"View">

    </form>


    <h3><?php _e( 'The Search Form', '_themename' ); ?></h3>
    <?php get_search_form(); ?>

    <?php dynamic_sidebar( 'my-main-sidebar' ); ?>
</aside>
