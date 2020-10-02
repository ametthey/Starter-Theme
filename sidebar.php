<?php
if ( ! is_active_sidebar( 'my-main-sidebar' ) ) {
    return;
}
?>
<aside id="secondary" class="widget-area" role="complementary">

    <?php dynamic_sidebar( 'my-main-sidebar' ); ?>
</aside>
