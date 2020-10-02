<?php
if ( ! is_active_sidebar( 'my-splash-sidebar' ) ) {
    return;
}
?>
<aside id="secondary" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'my-splash-sidebar' ); ?>
</aside>
