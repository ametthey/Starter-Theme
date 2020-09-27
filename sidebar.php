<?php
    /*
     * if the sidebar is not active then return
     * meaning, if WP doesn't find anything
     * STOP RIGHT HERE!
     */
    if ( ! is_active_sidebar( 'my-main-sidebar' ) ) {
        return;
    }
?>
<aside id="secondary" class="widget-area" role="complementary">
    <h2>My Sidebar</h2>
    <?php dynamic_sidebar( 'my-main-sidebar' ); ?>

</aside>
