<?php
    // Template Name: Splash Page
    // Template Post Type: post, page
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content' , 'page' ); ?>

        <?php endwhile; endif; ?>

        <p>Template: Template-slash.php</p>
    </main>
</div>

<?php get_sidebar( 'splash' ); ?>


<?php get_footer(); ?>
