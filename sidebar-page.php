<?php
if ( ! is_active_sidebar( 'my-page-sidebar' ) ) {
    return;
}
?>
<aside id="secondary" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'my-page-sidebar' ); ?>
</aside>
